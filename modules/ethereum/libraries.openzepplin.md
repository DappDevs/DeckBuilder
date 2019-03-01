# OpenZepplin

The OpenZepplin library is a set of Ethereum smart contracts that implement common, useful patterns in a way that makes them easy to pull into your own projects.

???
Overview of project, libraries and patterns
ref: https://openzeppelin.org/
ref: https://blog.zeppelin.solutions/why-im-building-zeppelin-3b8576605d2a
ref: https://blog.zeppelin.solutions/zeppelin-a-new-standard-for-secure-blockchain-applications-47449420fb6a

---
# Advantages

* the community standard for smart contract development
* well known code with many eyeballs, many uses, many tests. 
* 
---
# Installing the OpenZepplin library

```shell
npm install -E openzeppelin-solidity
```
---
# Testing

You can test the openzepplin library with the truffle tests that accompany it
$ cd openzepplin
$ truffle test

---
# What it includes

After installing via npm, you'll have:
node_modules/openzepplin-solidity/contracts/

Alternately, you can copy one or more of the .sol files into your project, or symlink it..
! If you use npm, you'll be able to easily update files (or at least track changes since your version)
! Ensure that your version is set explicitly to avoid unexpected changes from upstream!

---
# OpenZepplin structure

???
TODO: add snapshot of directory structure

---
# Issues addressed
* SafeMath
* Tokens
 * ERC20 - Fungible tokens
 * ERC721 - Non-fungible tokens

---
# How to use them in your contracts

Example of a non-fungible token:

```solidity
pragma solidity ^0.4.24;
 
// If you install them via npm and leave them in place (recommended)
// Assuming your contract is in a subdir of your project, e.g. <PROJECT DIR>/contracts
import '../node_modules/contracts/openzeppelin-solidity/contracts/token/ERC721/ERC721Full.sol';
import '../node_modules/contracts/openzeppelin-solidity/contracts/token/ERC721/ERC721Mintable.sol';

// If you install them all manually in your contract directory:
//   import 'openzeppelin-solidity/contracts/token/ERC721/ERC721Full.sol';
//   import 'openzeppelin-solidity/contracts/token/ERC721/ERC721Mintable.sol';

// If you just copy them into your contract directory
//   import 'ERC721Full.sol';
//   import 'ERC721Mintable.sol';
 
contract MyNFT is ERC721Full, ERC721Mintable {
  constructor() ERC721Full("MyNFT", "MNFT") public {
  }
}
```

---
# Getting Started

See their https://openzeppelin.org/api/docs/get-started.html

???
ref: https://openzeppelin.org/api/docs/get-started.html
---
# API 2.0

Current status: RC 1 (first release candidate, available for testing)

Installation: `$ npm install openzeppelin-solidity@next`

Updates:
* Stable API
* Granular permissions
* Improved test suite

???
ref: https://github.com/OpenZeppelin/openzeppelin-solidity/releases/tag/v2.0.0-rc.1
---
