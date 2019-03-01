exclude:true
class: module-header ethereum/exercises.ens-registration
---
# Registering a .eth domain with ENS

---
# Phase 1: Bidding

PUT THE REVEAL PHASE DATA ON YOUR CALENDAR
You will not receive a notification or other prompt, you must show up and reveal in the 3 day window after the 3 day waiting period.

---
# Phase 2: Reveal

---
# Phase 3: Remembering that you forgot to reveal and trying again

Did anyone win? Look up the domain and check the owner address.

ref: https://www.myetherwallet.com/#ens
???

ref: https://etherscan.io/enslookup?q=beyondlogical.eth

ref: https://kb.myetherwallet.com/ens/ens-what-to-do-if-you-forgot-to-reveal-ens-bid.html
ref: https://gist.github.com/alexvandesande/1c48dfbb330d67aeb79bc5b1103c6abe

Contract: 0x6090a6e47849629b7245dfa1ca21d94cd15878ef
Data: 0xede8acdb7fc8562466244784d2e69bcf7a8ac8a92d429e4b83d380904e12ca4a633e44da

Uhg, Metamask dropped the transaction data field, can't do that from there... :/

---
exclude:true
class: module-header ethereum/platform.ipfs
---
name: platform.ipfs
class: center, middle, invert
# IPFS
### Interplanetary File System
### P2P file hosting & sharing

Developer: Protocol Labs 
https://protocol.ai/

???

ref: https://ipfs.io/
ref: https://awesome.ipfs.io/
ref: https://docs.ipfs.io/introduction/install/
ref: https://github.com/ipfs/go-ipfs
ref: https://github.com/ipfs/go-ipfs/blob/v0.4.18/README.md
ref: https://medium.com/pinata/the-ipfs-cloud-352ecaa3ba76
ref: https://protocol.ai/

---
# Decentralized clouds

![Decentralized Clouds](../media/ipfs-decentralized-clouds.png)

---
# What is IPFS?

* a protocol
 * that defines a content-addressed file system, coordinates content delivery and combines ideas from Kademlia, BitTorrent, Git and more.
* a filesystem
 * has directories and files and mountable filesystem via FUSE.
* a web
 * Files are accessible via HTTP gateways like https://ipfs.io. Browsers can be extended to use the ipfs:// scheme directly, and hash-addressed content guarantees authenticity
* p2p
 * It supports worldwide peer-to-peer file transfers with a completely decentralized architecture and no central point of failure.
* a CDN
 * Add a file to your local repository, and it's now available to the world with cache-friendly content-hash addressing and bittorrent-like bandwidth distribution.

---
# Version

$ ipfs --version

---
# Working around CORS with localhost

In a web browser IPFS API (either browserified or CDN-based) might encounter an error saying that the origin is not allowed. This would be a CORS ("Cross Origin Resource Sharing") failure: IPFS servers are designed to reject requests from unknown domains by default. You can whitelist the domain that you are calling from by changing your ipfs config like this:

ipfs config --json API.HTTPHeaders.Access-Control-Allow-Origin "[\"http://example.com\"]"
ipfs config --json API.HTTPHeaders.Access-Control-Allow-Credentials "[\"true\"]"
ipfs config --json API.HTTPHeaders.Access-Control-Allow-Methods "[\"PUT\", \"POST\", \"GET\"]"

---
# IPFS JS API

https://github.com/ipfs/js-ipfs-api

---
# Web API

cloudflare-ipfs.com/ipfs/<HASH>
---
# Next steps: monetizing with Filecoin

https://www.youtube.com/watch?time_continue=4&v=EClPAFPeXIQ
---
exclude:true
class: module-header ethereum/protocol.whisper
---
# Whisper

ref: https://github.com/ethereum/wiki/wiki/Whisper

---
# Use case

* DApps that need to publish small amounts of information to each other and have the publication last some substantial amount of time. For example, a currency exchange DApp may use it to record an offer to sell some currency at a particular rate on an exchange. In this case, it may last anything between tens of minutes and days. The offer wouldn't be binding, merely a hint to get a potential deal started.

--
* DApps that need to signal to each other in order to ultimately collaborate on a transaction. For example, a currency exchange DApp may use it to coordinate an offer prior to creating one (or two, depending on how the exchange is structured) transactions on the exchange.

--
* DApps that need to provide non-real-time hinting or general communications between each other. E.g. a small chat-room app.

--
* DApps that need to provide dark (plausible denial over perfect network traffic analysis) comms to two correspondents that know nothing of each other but a hash. This could be a DApp for a whistleblower to communicate to a known journalist exchange some small amount of verifiable material and arrange between themselves for some other protocol (Swarm, perhaps) to handle the bulk transfer.

--
In general, think transactions, but without the eventual archival, any necessity of being bound to what is said or automated execution & state change.

---
# Specs

* Low-level API only exposed to DApps, never to users.
* Low-bandwidth Not designed for large data transfers.
* Uncertain-latency Not designed for RTC.
* Dark No reliable methods for tracing packets or
* Typical usage:
 * Low-latency, 1-1 or 1-N signalling messages.
 * High latency, high TTL 1-* publication messages.

Messages less than 64K bytes, typically around 256 bytes.

exclude:true
class: module-header ethereum/services.ens
---
# ENS
### Ethereum name service

???
ref: http://docs.ens.domains/
ref: https://ens.domains/
ref: https://github.com/ensdomains

---
# What does ENS do?

"ENS offers a secure & decentralised way to address resources both on and off the blockchain using simple, human-readable names."
"ENS eliminates the need to copy or type long addresses. With ENS, you'll be able to send money to your friend at 'aardvark.eth' instead of '0x4cbe58c50480...', interact with your favorite contract at 'mycontract.eth', or visit a Swarm-hosted site at 'swarmsite.eth'."

* Owns & manages the .eth gTLD
* Translates .eth domain URLs to contract addresses

???

ref: https://ens.domains/

---
# Subdomain registration
## "Name your wallet"

Uses https://now.ens.domains/

Allows you to search for .eth domains that offer registering a subdomain, for free or a small (.005 eth at time of writing) fee. 

beyondlogical.thisisme.eth

---
# Subdomain registration
## How does it work?
Enter a phrase to search for, and the app will show you all available extensions for that phrase. Click the one you like best, and your web3-enabled browser will pop up a transaction confirmation window. Approve the transaction, and as soon as it's mined, the wallet you sent the transaction from has a working ENS name! You can now give anyone your new name in place of your wallet address.

???
ref: https://now.ens.domains/#aboutmodal

---
# Subdomain registration
## How can I trust the owners of these domains?
In order to be listed on ENSNow, domain owners have to commit ownership of their name to a smart contract. This contract prohibits them from making any changes to the name until the permanent registrar upgrade, planned for approximately May 2019.

This means that your names are secure until at least that date. At that time, you should check back in to determine if the owner of your domain has precommitted to a migration path to the permanent registrar that will allow you to retain your name safely.

???
ref: https://now.ens.domains/#aboutmodal

---
# Register a domain name

ENS app now deprecated

Deferring to:
* [My Ether Wallet ENS (register new names)]( https://www.myetherwallet.com/#ens )
* [ENS Listing (buy/sell/rent names)](https://enslisting.com/ )
* [Name Bazaar (buy/sell names)]( https://namebazaar.io/ )
* [Need to use this app? Run it locally]( https://github.com/ethereum/ens-registrar-dapp )

---
# Example

* In your browser address bar, enter:
**  http://consensys.eth/ and press enter
* Metamask extension translates that to:
** moz-extension://17bdf89b-b7e2-cd4e-ab83-cfeb8aca4b52/error.html?name=www.consensys.eth
** chrome-extension://nkbihfbeogaeaoehlefnkodbefgpgknn/loading.html
** moz-extension://17bdf89b-b7e2-cd4e-ab83-cfeb8aca4b52/error.html?name=www.consensys.eth
** chrome-extension://nkbihfbeogaeaoehlefnkodbefgpgknn/error.html?name=consensys.eth

---
# ENS domain management
* [ENS Manager (manage subdomains)]( http://manager.ens.domains/ )

---
# Auction process

---
# Sale process

New, more like a traditional registrar.

---
# Reverse lookup

See if a contract address has a .eth domain registered to it:

https://manager.ens.domains/reverse-record

---
# Support in applications

## Mobile wallets
* Cipher
* Im Token
* Leth
* Status

## Desktop wallets
* Metamask
* Mist
* My Crypto
* My Ether Wallet

## Apps
* Aragon
* Bitfinex
* Etherscan
* Swarm

---
# Portal Network

???
ref: https://www.portal.network/
ref: https://github.com/PortalNetwork/ens
ref: https://market.portal.network/

---
# Handshake

???
ref: https://handshake.org/

---
# Monitoring Auctions

* ENSLive: https://enslisting.com/live
* ENSBot: 

Both services match the most popular 1 million words/websites.

Currently, about 1 in 4 auctions are recognizable

???
ref: https://medium.com/@enslisting.com/watch-live-ens-auctions-a99eb2a4198

---
exclude:true
class: module-header ethereum/tools.orbit
---
# Orbit: Peer-to-Peer Databases for the Decentralized Web 

https://github.com/orbitdb/orbit-db

---
# What is Orbit?

OrbitDB is a serverless, distributed, peer-to-peer database. OrbitDB uses IPFS as its data storage and IPFS Pubsub to automatically sync databases with peers. It's an eventually consistent database that uses CRDTs for conflict-free database merges making OrbitDB an excellent choice for decentralized apps (dApps), blockchain applications and offline-first web applications.

---
# DB Types supported
OrbitDB provides various types of databases for different data models and use cases:

* log: an immutable (append-only) log with traversable history. Useful for "latest N" use cases or as a message queue.
* feed: a mutable log with traversable history. Entries can be added and removed. Useful for *"shopping cart" type of use cases, or for example as a feed of blog posts or "tweets".
* keyvalue: a key-value database just like your favourite key-value database.
* docs: a document database to which JSON documents can be stored and indexed by a specified key. Useful for building search indices or version controlling documents and data.
* counter: Useful for counting events separate from log/feed data.

All databases are implemented on top of ipfs-log, an immutable, operation-based conflict-free replicated data structure (CRDT) for distributed systems. If none of the OrbitDB database types match your needs and/or you need case-specific functionality, you can easily implement and use a custom database store of your own.

---
exclude:true
class: module-header ethereum/topic.swarm
---
# Swarm

SERVERLESS HOSTING
INCENTIVISED PEER-TO-PEER STORAGE
AND CONTENT DISTRIBUTION

ref: https://swarm-guide.readthedocs.io/en/latest/introduction.html
ref: http://swarm-gateways.net/bzz:/theswarm.eth/
ref: https://github.com/ethereum/go-ethereum

---
# Decentralized storage

Data / file accounting protocol, agnostic of the storage mechanism.

!(Ethereum as World Computer)[../media/eth-world-computer.png]

---
# Swarm design features 

* Fault Tolerant
Redundant storage: local replication and erasure coding ensures data availability even in the face of node dropouts or data loss.

* Censorship Resistant
Sites cannot be 'taken down': data is stored throughout the network without vulnerable central hubs.

* DDoS Resistant
Fully decentralised peer-to-peer network is more resilient against DDoS than any centralised system.

* Zero Downtime
Redundancy ensures that the network continues to deliver data even when individual nodes go offline.

* Self-sustaining
Built-in incentive system ensures the network's economic viability.

---
# Alternatives

* bittorrent
* ipfs

---
# Project Status 

Swarm is under active development.

* Proof-of-Concept 0.3 was released in June, 2018.
 * https://blog.ethereum.org/2018/06/21/announcing-swarm-proof-of-concept-release-3/

* The Roadmap describes the current status of development, and outlines the path to the upcoming POC releases.
 * https://github.com/ethersphere/swarm/wiki/Roadmap

* Work is progressing on several fronts in parallel.
 * Working groups: https://github.com/ethersphere/swarm/wiki/Working-groups

???
ref: https://blog.ethereum.org/2018/06/21/announcing-swarm-proof-of-concept-release-3/
ref: https://github.com/ethersphere/swarm/wiki/Roadmap
ref: 

---
# Installation

* From source
* From package - Ubuntu PPA
```shell
sudo apt-get install software-properties-common
sudo add-apt-repository -y ppa:ethereum/ethereum
sudo apt-get update
sudo apt-get install ethereum-swarm
```
* Docker image - https://github.com/ethersphere/swarm-docker

---
# Projects

* Network Testing and Simulation Framework
A project aimed at testing the behaviour of many interconnected Swarm clients, to observe emergent network behaviour and use the results to make the Swarm more efficient and resilient. (demo)

* PSS
PSS is concerned with routing messages over the Swarm network to allow direct node-to-node communication as well as decentralised email and postal services. (demo)

* Streaming
This project aims to bring streaming content (audio / video) to the Swarm network. (demo)

* POT/SWORD model for Decentralised database services
This project aims to work on the POT data structure and the SWORD model of distributed provable databases (demo)

* Swap, Swear and Swindle contract development
Swap-Swear-Swindle is the name of Swarm's state channel infrastructure as described in the orange papers. This working group aims to implement this generic incentive structure on the ethereum blockchain.

* Data Encoding and Encryption
Swarm is planning to use erasure coding and encryption to ensure data availablilty an security. Well designed obfuscation schemes allow content to be hosted on the network without endagering the participating nodes by guaranteeing them plasuble deniability. (demo)

---
# Interacting with swarm

swarm-api from the Status team:
https://github.com/embark-framework/swarm-api

