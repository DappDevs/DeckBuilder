# Ethereum: a quick introduction
<p align=center>
    <img src="../media/ethereum.png" style="width:100%">
</p>
???
ref: https://www.ethereum.org/

---
# Ethereum is a P2P network

???
Decentralized - no single "master" node
There are "boot nodes" that are reliably available and help new nodes join the network

---
exclude:true
# Participating network nodes

Full nodes - download a full copy of the blockchain's transactions
Light nodes - sync up with the latest block and old root, trusting the calculations up to that point
Stateless nodes - doesn't download, only validates (not present in Ethereum 1.0)

???
Work:
* Mining: processing transactions
* Proving: checking block hashing to confirm integrity
---
# Networks

* Public main network
* Private networks
* Public test networks
** Rinkeby
** Ropsten
** Kovan
* Private Test networks
** testrpc / ganache
** javascript vm
???
Test networks often have a single node, running locally, possibly only for the duration of the testing
---
# Peer discovery
???

The peer discovery algorithm is based on the kademlia protocol.

A simplified model of how the p2p algorithm works is the following:

1. you have nodes that are assumed to be always available/online (in Ethereum they are called bootstrap nodes)
2. bootstrap nodes maintain a list of all nodes that connected to them in a period of time (predefined temporal value, for example last 24 hours)
3. when peers (Ethereum client applications such as eth, geth, pyethapp, etc.) connect to the Ethreum network, they first connect to the bootstrap nodes which share the lists of peers that have connected to them in the last predefined time period
4. the connecting peers then synchronize with the peers and may prune the connections to the bootstrap nodes since they are no longer essential in peer discovery (the peers can perform discovery on their own)
ref: https://ethereum.stackexchange.com/questions/7743/what-are-the-peer-discovery-mechanisms-involved-in-ethereum?noredirect=1&lq=1

---
# Hashes

* Functions that transform data
* Accept arbitrary input as a serialized string
* Produce uniform length output
* Output, the has, is arbitrary - not related to the input
* Same input = Same output

???
---
# Hash uses

* Different input SHOULD produce different output
** If not, this is a collision
* One-way function
* Small changes to the input will produce a significantly different output
* Useful to quickly compare two pieces of data
* The harder to compute a collision, the better

???
Being able to take data of arbitrary size - say the entirety of a novel, or a hard drive, or a database - and tell if it is identical to another piece of data

"One basic requirement of any cryptographic hash function is that it should be computationally infeasible to find two non-identical messages which hash to the same value. MD5 fails this requirement catastrophically; such collisions can be found in seconds on an ordinary home computer."
ref: https://en.wikipedia.org/wiki/MD5

---
class: hideslide
# Hash functions

MD5: An algorithm is a widely used hash function producing a 128-bit hash value. Although MD5 was initially designed to be used as a cryptographic hash function, it has been found to suffer from extensive vulnerabilities. It can still be used as a checksum to verify data integrity, but only against unintentional corruption.

SHA0: A retronym applied to the original version of the 160-bit hash function published in 1993 under the name "SHA". It was withdrawn shortly after publication due to an undisclosed "significant flaw" and replaced by the slightly revised version SHA-1.

SHA1: A 160-bit hash function which resembles the earlier MD5 algorithm. This was designed by the National Security Agency (NSA) to be part of the Digital Signature Algorithm. Cryptographic weaknesses were discovered in SHA-1, and the standard was no longer approved for most cryptographic uses after 2010.

SHA2: A family of two similar hash functions, with different block sizes, known as SHA-256 and SHA-512. They differ in the word size; SHA-256 uses 32-bit words where SHA-512 uses 64-bit words. There are also truncated versions of each standard, known as SHA-224, SHA-384, SHA-512/224 and SHA-512/256. These were also designed by the NSA.

SHA3: A hash function formerly called Keccak, chosen in 2012 after a public competition among non-NSA designers. It supports the same hash lengths as SHA-2, and its internal structure differs significantly from the rest of the SHA family.

???
ref: https://en.wikipedia.org/wiki/MD5
ref: https://en.wikipedia.org/wiki/Secure_Hash_Algorithms
ADD: https://en.wikipedia.org/wiki/Merkle%E2%80%93Damg%C3%A5rd_construction
---
# Merkle Tree
<p align=center>
    <img src="../media/merkle-tree.png" style="width:100%">
</p>
The Yellow Paper states that it assumes implementations will maintain the world state and transactions in a modified Merkle Patricia tree (trie)

???
A tree of hashes of hashes (and hashes of data for the leaves)!

In a Merkle tree, the leaf nodes contain the hash of a block of data and the non-leaf nodes contain the hash of its children nodes.

Git uses merkle trees for just this purpose

File hashes are useful as an ID for that file

ref: https://www.youtube.com/watch?v=-SMliFtoPn8
ref: https://pegasys.tech/ethereum-explained-merkle-trees-world-state-transactions-and-more/
ref: https://github.com/ethereum/wiki/wiki/Patricia-Tree

---
# Merkle Proofs

Merkle proofs make it easy to compare hierarchies and identify differences caused by undesired changes, such as tampering or corruption

???
ref: https://medium.com/crypto-0-nite/merkle-proofs-explained-6dd429623dc5

---
# World State

The world state is a mapping between addresses (accounts) and account states. The world state is not stored on the blockchain but the Yellow Paper states its expected implementations store this data in a trie (also referred as the state database or state trie). The world state can be seen as the global state that is constantly updated by transaction executions. The Ethereum network is like a decentralized computer and the world state is considered this computer’s hard drive.

All the information about Ethereum accounts live in the world state and is stored in the world state trie. If you want to know the balance of an account, or the current state of a smart contract, you query the world state trie to retrieve the account state of that account. I’ll describe how this data is stored shortly.

???
ref: https://pegasys.tech/ethereum-explained-merkle-trees-world-state-transactions-and-more/
ref: https://medium.com/cybermiles/diving-into-ethereums-world-state-c893102030ed

---
# Account State

The account state contains information about an Ethereum account. For example, it stores how much Ether an account has and the number of transactions sent by the account. Each account has an account state.

* nonce
 * Number of transactions sent from this address (if this is an External Owned Account – EOA) or the number of contract-creations made by this account (don’t worry about what contract-creations means for now). 

* balance
 * Total Ether (in Wei) owned by this account. 

* storageRoot
 * Hash of the root node of the account storage trie

* codeHash
 * For contract accounts, hash of the EVM code of this account. For EOAs, this will be empty. 

---
# Blockchains

An ever-growing merkle tree

* Data is composed into sets called blocks
* Hashing old root + new block = new root
* Repeat ad infinitum

???

Root (hash of existing data) + new data, hashed, = new root
Locks in the order of additional data: no tampering with the order possible without changing all the following hashes

---
# Reaching Consensus

How do we know which root to use when multiple nodes are contending with different candidates for the next block to add?

Who to choose?
--
Let participants compete!

Type of competition is the Consensus Protocol

???
Because we want a fair competition, we use a method that should provide fair and equal distribution across all participants

---
# Proof of work

* The original method for Bitcoin & Ethereum
* Based on performing calculations known to be hard
* Difficulty can be adjusted to tune the time it takes to add a new block ("blocktime")
* Ethereum plans transition to "Proof of work"

???

???
---
# Incentivizing participants

???
* Miner who contributes the next block gets the "block reward"
* Reward is cryptocurrency--bitcoin, ether--used to pay transaction fees and as currency
* Miner gets transaction fees - cost of doing the work to process the transactions
** This is why there is a "gas cost"
** prevent spam, DOS attacks
* Encourages miners to process blocks with transactions
* Encourages users to pay fees depending on urgency
** This is why you can adjust the "gas limit"

---
class: hideslide
# Ethereum VM

Virtual machine state is the result of previous transactions: the previous "block"
---
class: hideslide
# Ethereum Block composition
* Timestamp
* List of transactions
* Root hash
* Hash
* Uncles - would-be parent blocks that lost
* Miner address
* Difficulty
* Nonce
* Gas used
* Reward
---
# Transactions

1. Transactions that transfer value between two EOAs (e.g., change the sender and receiver account balances)
2. Transactions that send a message call to a contract (e.g., set a value in the smart contract by sending a message call that executes a setter method)
3. Transactions that deploy a contract (therefore, create an account, the contract account)

???
Technically 1&2 are the same, but useful to distinguish them

ref: https://pegasys.tech/ethereum-explained-merkle-trees-world-state-transactions-and-more/
ref: https://medium.com/@codetractio/inside-an-ethereum-transaction-fa94ffca912f
ref: https://medium.com/blockchannel/life-cycle-of-an-ethereum-transaction-e5c66bae0f6e

---
class:hideslide
# Transaction composition
* from address
* to address
* gas price per operation
* gas limit per transaction
* value sent (in ether)
* data
* signature



*nonce
    Number of transactions sent by the account that created the transaction.

*gasPrice
    Value (in Wei) that will be paid per unit of gas for the computation costs of executing this transaction.

*gasLimit
    Maximum amount of gas to be used while executing this transaction.

*to
    -If this transaction is transferring Ether, address of the EOA account that will receive a value transfer.
    -If this transaction is sending a message to a contract (e.g., calling a method in the smart contract), this is address of the contract.
    -If this transactions is creating a contract, this value is always empty.

*value
    -If this transaction is transferring Ether, amount in Wei that will be transferred to the recipient account.
    -If this transaction is sending a message to a contract, amount of Wei payable by the smart contract receiving the message.
    -If this transaction is creating a contract, this is the amount of Wei that will be added to the balance of the created contract.

*v, r, s
    Values used in the cryptographic signature of the transaction used to determine the sender of the transaction.

*data (only for value transfer and sending a message call to a smart contract)
    Input data of the message call (e.g., imagine you are trying to execute a setter method in your smart contract, the data field would contain the identifier of the setter method and the value that should be passed as parameter).

*init (only for contract creation)
    The EVM-code utilized for initialization of the contract.

???

Not surprisingly, all transactions in a block are stored in a trie. And the root hash of this trie is stored in the…block header! 
ref: 
---
class: hideslide
# Ether denomonations
---
# Addresses

There are 2 types of address, both identified by a 160 bit hash number

* EOA: externally owned account (just value) 
** tracks (stores) ONLY value 
** accessed via private key
** not allocated a location, but each transaction in order updates the value
** address derived from last 20 

* smart contract (value + code)
** accessed via function call
???
An address acts as a key into the blockchain's state trie
Wallets have no code
Allocation of smart contract addresses is somehow sequential, preventing duplicates
State storage space is allocated right after the smart contract code itself

---
class: hideslide
# Assigning a new address

1. Generate a new private key
2. Derive the public key from the private key
3. Derive the address from the public key

???

Deriving the address
1. Start with the public key (128 characters / 64 bytes)
2. Take the Keccak-256 hash of the public key. You should now have a string that is 64 characters / 32 bytes. (note: SHA3-256 eventually became the standard, but Ethereum uses Keccak)
3. Take the last 40 characters / 20 bytes of this public key (Keccak-256). Or, in other words, drop the first 24 characters / 12 bytes. These 40 characters / 20 bytes are the address. When prefixed with 0x it becomes 42 characters long.

ref: https://ethereum.stackexchange.com/questions/51647/the-difference-between-contract-address-and-wallet-address
---
class: hideslide
# Assigning addresses
???
https://ethereum.stackexchange.com/questions/3542/how-are-ethereum-addresses-generated
---
