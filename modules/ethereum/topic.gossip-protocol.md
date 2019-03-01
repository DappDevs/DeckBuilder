# Gossip protocols

A gossip protocol is a procedure or process of computer peer-to-peer communication that is based on the way that epidemics spread. Some distributed systems use peer-to-peer gossip to ensure that data is routed to all members of an ad-hoc network. Some ad-hoc networks have no central registry and the only way to spread common data is to rely to each member to pass it along to their neighbors.

The term .red[epidemic protocol] is sometimes used as a synonym for a gossip protocol, because gossip spreads information in a manner similar to the spread of a virus in a biological community. 

???
ref: https://en.wikipedia.org/wiki/Gossip_protocol
ref: https://www.scuttlebutt.nz/concepts/gossip

---
# Virality

The weakness of gossip is that quality of service, i.e. complete and timely dissemination, is predicated on the requirement that each member does not discriminate and ensures prompt and dependable transmission of the data to every member of their own peer network. In a real office gossip scenario, not everyone is privy to the gossip that is being spread. Gossip, versus broadcast, is discriminatory and often participants are left out of vital or important communications. As such, the comparison to 'office gossip' is not as good as the comparison to the spread of an epidemic. 

---
# Gossip Protocol types

* Dissemination protocols (or rumor-mongering protocols).
 * These use gossip to spread information; they basically work by flooding agents in the network, but in a manner that produces bounded worst-case loads
* Protocols that compute aggregates.
 * These compute a network-wide aggregate by sampling information at the nodes in the network and combining the values to arrive at a system-wide value – the largest value for some measurement nodes are making, smallest, etc.

???
ref: https://en.wikipedia.org/wiki/Gossip_protocol

---
