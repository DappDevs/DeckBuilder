# Create-react-app

???
ref: https://facebook.github.io/create-react-app/
ref: https://github.com/facebook/create-react-app
---
# What is create-react-app?


---
# Tools
* Webpack
* Babel
* ESLint

---
# Setup

Using npx:
```shell
$ npx create-react-app my-app
```
or npm:
```shell
$ npm init react-app my-app
```
or after installing globally:
```shell
$ npm install -g create-react-app
$ create-react-app my-app
```
or yarn:
```shell
$ yarn create react-app my-app
```

![npx install](../media/npx-create-react-app.svg)

---
# Getting Started

???
ref: https://facebook.github.io/create-react-app/docs/getting-started
---
# Scaffold structure

 my-app
 ├── README.md
 ├── node_modules
 ├── package.json
 ├── .gitignore
 ├── public
 │   ├── favicon.ico
 │   ├── index.html
 │   └── manifest.json
 └── src
     ├── App.css
     ├── App.js
     ├── App.test.js
     ├── index.css
     ├── index.js
     ├── logo.svg
     └── serviceWorker.js
---
# Start

```shell
$ npm start
```
or
```shell
$ yarn start
```

Runs the app in development mode. Open `http://localhost:3000` to view it in the browser.

The page will automatically reload if you make changes to the code. You will see the build errors and lint warnings in the console.

---
# `npm test`

```shell
$ npm test
```
or
```shell
$ yarn test
```

Runs the test watcher in an interactive mode. By default, runs tests related to files changed since the last commit.
???
ref: https://github.com/facebook/create-react-app/blob/master/packages/react-scripts/template/README.md#running-tests
ref: https://facebook.github.io/create-react-app/docs/running-tests
---
# `npm run build`

Builds the app for production to the build folder.
It correctly bundles React in production mode and optimizes the build for the best performance.

The build is minified and the filenames include the hashes.
Your app is ready to be deployed!

???
ref: https://facebook.github.io/create-react-app/docs/deployment

---
# `npm run eject`

Copies all the configuration files and the transitive dependencies (Webpack, Babel, ESLint, etc) right into your project so you have full control over them. All of the commands except eject will still work, but they will point to the copied scripts so you can tweak them.

---
# Progressive web-app

???
ref: https://facebook.github.io/create-react-app/docs/making-a-progressive-web-app

---
# Opting into offline mode

Offline-first Progressive Web Apps are faster and more reliable than traditional web pages, and provide an engaging mobile experience:

* All static site assets are cached so that your page loads fast on subsequent visits, regardless of network connectivity (such as 2G or 3G). Updates are downloaded in the background.
* Your app will work regardless of network state, even if offline. This means your users will be able to use your app at 10,000 feet and on the subway.
* On mobile devices, your app can be added directly to the user's home screen, app icon and all. This eliminates the need for the app store.

---
