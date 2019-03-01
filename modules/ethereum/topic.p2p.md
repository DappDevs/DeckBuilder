# Peer-to-peer networks

---
# Network history

???
* Network layer model
---
# Evolution of network models
???
* Time sharing
* Token ring
* Star
* LAN / WAN
* Universities
* Government research
* Encryption needs
* Protocols
* Adoption & scale
* Infrastructure
* Trackers
* Seeding
* Throttling
* Anonymity
* Trust
* Attacks
* Consensus

* P2P Projects
 * Napster
 * Limewire
 * Kazaa
 * Gnutella
 * Tor
 * The Pirate bay

Distributed computing
* The information super highway
* SETI @ Home
* Folding @ Home

---
# Napster

---
# FastTrack

![Jaan Tallinn](../media/headhshot-Jaan-Tallinn.png)

The FastTrack protocol and Kazaa were created and developed by Estonian programmers of BlueMoon Interactive headed by Jaan Tallinn, the same team that later created Skype.

???
ref: https://en.wikipedia.org/wiki/FastTrack

---
# Gnutella

???
ref: https://en.wikipedia.org/wiki/Gnutella

---
# GNUnet

![GNUnet](../media/logo-gnunet.png)

GNUnet is a software framework for decentralized, peer-to-peer networking and an official GNU package. The framework offers link encryption, peer discovery, resource allocation, communication over many transports (such as TCP, UDP, HTTP, HTTPS, WLAN and Bluetooth) and various basic peer-to-peer algorithms for routing, multicast and network size estimation.[6]

GNUnet's basic network topology is that of a mesh network. GNUnet includes a distributed hash table (DHT) which is a randomized variant of Kademlia that can still efficiently route in small-world networks. GNUnet offers a "F2F topology" option for restricting connections to only the users' trusted friends. The users' friends' own friends (and so on) can then indirectly exchange files with the users' computer, never using its IP address directly.

GNUnet consists of several subsystems, of which essential ones are Transport and Core subsystems.[8] Transport subsystem provides insecure link-layer communications, while Core provides peer discovery and encryption.[9] On top of the core subsystem various applications are built.

GNUnet includes various P2P applications in the main distribution of the framework, including filesharing, chat and VPN; additionally, a few external projects (such as secushare) are also extending the GNUnet infrastructure.

???
ref: https://en.wikipedia.org/wiki/GNUnet

---
# Commercial use

* Software distribution
 * Blizzard: Battle.net clients share on a p2p network

---
# Gossip Protocol

A gossip protocol[1] is a procedure or process of computer peer-to-peer communication that is based on the way that epidemics spread. Some distributed systems use peer-to-peer gossip to ensure that data is routed to all members of an ad-hoc network. Some ad-hoc networks have no central registry and the only way to spread common data is to rely to each member to pass it along to their neighbors.

Related ideas:
* The core of the protocol involves periodic, pairwise, inter-process interactions.
* The information exchanged during these interactions is of bounded size.
* When agents interact, the state of at least one agent changes to reflect the state of the other.
* Reliable communication is not assumed.
* The frequency of the interactions is low compared to typical message latencies so that the protocol costs are negligible.
* There is some form of randomness in the peer selection. Peers might be selected from the full set of nodes or from a smaller set of neighbors.
* Due to the replication there is an implicit redundancy of the delivered information.


???
ref: https://en.wikipedia.org/wiki/Gossip_protocol

---
# Replication

???
ref: https://www.microsoft.com/en-us/research/publication/the-dangers-of-replication-and-a-solution/

---
# Replication scheme examples

Joint checking account
value ($1000) captured in:
* your checkbook
* your spouse's checkbook
* your bank's ledger

Eager replication assures that all three books have the same account balance.  It prevents you and your spouse from writing checks totaling more than $1,000.  If you try to overdraw your account, the transaction will fail.  

Lazy replication allows both you and your spouse to write checks totaling $1,000 for a total of $2,000 in withdrawals.  When these checks arrived at the bank, or when you communicated with your spouse, someone or something reconciles the transactions that used the virtual $1,000.  

It would be nice to automate this reconciliation.  The bank does that by rejecting updates that cause an overdraft.  This is a master replication scheme:  the bank has the master copy and only the bank’s updates really count.  Unfortunately, this works only for the bank.  You, your spouse, and your creditors are likely to spend considerable time reconciling the “extra” thousand dollars worth of transactions.  In the meantime, your books will be inconsistent with the bank’s books.  That makes it difficult for you to perform further banking operations.

???
The database for a checking account is a single number, and a log of updates to that number.  It is the simplest database.  In reality, databases are more complex and the serialization issues are more subtle.

ref: https://www.microsoft.com/en-us/research/publication/the-dangers-of-replication-and-a-solution/

---
