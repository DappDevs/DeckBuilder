# Calling contracts

Interacting with deployed smart contracts on the blockchain.

---
# Transfers

* direct transfer
* allowed withdrawl

ref: https://solidity.readthedocs.io/en/v0.5.1/common-patterns.html
---
# Direct transfer danger

Calling transfer() on a contract allows the contract's fallback function to execute 

---
# Gotchas

Sending non-zero Ether to non-payable function will revert the transaction.

???
ref: https://solidity.readthedocs.io/en/develop/abi-spec.html
---
