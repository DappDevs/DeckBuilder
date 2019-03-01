# Javascript

---
# It's already installed in your browser

---
# Loosely typed

---
# Variables

---
# Functions

---
# Literals

---
# Scope

---
# Browser console 

---
# Using Libraries

---
# Concurrency

Javascript is generally single threaded, but supports asynchronous call execution.

* Synchronous calls for on the call stack
* Asynchronous calls go in the event queue

Stack has priority, then calls from the queue are moved to the stack

---
# Promises

Asynchronous code requires a deviation from the typical flow we see in most synchronous applications.
Promises provide a means of capturing async requests in a synchronous manner and provide an interface to them over their lifetime.

???
https://medium.freecodecamp.org/javascript-from-callbacks-to-async-await-1cc090ddad99

---
# Best Practices

---
# Modern Javascript: Ecmascript

---
# Retrofitting the future: Babel

~[Babel logo](../media/logo-babel.svg)

???

ref: https://babeljs.io/

---
# Using Babel

https://babeljs.io/setup

???

ref: https://babeljs.io/setup

---
# .babelrc file

Configuration file needed to instruct babel how to process the code.

Install the sample .babelrc:
```javascript
npm install @babel/preset-env --save-dev
```

---
# Outside the browser: Node.js

---
# Resources

---
