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

