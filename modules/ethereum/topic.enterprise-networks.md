# Enterprise Networks

???
ref: https://media.consensys.net/11-ways-ethereum-can-benefit-enterprise-aac6d798a9fb

---
# 

---
# Concerns

* Security - trust in systems' internal operational integrity
* Certainty - Clarity of insight into the state of systems
* Accountability - clear provenance of changes, access control

---
# Needs

* Permissioning
 * Enterprise use cases often require that only authorized parties can join the network, and that participants have different read, access, and write roles.
* Privacy
 * Specific transaction data — product name, quantity, price, address, personally identifiable financial information, etc. — should be withheld from or made available to network participants depending on their roles. A freight forwarder, for example, might not need to know the contents of a certain shipping container, but only that the container has arrived. Banking regulations also restrict who may have access to transaction data.
* Performance
 * Enterprises must have the infrastructure to process thousands of transactions per second and tolerate periodic surges in network activity. One sales order with a thousand lines, for example, triggers a cascade of transactional events. In today’s networked economies, enterprises must be able to collect, validate, and publish an ever-increasing volume of diverse transactions.
* Finality
 * Institutions transferring large amounts of money need certainty about the outcome of transactions. Funds must be good, and payments must be final.

???

---
# Benefits of Enterprise Ethereum

* Data coordination
 * Ethereum’s decentralized architecture better allocates information and trust so that network participants do not have to rely on a central entity to manage the system and mediate transactions.
* Rapid deployment
 * With an all-in-one SaaS platform like Kaleido, enterprises can easily deploy and manage private blockchain networks instead of coding a blockchain implementation from scratch.
* Permissioned networks
 * Kaleido’s Blockchain Business Cloud enables enterprises to form consortium networks in which privileged nodes can function as gatekeepers or regulators (i.e. stop executions, see encrypted state information in plaintext, etc). PegaSys, ConsenSys’ protocol engineering spoke, is currently developing Pantheon, an Apache 2.0-licensed Ethereum Java client which can be used for both public and private network use cases.
* Network size
 * The mainnet proves that an Ethereum network can work with hundreds of nodes and millions of users. Most enterprise blockchain competitors are only running networks of less than 10 nodes and have no reference case for a vast and viable network. Network size is critical for enterprise consortia that are bound to outgrow a handful of nodes.
* Private transactions
 * Enterprises can achieve granularity of privacy in Ethereum by forming private consortia with private transaction layers. Constellation, Quorum’s privacy module, uses privateFor parameters to allow participants to exchange private transactions. PegaSys has open sourced Orion, a Java-based private transaction manager that facilitates transactions between authorized parties. PegaSys also recently ported private transaction capabilities from Zcash into Ethereum using smart contracts.
* Scalability and performance
 * With Proof of Authority consensus and custom block time and gas limit, consortium networks built on Ethereum can outperform the public mainnet and scale up to hundreds of transactions per second or more depending on network configuration. Protocol-level solutions like sharding and off-chain, layer 2 scaling solutions such as Plasma and statechannels present opportunities for Ethereum to increase its throughput in the near future.
* Finality
 * A blockchain’s consensus algorithm secures confidence that the record of transactions remains tamper-proof and canonical. Ethereum offers customizable consensus mechanisms including RAFT and IBFT for different enterprise network instances, ensuring immediate transaction finality and reducing the required infrastructure that the Proof of Work algorithm demands.
* Incentive layer
 * Ethereum’s cryptoeconomic layers allow business networks to develop mechanisms that both punish nefarious activity and create rewards around activities such as verification and availability.
* Tokenization
 * Businesses can tokenize any asset on Ethereum that has been registered in a digital format. By tokenizing assets, organizations can fractionalize previously monolithic assets (real estate), expand their line of products (provably rare art), and unlock new incentive models (crowdsourced data management).
* Standards
 * Ethereum is where the standards are. Protocols around token design (ERC20), human-readable names (ENS), decentralized storage (Swarm), and decentralized messaging (Whisper) keep the ecosystem from balkanizing. For enterprises, the Enterprise Ethereum Alliance’s Client Specification 1.0 defines the architectural components for compliant enterprise blockchain implementations. The EEA is planning to release version 2.0 of the spec soon.
* Interoperability and open source
 * Consortia on Ethereum are not locked into the IT environment of a single vendor. Amazon Web Services customers, for example, can operate private networks with Kaleido’s Blockchain Business Cloud. Like the Java community’s spec-driven philosophy, the Ethereum ecosystem welcomes contributions to the codebase through Ethereum Improvement Proposals (EIPs).

???
ref: https://media.consensys.net/11-ways-ethereum-can-benefit-enterprise-aac6d798a9fb

---
# 
