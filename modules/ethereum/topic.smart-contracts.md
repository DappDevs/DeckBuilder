class: center, middle, invert
name: def-smart-contracts
# Smart Contracts

???
"A smart contract is the simplest form of decentralized automation, and is most easily and accurately defined as follows: a smart contract is a mechanism involving digital assets and two or more parties, where some or all of the parties put assets in and assets are automatically redistributed among those parties according to a formula based on certain data that is not known at the time the contract is initiated."

ref: https://en.wikipedia.org/wiki/Smart_contract
ref: https://en.wikipedia.org/wiki/Secure_multi-party_computation
ref: https://en.wikipedia.org/wiki/Yao%27s_Millionaires%27_Problem
ref: https://en.wikipedia.org/wiki/Ricardian_contract

---
class:bigpic
# What is a Smart Contract?

![Smart contracts](../media/smartcontracts.jpg)

???
Well, a smart contract is basically a small computer program.  It is compiled into Bytecode and interpretted by the Ethereum VM for use by the network of Ethereum users it is developed to target.

A smart contract is able to accept calls from Ethereum's users, who provide external data in the form of arguments in order to perform the logic specified within the smart contract and modify the underlying state of the smart contract moving forward.

Smart contracts typically contain access restrictions in order to ensure only the right parties, under the right conditions, are able to modify this state. Otherwise, anyone could say whatever they want and the smart contract wouldn't be useful.

There are a few smart contract languages in existance that target the EVM, but Solidity is by far and away the most widely used

ref: https://en.wikipedia.org/wiki/Smart_contract

---
class:tallpic
# Smart Contracts on Ethereum
![solidity](../media/solidity-logo.svg)

???
"cryptographic ‘boxes’ that contain value and only unlock it if certain conditions are met" - Vitalik Buterin, Ethereum white-paper

Smart contracts are...
* compiled bytecode for the EVM
* able to accept calls
* contains access rules and logic

Smart contract langauges:
* Solidity (most common)
* Vyper
* others...

ref: https://github.com/ethereum/wiki/wiki/White-Paper

---
# Creating a Smart Contract in Ethereum

* Send a transaction with no recipient (empty "to" field)
* Transaction data becomes the executable code
* Contract installed at an address, becomes accessible for transacting

???
When a smart contract gets compiled (translated into machine language so that Ethereum can understand it), it's hashed – compressed into an unreadable format.
This is why we need the ABI: Application Binary Interface

---
# Calling a Smart Contract

* Send to the contract's address
* Data is used

# Side-effects to Contract Calls
Contracts can call other contracts!
* Beware of re-entrancy issues, where called contract calls the calling contract...

---
# Smart Contract ABIs
Application Binary Interface: used after smart contract is deployed & hashed to access the binary executable

???
How to get the ABI?
1. The author of the smart contract generally publishes the ABI alongside his contract. For example, the ABI of our raffle contract is here.
2. If the author published the source code of the smart contract, the ABI can be generated with tools like Truffle, Solc, or even Remix as we'll see later.
ref: https://bitfalls.com/2018/04/08/how-to-call-ethereum-smart-contract-functions/

---
# ABIs do not need to be complete

You can provide a subset of functions present in the contract in an ABI for that contract.

???
It's important to note that an ABI does not need to match the contract's source code 100%. If a contract has 10 functions of which only one is myFunction, then an ABI with just that one function defined is enough to call that one function, ignoring the rest.

---
# Upgrading

What is upgrading a smart contract?
> Not changing the bytecode deployed to an address
> Changing (re-pointing) an address reference to a different address with the "upgraded" code

---
exclude: true
# Data Migration on Upgrade

Q: If you have a deployed smart contract that has collected state data, how do you migrate that data to maintain it on the new contract?
A: ?

???
ref: https://medium.com/coinmonks/ethereum-smart-contract-migration-13f6f12539bd

---
# Lack of arbitration

Human contracts are fairly flexible, and often fall back on arbitration and compromise.
Smart contracts are not flexible in their execution, and are fit for transactions that can be trusted to not require such accomodation.

---
