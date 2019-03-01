# Stores of value in Ethereum

---
# Address value ledger

Unlike Bitcoin, Ethereum keeps an updated register of address balances.

???

---
# Data storage in Ethereum

![Tries](../media/eth-tries.jpg)

???
ref: https://hackernoon.com/getting-deep-into-ethereum-how-data-is-stored-in-ethereum-e3f669d96033

---
# Comparing Bitcoin and Ethereum's approaches

Bitcoin's UTXO Model:
* Scalability — Since it is possible to process multiple UTXOs at the same time, it enables parallel transactions and encourages scalability innovation.
* Privacy — Even Bitcoin is not a completely anonymous system, but UTXO provides a higher level of privacy, as long as the users use new addresses for each transaction. If there is a need for enhanced privacy, more complex schemes, such as ring signatures, can be considered.

Ethereum's Account/Balance Model:
* Simplicity — Ethereum opted for a more intuitive model for the benefit of developers of complex smart contracts, especially those that require state information or involve multiple parties. An example is a smart contract that keeps track of states to perform different tasks based on them. UTXO’s stateless model would force transactions to include state information, and this unnecessarily complicates the design of the contracts.
* Efficiency — In addition to simplicity, the Account/Balance Model is more efficient, as each transaction only needs to validate that the sending account has enough balance to pay for the transaction.

---
