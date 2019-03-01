name: PLATFORM.CORDA
# Corda

???
ref: https://cointelegraph.com/news/natwest-bank-launches-r3-corda-blockchain-based-syndicated-lending-platform

http://www.corda.net/

---
# R3 - The Company behind Corda

https://www.r3.com/

R3 builds blockchain technology to transform the way the world does business. Our global network of partners works with us to develop innovative apps for finance and commerce on our blockchain platform, Corda.

---
# Installing

http://www.corda.net/download.html

---
# Corda

Corda is an open source blockchain project, designed for business from the start. Only Corda allows you to build interoperable blockchain networks that transact in strict privacy. Corda's smart contract technology allows businesses to transact directly, with value.

https://github.com/corda/corda
???
ref: https://github.com/corda/corda

---
# Corda Features

* Smart contracts that can be written in Java and other JVM languages
* Flow framework to manage communication and negotiation between participants
* Peer-to-peer network of nodes
* "Notary" infrastructure to validate uniqueness and sequencing of transactions without global broadcast
* Enables the development and deployment of distributed apps called CorDapps
* Written in Kotlin, targeting the JVM

---
# Whitepaper

Corda:  A distributed ledger
Mike Hearn
November 29, 2016
Version 0.5

Abstract

A decentralised database with minimal trust between nodes would al-
low for the creation of a global ledger.  Such a ledger would have many
useful applications in finance, trade, supply chain tracking and more.  We
present Corda, a decentralised global database, and describe in detail how
it achieves the goal of providing a platform for decentralised app develop-
ment.  We elaborate on the high level description provided in the paper
<i>Corda: An introduction</i> and provide a detailed technical discussion.

https://docs.corda.net/_static/corda-technical-whitepaper.pdf

???
ref: https://docs.corda.net/_static/corda-technical-whitepaper.pdf

---
# Core Concepts

* The network
* The ledger
* Identity
* States
* Contracts
* Transactions
* Flows
* Consensus
* Notaries
* Time-windows
* Oracles
* Nodes
* Tradeoffs

???
ref: https://docs.corda.net/key-concepts.html

---
# Installing Corda

Follow the instructions, the environment is rather specific:

https://docs.corda.net/getting-set-up.html

---
# Software requirements

Corda uses industry-standard tools:

* Oracle JDK 8 JVM - minimum supported version 8u171
* IntelliJ IDEA - supported versions 2017.x and 2018.x (with Kotlin plugin version 1.2.51)
* Git

We also use Gradle and Kotlin, but you do not need to install them. A standalone Gradle wrapper is provided, and it will download the correct version of Kotlin.

Please note:

* Corda runs in a JVM. JVM implementations other than Oracle JDK 8 are not actively supported. However, if you do choose to use OpenJDK, you will also need to install OpenJFX
* Applications on Corda (CorDapps) can be written in any language targeting the JVM. However, Corda itself and most of the samples are written in Kotlin. Kotlin is an official Android language, and you can read more about why Kotlin is a strong successor to Java here. If you’re unfamiliar with Kotlin, there is an official getting started guide, and a series of Kotlin Koans.
* IntelliJ IDEA is recommended due to the strength of its Kotlin integration.

---
# Demobench

DemoBench is a standalone desktop application that makes it easy to configure and launch local Corda nodes. It is useful for training sessions, demos or just experimentation. 

exe & dmg available

http://www.corda.net/discover/demobench.html

---
# Running DemoBench

### Configuring a Node
Each node must have a unique name to identify it to the network map service. DemoBench will suggest node names, nearest cities and local port numbers to use. The first node will host the network map service, and we are forcing that node also to be a notary. Hence only notary services will be available to be selected in the Services list. For subsequent nodes you may also select any of Corda’s other built-in services. Press the Start node button to launch the Corda node with your configuration.

### Running Nodes
DemoBench launches each new node in a terminal emulator. The View Database, Launch Explorer and Launch Web Server buttons will all be disabled until the node has finished booting. DemoBench will then display simple statistics about the node such as its cash balance. It is currently impossible from DemoBench to restart a node that has terminated, e.g. because the user typed “bye” at the node’s shell prompt. However, that node’s data and logs still remain in its directory.

### Exiting DemoBench
When you terminate DemoBench, it will automatically shut down any nodes and explorers that it has launched and then exit. Profiles You can save the configurations and CorDapps for all of DemoBench’s currently running nodes into a profile, which is a ZIP file with the following layout, e.g.: notary/ node.conf plugins/ banka/ node.conf plugins/ bankb/ node.conf plugins/ example-cordapp.jar ... When DemoBench reloads this profile it will close any nodes that it is currently running and then launch these new nodes instead. All nodes will be created with a brand new database. Note that the node.conf files within each profile are JSON/HOCON format, and so can be extracted and edited as required.

DemoBench writes a log file to the following location:

* MacOSX/Linux - $HOME/demobench/demobench.log
* Windows - %USERPROFILE%\demobench\demobench.log

---
# CorDapps

https://docs.corda.net/cordapp-overview.html

Primary languages:
* Kotlin (Android language)
* Java

---

