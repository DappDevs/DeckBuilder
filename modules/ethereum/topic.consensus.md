class: center, middle, invert
# Consensus

???

# The Problem

The consensus problem requires agreement among a number of processes (or agents) for a single data value. Some of the processes (agents) may fail or be unreliable in other ways, so consensus protocols must be fault tolerant or resilient. The processes must somehow put forth their candidate values, communicate with one another, and agree on a single consensus value.

ref: https://en.wikipedia.org/wiki/Consensus_(computer_science)

---
# Data security: ACID

* Atomicity - Transactions are often composed of multiple statements. Atomicity guarantees that each transaction is treated as a single "unit", which either succeeds completely, or fails completely.
* Consistency - ensures that a transaction can only bring the database from one valid state to another, maintaining database invariants: any data written to the database must be valid according to all defined rules, including constraints, cascades, triggers, and any combination thereof.
* Transactions - are often executed concurrently (e.g., reading and writing to multiple tables at the same time). Isolation ensures that concurrent execution of transactions leaves the database in the same state that would have been obtained if the transactions were executed sequentially.
* Durability guarantees that once a transaction has been committed, it will remain committed even in the case of a system failure (e.g., power outage or crash) 

???

ref: https://en.wikipedia.org/wiki/ACID_(computer_science)

---
class:tallpic
# Centralized data stores

![DB replication](../media/database-replication.jpg)

---
# Database replication

Log based replication replays transactions recorded on the master node at each slave node.
Other forms may directly update the state of the db to match the master.

Eventual consistency means all databases will eventually reach agreement on the state of the data.

Slaves implicitly trust the master. Affect the master, affect all slaves.

---
# PAXOS

Paxos is a family of protocols for solving consensus in a network of unreliable processors (that is, processors that may fail). Consensus is the process of agreeing on one result among a group of participants. This problem becomes difficult when the participants or their communication medium may experience failures.

The Paxos protocol was first published in 1989 and named after a fictional legislative consensus system used on the Paxos island in Greece. It was later published as a journal article in 1998.

???
ref: https://en.wikipedia.org/wiki/Paxos_(computer_science)

---
# RAFT

Raft is a consensus algorithm designed as an alternative to Paxos. It was meant to be more understandable than Paxos by means of separation of logic, but it is also formally proven safe and offers some additional features. Raft offers a generic way to distribute a state machine across a cluster of computing systems, ensuring that each node in the cluster agrees upon the same series of state transitions.

Raft achieves consensus via an elected leader. A server in a raft cluster is either a leader or a follower, and can be a candidate in the precise case of an election (leader unavailable). The leader is responsible for log replication to the followers. It regularly informs the followers of its existence by sending a heartbeat message. Each follower has a timeout (typically between 150 and 300 ms) in which it expects the heartbeat from the leader. The timeout is reset on receiving the heartbeat. If no heartbeat is received the follower changes its status to candidate and starts a leader election.

???
ref: https://en.wikipedia.org/wiki/Raft_(computer_science)

---
# Eventual Consistency

Eventual consistency is a consistency model used in distributed computing to achieve high availability that informally guarantees that, if no new updates are made to a given data item, eventually all accesses to that item will return the last updated value. Eventual consistency, also called optimistic replication, is widely deployed in distributed systems, and has origins in early mobile computing projects. A system that has achieved eventual consistency is often said to have converged, or achieved replica convergence.

???
ref: https://en.wikipedia.org/wiki/Eventual_consistency

---
# BASE

* Basically Available
* Soft state
* Eventual consistency

---
# CAP Theorem

States that it is impossible for a distributed data store to simultaneously provide more than two out of the following three guarantees:

* Consistency: Every read receives the most recent write or an error
* Availability: Every request receives a (non-error) response – without the guarantee that it contains the most recent write
* Partition tolerance: The system continues to operate despite an arbitrary number of messages being dropped (or delayed) by the network between nodes

Database systems designed with traditional ACID guarantees in mind such as RDBMS choose consistency over availability, whereas systems designed around the BASE philosophy, common in the NoSQL movement for example, choose availability over consistency.

???
Formulated by Eric Brewer

"ACID and BASE represent two design philosophies at opposite ends of the consistency-availability spectrum. The ACID properties focus on consistency and are the traditional approach of databases. My colleagues and I created BASE in the late 1990s to capture the emerging design approaches for high availability and to make explicit both the choice and the spectrum."

ref: https://en.wikipedia.org/wiki/CAP_theorem
ref: https://en.wikipedia.org/wiki/Eric_Brewer_(scientist)
ref: https://www.infoq.com/articles/cap-twelve-years-later-how-the-rules-have-changed

---
# Decentralized networks

* Who to trust?
* Who to believe when a conflict arises?

---
exclude: true
# git repositories as decentralized databases

???
git repositories as decentralized databases

---
class: middle, center
# Byzantine failure

???
A process that experiences a Byzantine failure may send contradictory or conflicting data to other processes, or it may sleep and then resume activity after a lengthy delay. Of the two types of failures, Byzantine failures are far more disruptive. 
ref: https://en.wikipedia.org/wiki/Consensus_(computer_science)

ref: https://en.wikipedia.org/wiki/Byzantine_fault

---
# Byzantine Generals problem

<video width="100%" height="" controls>
  <source src="../media/byzantine-generals-problem.mp4" type="video/mp4">
This browser does not support the video tag.
</video>

???
ref: https://www.youtube.com/watch?v=_MwqAaVweJ8
ref: https://blockgeeks.com/guides/blockchain-consensus/
ref: https://en.wikipedia.org/wiki/Two_Generals%27_Problem

---
class: middle, center, invert
# How would you approach solving it?

---
# Distributed Consensus mechanisms

* Proof of Work (PoW)
* Proof of Stake (PoS)
* Delegated Proof of Stake (DPoS)

* Proof of Elapsed Time (PoET)
* Proof of Authority (PoA)
* Proof of Capacity
* Proof of Activity
* Proof of Burn
* Proof of Importance

???
ref: https://medium.com/the-daily-bit/9-types-of-consensus-mechanisms-that-you-didnt-know-about-49ec365179da

---
# Proof of Work

###Challenge-response
<p align=center>
    <img src="../media/Proof_of_Work_challenge_response.svg.png" width="70%">
</p>

###Solution-verification
<p align=center>
    <img src="../media/Proof_of_Work_solution_verification.svg.png" width="70%">
</p>

???
Proof-of-work is essentially one-CPU-one-vote.

The concept was invented by Cynthia Dwork and Moni Naor as presented in a 1993 journal article.

The term "Proof of Work" or POW was first coined and formalized in a 1999 paper by Markus Jakobsson and Ari Juels titled,
"Proofs of work and bread pudding protocols"  - http://www.hashcash.org/papers/bread-pudding.pdf

 A proof-of-work (PoW) system (or protocol, or function) is an economic measure to deter denial of service attacks and other service abuses such as spam on a network by requiring some work from the service requester, usually meaning processing time by a computer. The concept was invented by Cynthia Dwork and Moni Naor as presented in a 1993 journal article. The term "Proof of Work" or POW was first coined and formalized in a 1999 paper by Markus Jakobsson and Ari Juels. An early example of the proof-of-work system used to give value to a currency is the shell money of the Solomon Islands.

ref: https://en.wikipedia.org/wiki/Proof-of-work_system
ref: https://medium.com/@julianrmartinez43/understanding-proof-of-work-part-1-586d7ee6b014

---
# Longest chain

A principle for determining how to proceed with incomplete knowledge about the state of the network.

Relativity and technological constraints prevent us from doing instant communication across the globe, so two nodes can not be expected to pick the same chain as the active one. This is no problem: the mining mechanism makes sure that the chance two nodes disagree about blocks in the past decreases exponentially as they are older.

The active chain is one path from genesis block at the top to some leaf node at the bottom of the block tree. Every such path is a valid choice, but nodes are expected to pick the one with the most "work" in it they know about (where work is loosely defined as the sum of the difficulties).

The rules in practice are this: when a new block arrives, and it extends the previous active chain, we just append it to the active chain. If not, it depends on whether the branch it extends now has more work than the currently active branch. If not, we store the block and stop. If it does have more work, we do a so called "reorganisation": deactivating blocks from the old branch, and activating blocks from the new branch.

Ethereum determines the longest chain based on the total difficulty, which is embedded in the block header. Ties are broken randomly.

Total difficulty is the simple sum of block difficulty values without explicitly counting uncles. Difficulty is computed based on parent difficulty and timestamp, block timestamp, and block number, again without reference to uncles.

All of these except tiebreaking are consensus-critical, and so can be expected to be the same across all clients.

???
ref: https://bitcoin.stackexchange.com/questions/5540/what-does-the-term-longest-chain-mean
ref: https://ethereum.stackexchange.com/questions/13378/what-is-the-exact-longest-chain-rule-implemented-in-the-ethereum-homestead-p
---
# How PoW + Longest chain solves the Byzantine Generals problem 


1. The Generals agree the first plan received by all Generals will be accepted as the plan
2. A General solves the PoW problem, creating a block that is broadcast to the network so that all Generals receive it
3. Following receipt of this block, each General verifies and works on solving the next PoW problem, incorporating the prior solution into it, so that their plan adds on to the previous resolution
4. Each time a General solves a PoW problem, a block is generated and the chain begins to grow. In time, any General working on a different solution will switch over to the longest chain. This is the one most Generals are contributing to and therefore has the greatest chance of success
5. As the Generals know roughly how long a PoW solution takes to solve, after a set amount of time they will know if enough of the other Generals are also working on the same chain

???
PoW solves the Byzantine Generals Problem as it achieves a majority agreement without any central authority, in spite of the presence of unknown/potentially untrustworthy parties and despite the network not being instantaneous. It empowers the distributed and un-coordinated Generals to come to an agreement.

Through this process, the Generals can arrive at a consensus of when to attack, can estimate their chances of successfully doing so, and can prevent multiple different signals to attack being sent simultaneously.

PoW also prevents malicious actors, such as a traitorous General, from sabotaging the network by tampering with historic messages. Bitcoin, for example, stores the hash signature of the previous block in every new block. Any change to an earlier block would therefore require all successive blocks to also be changed. This would take an excessively large amount of computing power, and therefore the ledger is secure from alterations.

ref: https://www.radixdlt.com/post/what-is-proof-of-work

---
# Proof-of-Stake (PoS)

In PoS-based networks the creator of the next block is chosen via various combinations of random selection and wealth or age (i.e., the stake).

Proof of stake must have a way of defining the next valid block in any blockchain. Selection by account balance would result in (undesirable) centralization, as the single richest member would have a permanent advantage. Instead, several different methods of selection have been devised.

Unlike in proof-of-work systems, there is little cost to working on several chains.

???
ref: https://cryptoeconomics.study/overview.html#further-suggestions
ref: https://en.wikipedia.org/wiki/Proof-of-stake

---
# Delegated Proof-of-Stake (DPoS)

Various projects are using delegated proof-of-stake, or DPoS. The system uses a limited number of nodes to propose and validate blocks to the blockchain. This is meant to keep transaction processing fast, rather than using several hundred or several thousand nodes. EOS uses a limited number of block validators, 21, whose reputation may or may not drop, allowing back-up validators to replace former nodes.

---
# Proof-of-Authority (PoA)

Parity supports a PoA consensus engine to be used with Ethereum Virtual Machine (EVM) based chains. PoA is a replacement for PoW, which can be used for both public and private chain setups. There is no mining involved to secure the network with PoA, and relies on trusted ‘Validators’ to ensure that valid transactions are added to blocks, processed and executed by the EVM faithfully.

Because mining does not occur on our proposed public test net, malicious actors are prevented from acquiring testnet Ether, solving the spam attack that Ropsten is currently facing.

There is no difference in the way that contracts are executed compared to PoW chains, so developers can test their contracts and user interfaces before deploying to the mainnet in a more reliable and convenient environment.

More information about PoA can be found at: https://github.com/ethcore/parity/wiki/Proof-of-Authority-Chains

???
q: How are transactions validated in a PoA network?
q: How does PoA differ from PoW?

ref: https://github.com/ethcore/parity/wiki/Proof-of-Authority-Chains
ref: https://en.wikipedia.org/wiki/Proof-of-authority
ref: https://kovan-testnet.github.io/website/proposal/

---
exclude: true
# Proof of Autonomy (POA...)

ref: https://forum.poa.network/t/proof-of-autonomy/1743

---
exclude: true
# PoET - Proof of Elapsed Time

PoET uses new secure CPU instruction, which is more and more available in new processors like Intel builds. With these instructions, PoET ensures a safe and random selection of a so-called  “leader”. This can be compared with Bitcoin mining, in which the miners compete for a one-time access to write the blockchain. Other than Bitcoin’s proof algorithm, PoET doesn’t need specialized mining hardware.

To become a leader, every “validator” – which equals to a node or a miner – needs to use the secure CPU instruction to request a wait time. The validator with the shortest wait time will be elected as a leader. Like every good mining, algorithm PoET works like a lottery with the price to get write access to the blockchain.

??? 

Barf. Reliance on a proprietary protocol to pick a fair leader, and a clear mechanism for cheating by enabling a mechanism for a back door to operate by shortcutting and being picked leader. No thanks.

---
exclude: true
# GHOST

Greedy Heaviest Observed Subtree

ref: https://www.cryptocompare.com/coins/guides/what-is-the-ghost-protocol-for-ethereum/
ref: https://blog.ethereum.org/2015/08/01/introducing-casper-friendly-ghost/
ref: https://coincentral.com/what-is-casper-the-friendly-haunting-of-ethereum/

---
exclude: true
# Casper

"The Casper protocol is a PoS algorithm for Ethereum. A validator deposits a stake into a smart contract.  He then runs a node to participate in the consensus algorithm to propose new blocks to the chain.  This keeps the network running.  Casper the Friendly Finality Gadget (CFFG) finalizes the blocks to the chain. Validators receive rewards for behaving correctly, but the system slashes deposits of a validator acts badly."

"Casper provides accountability by detecting violations, knowing which validators violated the rules, and punishing those violators. It also provides a safe process for new validators to enter the system and existing validators to leave the system. Security defenses are integral to Casper."

"Casper exists as an independent module and lives on top of a proposal mechanism. For Ethereum, the current underlying proposal mechanism is PoW.  The first iteration of Casper will sit on top of Ethereum’s existing PoW consensus mechanism. This will make it a hybrid PoW/PoS system. The underlying PoW mechanism lends itself to upgrad to something else in the future. Some form of round-robin approach may replace the PoW component."

“Accountable safety” and “plausible liveness” define two fundamental properties of Casper.

???
ref: https://github.com/ethereum/research/blob/master/papers/casper-basics/casper_basics.pdf
ref: https://coincentral.com/what-is-casper-the-friendly-haunting-of-ethereum/

---
exclude: true
# Accountable Safety
Accountable safety prevents two conflicting checkpoints from being finalized unless at least 1/3 of validators violate the rules.

---
exclude: true
# Plausible liveness
Plausible liveness guarantees that it will always be possible to finalize a new checkpoint without any validator violating any rules if at least 2/3 of validators follow the protocol.

---
