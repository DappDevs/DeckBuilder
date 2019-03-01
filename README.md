# Overview

Slipslide is a slideshow presentation platform and deck builder that helps you maintain modular content that can be re-used across multiple presentations but only requires management of one source file.

It also contains:
* a script to **build_decks**
* collected content **/modules**
* collected **/media** resources
* collected CSS & JS **/resources**

# Setup: 
```bash
$ git clone git@github.com:beyondlogical/slipslide.git
$ cd slipslide
$ ./build_decks.sh recipes/demo.recipe
$ ./run_server.sh
```
Then, in another console:
```bash
$ open http://0.0.0.0:8080
```

# Usage

You need a local webserver running to serve this content. See run_server.sh for options.

The index.html file at the root is a convenience to jumping to particular presentations. Edit it as you will.

Content in the /build folder is generated.
Content in the /decks folder was generated but may have been edited since. Check your diff before overwriting with newly generated content!

Running `php build_decks.php recipe/my.recipe` will produce 2 files in /build per file defined, the html presentation file and the md slide deck file. It may produce more than this, if the recipe contains instructions for multiple files.

# Presentation keyboard shortcuts

All of these shortcuts can also be seen during a presentation by pressing H or ?

* h or ?: Toggle the help window
* j: Jump to next slide
* k: Jump to previous slide
* b: Toggle blackout mode
* m: Toggle mirrored mode.
* c: Create a clone presentation on a new window
* p: Toggle PresenterMode
* f: Toggle Fullscreen
* t: Reset presentation timer
* <number> + <Return>: Jump to slide <number>

# Repo Organization

 /README.md
 /build_decks.php   (assembles the modules in order, builds the html page for the presentation)
 /index.html        (links to class decks at top level because of running local server, manually edited)

 /modules/MODULE-NAME/CATEGORY.TOPIC.md
 ...
 /build/ (where output is sent)
 ...
 /decks/ (move completed files here to preserve)
 ...
 /media/slipslide.jpg
 ...
 /recipes/demo.recipe (list of modules to assemble, config info for building the particular deck)
 ...
 /templates/default.html
 /templates/background-video.html
 ...
 /resources/remark.latest.js
 /resources/some-webfont.css
 /resources/some-stylesheet.css
 /resources/some-library.js

# Remark

This presentation is built on [remark.js](https://github.com/gnab/remark).

* [Remark wiki](https://github.com/gnab/remark/wiki)
* [Styling](https://github.com/gnab/remark/wiki/Styling)

# Printing / Generating static slides

Use decktape to convert a presentation to a deck of slides.
See: https://github.com/astefanutti/decktape

## Installing decktape
```shell
$ npm install -g decktape
```
## Generating PDF slidedeck
1. Run the presentation locally
2. `decktape remark http://localhost:8080/build/YOUR-PRESENTATION.html YOUR-DECK-OUTPUT.pdf`

Keep in mind that video won't be rendered, so consider swapping in a static image for the background if you use video.

## Generating PNG slidedeck images
1. Run the presentation locally
2. `decktape --screenshots --screenshots-directory build/SCREENSHOTS-GO-HERE remark http://localhost:8080/build/YOUR-PRESENTATION.html YOUR-DECK-OUTPUT.pdf`

# Style guide
Here is the current method for styling:
* each recipe allows for the selection of a template HTML file to use for the deck
* each deck template can load any stylesheet it needs
* a default HTML file, `templates/default.html`, is generic and good for copying to create a custom template
* a base, shared stylesheet used by default.html (and assumed to be used for all templates) is `resources/default-shared.css`
 * It should not be edited freely, to avoid breakage.
 * It should not be copied, just included
* to customize the style, you can:
 * load local style rules in the template (best for slide template / frame specific styling)
 * add a new file and include it in the template  (best for styling classes of decks, like for a course)
 * embed style sections in any of the deck modules (avoid unless doing a slide specific tweak)

## Additional styling references
* [remark Styling](https://github.com/gnab/remark/wiki/Styling)
* [markdown styling](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet)

# Made at Checkmate
![Checkmate](media/checkmate-logo.svg)

Special thanks to the team at [Checkmate](https://checkmate.digital/)

# License
[MIT License](LICENSE.md)

Copyright (c) [2019] [RJ Herrick]

