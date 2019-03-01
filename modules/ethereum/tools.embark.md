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
