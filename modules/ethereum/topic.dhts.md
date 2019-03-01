# Distributed Hash Tables (DHT)

!(DHT diagram)[../media/DHT.svg]

ref: https://en.wikipedia.org/wiki/Distributed_hash_table
---
# What is a DHT?

A distributed hash table (DHT) is a class of a decentralized distributed system that provides a lookup service similar to a hash table: (key, value) pairs are stored in a DHT, and any participating node can efficiently retrieve the value associated with a given key. Keys are unique identifiers which map to particular values, which in turn can be anything from addresses, to documents, to arbitrary data.[1] Responsibility for maintaining the mapping from keys to values is distributed among the nodes, in such a way that a change in the set of participants causes a minimal amount of disruption. This allows a DHT to scale to extremely large numbers of nodes and to handle continual node arrivals, departures, and failures.

---
# What is a DHT used for

DHTs form an infrastructure that can be used to build more complex services, such as anycast, cooperative Web caching, distributed file systems, domain name services, instant messaging, multicast, and also peer-to-peer file sharing and content distribution systems.

---
# Examples

* BitTorrent's distributed tracker
* the Coral Content Distribution Network
* the Kad network
* the Storm botnet
* the Tox instant messenger
* Freenet
* the YaCy search engine
* the InterPlanetary File System (IPFS)

---
