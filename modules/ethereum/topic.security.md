# Security 

???
Aphorisms

add: sunlight as disinfectant
add: many eyeballs make all bugs shallow
add: security theater
add: threat model

ref: https://www.cryptologie.net/article/423/attacks-on-ethereum-smart-contracts/

---
# Security Concerns in Ethereum Smart Contracts

???
add: https://link.springer.com/chapter/10.1007/978-3-319-96145-3_4
add: https://github.com/trailofbits/awesome-ethereum-security
add: https://www.cl.cam.ac.uk/~rja14/book.html

---
# Tools

* Linters
* Visualizers
* Test Coverage
* Static Analysis Tools
* Dynamic Analysis Tools

???
ref: https://consensys.github.io/smart-contract-best-practices/security_tools/
---
# Linters

Linters improve code quality by enforcing rules for style and composition, making code easier to read and review.

* [Solcheck](https://github.com/federicobond/solcheck) - A linter for Solidity code written in JS and heavily inspired by eslint.
* [Solint](https://github.com/weifund/solint) - Solidity linting that helps you enforce consistent conventions and avoid errors in your Solidity smart-contracts.
* [Solium](https://github.com/duaraghav8/Solium) - Yet another Solidity linting.
* [Solhint](https://github.com/protofire/solhint) - A linter for Solidity that provides both Security and Style Guide validations.

---
# Visualizers

Help developers examine code

---
# Test Coverage

Tools that ensure code coverage via tests.

* solidity-coverage - Code coverage for Solidity testing.

???

---
# Static Analysis Tools

Examines code for issues without executing

* [Mythril Classic](https://github.com/ConsenSys/mythril-classic) - Open-source security analyzer for Solidity code and on-chain smart contracts.
* [Manticore](https://github.com/trailofbits/manticore) - Dynamic binary analysis tool with EVM support
* [Mythril](https://github.com/b-mueller/mythril/) - Reversing and bug hunting framework for the Ethereum blockchain
* [Oyente](https://github.com/melonproject/oyente) - Analyze Ethereum code to find common vulnerabilities, based on this paper.
* [Solgraph](https://github.com/raineorshine/solgraph) - Generates a DOT graph that visualizes function control flow of a Solidity contract and highlights potential security vulnerabilities.

???

---
# Dynamic Analysis Tools

Runs code and examines for issues

---
# DASP - Decentralized Application Security Project

https://dasp.co/

---
# Top 10 decentralized app security issues of 2018

1. Reentrancy
2. Access Control
3. Arithmetic
4. Unchecked Low Level Calls
5. Denial of Services
6. Bad Randomness
7. Front Running
8. Time Manipulation
9. Short Addresses
10. Unknown Unknowns

???
ref: https://dasp.co/

---
