name: WALLETS-START
class: middle, center, invert 
# Wallets

???
TODO: fill in
ref: https://medium.com/@attores/step-by-step-guide-getting-started-with-ethereum-mist-wallet-772a3cc99af4

---
# What is a wallet?

Functions:
* Transacting - data in motion
 * Receiving & sending cryptocurrency
 * Interacting with smart contracts (on supported platforms)
* Storing - data at rest

---
# Wallets may include

* a mnemonic / seed phrase
* one or more accounts, each with
 * a private key
 * a public key
 * an address

???
ref: https://en.bitcoin.it/wiki/Seed_phrase

---
# Externally Owned Accounts

* Built off a private key.
* Address is derived from the private key via series of 1 way hashing and truncation

---
# Keys

* Private keys
 * generated secret with guaranteed strength
 * uses randomness (entropy) during generation to make less predictable

* Public keys
 * derived from the private key
 * cannot be used to derive the private key (one-way hashed)

You should know: Who holds the (private) key to your wallet?

???
ref: https://github.com/vkobel/ethereum-generate-wallet

---
exclude: true
# Keystores

???
ref: https://theethereum.wiki/w/index.php/Accounts,_Addresses,_Public_And_Private_Keys,_And_Tokens
todo: add snippets of example keystore files
todo: point out where students can find a keystore file in software they have installed to examine

---
# Tools for key generation

![Metamask](../media/metamask.png)

???
Metamask: wallet generation is built in, and private key / mnemonic can be exported

ref: https://kobl.one/blog/create-full-ethereum-keypair-and-address/

---
# Mnemonics / Seed phrases

A wallet specific mechanism for generating multiple private keys / accounts.

Introduced on the Trezor hardware wallet.

A random sequence of words from a dictionary.

Typically a 12, 18, or 24 word "phrase"

See BIP39 for a mnemonic protocol recommendation
https://github.com/bitcoin/bips/blob/master/bip-0039.mediawiki

???
ref: https://github.com/bitcoin/bips/blob/master/bip-0039.mediawiki
ref: https://blockchain.wtf/wallets/hardware/
ref: https://gitlab.com/help/ssh/README#generating-a-new-ssh-key-pair
ref: https://iancoleman.io/bip39/

---
# .red[Hot] & .blue[Cold] wallets

### Hot
* "online" - connected to a network (typically the internet)
* ready to use
* less secure
* more like cash

### Cold
* "offline" - not connected to a network
* requires steps to access
* more secure
* more like a bank acct

---
# Types of wallets

* Web
* Software
 * Desktop
 * Mobile
* Hardware
* Physical

---
# Online wallets

Available via browser -> website

Provided by a 3rd party

Aka "Cloud" wallets

PROVIDER MAY MANAGE YOUR PRIVATE KEY--THIS IS NOT OWNERSHIP.

* Coinbase - https://www.coinbase.com/
* MyEtherWallet - https://www.myetherwallet.com/

---
# Software wallets: Desktop 

Software installed on laptops & computers (Windows / OS X / Linux)

Often part of full network client node software.

Examples:
* Mist - dapp browser
* Metamask (browser plugin) - https://metamask.io/
* geth - ethereum client
* parity - https://www.parity.io/ethereum/
* Jaxx - https://jaxx.io/

---
# Software wallets: Mobile 

Software installed on mobile devices (Android, iOS) as an app

Examples:
* Metamask - web browser plugin
* Jaxx (app) - https://jaxx.io/
* Coinbase (app) - https://www.coinbase.com/

---
# Hardware wallets

Often a dongle format, like a USB stick

Examples:
* Trezor - https://trezor.io/ - the first to market
* Ledger - https://www.ledger.com/
* Bitbox - https://shiftcrypto.ch/
* KeepKey - https://www.keepkey.com/

Some feature 2FA (2 factor authentication) additions to prevent unauthorized access, even with physical access to the device.

---
# Physical wallets

Physical record of the private key (and optionally, other information)

* required: include the private key OR mnemonic
 * mnemonic can be used for multiple private keys
 * mnemonic is easier to accurately record / read / type...
* optional: include the public key - not necessary, this can be derived from the private key
* optional: include the address - not necessary, this can be derived from the public key
* optional: include a QR code for the address - not necessary, just convenient

* Paper - "Paper" wallets are hardware wallets that use the keyboard (or camera via QR code) as the interface.
Risk of fire loss!

* Steel - provide a fire (etc) resistant means of storing your private key
---
exclude: true
# On paper wallets

???
https://medium.com/@pi0neerpat/walrus-paper-wallet-5c39b89c9e22
https://github.com/blockchainbuddha/Walrus-Paper-Wallet-Generator

see exercise

---
# Mist Browser

https://github.com/ethereum/mist

https://wallet.ethereum.org

---
# Bitcoin "paper wallet" generators

* https://www.bitaddress.org/
* https://walletgenerator.net/
* <strike>https://bitcoinpaperwallet.com/</strike>
* https://mycelium.com/mycelium-entropy.html - notable as a USB device that plugs directly into the printer

### Considerations:
* Do you trust a service to be involved with generating your private key?
* Do you trust that information was not shared back to the service / eavesdroppers?
* Do you trust the randomness generator process?

* \[Update: bitcoinpaperwallet.com domain sold, no longer tied to the github code--no proof generated keys are not shared!!!\]

???
ref: https://www.coindesk.com/information/paper-wallet-tutorial/

---
# Hierarchical Deterministic Wallets

"Using some tricks with cryptography and elliptic curve mathematics, a method to generate a tree of key-pairs from a single key-pair was introduced to help with the management/storage/backup of all the addresses a user has.

This enables users to focus on the security and storage of a single key-pair while simultaneously having the flexibility to use as many key-pairs as needed. This also allows for easy recovery or portability, as you only have to enter a single private-key into a new wallet to restore all of your accounts."

This also makes the secrecy of those private keys only as strong as the secrecy of the parent key... all the more reason to protect that secret.

???
ref: https://medium.com/the-bitcoin-podcast-blog/reframing-how-you-think-about-the-concept-of-managing-your-private-keys-fdf95060728a

---
exclude: true
# Generating a new private key on your computer

---
# Wallet projects

* [Arkane](https://arkane.network)
* [BitGo](https://www.bitgo.com/)
* [Emerald Wallet](https://www.etcdevteam.com/) - ETC
* [KeepKey](https://shapeshift.io/)
* [MetaMask](https://metamask.io/) -ETH
* [MyCrypto](https://mycrypto.com/)
* [MyEtherWallet](https://www.myetherwallet.com/) - ETH
* [Parity](https://www.parity.io/)
* [Trustwallet](https://trustwallet.com/)
* [Unchained Capital](https://www.unchained-capital.com/)

---
