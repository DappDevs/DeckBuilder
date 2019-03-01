class: middle, center
# web3.js
## API for decentralized appliactions

![Web3](../media/logo-web3.png)

???
ref: https://github.com/ethereum/web3.js/
ref: https://github.com/ethereum/wiki/wiki/JavaScript-API
ref: https://web3js.readthedocs.io/en/1.0/
ref: https://web3js.readthedocs.io/en/1.0/getting-started.html
ref: https://blockchainhub.net/web3-decentralized-web/
ref: https://www.npmjs.com/package/web3
ref: http://www.dappuniversity.com/articles/web3-js-intro
ref: https://github.com/w3f/Web3-wiki/wiki/Tech-Stack

---
# Web3: what does it do?

<p align=center>
    <img src="../media/web3-diagram.png" style="width:100%">
</p>

???
"To make your app work on Ethereum, you can use the web3 object provided by the web3.js library. Under the hood it communicates to a local node through RPC calls. web3.js works with any Ethereum node which exposes an RPC layer. web3 contains:
* the eth object - web3.eth (for specifically Ethereum blockchain interactions)
* the shh object - web3.shh (for Whisper interaction)

Over time other objects for each of the other web3 protocols will be introduced

---
# JSON RPC API
### The web3 family of libraries

* Provides a common interface for interacting with Ethereum
* Shares features with Solidity

https://github.com/ethereum/wiki/wiki/JSON-RPC

---
# The web3 stack

<p align=center>
    <img src="../media/web3stack.jpg" style="width:100%">
</p>
---
# web3.js
The web3.js library is a collection of modules which contain specific functionality for the ethereum ecosystem.

* The web3-eth is for the ethereum blockchain and smart contracts
* The web3-shh is for the whisper protocol to communicate p2p and broadcast
* The web3-bzz is for the swarm protocol, the decentralized file storage
* The web3-utils contains useful helper functions for Dapp developers.

???

---
# Web3 object
```solidity
var Web3 = require('web3');

> Web3.utils
> Web3.version
> Web3.givenProvider
> Web3.providers
> Web3.modules
```

???
ref: https://web3js.readthedocs.io/en/1.0/web3.html

---
# Provider types

* HttpProvider: The HTTP provider is deprecated, as it won’t work for subscriptions.
* WebsocketProvider: The Websocket provider is the standard for usage in legacy browsers.
* IpcProvider: The IPC provider is used node.js dapps when running a local node. Gives the most secure connection.

---
# web3.currentprovider

<p align=center>
    <img src="../media/web3.currentprovider.png" style="width:100%">
</p>

---
# Setting the provider

<p align=center>
    <img src="../media/web3-setting-provider.png" style="width:100%">
</p>

---
# Re-setting the provider
<p align=center>
    <img src="../media/web3setprovider.png" style="width:100%">
</p>

---
# web3 methods
<p align=center>
    <img src="../media/web3-methods.png" style="width:100%">
</p>
---
# WARNING!
<p align=center>
    <img src="../media/web3-is-a-wip.png" style="width:100%">
</p>
???
It has changed a few times this year. In particular, instantiation

---
# web3.eth

The web3-eth package allows you to interact with an Ethereum blockchain and Ethereum smart contracts.
???
---
# Numbers

Javascript's number handling is problematic.

web3JS uses the BigNumber library to work around this.

* https://github.com/MikeMcl/bignumber.js/
* Still limited to 20 or fewer floating points

Using WEI instead of ETH allows integer operations instead of floating point.

---
exclude: true
# TODO

* Deploying contracts
* Transactions
* Calling smart contract functions

---
# Web3 Resources

# Web3.js Resources

* https://github.com/ethereum/web3.js/
* https://web3js.readthedocs.io/en/1.0/
