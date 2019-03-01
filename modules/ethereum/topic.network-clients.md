# Network Clients

???

---
# Ethereum Network Client types

* Archival nodes 
 * Processes and retains a copy of all transactions, including state
 * "This is what it looked like in the past"
* Full nodes 
 * Processes and retains a copy of all transactions
 * Could derive previous states from transactions
 * "This is what happened in the past"
* Lite clients
 * Processes current transactions, assuming previous state reported from network is correct
 * "Is the past legit? Okay, cool"

???
Relative node sizes (Jan 2019):
* Archival node: 2TB
* Full node: 138GB

ref: https://twitter.com/fubuloubu/status/1085922471960866816

---
# Pruning

Removing data that won't be needed for intended future operations.
This is how lite nodes can stay small.

Pruned blockchains save more historical states than just the latest block because it will need these states if there is a reorganization of the blockchain. A reorganization of the blockchain happens when a version of the blockchain with a higher cumulative difficulty appears and reverts one or more blocks.

???
ref: https://medium.com/coinmonks/how-a-pruned-ethereum-node-can-fully-verify-the-blockchain-bbe9f29663ed

---
# Ethereum clients

* geth
* parity
* trinity

---
# Why run a full node?

* Removes need to trust a third party to send a transaction
* Removes need to trust a third party to verify Ethereum transactions
* Helps increase your privacy
* You have a say in which fork is the true chain

???
ref: https://medium.com/coinmonks/lessons-in-decentralization-the-benefits-of-running-a-full-node-35bf98febad7

---
# Why run a lite node?

* Enforcing Consensus Rules
* Helping Sync Other Nodes

Non mining nodes do not contributing hash power to the network, but they still contribute to network security by making sure that all nodes are following consensus rules.

Nodes ensure that consensus rules are followed by only sending valid blocks and pending (unconfirmed) transactions throughout the peer-to-peer network. If a node receives an invalid block, nodes will not only refuse to include that block in their local blockchain, they will also refuse to pass on that information to their peers.
Peers help each other sync by:
* Sharing all historical blocks and states in the Ethereum network and
* Sharing the latest blocks mined in the network.

???
ref: https://medium.com/coinmonks/lessons-in-decentralization-the-benefits-of-running-a-full-node-35bf98febad7

---
