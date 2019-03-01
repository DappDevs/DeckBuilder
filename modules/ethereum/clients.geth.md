class:splash
name: CLIENTS.GETH-1-START
# Geth: Go Ethereum client

![Geth](../media/logo-parity-ethereum.svg)

???
ref: https://geth.ethereum.org
ref: https://github.com/ethereum/go-ethereum/

TODO: see sample slides on geth for additional info

---
# GEth: Go Ethereum node client

Geth is the official go implementation of the Ethereum network client.

An entry point into the Ethereum network (main-, test- or private net), capable of running as a full node (default), archive node (retaining all historical state) or a light node (retrieving data live). It can be used by other processes as a gateway into the Ethereum network via JSON RPC endpoints exposed on top of HTTP, WebSocket and/or IPC transports.

Geth has been audited for security and will be the future basis for the enduser-facing Mist Browser, so if you have experience with web development and are interested in building frontends for dapps, you should experiment with Geth.

???

ref: https://www.ethereum.org/cli

---
# Installing on OS X

1. Install Homebrew and make sure it's up to date
2. `brew update`
3. `brew upgrade`
4. `brew tap ethereum/ethereum`
5. `brew install ethereum`

For more, see the full documentation on [Mac OSX Geth](https://github.com/ethereum/go-ethereum/wiki/Installation-Instructions-for-Mac)
---
# Installing on Windows

1. Download the latest stable binary, extract it, download the zip file, extract geth.exe from zip, open a command terminal and type:

2. `chdir <path to extracted binary>`
3. `open geth.exe`

For more, see the [full documentation on Windows Geth](https://github.com/ethereum/go-ethereum/wiki/Installation-instructions-for-Windows)

---
# Installing on Linux (Ubuntu)

On Ubuntu, execute these commands:

1. `sudo apt-get install software-properties-common`
2. `sudo add-apt-repository -y ppa:ethereum/ethereum`
3. `sudo apt-get update`
4. `sudo apt-get install ethereum`

For other environments and more instruction, see the [full documentation on Geth](https://github.com/ethereum/go-ethereum/wiki/Building-Ethereum)
---
# Other options

See https://www.ethereum.org/cli

---
# Running Geth

Mainnet, quick sync, with javascript console:
```shell
$ geth console
```
Same, but on a local test network instead of mainnet:
```shell
$ geth --testnet console # ropsten test network
$ geth --rinkeby console # rinkeby test network
```

To end your session, type '''exit'''

???
add: https://www.ethereum.org/cli

---
class:scrollable
# Other utilities included

* abigen - Source code generator to convert Ethereum contract definitions into easy to use, compile-time type-safe Go packages. It operates on plain Ethereum contract ABIs with expanded functionality if the contract bytecode is also available. However it also accepts Solidity source files, making development much more streamlined. Please see our Native DApps wiki page for details.

* bootnode - Stripped down version of our Ethereum client implementation that only takes part in the network node discovery protocol, but does not run any of the higher level application protocols. It can be used as a lightweight bootstrap node to aid in finding peers in private networks.

* evm - Developer utility version of the EVM (Ethereum Virtual Machine) that is capable of running bytecode snippets within a configurable environment and execution mode. Its purpose is to allow isolated, fine-grained debugging of EVM opcodes (e.g. evm --code 60ff60ff --debug).

* gethrpctest - Developer utility tool to support our ethereum/rpc-test test suite which validates baseline conformity to the Ethereum JSON RPC specs. Please see the test suite's readme for details.

* rlpdump - Developer utility tool to convert binary RLP (Recursive Length Prefix) dumps (data encoding used by the Ethereum protocol both network as well as consensus wise) to user friendlier hierarchical representation (e.g. rlpdump --hex CE0183FFFFFFC4C304050583616263).

* swarm - Swarm daemon and tools. This is the entrypoint for the Swarm network. swarm --help for command line options and subcommands. See Swarm README for more information.

* puppeth - a CLI wizard that aids in creating a new Ethereum network.

---
# Sync modes

Allow for running different "types" of client, performing different operations.

`$ geth --syncmode [ full | light | fast ]`

* Full
* Light
* Fast

---
# Full mode

Full synchronization with the network's blockchain, including download of all transactions.

---
# Light mode

The purpose of the light client protocol is to allow users in low-capacity environments (embedded smart property environments, smartphones, browser extensions, some desktops, etc) to maintain a high-security assurance about the current state of some particular part of the Ethereum state or verify the execution of a transaction. Although full security is only possible for a full node, the light client protocol allows light nodes processing about 1KB of data per 2 minutes to receive data from the network about the parts of the state that are of concern to them, and be sure that the data is correct provided that the majority of miners are correctly following the protocol, and perhaps even only provided that at least one honest verifying full node exists.

???
ref: https://github.com/ethereum/wiki/wiki/Light-client-protocol

---
# Fast mode

The goal of the the fast sync algorithm is to exchange processing power for bandwidth usage. Instead of processing the entire block-chain one link at a time, and replay all transactions that ever happened in history, fast syncing downloads the transaction receipts along the blocks, and pulls an entire recent state database. This allows a fast synced node to still retain its status an an archive node containing all historical data for user queries (and thus not influence the network's health in general), but at the same time to reassemble a recent network state at a fraction of the time it would take full block processing.

An outline of the fast sync algorithm would be:

* Similarly to classical sync, download the block headers and bodies that make up the blockchain
* Similarly to classical sync, verify the header chain's consistency (POW, total difficulty, etc)
* Instead of processing the blocks, download the transaction receipts as defined by the header
* Store the downloaded blockchain, along with the receipt chain, enabling all historical queries
* When the chain reaches a recent enough state (head - 1024 blocks), pause for state sync:
 * Retrieve the entire Merkel Patricia state trie defined by the root hash of the pivot point
 * For every account found in the trie, retrieve it's contract code and internal storage state trie
* Upon successful trie download, mark the pivot point (head - 1024 blocks) as the current head
* Import all remaining blocks (1024) by fully processing them as in the classical sync

???
ref: https://github.com/ethereum/go-ethereum/pull/1889
ref: https://ethereum.stackexchange.com/questions/1161/what-is-geths-fast-sync-and-why-is-it-faster

---
# Gas price oracle

Built in to geth.

Details: https://github.com/ethereum/go-ethereum/wiki/Gas-Price-Oracle

???
---
