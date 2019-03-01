# solc - Solidity compiler

ref: https://www.sitepoint.com/compiling-smart-contracts-abi/
---
# Installing

```
npm install -g solc
```
---
# Example Contact
```solidity
pragma solidity ^0.4.24;

contract Value {

    uint storedNumber;

    constructor () public {

        storedNumber = 123123;
    }

}
```
---
# Generate ABI

```shell
$ solc simple_value.sol --abi

======= simple_value.sol:Value =======
Contract JSON ABI
[{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"}]
```
---
# Compiling binary

```shell
$ solc simple_value.sol --bin

======= simple_value.sol:Value =======
Binary:
6080604052348015600f57600080fd5b506201e0f360008190555060358060276000396000f3006080604052600080fd00a165627a7a72305820e07bf962f53302f4c85b8b9f78a10b8b2288bdd4c3ec62cc2eeeabdfa16b490a0029
```
---
