# File Sharing

![The Pirate Bay](.../media/the-pirate-bay-logo.png)

???
ref: http://medianet.kent.edu/surveys/IAD06S-P2PArchitectures-chibuike/P2P%20App.%20Survey%20Paper.htm

---
# What is torrenting?

![Torrenting img](.../media/anonymous-torrenting.png)

A generalized term for sharing files on a decentralized, peer-to-peer (P2P) file distribution, often with file sharding (pieces).

---
# Napster

![Napster logo](../media/logo-napster.png)

Napster is the name given to three music-focused online services. It was initially founded by Shawn Fanning and Sean Parker as a pioneering peer-to-peer (P2P) file sharing Internet service that emphasized sharing digital audio files, typically audio songs, encoded in MP3 format.

Initially, Napster was envisioned as an independent peer-to-peer file sharing service by Shawn Fanning. The service operated between June 1999 and July 2001. Its technology allowed people to easily share their MP3 files with other participants. Although the original service was shut down by court order, the Napster brand survived after the company's assets were liquidated and purchased by other companies through bankruptcy proceedings.

???
ref: https://en.wikipedia.org/wiki/Napster

---
# MP3 and music sharing

Although there were already networks that facilitated the distribution of files across the Internet, such as IRC, Hotline, and Usenet, Napster specialized in MP3 files of music and a user-friendly interface. At its peak the Napster service had about 80 million registered users. Napster made it relatively easy for music enthusiasts to download copies of songs that were otherwise difficult to obtain, such as older songs, unreleased recordings, studio recordings, and songs from concert bootleg recordings.

High-speed networks in college dormitories became overloaded, with as much as 61% of external network traffic consisting of MP3 file transfers. Many colleges blocked its use for this reason, even before concerns about liability for facilitating copyright violations on campus.

???
ref: https://en.wikipedia.org/wiki/Napster

---
exclude: true
class: bio
# Sean Fanning

???
ref: https://en.wikipedia.org/wiki/Shawn_Fanning

---
exclude: true
class: bio
# Sean Parker

???
ref: https://en.wikipedia.org/wiki/Sean_Parker

---
# Gnutella

![Gnutella logo](../media/gnutella.jpg)

A P2P client of the same name developed @ Nullsoft (of WinAmp fame) shortly after their acquisition by AOL, launching March 14th 2000.

On March 14, the program was made available for download on Nullsoft's servers. The event was prematurely announced on Slashdot, and thousands downloaded the program that day. The source code was to be released later, under the GNU General Public License (GPL); however, the original developers never got the chance to accomplish this purpose.

The next day, AOL stopped the availability of the program over legal concerns and restrained Nullsoft from doing any further work on the project. This did not stop Gnutella; after a few days, the protocol had been reverse engineered, and compatible free and open source clones began to appear.This parallel development of different clients by different groups remains the modus operandi of Gnutella development today.

Among the first independent Gnutella pioneers were Gene Kan and Spencer Kimball, they launched the first portal aimed to assemble the open-source community to work on Gnutella, and also developed "GNUbile", one of the first open-source (GNU-GPL) programs to implement the Gnutella protocol. 

???

ref: https://en.wikipedia.org/wiki/Gnutella

----
# Gnutella protocol - joining the network

To envision how Gnutella originally worked, imagine a large circle of users (called nodes), each of whom has Gnutella client software. On initial startup, the client software must bootstrap and find at least one other node. Various methods have been used for this, including a pre-existing address list of possibly working nodes shipped with the software, using updated web caches of known nodes (called Gnutella Web Caches), UDP host caches and, rarely, even IRC. Once connected, the client requests a list of working addresses. The client tries to connect to the nodes it was shipped with, as well as nodes it receives from other clients until it reaches a certain quota. It connects to only that many nodes, locally caching the addresses it has not yet tried and discards the addresses it tried that were invalid.

---
# Gnutella protocol - search

!(Gnutella search](../media/GnutellaQuery.JPG)

When the user wants to do a search, the client sends the request to each actively connected node. In version 0.4 of the protocol, the number of actively connected nodes for a client was quite small (around 5), so each node then forwarded the request to all its actively connected nodes, and they, in turn, forwarded the request, and so on, until the packet reached a predetermined number of hops from the sender (maximum 7).

Since version 0.6 (2002), Gnutella is a composite network made of leaf nodes and ultra nodes (also called ultrapeers). The leaf nodes are connected to a small number of ultrapeers (typically 3) while each ultrapeer is connected to more than 32 other ultrapeers. With this higher outdegree, the maximum number of hops a query can travel was lowered to 4. 

Leaves and ultrapeers use the Query Routing Protocol to exchange a Query Routing Table (QRT), a table of 64 Ki-slots and up to 2 Mi-slots consisting of hashed keywords. A leaf node sends its QRT to each of the ultrapeers it is connected to, and ultrapeers merge the QRT of all their leaves (downsized to 128 Ki-slots) plus their own QRT (if they share files) and exchange that with their own neighbors. Query routing is then done by hashing the words of the query and seeing whether all of them match in the QRT. Ultrapeers do that check before forwarding a query to a leaf node, and also before forwarding the query to a peer ultra node provided this is the last hop the query can travel. 

???

---
# Gnutella protocol - retrieval

If a search request turns up a result, the node that has the result contacts the searcher. In the classic Gnutella protocol, response messages were sent back along the route the query came through, as the query itself did not contain identifying information of the node. This scheme was later revised, so that search results now are delivered over User Datagram Protocol (UDP) directly to the node that initiated the search, usually an ultrapeer of the node. Thus, in the current protocol, the queries carry the IP address and port number of either node. This lowers the amount of traffic routed through the Gnutella network, making it significantly more scalable.

If the user decides to download the file, they negotiate the file transfer. If the node which has the requested file is not firewalled, the querying node can connect to it directly. However, if the node is firewalled, stopping the source node from receiving incoming connections, the client wanting to download a file sends it a so-called push request to the server for the remote client to initiate the connection instead (to push the file). At first, these push requests were routed along the original chain it used to send the query. This was rather unreliable because routes would often break and routed packets are always subject to flow control. Therefore, so-called push proxies were introduced. These are usually the ultrapeers of a leaf node and they are announced in search results. The client connects to one of these push proxies using an HTTP request and the proxy sends a push request to leaf on behalf of the client. Normally, it is also possible to send a push request over UDP to the push proxy which is more efficient than using TCP. Push proxies have two advantages: First, ultrapeer-leaf connections are more stable than routes which makes push requests much more reliable. Second, it reduces the amount of traffic routed through the Gnutella network.

---
# Gnutella protocol - 

Gnutella did once operate on a purely query flooding-based protocol. The outdated Gnutella version 0.4 network protocol employs five different packet types, namely

* ping: discover hosts on network
* pong: reply to ping
* query: search for a file
* query hit: reply to query
* push: download request for firewalled servants

These are mainly concerned with searching the Gnutella network. File transfers are handled using HTTP.

---
# Bittorrent

BitTorrent (abbreviated to BT) is a communication protocol for peer-to-peer file sharing (P2P) which is used to distribute data and electronic files over the Internet.

---
# Why did it matter?

First, Bittorrent for the first time made the sharing of very large files possible for anyone with an internet connection without the need for any special infrastructure. This led to explosive growth in the popularity of Bittorrent for sharing large digitized media objects. It wasn’t the first or the most recent technology here, but almost certainly operated on the largest scale.

Second, the open and decentralized architecture of both the technology and the community meant that it was essentially impossible to shut down.

???
ref: https://medium.com/@simonhmorris/why-bittorrent-mattered-bittorrent-lessons-for-crypto-1-of-4-fa3c6fcef488

---
# Impact on media 

To make any files trivially shareable was a fundamental challenge to the media industry which started out treating the internet as just another sales channel into which a new ‘format’ of file could be distributed — vinyl/cassette/CD gave way to the MP3 file and VHS/DVD to the MP4. But this was not to be, as delivering a copy of a file to a single consumer on the internet meant that it was extremely difficult to prevent that file from being passed around every other consumer on the internet. Bittorrent was the last in a long line of technologies that obsoleted once and for all a file-oriented approach to building a mass media business model.

???
ref: https://medium.com/@simonhmorris/why-bittorrent-mattered-bittorrent-lessons-for-crypto-1-of-4-fa3c6fcef488

---
# Traits developed for the decentralized ecosystem

* Democratic (data exchange) - files of any size, from anyone, to anyone
* Decentralized - no critical infrastructure to attack
* Participatory - network participants take on network activity voluntarily

---
# Usage

As of 2013, BitTorrent has 15–27 million concurrent users at any time. As of January 2012, BitTorrent is utilized by 150 million active users. Based on this figure, the total number of monthly BitTorrent users may be estimated to more than a quarter of a billion.

BitTorrent is one of the most common protocols for transferring large files, such as digital video files containing TV shows or video clips or digital audio files containing songs. Peer-to-peer networks have been estimated to collectively account for approximately 43% to 70% of all Internet traffic (depending on location) as of February 2009. In February 2013, BitTorrent was responsible for 3.35% of all worldwide bandwidth, more than half of the 6% of total bandwidth dedicated to file sharing. 

???
ref: https://en.wikipedia.org/wiki/BitTorrent

---
class: bio
# Bram Cohen

Programmer Bram Cohen, a former University at Buffalo student, designed the protocol in April 2001 and released the first available version on 2 July 2001, and the most recent version in 2013. BitTorrent clients are available for a variety of computing platforms and operating systems including an official client released by BitTorrent, Inc.

???

---
# The Bittorrent Protocol

![Bittorrent](../media/BitTorrent_network.png)

---
# P2P

Peer to peer: decentralized alternative to connecting to a single service provider.

---
# Peer

https://en.wikipedia.org/wiki/Glossary_of_BitTorrent_terms#Peer

---
# Bittoreent Network Client

To send or receive files, a person uses a BitTorrent client on their Internet-connected computer. A BitTorrent client is a computer program that implements the BitTorrent protocol. Popular clients include μTorrent, Xunlei, Transmission, qBittorrent, Vuze, Deluge, BitComet and Tixati. BitTorrent trackers provide a list of files available for transfer, and allow the client to find peer users known as seeds who may transfer the files. 

---
# Trackers

Indexers of the network and distributors of index information to network clients.,

A tracker is a server that keeps track of which seeds and peers are in the swarm. Clients report information to the tracker periodically and in exchange, receive information about other clients to which they can connect. The tracker is not directly involved in the data transfer and does not have a copy of the file.

---
# Torrent files

???
ref: https://en.wikipedia.org/wiki/Torrent_file

---
# Seeding & Lurking

A user who wants to upload a file first creates a small torrent descriptor file that they distribute by conventional means (web, email, etc.). They then make the file itself available through a BitTorrent node acting as a seed.

Someone who does not seed new content is a lurker.

---
# The 1% rule

In Internet culture, the 1% rule is a rule of thumb pertaining to participation in an internet community, stating that only 1% of the users of a website actively create new content, while the other 99% of the participants only lurk.

???
ref: https://en.wikipedia.org/wiki/1%25_rule_(Internet_culture)

---
# Share ratio

Upload / download ratio

---
# Leechers & nettiquite

Leeching: downloading without uploading (free riders).

To keep the network operational and useful, upload capacity must meet or exceed download demand.

Nettiquite dictates that participants are responsible for this, and should maintain a good share ratio. 

---
# University networks

---
# Network improvements

---
# Rise of the clients

---
# Limewire

---
# Indexing

The BT protocol does not provide for indexing, leaving it to third parties to provide more discoverability through searchign, providing descriptions of file content (often with links to the media's profile on IMDB, etc.) 

---
# The Pirate Bay

![The Pirate Bay](.../media/the-pirate-bay-logo.png)

---
# ISP resistance

* If data is unencrypted, your ISP can read it.
* Even if it is encrypted, depending on how and the nature of the connection, your ISP may infer the nature of it.
* VPN (virtual private network) software is often used to create an encrypted "tunnel" past local network/ISP handling to some remote, controlled, less restricted endpoint.

---
# Magnet links

Reference file based on file content instead of relying on a tracker - able to directly query content, not depend on references

The standard for Magnet URIs was developed by Bitzi in 2002, partly as a "vendor- and project-neutral generalization" of the ed2k: and freenet: URI schemes used by eDonkey2000 and Freenet, respectively, and attempts to follow official IETF URI standards as closely as possible. 

???
ref: https://en.wikipedia.org/wiki/Magnet_URI_scheme

---
# Magnet link URI composition

Magnet URIs consist of a series of one or more parameters, the order of which is not significant, formatted in the same way as query strings that ordinarily terminate HTTP URLs. The most common parameter is "xt" ("exact topic"), which is generally a URN formed from the content hash of a particular file, e.g.:

`magnet:?xt=urn:btih:c12fe1c06bba254a9dc9f519b335aa7c1367a88a`

This refers to the hex-encoded SHA-1 hash of the torrent file info section in question. Note that, although a particular file is indicated, an availability search for it must still be carried out by the client application.

Other parameters defined by the draft standard are:

```
dn (Display Name) – Filename
xl (eXact Length) – Size in bytes
xt (eXact Topic) – URN containing file hash
as (Acceptable Source) – Web link to the file online
xs (eXact Source) – P2P link
kt (Keyword Topic) – Key words for search
mt (Manifest Topic) – link to the metafile that contains a list of magnet links (MAGMA – MAGnet MAnifest)
tr (address TRacker) – Tracker URL for BitTorrent downloads
```

application-specific experimental parameters, which must begin "x."

---
# Broadcatching

RSS + BitTorrent = programmable data subscription streams.

---
# Legal content distribution

* Wikipedia download option (fastest method)
* Blizzard clients use to distribute game updates
* Facebook & Twitter use to distribute server data updates

???
ref: https://en.wikipedia.org/wiki/BitTorrent

---
# Bittorrent Inc.

The company co-founded by Bram Cohen and Ashwin Navin in 2004 to pursue commercial applications of Bram’s invention

Distributes both the Bittorrent and uTorrent clients
???
ref: https://medium.com/@simonhmorris/why-bittorrent-mattered-bittorrent-lessons-for-crypto-1-of-4-fa3c6fcef488

---
# The end of Bittorrent Inc.

???
ref: https://medium.com/@simonhmorris/why-bittorrent-mattered-bittorrent-lessons-for-crypto-1-of-4-fa3c6fcef488

---
class:bg-blue white
# Freenet

![Freenet logo](../media/freenet-logo.png)

Freenet is a peer-to-peer platform for censorship-resistant communication and publishing.

* Secret Identity
 * Create yours so nobody knows who you are
* Browse Websites
 * Freenet is home to sites ranging from programming to sustainable living
* Forums
 * Ask questions and exchange ideas
* Platform
 * Build your own decentralized application on the Freenet platform

???
ref: https://freenetproject.org/
ref: https://freenetproject.org/pages/about.html

---
# Freenet Features

Freenet is free software which lets you anonymously share files, browse and publish "freesites" (web sites accessible only through Freenet) and chat on forums, without fear of censorship. Freenet is decentralised to make it less vulnerable to attack, and if used in "darknet" mode, where users only connect to their friends, is very difficult to detect.

Communications by Freenet nodes are encrypted and are routed through other nodes to make it extremely difficult to determine who is requesting the information and what its content is.

Users contribute to the network by giving bandwidth and a portion of their hard drive (called the "data store") for storing files. Files are automatically kept or deleted depending on how popular they are, with the least popular being discarded to make way for newer or more popular content. Files are encrypted, so generally the user cannot easily discover what is in his datastore, and hopefully can't be held accountable for it. Chat forums, websites, and search functionality, are all built on top of this distributed data store.

---
# Freenet's impact

Freenet has been downloaded over 2 million times since the project started, and used for the distribution of censored information all over the world including countries such as China and in the Middle East. Ideas and concepts pioneered in Freenet have had a significant impact in the academic world. Our 2000 paper "Freenet: A Distributed Anonymous Information Storage and Retrieval System" was the most cited computer science paper of 2000 according to Citeseer, and Freenet has also inspired papers in the worlds of law and philosophy. Ian Clarke, Freenet's creator and project coordinator, was selected as one of the top 100 innovators of 2003 by MIT's Technology Review magazine.

An important recent development, which very few other networks have, is the "darknet": By only connecting to people they trust, users can greatly reduce their vulnerability, and yet still connect to a global network through their friends' friends' friends and so on. This enables people to use Freenet even in places where Freenet may be illegal, makes it very difficult for governments to block it, and does not rely on tunneling to the "free world".

---
