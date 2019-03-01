// FIRST, INSTALL THE TOOLS

// Install git
// https://git-scm.com/book/en/v2/Getting-Started-Installing-Git

Mac OS X
$ git --version
// (will install via XCode tools, if not already installed)
// or the Github version with GUI
https://desktop.github.com/

Linux
$ sudo apt install git-all
// or
$ sudo dnf install git-all

Windows
$ sudo dnf install git-all
// or the Github version with GUI
https://desktop.github.com/


// Install yoman
// http://yeoman.io/
// http://yeoman.io/learning/

$ npm install -g yo 


// Install yoeman webapp framework tool
// https://github.com/yeoman/generator-webapp
/*
    Install: npm install --global yo gulp-cli bower generator-webapp
    Run yo webapp to scaffold your webapp
    Run gulp serve to preview and watch for changes
    Run gulp serve --port=8080 to preview and watch for changes in port 8080
    Run bower install --save <package> to install frontend dependencies
    Run gulp serve:test to run the tests in the browser
    Run gulp serve:test --port=8085 to run the tests in the browser in port 8085
    Run gulp to build your webapp for production
    Run gulp serve:dist to preview the production build
    Run gulp serve:dist --port=5000 to preview the production build in port 5000
*/

$ npm install -g generator-webapp


// Install gulp
// https://gulpjs.com/
/*
    gulp is a toolkit for automating painful or time-consuming tasks in your development workflow, so you can stop messing around and build something.
*/

$ npm install -g gulp


// Install bower
// https://bower.io/
/* 
    Web sites are made of lots of things — frameworks, libraries, assets, and utilities. Bower manages all these things for you.
    Keeping track of all these packages and making sure they are up to date (or set to the specific versions you need) is tricky. Bower to the rescue!
    Bower can manage components that contain HTML, CSS, JavaScript, fonts or even image files. Bower doesn’t concatenate or minify code or do anything else - it just installs the right versions of the packages you need and their dependencies.
    To get started, Bower works by fetching and installing packages from all over, taking care of hunting, finding, downloading, and saving the stuff you’re looking for. Bower keeps track of these packages in a manifest file, bower.json. How you use packages is up to you. Bower provides hooks to facilitate using packages in your tools and workflows.
    Bower is optimized for the front-end. If multiple packages depend on a package - jQuery for example - Bower will download jQuery just once. This is known as a flat dependency graph and it helps reduce page load.

*/

$ npm install -g bower

// NOW THE PROJECT SETUP

// Create project folder, setting it up as a git repository
$ git init PROJECT-NAME
$ cd PROJECT-NAME

// Create the webapp
$ yo webapp

// Install web3
$ bower install web3 --save
