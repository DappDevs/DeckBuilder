exclude:true
class: module-header ethereum/libraries.ethjs
---
# EthJS

An alternative to Web3 as an interface to P2P blockchains.

A simple module for building dApps and applications that use Ethereum.

https://github.com/ethjs

---
# User Guide

https://github.com/ethjs/ethjs/blob/master/docs/user-guide.md

---
# Developer Guide

https://github.com/ethjs/ethjs/blob/master/docs/developer-guide.md

---
# Examples

http://github.com/ethjs/examples

---
exclude:true
class: module-header ethereum/libraries.openzepplin
---
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
exclude:true
class: module-header ethereum/libraries.safemath
---
# The Safemath.sol library

---
# Purpose

---
# Function overview

Provides functions to replace 

    * : mul
    / : div
    + : add
    - : sub
    % : mod

Applies to uint, which is to say uint256.

???

https://openzeppelin.org/api/docs/math_SafeMath.html
https://medium.com/coinmonks/practicing-safemath-with-solidity-and-openzeppelin-cde4cba9ce39

---
# Get the library

Install as part of OpenZepplin:
`npm install openzepplin-solidity`

???
Copy it directly:

---
# SafeMath sample

```solidity
pragma solidity ^0.4.24;
 
import '../node_modules/contracts/openzeppelin-solidity/contracts/math/SafeMath.sol';
// import './SafeMath.sol';

contract SampleMath {

  using SafeMath for uint;
  uint public value;

  constructor() public {
  }

  function add (uint num) public {
    value = value + num;
  }

  function add_safe (uint num) public {
    value = value.add(num);
  }
  
}
```

---
# Other SafeMath versions for different sizes

## SafeMath8

```solidity
library SafeMath8 {

    function mul(uint8 a, uint8 b) internal pure returns (uint8) {
      if (a == 0) {
        return 0;
      }
      uint8 c = a * b;
      assert(c / a == b);
      return c;
    }

    function div(uint8 a, uint8 b) internal pure returns (uint8) {
      // assert(b > 0); // Solidity automatically throws when dividing by 0
      uint8 c = a / b;

      // assert(a == b * c + a % b); // There is no case in which this doesn’t hold
      return c;
    }

    function sub(uint8 a, uint8 b) internal pure returns (uint8) {
      assert(b <= a);
      return a — b;
    }

    function add(uint8 a, uint8 b) internal pure returns (uint8) {
      uint8 c = a + b;
      assert(c >= a);
      return c;
    }
}
```
exclude:true
class: module-header ethereum/solidity.patterns
---
# Patterns in Solidity contracts


???
TODO: add from https://github.com/ice09/SmartContractDev-Cookbook
---
# DAO

---
# Faucet

---
# Fungible Token patterns

* ERC-20
* ERC-220

---
# ERC-20

```solidity
// ----------------------------------------------------------------------------
// ERC Token Standard #20 Interface
// https://github.com/ethereum/EIPs/blob/master/EIPS/eip-20-token-standard.md
// ----------------------------------------------------------------------------
contract ERC20InterfacePlusTickerInfo {

    function totalSupply() public constant returns (uint);

    function balanceOf(address tokenOwner) public constant returns (uint balance);
    function allowance(address tokenOwner, address spender) public constant returns (uint remaining);

    function transfer(address to, uint tokens) public returns (bool success);

    function approve(address spender, uint tokens) public returns (bool success);
    function transferFrom(address from, address to, uint tokens) public returns (bool success);

    event Transfer(address indexed from, address indexed to, uint tokens);
    event Approval(address indexed tokenOwner, address indexed spender, uint tokens);

    // And optionally "Plus ticker info"
    string public constant name = "Token Name";
    string public constant symbol = "SYM";
    uint8 public constant decimals = 18;  // 18 is the most common number of decimal places
}
```

---
# Transfer

Send value directly: user driven

Problems:

---
# Approve and TransferFrom

Send value indirectly: user initiated, recipient completed

???
https://theethereum.wiki/w/index.php/ERC20_Token_Standard#Approve_And_TransferFrom_Token_Balance

---
# Specifying decimals

Currency math is done in the smallest unit of that currency.
Tokens are atomic units when performing math operations, like wei is to ether.
Ether uses 18 decimal places.
How many a token should use is debatable, but 18 is common.

???
ref: https://openzeppelin.org/api/docs/learn-about-tokens.html

---
# Non-Fungible Token patterns

* ERC-721

---
# Token Curated Registry

The product or output of a token-curated registry is a list.
Useful lists are curated.
A token-curated registry uses an intrinsic token to assign curation rights proportional to the relative token weight of entities holding the token.

There are three user types in a token-curated registry and each has different interests, incentives, and interaction patterns towards the registry. 
* Consumers desire high-quality lists. 
* Candidates desire to be included in such lists. 
* Token holders desire to increase the price of the tokens they hold.

???
ref: https://github.com/skmgoldin/tcr/
ref: https://medium.com/@ilovebagels/token-curated-registries-1-0-61a232f8dac7
---
# Delegated calls

Don't make the user pay. Have them sign the transaction parameters and submit the signature with the data to invoke the contract.

Can be used to, for example, move tokens.

How to incentivize the transactor? (Perhaps with tokens?)

???
ref: https://medium.com/zastrin/how-to-save-your-ethereum-dapp-users-from-paying-gas-for-transactions-abd72f15e14d
ref: https://hackernoon.com/you-dont-need-ether-to-transfer-tokens-f3ae373606e1

---
# Restricting access with modifiers

???
Restricting access is a common pattern for contracts. Note that you can never restrict any human or computer from reading the content of your transactions or your contract’s state. You can make it a bit harder by using encryption, but if your contract is supposed to read the data, so will everyone else.

You can restrict read access to your contract’s state by other contracts. That is actually the default unless you declare make your state variables public.

Furthermore, you can restrict who can make modifications to your contract’s state or call your contract’s functions and this is what this section is about.

The use of function modifiers makes these restrictions highly readable.

ref: https://solidity.readthedocs.io/en/v0.5.1/common-patterns.html
---
# Computing the hash of structured data

`keccak256(abi.encodePacked(a, b))`

NOTE: it is possible to craft a “hash collision” using different function parameter types.
Only compare hashes that have the same "signature" composition to encodePacked.

???
ref: https://solidity.readthedocs.io/en/v0.5.1/units-and-global-variables.html?highlight=encodePacked

---
exclude:true
class: module-header ethereum/topic.multisig-wallets
---
# Multisig wallets
## agreement among small groups

---
# Gnosis Multisig wallet

One of the more popular multisig wallets:
https://github.com/gnosis/MultiSigWallet/tree/master/contracts

???

ref: https://github.com/gnosis/MultiSigWallet/

Example fork:
ref: https://github.com/dappnode/MultiSigWallet/

---
exclude:true
class: module-header ethereum/topic.oracles
---
# Oracles

![oracle](../media/The_Oracle_of_Delphi_Entranced.jpg)

Oracles are data providers whose data is expected to be accurate, truthful representations of state in external systems.

???

"An oracle is just a provider of data. An oracle gives smart contracts answers to questions about the world. In most cases, without an oracle supplying information, there would be no way for a smart contract to be able to know the things it needs to know in order to do its job."

ref: https://medium.com/@DelphiSystems/the-oracle-problem-856ccbdbd14f

---
# Oracle services

* [Eth gas oracle]() - included with geth, estimates the gas cost for transactions by calculating opcode costs and current gas price

* [Augur](https://www.augur.net/) - "A prediction market protocol owned and operated by the people that use it."
* [Gnosis](https://gnosis.pm) - "Gnosis builds new market mechanisms to enable the distribution of resources—from assets to incentives, and information to ideas."
* [Delphi](https://delphi.systems/) - ""

---
# The Oracle Problem

Trusting a single oracle (as with anything) means introducing a single point of failure.
Oracles often leverage significant power over operations, making them a high profile target.

---
# Prediction markets

"Distributing the source of truth and incentivizing honest participation among experts, or people who are in a position to make a useful evaluation."

---
# Potential uses for a prediction market

* Political Forecasting
* Event Hedging
* Weather Prediction
* Company Forecasting

???

ref: http://augur.strikingly.com/blog/building-a-better-lie-detector
---
# Problems with forcasting

* Expertise
* Privileged access to information
* Participant bias
* Feedback influence

---
