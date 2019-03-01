# NPM 

Node Package Manager

---
# Updating npm

Ensure you have the latest version installed:
```
$ npm install -g npm
```
---
# Global installation of packages

```shell
$ npm install -g NIFTY-PACKAGE
```

???
ref: https://codeburst.io/maybe-dont-globally-install-that-node-js-package-f1ea20f94a00
---
# Global installation gotchas

* Global vs Local version mismatching
* 

---
# node_modules/.bin

Have you ever noticed the node_modules/.bin directory? NPM does this cool thing, where if a locally installed package has an executable script in it, the package can add a symlink in the .bin directory. For example:

    node_modules/.bin/gulp → ../gulp/bin/gulp.js

So now you can execute this:
--
```
$ node_modules/.bin/gulp
```
---
# NPM Scripts

Defined in package.json, these are subcommands that work like commandline aliases, making it quick and easy to run relevant commands

```
...
"scripts": {
  "gulp": "./node_modules/.bin/gulp"
},
...
```

Our command is now even more simple:
--
```shell
$ npm run gulp
```

---
# NPM Scripts - execution ENV

NPM also has a slightly hidden feature where it adds `node_modules/.bin` to the front of your `PATH` environment variable whenever npm run script is executed. So your package.json entry can be simplified to this:

```
...
"scripts": {
  "gulp": "gulp"
},
...
```

Scripts can be run in the project root, or in any subdirectory of the project.

See the ENV variables available to scripts:
```
$ npm run env | grep npm_
```
???
ref: https://medium.com/@maybekatz/introducing-npx-an-npm-package-runner-55f7d4bd282b

---




