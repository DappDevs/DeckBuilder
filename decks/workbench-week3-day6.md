exclude:true
class: module-header ethereum/project.login-by-signature
---
# Login by signature

ref: https://medium.com/metamask/the-new-secure-way-to-sign-data-in-your-browser-6af9dd2a1527
ref: https://github.com/danfinlay/js-eth-personal-sign-examples
ref: https://github.com/MetaMask/eth-sig-util

---
# Sample

```javascript
window.voteForCandidate = function(candidate) {
  let candidateName = $("#candidate").val();

  let msgParams = [
    {
      type: 'string',      // Any valid solidity type
      name: 'Message',     // Any string label you want
      value: 'Vote for ' + candidateName  // The value to sign
    }
  ]

  var from = web3.eth.accounts[0]

  var params = [msgParams, from]
  var method = 'eth_signTypedData'

  console.log("Hash is ");
  console.log(sigUtil.typedSignatureHash(msgParams));
  
  // Invoke the eth_signTypedData function and pass in the message and account address.
  web3.currentProvider.sendAsync({
    method,
    params,
    from,
  }, function (err, result) {
    if (err) return console.dir(err)
    if (result.error) {
      alert(result.error.message)
    }
    if (result.error) return console.error(result)
    $("#msg").html("User intends to vote for " + candidateName + ". Any one can now submit the vote to the blockchain on behalf of this user. Copy the values");
    $("#vote-for").html("Candidate: " + candidateName);
    $("#addr").html("Address: " + from);
    $("#signature").html("Signature: " + result.result);
    console.log('PERSONAL SIGNED:' + JSON.stringify(result.result))
  })
}
```

???
ref: https://medium.com/zastrin/how-to-save-your-ethereum-dapp-users-from-paying-gas-for-transactions-abd72f15e14d

---
# Reducing lookup cost

Pre-hash all the messages beforehand and pass it in the constructor so it is easy to lookup when verifying.

???
ref: https://medium.com/zastrin/how-to-save-your-ethereum-dapp-users-from-paying-gas-for-transactions-abd72f15e14d

---
# Verifying in Solidity

```solidity
pragma solidity ^0.4.4;

contract SignTypedData {
	function doHash(string message) constant returns (bytes32) {
	  return keccak256(
	    keccak256('string message'),
	    keccak256(message)
    );
	}

	function checkSignature(string message, bytes32 r, bytes32 s, uint8 v) constant returns (address) {
	  var hash = doHash(message);
    return ecrecover(hash, v, r, s);
	}
}
```

ref: https://github.com/ukstv/sign-typed-data-test/blob/master/contracts/SignTypedData.sol#L11
exclude:true
class: module-header ethereum/project.login
---
# Project: Login

A simple Ethereum wallet based login system
---
exclude:true
class: module-header ethereum/project.multisig
---
# Project: Multisig wallet

Implementing and exploring the Gnosis Multisig Wallet

https://github.com/gnosis/MultiSigWallet

???

see also: https://github.com/dappnode/MultiSigWallet
---
exclude:true
class: module-header ethereum/tools.embark
---
name: TOOLS.EMBARK-START
# Embark

Embark is a framework that allows you to easily develop and deploy Decentralized Applications (DApps).

A Decentralized Application is a serverless html5 application that uses one or more decentralized technologies.

Embark currently integrates with EVM blockchains (Ethereum), Decentralized Storages (IPFS), and Decentralized communication platforms (Whisper and Orbit). Swarm is supported for deployment.
---
# Why Embark?

Embark is a fast, easy to use, and powerful developer environment to build and deploy decentralized applications, also known as “DApps”. It integrates with Ethereum blockchains, decentralized storages like IPFS and Swarm, and decentralized communication platforms like Whisper.

Embark’s goal is to make building decentralized applications as easy as possible, by providing all the tools needed and staying extensible at the same time.

Some of Embark’s features, but not all of them, are:
* Automatic Smart Contract deployment - Embark takes care of deploying your Smart Contracts as well as redeploying them as you make changes to your code.
* Client development - Build your application with the framework of your choice right within Embark.
* Testing - Test your applications and Smart Contracts through Web3 in JavaScript
* Decentralized app distribution - Embark integrates with decentralized storages like IPFS and helps you distributing your app in the network.
* Peer-to-peer messaging - Send and receive messages via communication protocols like Whisper

???

ref: https://embark.status.im/
ref: https://embark.status.im/docs/installation.html
ref: https://embark.status.im/docs/quick_start.html
ref: https://github.com/embark-framework/embark
ref: https://gitter.im/embark-framework/Lobby

---
# Installing Embark

<!--
Recommendation: use nvm to manage the version of node for this project:
```shell
$ nvm install --lts
$ nvm use --lts
```
-->
Install the tool to your system:
```shell
$ npm -g install embark
```

Then confirm:
```shell
$ embark --version
```

---
# Optional: Install IPFS

IPFS can be used to distribute your application’s content on the decentralized IPFS nodes.

---
# Optional: Geth

Embark comes with Ganache-cli for testing, but if you want to run against the mainnet you'll need a client like geth.

---
# Embark's demo app

```shell
$ embark demo
```

---
# Embark demo web interface

---
# Embark demo console

---
# Running the app

```shell
$ embark run
```

---
# The embark console

With embark run there is a console at the bottom which can be used to interact with contracts or with embark itself. type help to see a list of available commands, more commands will be added with each version of Embark.
Interacting with contracts

After contract deployment, you should be able to interact with the web3 object and the deployed contracts.

???
ref: https://embark.status.im/docs/console_commands.html

---
# Console Commands

* ipfs
* swarm
* web3
* EmbarkJS

* webserver start - start the dev webserver
* webserver stop - stop the dev webserver
* browser open - open a web browser and load your DApp from the dev webserver

* help
* version - see list of software & libraries and their respective versions
* versions - same as version
* quit - to immediatly exit (you can also use ctrl + c)
* exit - same as quit

???
ref: https://embark.status.im/docs/console_commands.html

---
# Web interfaces

---
# Using Whisper

---
# Deploying to IPFS

---
# Using Metamask with the dev account

1. get the seed phrase from the development section of the your config/blockchain file
2. open metamask in a browser you use for development. If in doubt, try brave
3. set the network to "Local 8545"
4. import the account using the seed phrase

You should see a funded account.

Now you can transact directly with the contract, using the address from the embark console.

---
# 2 default environments

* development
 * default assumption for `embark run`

* production
 * default assumption for `embark build`

See config/blockchain.js for specifics, and to create new environment profiles.

---
# Vyper supported


---
# Swarm interaction

swarm-api included

See https://github.com/embark-framework/swarm-api
???
ref: https://github.com/embark-framework/swarm-api

---
# Testing with Embark

```shell
$ embark test

$ embark test —node embark

$ embark test —node=”ws://localhost:8556"
```

---
# Test coverage

```
embark test — coverage
```
will run the tests and output the coverage to the `coverage/` directory.

---
# Docker Image

https://github.com/embark-framework/embark-docker

---
# Compiling contracts to generate ABIs:

```shell
$ embark build --contracts
$ ls dist/contracts
```

Now ABIs are in `dist/contracts`
exclude:true
class: module-header ethereum/tools.ethpm
---
# EthPM: a package manager for Ethereum

https://www.ethpm.com/

---
# Smart Contract Package Repository

ERC190 Smart Contract Packaging Specification

https://www.ethpm.com/registry/packages

---
# Getting started

## Install truffle
Utility tool for testing

$ npm install truffle
$ truffle install owned

## Install Populus
https://populus.readthedocs.io/en/latest/quickstart.html

$ pip install populus
$ populus package install owned

---
# Package Registry
https://www.ethpm.com/registry

See ERC190 module specification: https://github.com/ethereum/EIPs/issues/190
exclude:true
class: module-header ethereum/tools.eventeum
---
# Eventeum

ref: https://github.com/ConsenSys/eventeum/
ref: https://beta.kauri.io/article/90dc8d911f1c43008c7d0dfa20bde298

---
# Purpose

A service to monitor registered events on the blockchain for the purpose of notifying subscribed listeners, like microservices.

---
# Features

* Dynamically Configurable - Eventeum exposes a REST api so that smart contract events can be dynamically subscribed / unsubscribed.

* Highly Available - Eventeum instances communicate with each other to ensure that every instance is subscribed to the same collection of smart contract events.

* Resilient - Node failures are detected and event subscriptions will continue from the failure block once the node comes back online.

* Fork Tolerance - Eventeum can be configured to wait a certain amount of blocks before an event is considered 'Confirmed'. If a fork occurs during this time, a message is broadcast to the network, allowing your services to react to the forked/removed event.

---
# Supported Broadcast Mechanisms

* Kafka
* HTTP Post
* RabbitMQ

---
# Registering & unregistering

Let the service know what events to listen for

---
exclude:true
class: module-header ethereum/tools.node
---
name: TOOLS.NODE-START
class: center, middle, invert
# Node & npm
???

---
# Using Javascript via node

Node is a Javascript interpreter that makes it available outside the browser.

npm is the Node Package Manager, an easy way to install libraries to use in node based projects.

Node is the primary tool for Javascript based Ethereum tool development.

---
# Install node & npm

This will vary according to your operating system

See https://nodejs.org/en/download/

## Using a package manager (recommended)
https://nodejs.org/en/download/package-manager/

e.g. Homebrew:
```shell
brew install node
```

---
# Common node installation issues

---
# Testing your setup

---
# Installing modules

---
# Local vs global installation

---
# Production vs development installation

To install modules for development but not production deployment, use the --save-dev flag

```javascript
npm install --save-dev MODULE-NAME
```

---
# npm info

Find out details about a module, including its installation status.

Example:
```shell
npm info remix-tests
```

???
Output includes a desription, the source URL, any binaries installed, dependencies, versions tagged as available

---
# nvm: Node version management

nvm is a tool for managing version of node

https://github.com/creationix/nvm

Installing nvm (see installation page for latest version command)
```shell
curl -o- https://raw.githubusercontent.com/creationix/nvm/v0.33.11/install.sh | bash
# Then restart or run:
export NVM_DIR="$HOME/.nvm"
[ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"
[ -s "$NVM_DIR/bash_completion" ] && \. "$NVM_DIR/bash_completion"
```

Installing nvm in a project:

```shell
$ nvm install --lts
$ nvm use --lts
```

---
# Modules to explore

* solc - Solidity compiler
 * solcjs
* web3 - Ethereum JavaScript API
* remix-solidity - Ethereum IDE and tools for the web
* remix-lib - Ethereum IDE and tools for the web
* remix-simulator - Ethereum IDE and tools for the web
 * ethsim, remix-simulator
* ethers - Ethereum wallet library.
* ethjs-util - A simple set of Ethereum JS utilties.
* ethereumjs-util - a collection of utility functions for Ethereum

???

https://github.com/ethereum/solc-js#readme
https://github.com/ethereum/remix#readme
https://github.com/ethers-io/ethers.js#readme
https://github.com/ethereumjs/ethereumjs-util
https://github.com/ethjs/ethjs-util

---
exclude: true
# Ethjs-util

### Functions
* getBinarySize
* intToBuffer
* intToHex

* padToEven
* isHexPrefixed
* isHexString
* stripHexPrefix
* addHexPrefix

* getKeys
* arrayContainsArray

* fromAscii
* fromUtf8
* toAscii
* toUtf8

???

ref: https://github.com/ethjs/ethjs-util/blob/master/docs/user-guide.md
ref: https://github.com/ethjs/ethjs-util/blob/master/docs/developer-guide.md

---
exclude:true
class: module-header ethereum/topic.async
---
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
exclude:true
class: module-header ethereum/topic.frameworks
---
# DApp Application Frameworks

---
# What is a DApp?

* the smart contracts?
* the network?
* the protocols?
* the applications?
* the state of the data?

Types of DApp:
* network client
* web app
* mobile
