# Synchronous vs Asynchronous

???
ref: http://www.cs.unc.edu/~dewan/242/s07/notes/ipc/node9.html
ref: https://developer.mozilla.org/en/docs/Web/JavaScript/Reference/Global_Objects/Promise
ref: https://developers.google.com/web/fundamentals/primers/promises

---
# Synchronous code execution

What most developers contend with most of the time
Commands are executed in line order

Example:
```javascript
# 1: do_something_sync()
# 2: do_other_thing()
```
In synchronous execution, line #1's do_something_sync() will execute, and once complete, line #2's do_other_thing_sync() will execute.

???
Analogy: cashiers at a grocery store deal with customers in order, one at a time. If there's only one cashier, the store is single threaded and has no concurrency. If there are multiple cashiers working at once, it's concurrent.

Analogy: at a deli counter, the customer makes calls for items, and they are handled in order. Once they complete, the next customer waiting in line does the same.

Analogy: you call someone, and are placed on hold. You wait some period of time, then hopefully complete your call, before moving on to anythign else.

---
# Asynchronous code execution

Order of execution is determined not by order / path of lines of code - multiple processes in parrallel executing.
Example:
```javascript
# 1: do_something_async()
# 2: do_other_thing()
```
In asynchronous execution, line #1's do_something_async() will start, adding the actions to a queue of pending actions scheduled for execution.
line #2's do_other_thing() will execute as soon as this registration finished, as opposed to after the function's purpose is completed.

???
Analogy: waiters at a restraunt take orders and deliver food. Customers place thier orders, which are all added to the order queue roughly in chronological order. Quick to execute orders (glass of water) will likely return earlier than complex orders (tiramisu) that take longer.

Analogy: at the deli counter, you take a number and go about shopping. When your number is called, you resume your interaction with the deli, placing your order.

Analogy: you call someone, and they ask if they can call you back when they're able to respond. You go about doing what you will, then eventually they call back (hopefully)

---
# FIFO: first in, first out
## queues

aka a "queue" - think of a line at the register of a grocery store

* first person in queue gets served first, completes their transaction first
* next person chronologically gets served next, etc
* guarantee of timely handling of each element, according to the order they were entered

---
# FILO: first in, last out
## stacks

aka a "stack" - think of the basket at the register of a grocery store

* last basket in stack gets selected first
* next basket in reverse chronological order gets served
* no guarantee of ever reaching the first item (on the "bottom") if elements added faster than removed

---
# Javascript example

```javascript
  // Say "Hello."
  console.log("Hello.");
  // Say "Goodbye" two seconds from now.
  setTimeout(function() {
    console.log("Goodbye!");
  }, 2000);
  // Say "Hello again!"
  console.log("Hello again!");
```
???
If you are only familiar with synchronous code, you might expect the code above to behave in the following way:

 Say "Hello".
 Do nothing for two seconds.
 Say "Goodbye!"
 Say "Hello again!"

But setTimeout does not pause the execution of the code. It only schedules something to happen in the future, and then immediately continues to the next line.

 Say "Hello."
 Say "Hello again!"
 Do nothing for two seconds.
 Say "Goodbye!"

---
# Shoehorning asynchronous code into synchronous frameworks


---
# Callback functions

Synchronous functions can use return(), because execution flow is linear and predictable.
Asynchronous code can't use return(), because execution has moved on and what will be going on at any point after the call was made is unknowable.

Solution: provide instructions for what to do with the results of the call via a callback function.

```javascript
function getData(options, callback) {
  $.get(
    "example.php",          // hard coded to the function
    options,                // config options for call, passed in
    function(response) {    // @resolve: what to do if successful
        callback(null, JSON.parse(response)); // assumed order of signature: error, success
    },
    function() {            // @reject: what to do if an error occurs
        callback(new Error("AJAX request failed!")); // assumed order of signature: error, skipping success
    }
  );
}

// usage
// still dealing with 2 potential result modes, success and failure
// note the order of the callback's signature: error object, data object (only populated on success)
getData({name: "John"}, function(err, data) {
  if(err) { // han
    console.log("Error! " + err.toString())
  } else {
    console.log(data);
  }
});
```
---
# Error first callback pattern

A pattern established in React, but which has become common

???
ref: http://fredkschott.com/post/2014/03/understanding-error-first-callbacks-in-node-js/
---
# Promises

An object (code + data) that captures an interface to the call, allowing for access to the data when the call completes.

```javascript
function getData(options) {
  // signature: we still have 2 result modes, success & failure
  return new Promise(function(resolve, reject) {                    //create a new promise
    $.get("example.php", options, function(response) {
      resolve(JSON.parse(response));                                //in case everything goes as planned
    }, function() {
      reject(new Error("AJAX request failed!"));                    //in case something goes wrong
    });
  });
}

// usage
getData({name: "John"}).then(
    function(data) {
      console.log(data)
    }, // <- argument list, mind that comma!
    function(err) {
      console.log("Error! " + err);
    }
);
```

???
Promises are a popular way of getting rid of callback hell. Originally it was a type of construct introduced by JavaScript libraries like Q and when.js, but these types of libraries became popular enough that promises are now provided natively in ECMAScript 6.

The idea is that instead of using functions that accept input and a callback, we make a function that returns a promise object, that is, an object representing a value that is intended to exist in the future.

ref: https://developer.mozilla.org/en/docs/Web/JavaScript/Reference/Global_Objects/Promise
ref: https://developers.google.com/web/fundamentals/primers/promises

---
# Promises: now JS native

```javascript
    var promise = new Promise(function(resolve, reject) {
      // do a thing, possibly async, then…

      if (/* everything turned out fine */) {
        resolve("Stuff worked!");
      }
      else {
        reject(Error("It broke"));
      }
    });

    promise.then(function(result) {
      console.log(result); // "Stuff worked!"
    }, function(err) {
      console.log(err); // Error: "It broke"
    });
```

???
Promises have been around for a while in the form of libraries, such as:

* Q
* when
* WinJS
* RSVP.js

The above and JavaScript promises share a common, standardized behaviour called Promises/A+. If you're a jQuery user, they have something similar called Deferreds. However, Deferreds aren't Promise/A+ compliant, which makes them subtly different and less useful, so beware. jQuery also has a Promise type, but this is just a subset of Deferred and has the same issues.
ref: https://developers.google.com/web/fundamentals/primers/promises#promise-terminology

---
# Promise state
A promise can be:
* pending - Hasn't either fulfilled or rejected yet ~[spinner](../media/spinner.gif)
* settled - Has either fulfilled or rejected
 * fulfilled - The action relating to the promise .green[succeeded]
 * rejected - The action relating to the promise .red[failed]
---
# async keyword in Javascript

* `async` keyword must preceed the function keyword in the declaration:
```javascript
    // wait ms milliseconds
    function wait(ms) {
      return new Promise(r => setTimeout(r, ms));
    }

    async function hello() {
      await wait(500);
      return 'world';
    }

    async function foo() {
      await wait(500);
      throw Error('bar');
    }
```
* async functions return Promise objects on success
* async functions throw errors on failure

ref: https://developers.google.com/web/fundamentals/primers/async-functions
---
# Common problems
## Scope tracking

With a change in scope at each function, tracking variables across lexical divides can lead to mistakes.

---
# Common problems
## Callback hell

Callback chains that become deeply nested are unweildy

---
# Javascript Libraries

* async library: https://github.com/caolan/async
* promises

---
