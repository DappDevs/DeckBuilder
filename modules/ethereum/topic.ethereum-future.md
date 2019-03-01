# Ethereum 2.0 - Serenity
<p align=center>
    <img src="../media/ethereum-2.png" style="width:100%">
</p>

???
ref: https://media.consensys.net/state-of-ethereum-protocol-1-d3211dd0f6
ref: https://our.status.im/tag/two-point-oh/

---
# Serenity

---
# Economics in Serenity

* Change from Proof of Work (PoW) to Proof of Stake (PoS)

* Validator - a participant in the Casper/sharding consensus system. You can become one by depositing 32 ETH into the Casper mechanism.
* Committee - a (pseudo-) randomly sampled subset of active validators. When a committee is referred to collectively, as in "this committee attests to X", this is assumed to mean "some subset of that committee that contains enough validators that the protocol recognizes it as representing the committee".
* Issuance Rate - The annualized rate at which ETH supply grows.
* Interest - The annualized rate at which validators are rewarded (in ETH).

???
ref: https://github.com/ethhub-io/ethhub/blob/master/ethereum-101/monetary-policy/eth-2.0-economics.md

---
# Switching to POS: the difficulty "bomb"

Because delaying the difficulty bomb also impacts ether inflation (the time it takes to mine blocks is directly correlated to the quantity of ether distributed on the platform), ethereum is under pressure to upgrade its code before the bomb hits.

???

ref: https://www.reddit.com/r/ethereum/comments/a1ixov/ive_seen_so_much_misinformation_regarding_the/
ref: https://docs.google.com/presentation/d/e/2PACX-1vSNUc9zSj5x1zVJJNsJNlXedZkP-DLDLvcoaCB7zHwoWz8ApjFLsXJvEB6B7wRpysYJFsyT-1YJgduE/pub?start=false&loop=false#slide=id.g442e52dd04_0_13

---
# Validators

???
ref: https://our.status.im/two-point-oh-explaining-validators/

---
# Beacon Chain

???
ref: https://our.status.im/two-point-oh-the-beacon-chain/

---
# Liveness guarantee

???
ref: https://ethresear.ch/t/explaining-the-liveness-guarantee/4228

---
# Nimbus

A new type of node for the Ethereum network.

Given that Ethereum 2.0 must remain compatible with 1.0, the functionality for 2.0 will include everything 1.0 can do. This means that Nimbus will be an alternative to Geth and Parity as a full Ethereum node, but will also include features that can make it run as a light node - a node that doesn't need to download the full blockchain - or even a stateless node - a node that doesn't need to download state at all to be able to verify it.

???
ref: https://our.status.im/nimbus-for-newbies/

---
