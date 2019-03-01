name: TOOLS.METAMASK-START
exclude:true

---
class: middle, center
# Metamask
<p align=center>
    <img src="../media/metamask.png">
</p>
[https://metamask.io/](https://metamask.io/)

???
Everyone's favorite browser extension wallet

ref: https://cryptospaceguides.com/step-by-step-guide-to-metamask/
ref: https://metamask.zendesk.com/hc/en-us/articles/360015489211-MetaMask-Basics
ref: https://metamask.zendesk.com/hc/en-us/articles/360015489531-Getting-Started-With-MetaMask-Part-1-
ref: https://metamask.zendesk.com/hc/en-us/articles/360015489391-Getting-Started-With-MetaMask-Part-2-
ref: https://metamask.zendesk.com/hc/en-us/articles/360015290092-How-To-Get-Logs-And-Help-MetaMask-Support-and-Diagnose-Your-Issue

todo: add a live metamask logo here, as from https://github.com/MetaMask/metamask-logo

---
# Hello, Metamask

MetaMask is an extension for accessing Ethereum enabled distributed applications, or "Dapps" in your normal browser!

The extension injects the Ethereum web3 API into every website's javascript context, so that dapps can read from the blockchain.

MetaMask also lets the user create and manage their own identities, so when a Dapp wants to perform a transaction and write to the blockchain, the user gets a secure interface to review the transaction, before approving or rejecting it.

Because it adds functionality to the normal browser context, MetaMask requires the permission to read and write to any webpage. You can always "view the source" of MetaMask the way you do any extension, or view the source code on Github:
https://github.com/MetaMask/metamask-plugin

---
# Installing Metamask

* From your browser's extension market
 * Chrome: https://chrome.google.com/webstore/category/extensions
 * Firefox: https://addons.mozilla.org/en-US/firefox/addon/ether-metamask/
* From a scratch build
 * Source from github: https://github.com/MetaMask
* Pre-installed in your browser
 * Brave: https://brave.com/

---
# Creating a new Metamask account

Your Metamask account is protected with a password, and is used to "unlock" Metamask so that it can be used.

Similar to password keeper programs, Password Safe, KeePass, etc.

---
class: center, middle
# Protect your seed phrase!

---
exclude: true
# Accessing different wallets

---
exclude: true
# Adding tokens

---
# Enabling Blockies icons

Addresses are not easily compared at a glance. Ethereum dapp browsers have converged on using a variant of the [Blockies]() code to generate an image from an address, allowing for an an easy additional visual check that two addresses match.

To switch from Metamask's default image to a Blockie style image, flip the toggle switch in your Metamask plugin settings tab.

For applications that use the same variant of Blockies, addresses should be rendered as the same image, making it more convenient to compare addresses across applications / screens. 

???
todo: add image

---
