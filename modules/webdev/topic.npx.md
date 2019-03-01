# NPX

???
ref: https://medium.com/@maybekatz/introducing-npx-an-npm-package-runner-55f7d4bd282b
---
# What is NPX?

npx is a global command-line tool that will allow you to execute scripts without having to globally install them.

npx is a tool intended to help round out the experience of using packages from the npm registry — the same way npm makes it super easy to install and manage dependencies hosted on the registry, npx makes it easy to use CLI tools and other executables hosted on the registry.

???
In mid 2017, npm released a package called npx. This package gets invisibly installed globally whenever you install npm.

ref: https://codeburst.io/maybe-dont-globally-install-that-node-js-package-f1ea20f94a00
---
# Why?

For the past couple of years, the npm ecosystem has been moving more and more towards installing tools as project-local devDependencies, instead of requiring users to install them globally.

Especially for rarely used apps, like generators, since by the time you run them again, they’ll already be far out of date, so you end up having to run an install every time you want to use them anyway.

???
ref: https://medium.com/@maybekatz/introducing-npx-an-npm-package-runner-55f7d4bd282b

---
# Alternatives

```
$ alias npmx=PATH=$(npm bin):$PATH
```

```
$ ./node_modules/.bin/mocha
```
---
# Example

```
$ npx create-react-app my-new-app
```

---
# Using npx to target node versions

```shell
$ npx node@6 node -v
```

---
# Use case: Runnable github gists with npx

* index.js - the code (name not important, set in package.json)
```
#!/usr/bin/env node

console.log('yay gist')
```
* package.json - define the command executed via the `bin` attribute
```
{
 "name": "npx-is-cool",
 "version": "0.0.0",
 "bin": "./index.js"
}
```
* README.md

Example: 
```
$ npx https://gist.github.com/zkat/4bc19503fe9e9309e2bfaa2c58074d32
```

.red[WARNING] DO NOT RUN CODE FROM THE INTERNET YOU HAVE NOT VALIDATED

???
ref: https://medium.com/@maybekatz/introducing-npx-an-npm-package-runner-55f7d4bd282b
---
