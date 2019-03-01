name: CLIENTS-PARITY-START
# Parity

![Parity](../media/logo-parity-ethereum.svg)

"The fast, light, and robust EVM and WASM client."

???
ref: https://parity.io
ref: https://wiki.parity.io/
ref: https://github.com/paritytech/parity-ethereum

---
# Parity - Ethereum client

Built for mission-critical use: Miners, service providers, and exchanges need fast synchronisation and maximum uptime. Parity Ethereum provides the core infrastructure essential for speedy and reliable services.

* Clean, modular codebase for easy customisation
* Advanced CLI-based client
* Minimal memory and storage footprint
* Synchronise in hours, not days with Warp Sync
* Modular for light integration into your service or product

???
ref: https://github.com/paritytech/parity-ethereum

---
# Technical Overview

Parity Ethereum's goal is to be the fastest, lightest, and most secure Ethereum client. We are developing Parity Ethereum using the sophisticated and cutting-edge Rust programming language. Parity Ethereum is licensed under the GPLv3 and can be used for all your Ethereum needs.

???
ref: https://github.com/paritytech/parity-ethereum

---
# Installing via binary

https://github.com/paritytech/parity-ethereum/releases/

* Stable: https://github.com/paritytech/parity-ethereum/releases/tag/v2.0.9
* Beta: https://github.com/paritytech/parity-ethereum/releases/tag/v2.1.4

---
# Installing via Homebrew on OSX

```shell
brew tap paritytech/paritytech

brew install parity
// OR
brew install parity --devel // beta
brew install parity --HEAD  // nightly
```
Then upgrade via
```shell
brew upgrade parity
```
and also:
```shell
brew install ethabi
brew install ethkey
brew install ethstore
```

???

ref: https://github.com/paritytech/homebrew-paritytech/

---
# Running

```shell
$ ./target/release/parity
```
to begin syncing the Ethereum blockchain.

---
# Other Parity tools

* evmbin - EVM implementation for Parity Ethereum.
* ethabi - Parity Ethereum function calls encoding.
* ethstore - Parity Ethereum key management.
* ethkey - Parity Ethereum keys generator.
* whisper - Implementation of Whisper-v2 PoC.

---
