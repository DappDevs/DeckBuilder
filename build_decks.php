<?php
/*
 * Requires the name of the file containing build instructions
 * Operates in the current working directory regardless of build file location
 *
 * Build files
 * These are each a list of modules to concatenate into one or more slide decks for presentations
 * It also includes the file name for each deck, to be used for the .md and the .html files
 * 
 * Parsing build files:
 *  Skip lines that start with a # as a comment...
 *  Blank lines are ignored
 * 
 * Requirements
 *  It can build multiple decks
 *  config vars are denoted by leading @
 *  config keys follow the @ up to the :, whitespace is not significant
 *  config values follow the : up to the newline
 *  config keys used: Output file names (file) and presentation titles (title) are provided
 *  each time a new filename (@ file:) is listed a new deck is started
 *  modules are whole .md files, and are simply concatenated in order listed.
 *  .md extension is implied
 *  output is assumed to be in ./build 
 *  modules are assumed to be in ./modules 
 *  should choke on repeated file names in the same build script
 *  will overwrite existing files
 *  should show a warning and skip missing modules
 *  nice to show some stats about the build when done
 *  template for output html is assumed to be ./templates/default.html unless specified with @ template
 *
 */

// If you can't find the build file, fail out
if (!isset($argv[1]) or '' === trim($argv[1])) die("You must provide a build file as the first argument\n");
$build_file = trim($argv[1]);
if (is_dir($build_file)) die("Cannot build from directory, please provide a recipe file as the first argument\n"); 

$module_dir = './modules/';
$output_dir = './build/';
$modules = [];

$current_output_html;
$current_output_md;
$current_deck_title;
$current_deck_template = '';
$local_md;

$fh_build = @fopen($build_file, 'r') or die("Unable to open file: ".$build_file.PHP_EOL);
$deck_count = 0;
$total_slide_count = 0;
$deck_slide_count = 0;

//Flags
$config = array(
    'add_module_header' => true,
);

// Find the deck build file
echo "Building decks from ".$build_file.PHP_EOL;
echo "Build started @ ".date("Y-m-d H:i:s").PHP_EOL;

while(!feof($fh_build)) {

    $line = trim(fgets($fh_build));

    // Skip blanks
    if ('' === $line) continue;

    // Skip comments
    if ('#' === substr($line,0,1)) continue;

    // Trim trailing comments
    if($comment_pos = strpos($line,'#')) $line = trim(substr($line,0,$comment_pos));

    // handle config
    $matches = [];

    if (preg_match('/^@\s*(\w+)\s*:\s*(.+)/',$line, $matches)) {
        $config_k = $matches[1];
        $config_v = trim($matches[2]);

        if ('file' === $config_k) {

            // New file, cleanup first
            if (isset($fh_md)) {
                build_presentation($fh_md, $fh_html, $modules, $module_dir, $current_deck_title, $current_deck_template, $current_output_html, $local_md, $deck_slide_count, $config);

                // Re-init
                $modules = [];
            } 
             
            // Confirm output dir exists or make it now
            if (!is_dir($output_dir)) mkdir($output_dir) or die("Error: Unable to create missing directory '$output_mkdir'\n");

            // Init
            $local_md = $config_v . '.md';
            $current_output_md = $output_dir . $local_md;
            $fh_md = fopen($current_output_md, 'w') or die("Error: Unable to open file:".$current_output_md);

            $current_output_html = $output_dir . $config_v . '.html';
            $fh_html = fopen($current_output_html, 'w') or die("Error: Unable to open file:".$current_output_html);

        }
        else if ('title' === $config_k) {
            $current_deck_title = $config_v;
            echo "\nDeck: $current_deck_title\n";

        }
        else if ('template' === $config_k) {
            $current_deck_template = $config_v;
            echo "Template: $current_deck_template\n";
        }

        continue;
    }

    // otherwise it's a module name
    $modules[] = $line;

}

if (!$fh_md) {
    die("No markdown file destination set. Use the @ file: directive to set the output file\n");
}

// Final cleanup
build_presentation($fh_md, $fh_html, $modules, $module_dir, $current_deck_title, $current_deck_template, $current_output_html, $local_md, $deck_slide_count, $config);

final_status($deck_count, $total_slide_count);

fclose($fh_build);

/*
 *   LIB
 */

function write_modules($output_md, $modules, $module_dir, &$deck_slide_count, $config) {

    $missing = [];
    foreach ($modules as $module) {
        $module_file = $module_dir.$module.'.md';

        // For each module, append the corresponding file to the output_md
        $module_data = @file_get_contents($module_file, 'r');
        if (!$module_data) {
            $error = ( file_exists( $module_data ) ) ? 'MISSING' : 'EMPTY';

            printf( "%-35s%s\n", "! ".$module, '[ '.$error.' ]');
            if ( 'MISSING' === $error ) $missing[] = $module_file;
            continue;
        }

        // Fix slide breaks that have trailing whitespace

        // Quick tally of content
        $count = preg_match_all('/^---$/m', $module_data);
        $deck_slide_count += $count;
        printf( "%-35s%s\n", "+ ".$module, "[ $count slide".(1===$count?'':'s')." ]");

        if ($config['add_module_header']) {
            $module_header = "exclude:true\nclass: module-header $module\n---\n";
            fputs($output_md,$module_header) or die("Unable to write to html file");
        }

        // write out the current modules
        fputs($output_md,$module_data) or die("Unable to write to html file");
    }

    if ($missing) {
        echo "\nMISSING FILES\n * ".implode("\n * ",$missing).PHP_EOL; 
    }

    fclose($output_md);
}

function write_html($output_html, $current_deck_title, $template_file, $output_md ) {

    if ('' == $template_file) $template_file = 'default';
    $template_path = './templates/'. $template_file .'.html';

    $html_data = file_get_contents($template_path, 'r');

    // CHANGE THE TITLE
    $html_data = preg_replace('/{\s*TITLE\s*}/', $current_deck_title, $html_data);

    // CHANGE THE DECK SOURCE
    $html_data = preg_replace('/{\s*DECK\s*}/', $output_md, $html_data);

    fputs($output_html,$html_data) or die("Unable to write to html file");

    fclose($output_html);
}

function build_presentation($fh_md, $fh_html, $modules, $module_dir, $current_deck_title, $current_deck_template, $current_output_html, $output_md, &$deck_slide_count, $config) {

    write_modules($fh_md, $modules, $module_dir, $deck_slide_count, $config);
    write_html($fh_html, $current_deck_title, $current_deck_template, $output_md );

    #echo "\nPresentation built: '$current_deck_title' @ $current_output_html\n";
    echo "Presentation built: $current_output_html, $deck_slide_count slides\n";

    global $deck_count;
    global $total_slide_count;
    $deck_count++;
    $total_slide_count += $deck_slide_count;
    $deck_slide_count = 0;
}

function final_status($deck_count, $total_slide_count) {

    echo "$deck_count decks built with $total_slide_count slides total\n";

}
