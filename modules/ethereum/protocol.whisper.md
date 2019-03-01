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

