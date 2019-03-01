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
