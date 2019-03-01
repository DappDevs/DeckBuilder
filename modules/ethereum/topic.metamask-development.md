# Metamask & Development

---
exclude: true
# EIP1102: Opt-in account exposure

Account information now no longer automatically injected.

* Privacy mode on: user must opt-in
* Privacy mode off: legacy behavior, no opt-in

Provider now available via ```javascript window.ethereum```
Coordination with other dapp browsers to standardize this as the location for providers across apps.

```
    window.ethereum.enable(); // Note: async, use await / promise
```

???

ref: https://medium.com/metamask/https-medium-com-metamask-breaking-change-injecting-web3-7722797916a8
ref: https://github.com/MetaMask/metamask-extension/pull/4703#issuecomment-435892763
ref: https://github.com/ethereum/EIPs/blob/master/EIPS/eip-1102.md

---
exclude: true
# Modernized provider access

```javascript
window.addEventListener('load', async () => {
    // Modern dapp browsers...
    if (window.ethereum) {
        window.web3 = new Web3(ethereum);
        try {
            // Request account access if needed
            await ethereum.enable();
            // Acccounts now exposed
            web3.eth.sendTransaction({/* ... */});
        } catch (error) {
            // User denied account access...
        }
    }
    // Legacy dapp browsers...
    else if (window.web3) {
        window.web3 = new Web3(web3.currentProvider);
        // Acccounts always exposed
        web3.eth.sendTransaction({/* ... */});
    }
    // Non-dapp browsers...
    else {
        console.log('Non-Ethereum browser detected. You should consider trying MetaMask!');
    }
});
```
ref: https://medium.com/metamask/https-medium-com-metamask-breaking-change-injecting-web3-7722797916a8

---
exclude: true
# Turning privacy on / legacy mode off

---
exclude: true
# Try it:

In your browser console, type:
```javascript
window.ethereum.enable()
```

You'll see a Metamask pop-up from the site that looks like this:

TODO: add pic

Notice: Heads up! ethereum._metamask exposes methods that have not been standardized yet. This means that these methods may not be implemented in other dapp browsers and may be removed from MetaMask in the future.

---
exclude: true
# Interacting with metamask

ethereum._metamask.isEnabled() : boolean
ethereum._metamask.isUnlocked() : object
ethereum._metamask.isApproved() : object

---
exclude: true
# Developing against Metamask

See the developer's guide: https://github.com/MetaMask/faq/blob/master/DEVELOPERS.md

???
ref: https://github.com/MetaMask/faq/blob/master/DEVELOPERS.md

---

