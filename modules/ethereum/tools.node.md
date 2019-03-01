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
