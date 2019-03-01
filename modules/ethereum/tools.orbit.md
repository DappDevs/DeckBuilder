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
