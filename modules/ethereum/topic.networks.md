name: NETWORKS-1-START
# Networks

![Networks](../media/networks.png)

???

---
# Where's the blockchain?

* Blockchains are processed on network clients
* State differs across clients
* Consensus mechanisms provide eventual consistency 
* Clients on a network all work on the same transaction set

---
# Ethereum Networks

* Main - the "real" / "production" network
* Morden - old test network
* Ropsten - 
* Rinkeby - Test network for the geth client
* Kovan - Test network for the parity client
* Guerli - Rinkeby + Kovan

???
ref: https://kovan-testnet.github.io/website/

---
# Rinkeby

https://www.rinkeby.io/#stats

???
ref: https://www.rinkeby.io/
---
# Kovan

Kovan is a Proof of Authority (PoA) publicly accessible blockchain for Ethereum; created and maintained by a consortium of Ethereum developers, to aide the Ethereum developer community.

https://kovan-testnet.github.io/website/

???
ref: https://kovan-testnet.github.io/website/
q: What is Kovan?
q: What consensus mechanism does Kovan use?

---
# Why consensus mechanisms matter

On 24th Feb 2017, Ropsten was under a denial-of-service attack (“spam attack”). Average block propagation time has since slowed to a crawl as a large miner has decided to deploy several zero-value high-gas transactions to spam the test network continually. The attacker’s intentions are unknown, but the result is that Ethereum developers who rely on Ropsten no longer have a stable public testing environment to deploy and test their smart contract code prior to deploying to production on the mainnet chain.

The use of Proof-of-Work (PoW) for testnets presents a fundamental game theoretical problem: the only significant economic incentive to mine on testnets using dedicated GPU resources is to launch an attack and reduce stability and the viability of the testnet (and thus hamper development for the mainnet chain).

https://kovan-testnet.github.io/website/proposal/

???
ref: https://kovan-testnet.github.io/website/proposal/

---
# Proof-of-Authority (PoA)

Parity supports a PoA consensus engine to be used with Ethereum Virtual Machine (EVM) based chains. PoA is a replacement for PoW, which can be used for both public and private chain setups. There is no mining involved to secure the network with PoA, and relies on trusted ‘Validators’ to ensure that valid transactions are added to blocks, processed and executed by the EVM faithfully.

Because mining does not occur on our proposed public test net, malicious actors are prevented from acquiring testnet Ether, solving the spam attack that Ropsten is currently facing.

There is no difference in the way that contracts are executed compared to PoW chains, so developers can test their contracts and user interfaces before deploying to the mainnet in a more reliable and convenient environment.

More information about PoA can be found at: https://github.com/ethcore/parity/wiki/Proof-of-Authority-Chains

???
ref: https://kovan-testnet.github.io/website/proposal/
q: How are transactions validated in a PoA network?
q: How does PoA differ from PoW?

---
# Faucets

A secure “Faucet” service allows for verified (non-malicious) developers to acquire testnet Ether. It is important that the distribution of testnet Ether is available but is also rate-limited, so as to be not available in large amounts to non-trusted parties (to prevent spam attacks).

???
q: What use is a faucet to a PoA network?

---
# Which network are we on?

Javascript using web3:

```javascript
web3.version.getNetwork((err, netId) => {
  switch (netId) {
    case "1":
      console.log('This is mainnet')
      break
    case "2":
      console.log('This is the deprecated Morden test network.')
      break
    case "3":
      console.log('This is the ropsten test network.')
      break
    case "4":
      console.log('This is the Rinkeby test network.')
      break
    case "42":
      console.log('This is the Kovan test network.')
      break
    default:
      console.log('This is an unknown network.')
  }
})
```

---
