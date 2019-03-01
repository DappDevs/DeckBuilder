class:tallpic
# Bitcoin

![bitcoin][bitcoin-logo]
[bitcoin-logo]: ../media/bitcoin_logo.png "Bitcoin"

---
name: bitcoin-whitepaper
exclude: true

# Bitcoin Whitepaper

???

"It might make sense just to get some in case it catches on. If enough people think the same way, that becomes a self fulfilling prophecy."
Satoshi Nakamoto, 1/17/2009 - http://nakamotoinstitute.org/crash-course/

---
# Specification

There's more to Bitcoin these days than the whitepaper.

The reference implementation is considered the de-facto specification, while the network protocol is often accurately captured in 
https://en.bitcoin.it/wiki/Protocol_documentation

???
ref: https://en.bitcoin.it/wiki/Protocol_documentation

---
# Bitcoin Network Clients: "Nodes"

Software running as a bitcoin network client is called a "node", and only if it participates in searching for new valid blocks is it a miner.

A bitcoin client is the end-user software that facilitates private key generation and security, payment sending on behalf of a private key, and optionally provides:

* Useful information about the state of the network and transactions.
* Information related to the private keys under its management.
* Syndication of network events to other peer clients.

???
ref: https://en.bitcoin.it/wiki/Clients

---
# Bitcoin Core

The reference implementation of Bitcoin network clients is called Bitcoin Core.
Originally published by Satoshi, it was rebranded "Bitcoin Core" to disambiguate it from the network. Also known as the Satoshi client.
It currently has a team of maintainers, with Wladimir J. van der Laan leading the release process.

???
ref: https://en.wikipedia.org/wiki/Bitcoin_Core

---
# Bitcoin Core Implementations

Original Satoshi clients
 * Private clients pre-release
 * 0.1.0 (2009-01-09) (which supported only Windows 2000 / Windows NT and Windows XP)
 * 0.1.5 (2009-02-04)
Community client implementations
 * 0.2.0 (2009-12-17) (starts to support Linux, adoption rises)
 * 0.3.0 (2010-07-06) (Windows32, Linux, MacOS X support)
 * 0.16.0 (2018-02-26) (Latest as of 2019-01)

Many other community built clients also exist.

???
ref: https://en.bitcoin.it/wiki/Original_Bitcoin_client
ref: https://en.bitcoin.it/wiki/Bitcoind#History_of_official_bitcoind_.28and_predecessor.29_releases

---
# Full nodes

A full node is a program that fully validates transactions and blocks. Almost all full nodes also help the network by accepting transactions and blocks from other full nodes, validating those transactions and blocks, and then relaying them to further full nodes.

Most full nodes also serve lightweight clients by allowing them to transmit their transactions to the network and by notifying them when a transaction affects their wallet. If not enough nodes perform this function, clients won’t be able to connect through the peer-to-peer network—they’ll have to use centralized services instead.

???
ref: https://bitcoin.org/en/full-node

---
# Running a bitcoin full node - requirements

Recommended starting specs for a node:
* Desktop or laptop hardware running recent versions of Windows, Mac OS X, or Linux.
* 200 gigabytes of free disk space, accessible at a minimum read/write speed of 100 MB/s.
* 2 gigabytes of memory (RAM)
* A broadband Internet connection with upload speeds of at least 400 kilobits (50 kilobytes) per second
* An unmetered connection, a connection with high upload limits, or a connection you regularly monitor to ensure it doesn’t exceed its upload limits. It’s common for full nodes on high-speed connections to use 200 gigabytes upload or more a month. Download usage is around 20 gigabytes a month, plus around an additional 195 gigabytes the first time you start your node.
* 6 hours a day that your full node can be left running. (You can do other things with your computer while running a full node.) More hours would be better, and best of all would be if you can run your node continuously.

???
ref: https://bitcoin.org/en/download
ref: https://bitcoin.org/en/full-node#minimum-requirements

---
# Running a bitcoin full node - risks

* Legal: Bitcoin use is prohibited or restricted in some areas.
* Bandwidth limits: Some Internet plans will charge an additional amount for any excess upload bandwidth used that isn’t included in the plan. Worse, some providers may terminate your connection without warning because of overuse. We advise that you check whether your Internet connection is subjected to such limitations and monitor your bandwidth use so that you can stop Bitcoin Core before you reach your upload limit.
* Anti-virus: Several people have placed parts of known computer viruses in the Bitcoin block chain. This block chain data can’t infect your computer, but some anti-virus programs quarantine the data anyway, making it more difficult to run Bitcoin Core. This problem mostly affects computers running Windows.
* Attack target: Bitcoin Core powers the Bitcoin peer-to-peer network, so people who want to disrupt the network may attack Bitcoin Core users in ways that will affect other things you do with your computer, such as an attack that limits your available download bandwidth.

---
# Initial block download

Initial block download refers to the process where nodes synchronize themselves to the network by downloading blocks that are new to them. This will happen when a node is far behind the tip of the best block chain. In the process of IBD, a node does not accept incoming transactions nor request mempool transactions.

If you are trying to set up a new node following the instructions below, you will go through the IBD process at the first run, and it may take a considerable amount of time since a new node has to download the entire block chain (which is roughly 195 gigabytes now). During the download, there could be a high usage for the network and CPU (since the node has to verify the blocks downloaded), and the client will take up an increasing amount of storage space (reduce storage provides more details on reducing storage).

Before the node finishes IBD, you will not be able to see a new transaction related to your account until the client has caught up to the block containing that transaction. So your wallet may not count new payments/spendings into the balance.

???
ref: https://bitcoin.org/en/full-node#initial-block-downloadibd

---
# Wallet Security

Understand how secure the private key managed by your software is, because it's yours.
Nodes are considered "hot" wallets, as they are on a computer, ready for use and connected to the network.

???
ref: https://bitcoin.org/en/secure-your-wallet

question: Is a bitcoin client wallet on your computer more or less secure than a wallet at an exchange?

---
# BIP

[Bitcoin Improvement Proposals](https://github.com/bitcoin/bips)
![BIP process](../media/bip-process.png)

"We intend BIPs to be the primary mechanisms for proposing new features, for collecting community input on an issue, and for documenting the design decisions that have gone into Bitcoin. The BIP author is responsible for building consensus within the community and documenting dissenting opinions."

???
ref: https://en.bitcoin.it/wiki/Bitcoin_Improvement_Proposals
ref: https://en.bitcoin.it/w/images/en/e/ea/BIP_Workflow.png
ref: https://en.bitcoin.it/wiki/BIP_0001
ref: https://github.com/bitcoin/bips/blob/master/bip-0002.mediawiki BIP2 - Proposal workflow


But maybe this isn't the most important part of what makes a system like Bitcoin like a DAO

---
# BIP Types

There are three kinds of BIP:
* Standards
* Informational
* Process

???

* A Standards Track BIP describes any change that affects most or all Bitcoin implementations, such as a change to the network protocol, a change in block or transaction validity rules, or any change or addition that affects the interoperability of applications using Bitcoin. Standards Track BIPs consist of two parts, a design document and a reference implementation.
* An Informational BIP describes a Bitcoin design issue, or provides general guidelines or information to the Bitcoin community, but does not propose a new feature. Informational BIPs do not necessarily represent a Bitcoin community consensus or recommendation, so users and implementors are free to ignore Informational BIPs or follow their advice.
* A Process BIP describes a process surrounding Bitcoin, or proposes a change to (or an event in) a process. Process BIPs are like Standards Track BIPs but apply to areas other than the Bitcoin protocol itself. They may propose an implementation, but not to Bitcoin's codebase; they often require community consensus; unlike Informational BIPs, they are more than recommendations, and users are typically not free to ignore them. Examples include procedures, guidelines, changes to the decision-making process, and changes to the tools or environment used in Bitcoin development. Any meta-BIP is also considered a Process BIP.

---
exclude:true
# Bitcoin as a DAC

Does the Bitcoin project count as a Decentralized, Autonomous, Corporation?

???
question: In what ways is the Bitcoin project like a Decentralized Autonomous Corporation?

---
# Joining the network

The Bitcoin client has a number of sources that it uses to locate the network on initial startup. In order of importance:

1. The primary mechanism, if the client has ever run on this machine before and its database is intact, is to look at its database. It tracks every node it has seen on the network, how long ago it last saw it, and its IP address.
2. The client can use DNS to locate a list of nodes connected to the network. One such seed is bitseed.xf2.org. The client will resolve this and get a list of Bitcoin nodes.
3. The client has a list of semi-permanent nodes compiled into it.
4. The client can connect to a well-known IRC network, irc.lfnet.org, and find other nodes that way. (This method has been removed as of version 0.8.2)
5. It takes IP addresses from the commandline (-addnode).

???
question: How does a bitcoin node know how to connect to the network? (Peer discovery)

ref: https://bitcoin.stackexchange.com/questions/2027/how-does-the-bitcoin-client-make-the-initial-connection-to-the-bitcoin-network

---
# Hashing algorithm: hashcash

Bitcoin mining uses the hashcash Proof-of-Work algorithm.

Hashcash was proposed in 1997 by Adam Back and described more formally in Back's paper "Hashcash - A Denial of Service Counter-Measure"

Parameters:
* service string
* nonce
* counter

???
ref: https://en.bitcoin.it/wiki/Block_hashing_algorithm
ref: https://en.wikipedia.org/wiki/Hashcash
ref: http://www.hashcash.org/papers/hashcash.pdf

---
# Bitcoin block header

| Field | Purpose | Updated when... | Size (Bytes) |
|---|---|---|---|
| Version | Block version number | You upgrade the software and it specifies a new version | 4 |
| hashPrevBlock | 256-bit hash of the previous block header | A new block comes in | 32 |
| hashMerkleRoot | 256-bit hash based on all of the transactions in the block | A transaction is accepted | 32 |
| Time | Current timestamp as seconds since 1970-01-01T00:00 UTC | Every few seconds | 4 |
| Bits | Current target in compact format | The difficulty is adjusted | 4 |
| Nonce | 32-bit number (starts at 0) | A hash is tried (increments) | 4 |

???
ref: https://en.bitcoin.it/wiki/Block_hashing_algorithm

---
# Bitcoin block body

The body of the block contains the transactions. These are hashed only indirectly through the Merkle root. Because transactions aren't hashed directly, hashing a block with 1 transaction takes exactly the same amount of effort as hashing a block with 10,000 transactions.

???
ref: https://en.bitcoin.it/wiki/Block_hashing_algorithm

---
# Further reading

* https://bitcoin.org/
 * https://bitcoin.org/en/faq

---

