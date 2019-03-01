# EVM - Etheremu Virtual Machine

Ethereum Virtual Machine (EVM) is the virtual machine executed on the Ethereum network.
???
ref: https://github.com/ethereum/wiki/wiki/Ethereum-Virtual-Machine-(EVM)-Awesome-List
ref: https://github.com/CoinCulture/evm-tools/blob/master/analysis/guide.md
ref: https://blog.qtum.org/diving-into-the-ethereum-vm-6e8d5d2f3c30

---
# Specification

In the Ethereum ["Yellow paper"](https://github.com/ethereum/yellowpaper)
???
ref: https://ethereum.stackexchange.com/questions/268/ethereum-block-architecture/6413#6413

---
# Turing Complete langauge support

* https://en.wikipedia.org/wiki/Turing_completeness

---
# Opcodes

The actual instruction set the evm executes.

All higher order languages (Solidity, Vyper, lll, etc) compile to evm opcodes.

Examples: 

| Opcode | Name | Description | Gas |
| --- | --- | --- | --- | --- | |
| 0x00 | STOP | Halts execution | 0 |
| 0x01 | ADD | Addition operation | 3 |
| 0x02 | MUL | Multiplication operation | 5 |
| 0x03 | SUB | Subtraction operation | 3 |
| 0x04 | DIV | Integer division operation | 5 |
| 0x33 | CALLER | Get caller address | 2 |
| 0x34 | CALLVALUE | Get deposited value by the instruction/transaction responsible for this execution | 2 |
| 0x35 | CALLDATALOAD | Get input data of current environment | 3 |
| 0x36 | CALLDATASIZE | Get size of input data in current environment | 2* |
| 0x37 | CALLDATACOPY | Copy input data in current environment to memory | 3 |
| 0xf1 | CALL | Message-call into an account | Complicated |
| 0xf2 | CALLCODE | Message-call into this account with alternative account's code | Complicated |
| 0xf3 | RETURN | Halt execution returning output data | 0 |
| 0xf4 | DELEGATECALL | Message-call into this account with an alternative account's code, but persisting into this account with an alternative account's code | Complicated |
| 0xfa | STATICCALL | Similar to CALL, but does not modify state | 40 |
| 0xfd | REVERT | Stop execution and revert state changes, without consuming all provided gas and providing a reason | 0 |

???
ref: https://github.com/trailofbits/evm-opcodes

---
