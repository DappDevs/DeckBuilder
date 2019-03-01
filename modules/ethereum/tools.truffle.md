# Truffle 
## An Ethereum smart contract development toolbox

---
# Installation

```solidity
npm install -g truffle
```

---
# package.json

Used by npm to track the packages being used in this project, for installation & updating.

By default, npm install will install all modules listed as dependencies in package.json

Allows you to specify the version of each package.

---
# Aside: "development" vs "production"

A "development" environment is where development happens. It may have additional tools set up and files that are not necessary (or desireable) for when the application is "live."

A "production" environment is where the live project lives when it is in use. It is likely to differ significantly from the environment where it was developed.

With the --production flag (or when the NODE_ENV environment variable is set to production), npm will not install modules listed in devDependencies.

---
# Step: Initialize the project with truffle

```solidity
truffle init
```

* Must be done in an empty directory
* Installs https://github.com/truffle-box/bare-box : just another truffle "box" (project template)

## You will now have:

* truffle-config.js
* truffle.js
* contracts/
* migrations/
* test/

---
# truffle.js & truffle-config.js

Your configuration file is called truffle.js and is located at the root of your project directory. This file is a Javascript file and can execute any code necessary to create your configuration. It must export an object representing your project configuration like the example below.

## Why 2 files?

Both files are created on initiation because default configuration file name can cause a conflict with the truffle executable.

On windows systems having truffle.js in your main folder may create a conflict when you try to execute truffle.

Windows first looks for executables in your current directory, and .js files are considered executables. It will try to execute your configuration file it will fail, hence truffle-config.js.

.red[Recommendation: neither is "correct", consider using truffle-config.js, it works on all systems.]

???
ref: https://truffleframework.com/docs/truffle/reference/configuration
ref: http://truffleframework.com/docs/advanced/configuration
ref: https://ethereum.stackexchange.com/questions/38117/truffle-configuration-file-name-is-it-truffle-js-or-truffle-config-js

---
# contracts/

Where your Solidity smart contract files can live (*.sol)

Starts with contracts/Migrations.sol, which we'll look at in a moment.

---
# Aside: What is a truffle migration?

```solidity
truffle migrate
```

Command used to deploy the project smart contracts

```solidity
contracts/Migrations.sol
```

Contract used by truffle for managing the status of contract deployment.

```solidity
migrations/1_initial_migration.js
```

Script for handling deployment, including any setup required, proper ordering of resources, etc.

???
ref: https://medium.com/@blockchain101/demystifying-truffle-migrate-21afbcdf3264

---
# migrations/

Scripts in order of steps to be taken when deploying these contracts.

* 1_initial_migration.js - default
* 2_your_deployment_step_script_here.js
* etc

---
# migrations/1_initial_migration.js 

```solidity
// Get a handle for the Migrations contract
var Migrations = artifacts.require("./Migrations.sol");

// Export a function that deploys the contract
module.exports = function(deployer) {
  // This function will be called in the process of truffle migrate
  deployer.deploy(Migrations);
};
```

---
# contracts/Migrations.sol

Migrations.sol added by Truffle

Uses state value `last_completed_migration` to track project status, mapping to the script prefix in migrations/

---
# test/

Used with the `truffle test` command, a set of scripts to use for testing contract functionality

---
# `truffle test`

* Executes the test scripts in test/.
* Re-compiles contracts.
* Does migrations (deployments) as necessary.
* Reports passing/failing tests.

```shell
Compiling ./contracts/Migrations.sol...

  0 passing (0ms)
```

---
exclude: true
# Example contract: simple-record

???
TODO: add simple-record for demo
---
exclude: true
# Example test for simple-record

???
TODO: add simple-record truffle test for demo
---
class: middle, center, invert
# Other truffle commands

---
# `truffle compile`

Compiles the contract code in /contracts and places the ABI for each in /build/contracts/<contract-name>.json

Automatically performed by `truffle migrate`

---
# Reminder: ABI

Deployed contracts are in "bytecode" format: not human readable or easily understood.

ABI stands for "Application Bytecode Interface" and is a description of the compiled code's contents.

ABI files are .json format, human + machine readable.

It tells the code that wants to interact with a deployed contract how to, since the source code might not be known.
---
# Development console

```shell
$ truffle develop
```
---
# Upgrading Truffle

Installed version may not be the latest. Between full versions especially, do a full re-install:

```shell
$ npm uninstall -g truffle
$ npm install -g truffle
```
???
This was necessary switching to 5.

---
