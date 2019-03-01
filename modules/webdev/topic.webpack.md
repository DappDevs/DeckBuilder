# Webpack

???

ref: https://webpack.js.org/concepts/
ref: https://auth0.com/blog/zero-config-javascript-app-prototyping-with-webpack/
---
# What is webpack?

Webpack is a leading static module bundler for frontend apps. It is used by tools such as create-react-app to quickly scaffold frontend projects.

At its core, webpack is a static module bundler for modern JavaScript applications. When webpack processes your application, it internally builds a dependency graph which maps every module your project needs and generates one or more bundles.

---
# Dependency graph

---
# Core concepts

* Entry
* Output
* Loaders
* Plugins
* Mode
* Browser Compatibility

---
# Entry

An entry point indicates which module webpack should use to begin building out its internal dependency graph. webpack will figure out which other modules and libraries that entry point depends on (directly and indirectly).

By default its value is ./src/index.js, but you can specify a different (or multiple entry points) by configuring the entry property in the webpack configuration.

```javascript
module.exports = {
  entry: './path/to/my/entry/file.js'
};
```

---
# Output

The output property tells webpack where to emit the bundles it creates and how to name these files. It defaults to ./dist/main.js for the main output file and to the ./dist folder for any other generated file.

You can configure this part of the process by specifying an output field in your configuration:

```javascript
const path = require('path');

module.exports = {
  entry: './path/to/my/entry/file.js',
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'my-first-webpack.bundle.js'
  }
};
```
---
# Loaders

Out of the box, webpack only understands JavaScript and JSON files. Loaders allow webpack to process other types of files and convert them into valid modules that can be consumed by your application and added to the dependency graph.

At a high level, loaders have two properties in your webpack configuration:

1. The test property identifies which file or files should be transformed.
2. The use property indicates which loader should be used to do the transforming.

---
# Plugins

While loaders are used to transform certain types of modules, plugins can be leveraged to perform a wider range of tasks like bundle optimization, asset management and injection of environment variables.

---
# Mode

---
# Browser Compatibility

---
# Getting started

---
# Demo: live bundling

https://www.youtube.com/watch?v=UNMkLHzofQI

---
# Demo: build your own

https://www.youtube.com/watch?v=Gc9-7PBqOC8

---
