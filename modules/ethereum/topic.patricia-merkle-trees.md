# Patricia Merkle Trees

???

ref: https://github.com/ethereum/wiki/wiki/%5BEnglish%5D-Patricia-Tree
ref: https://easythereentropy.wordpress.com/2014/06/04/understanding-the-ethereum-trie/
ref: https://github.com/ethereum/wiki/wiki/Patricia-Tree
ref: https://blog.ethereum.org/2015/11/15/merkling-in-ethereum/

---
Key - value storage

Flat:

Trie:

---
# Why modified?

Merkle Patricia tries solve the inefficiency issue by adding some extra complexity to the data structure. A node in a Merkle Patricia trie is one of the following:

* NULL (represented as the empty string)
* branch A 17-item node [ v0 ... v15, vt ]
* leaf A 2-item node [ encodedPath, value ]
* extension A 2-item node [ encodedPath, key ]

???
ref: https://github.com/ethereum/wiki/wiki/Patricia-Tree

---
# Use in Ethereum

All of the merkle tries in Ethereum use a Merkle Patricia Trie.

From a block header there are 3 roots from 3 of these tries.

* stateRoot
* transactionsRoot
* receiptsRoot

---
## Transactions Trie

There is a separate transactions trie for every block. A path here is: rlp(transactionIndex). transactionIndex is its index within the block it's mined. The ordering is mostly decided by a miner so this data is unknown until mined. After a block is mined, the transaction trie never updates.

## Receipts Trie

Every block has its own Receipts trie. A path here is: rlp(transactionIndex). transactionIndex is its index within the block it's mined. Never updates.

## State Trie

There is one global state trie, and it updates over time. In it, a path is always: sha3(ethereumAddress) and a value is always: rlp(ethereumAccount). More specifically an ethereum account is a 4 item array of [nonce,balance,storageRoot,codeHash]. At this point it's worth noting that this storageRoot is the root of another patricia trie:

##Storage Trie

Storage trie is where all contract data lives. There is a separate storage trie for each account. A path in this trie is somewhat complex but they depend on this.

???
ref: https://github.com/ethereum/wiki/wiki/Patricia-Tree

---
#Merkle Proofs

|---|---|
| ![MP blank](../media/merkle-proof-blank.png) | ![MP](../media/merkle-proof.png) |

???
ref: https://blog.ethereum.org/2015/11/15/merkling-in-ethereum/
---
# Merkle Proofs in Bitcoin

![Bitcoin MP](../media/bitcoin-merkle-tree.jpg)

The original application of Merkle proofs was in Bitcoin, as described and created by Satoshi Nakamoto in 2009. The Bitcoin blockchain uses Merkle proofs in order to store the transactions in every block.

The benefit that this provides is the concept that Satoshi described as "simplified payment verification": instead of downloading every transaction and every block, a "light client" can only download the chain of block headers, 80-byte chunks of data for each block that contain only five things:

* A hash of the previous header
* A timestamp
* A mining difficulty value
* A proof of work nonce
* A root hash for the Merkle tree containing the transactions for that block.

If the light client wants to determine the status of a transaction, it can simply ask for a Merkle proof showing that a particular transaction is in one of the Merkle trees whose root is in a block header for the main chain.

---
# Merkle Proofs in Ethereum

![Eth MP](../media/ethblockchain_full.png)

Every block header in Ethereum contains not just one Merkle tree, but three trees for three kinds of objects:

* Transactions
* Receipts (essentially, pieces of data showing the effect of each transaction)
* State

---

