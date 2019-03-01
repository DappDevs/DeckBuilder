# Ethereum: a quick introduction
<p align=center>
    <img src="../media/Ethereum_logo_2014.svg" style="width:40%">
</p>
???
More resources
https://ethereum.gitbooks.io/frontier-guide/

---
exclude: true
# Ethereum whitepaper
<p align=center>
    <img src="../media/ethereum.png" style="width:100%">
</p>
???
https://github.com/ethereum/wiki/wiki/White-Paper

---
# Ethereum is a P2P network
<p align=center>
    <img src="../media/ethereum-network.gif" style="width:100%">
</p>
???
Decentralized - no single "master" node
There are "boot nodes" that are reliably available and help new nodes join the network

---
# Ethereum is P2P network software

| | |
|----|----|
| Main network | Other networks |
| <img src="../media/ethereum-network.gif" style="width:100%"> | <img src="../media/ethereum-network.gif" style="width:100%"> 

</p>
???

---
exclude:true
# Participating network nodes

Full nodes - download a full copy of the blockchain's transactions
Light clients - sync up with the latest block and old root, trusting the calculations up to that point

???
Work:
* Mining: processing transactions
* Proving: checking block hashing to confirm integrity
* Facilitating interaction via transaction submission

---
# Networks

* Public main network
* Public test networks
 * Ropsten
 * Kovan - PoA network, moving to Görli
 * Rinkeby - PoA network, moving to Görli
* Private Test networks
 * testrpc / ganache
 * javascript vm
* Private networks

???
Test networks often have a single node, running locally, possibly only for the duration of the testing

ref: https://ethereum.stackexchange.com/questions/10311/what-is-olympic-frontier-morden-homestead-and-ropsten-ethereum-blockchain

---
exclude: true
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
* Keccak-256 (SHA3) is the heavy lifter among hashing functions in Ethereum

???

MD5: An algorithm is a widely used hash function producing a 128-bit hash value. Although MD5 was initially designed to be used as a cryptographic hash function, it has been found to suffer from extensive vulnerabilities. It can still be used as a checksum to verify data integrity, but only against unintentional corruption.

SHA3: A hash function formerly called Keccak, chosen in 2012 after a public competition among non-NSA designers. It supports the same hash lengths as SHA-2, and its internal structure differs significantly from the rest of the SHA family.

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
exclude: true
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
exclude: true
# Merkle Tree
<p align=center>
    <img src="../media/merkle-tree.png" style="width:100%">
</p>
???
A hashes of hashes!

Merkle proofs make it easy to compare hierarchies and identify differences caused by undesired changes, such as tampering or corruption

Git uses merkle trees for just this purpose

File hashes are useful as an ID for that file

ref: https://www.youtube.com/watch?v=-SMliFtoPn8

---
# Blockchains are:
## Public ledgers

<p align=center>
<img src="../media/distledger.png" width="100%">
</p>
???
secured via distributed verification
permissioned via account addresses

---
# Blockchains are:
## Append-only databasees

<p align=center>
    <img src="../media/appendonly.png" style="width:50%">
</p>

An ever-growing merkle tree

* Data is composed into sets called blocks
* Hashing old root + new block = new root
* Repeat ad infinitum

???
Root (hash of existing data) + new data, hashed, = new root
Locks in the order of additional data: no tampering with the order possible without changing all the following hashes

---
exclude:true
# Blockchains are:
## Directed acyclic graph (DAG)

<p align=center>
    <img src="../media/Topological_Ordering.svg">
</p>

???
In mathematics and computer science, a directed acyclic graph, is **a finite directed graph with no directed cycles**. That is, it consists of finitely many vertices and edges, with each edge directed from one vertex to another, such that there is no way to start at any vertex v and follow a consistently-directed sequence of edges that eventually loops back to v again. Equivalently, a DAG is a directed graph that has a topological ordering, a sequence of the vertices such that every edge is directed from earlier to later in the sequence.

---
<style>
    .red { color: red }
</style>
# Reaching Consensus

How do we know which root to use when multiple nodes are contending with different options?

Who to choose?

--
<b>Let participants compete!</b>

Type of competition is the .red[Consensus Protocol]

???
Because we want a fair competition, we use a method that should provide fair and equal distribution across all participants

---
class: middle, center
# Proof of work
???
Based on performing calculations known to be hard
Difficulty can be adjusted to tune the time it takes to add a new block ("blocktime")

???

---
# Incentivizing participants
<p align=center>
    <img src="../media/ether-coins.jpg" style="width:70%">
</p>
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
exclude: true
# Ethereum VM

Virtual machine state is the result of previous transactions: the previous "block"

---
exclude: true
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
# Transaction composition
* from address
* to address
* gas price per operation
* gas limit per transaction
* value sent (in ether)
* data
* signature

---
# Ether denomonations

| Unit  | Wei Value  | Wei |
|---|---|---|
| wei   | 1 wei    | 1 |
| gwei  | 1e9 wei  | 1,000,000,000 |
| ether | 1e18 wei | 1,000,000,000,000,000,000 |

???
ref: https://github.com/ethereum/EIPs/issues/33

The whitepaper only has wei, szabo, finney, ether: https://github.com/ethereum/wiki/wiki/White-Paper

web3.js has shannon etc. https://github.com/ethereum/web3.js/blob/master/lib/utils/utils.js

These other unit names are not popular and cause confusion, recent discussion in top comment: https://www.reddit.com/r/ethereum/comments/3to11c/eip_102_serenity_rename_gas_to_mana_vbuterin/

ref: https://ethereum.stackexchange.com/questions/253/the-ether-denominations-are-called-finney-szabo-and-wei-what-who-are-these-na

---
# Accounts

Accounts are identified by a 160 bit hash number

.center[Example:]
.center[<b>0x0FAfCFf23DACd4E828C5af786b19eF1Df8A532B5</b>]
.center[(Not an address I own, don't send ETH here!)]

--
There are 2 types of accounts, both identified by a 160 bit hash number

--
* EOA: externally owned account (<b>just value</b>) 
 * tracks (stores) ONLY value 
 * accessed via private key
 * not allocated a location, but each transaction in order updates the value
 * address derived from last 20 

* Smart contract (<b>value + .red[code]</b>)
 * accessed via function call

???
An address acts as a key into the blockchain's state trie
Wallets have no code
Allocation of smart contract addresses is somehow sequential, preventing duplicates
State storage space is allocated right after the smart contract code itself

In Ethereum, the state is made up of objects called "accounts", with each account having a 20-byte address and state transitions being direct transfers of value and information between accounts. An Ethereum account contains four fields:

* The nonce, a counter used to make sure each transaction can only be processed once
* The account's current ether balance
* The account's contract code, if present
* The account's storage (empty by default)

"Ether" is the main internal crypto-fuel of Ethereum, and is used to pay transaction fees. In general, there are two types of accounts: externally owned accounts, controlled by private keys, and contract accounts, controlled by their contract code. An externally owned account has no code, and one can send messages from an externally owned account by creating and signing a transaction; in a contract account, every time the contract account receives a message its code activates, allowing it to read and write to internal storage and send other messages or create contracts in turn.

Note that "contracts" in Ethereum should not be seen as something that should be "fulfilled" or "complied with"; rather, they are more like "autonomous agents" that live inside of the Ethereum execution environment, always executing a specific piece of code when "poked" by a message or transaction, and having direct control over their own ether balance and their own key/value store to keep track of persistent variables.

---
exclude: true
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
exclude: true
# Assigning addresses
???
https://ethereum.stackexchange.com/questions/3542/how-are-ethereum-addresses-generated

---
# Ethereum timeline (1/2)

* 2013 November: Ethereum whitepaper published
* 2014 January: public announcement and initial team formation: Vitalik Buterin, Mihai Alisie, Anthony Di Iorio, and Charles Hoskinson. Initial development under a Swiss company called Ethereum Switzerland GmbH
* 2014 June: Ethereum Foundation founded
* 2014 July and August: Ethereum crowdsale, Ethereum becomes available in exchange for Bitcoin. 11.9 million Ethereum tokens were sold (about 13% of the circulating supply), raising about 18.4 million USD
* 2014 August: Gavin Wood proposes Solidity language for smart contracts
* 2015 May: Olympic testnet launched
* 2015 July: "Frontier" phase of network launched. Basic functionality, no guarantees on safety or security
* 2015 August: Augur launches first ICO
* 2016 March: "Homestead" launches as the first "safe" version of the Ethereum platform

???
* 2013 November:
After proposing a scripting language for Bitcoin and having the idea rejected by the community, Vitalik Buterin publishes the Ethereum whitepaper, proposing inclusion of a virtual machine in the network clients, the Ethereum Virtual Machine. This would allow for the execution and verification of smart contracts.

---
# Ethereum timeline (2/2)

* 2016 May: DAO crowdfund
* 2016 June: DAO reentrance hack exploit
* 2016 July: Vote called and decision made to hard fork, in order to reverse the DAO hack transactions. ETC forks.
* 2016 October: "Tangerine whistle" first update/fork released
* 2016 November: "Spurious Dragon" second hard fork
* 2017 October: "Byzantium" release (pt 1/2 of Metropolis, 3rd of 4 phases on the roadmap) adds zkSNARK support and other features
* 2019 January: ETC susceptible to double spend attacks
* 2019 February: Constantinople update due
* TBD: Serenity update, moving consensus on mainnet from PoW to PoS

???

* 2016 July
as a result of the exploitation of a flaw in The DAO project's smart contract software, and subsequent theft of $50 million worth of Ether, Ethereum was split into two separate blockchains – the new separate version became Ethereum (ETH) with the theft reversed, and the original continued as Ethereum Classic (ETC).
Ethereum network implemented a “hard fork” to refund the money users put into The DAO. This was accomplished using a block that moved all Ether from The DAO and child DAO accounts into a “refund contract” account that only allowed affected users to withdraw their original investment.

* 2016 October: Tangerine whistle - in response to attackers using the low cost of operations to launch Denial of Service attacks against the Ethereum network. By executing a large number of computationally expensive but gas-cheap operations on the Ethereum blockchain, the attacker was able to delay transactions on Ethereum, slowing down the Ethereum Virtual Machine.

* 2016 November: Spurious dragon - hard fork of the Ethereum blockchain designed to thwart the Denial of Service attackers creating "empty accounts" in order to attack the network.

ref: https://en.wikipedia.org/wiki/The_DAO_(organization)
ref: https://www.coinmama.com/guide/history-of-ethereum
ref: https://en.wikipedia.org/wiki/Ethereum_Classic
ref: https://en.wikipedia.org/wiki/Gavin_Wood

---
# Version / "fork" history

|    |                  |                    |              |
|----|------------------|--------------------|--------------|
| 0. | Genesis          | @ block 0          |  ~ Jul 30 2015 (first block mined)
|0.1 | Ice Age          | @ block #200,000   | on Sep 07 2015
| 1. | Homestead        | @ block #1,150,000 | on Mar 14 2016
| 2. | DAO              | @ block #1,920,000 | on Jul 20 2016 (ETC spins off)
| 3. | Tangerine Whistle| @ block #2,463,000 | on Oct 18 2016
| 4. | Spurious Dragon  | @ block #2,675,000 | on Nov 18 2016
| 5. | Byzantium        | @ block #4,370,000 | on Oct 12 2017

???
ref: https://ethereum.stackexchange.com/questions/13014/please-provide-a-summary-of-the-ethereum-hard-forks

see also media/ethereum-forks-map.png

---
