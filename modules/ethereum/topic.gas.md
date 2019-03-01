# Gas

???
ref: https://ethgasstation.info/
ref: https://blog.ethereum.org/2016/10/31/uncle-rate-transaction-fee-analysis/
ref: https://media.consensys.net/ethereum-gas-fuel-and-fees-3333e17fe1dc
ref: https://docs.google.com/spreadsheets/d/1m89CVujrQe5LAFJ8-YAUCcNK950dUzMQPMJBxRtGCqs/edit#gid=0
ref: https://github.com/ethereum/cpp-ethereum/blob/poc9trie/feeStructure.json
ref: https://hudsonjameson.com/2017-06-27-accounts-transactions-gas-ethereum/

---
# What is gas?

Gas is the metering unit for use of the network's computing power.
Electricity is metered in kilowatt hours, computation and storage on Ethereum is measured in gas units. Each operation in the EVM consumes gas.

---
# StartGas vs gasLimit vs gas

The user-specified, maximum amount of fuel that a transaction will consume.

* *startGas* is the term in the Ethereum White Paper
* *gasLimit* is the term in the Ethereum Yellow Paper,
* *gas* is the term much software (e.g. Geth and web3.js) uses

???
ref: https://github.com/ConsenSys/ethereum-developer-tools-list/blob/master/EcosystemResources.md
TODO: could explain like an airplane - enough gas to reach the destination, not more than necessary to make the trip because of lost value

---
# Gas cost in Ether

Gas cost is in units of gwei, typically 1-50

1 gwei  = 0.000,000,001 ether
1 ether = 1,000,000,000 gwei

???
ref: https://www.myetherwallet.com/helpers.html

---
# The cost of sending Ether depends on the recipient

Sending ETH to a user (external account) has a fee of 21000 gas

Sending ETH to a contract (internal account) has a higher fee, which depends on the contract code and data being sent in the transaction.

---
class: bigpic
# Fuel & fee over a transaction

![Fuel / Fee chart](eth-gas-steps-fuel-fee.png)

---
# Why should I pay a gas price?

The price of gas that a user offers should generally reflect how fast they want a transaction mined. Most users also want to avoid offering a price this is so low that it will never be mined (or require them to resend the transaction at a higher price). While offering a high gas price can speed up confirmation some, there is a limit to the acceleration. Offering a higher gas price than what is needed for acceptance by all top miners is unlikely to speed up the transaction time further under nomral circumstances.

???
ref: https://ethgasstation.info/FAQpage.php

---
# Adjusting gas

* To compete against other transactions, receiving higher priority in mining

Many people use the default gas price from their wallet when they make a transaction, and this is generally OK. However, sometimes it makes sense to pay more if you want the transaction mined quickly or you may want to save some money and offer a cheap gas price, especially if you don't care how quickly it is mined. In these cases, its hard to know what gas price to use unless you are monitoring the network

???
ref: https://ethgasstation.info/gasrecs.php

---
class: bigpic
# Gas fee payoff chart

![Gas fees](../media/eth-gas-results.png)
???
ref: https://media.consensys.net/ethereum-gas-fuel-and-fees-3333e17fe1dc

Note from Bryant

---
# Cost comparison

What is the range of least to most useful amounts to pay for gas?

| | @ 1 gwei / gas| @ 50 gwei / gas|
|---|---|
| % of last 200 blocks accepting this gas price | 18.7817258883 | 100 |
| Transactions At or Above in Current Txpool | 498 | 2 |
| Mean Time to Confirm (Blocks) | 484.2 | 2 |
| Mean Time to Confirm (Seconds) | 7596 | 31 |
| Transaction fee (ETH) | 0.000021 | 0.00105 |
| Transaction fee (Fiat) | $0.00256 | $0.1281 |

---
# Gas cost by OPCODE

| Code | OPCODE | Gas cost |
|---|---|---|
| 0x00 | STOP | 0
| 0x01 | ADD | 3
| 0x02 | MUL | 5
| 0x03 | SUB | 3
| 0x04 | DIV | 5
| 0x06 | MOD | 5
| 0x10 | LT | 3
| 0x11 | GT | 3
| 0x14 | EQ | 3
| 0x15 | ISZERO | 3
| 0x16 | AND | 3
| 0x17 | OR | 3
| 0x18 | XOR | 3
| 0x19 | NOT | 3

???
ref: https://ethereum.stackexchange.com/questions/11474/is-there-a-table-of-evm-instructions-and-their-gas-costs
TODO: add example solidity code mapping to OPCODES

---
class: splash
# Estimating gas

---
# Gas price calculators and tools

* [EthGasStation](https://ethgasstation.info/) - Website for estimating tx prices vs times
* [Petrometer](https://github.com/makerdao/petrometer) - Summarises daily and total gas consumption of all transactions sent from a specified Ethereum address
* [CryptoProf](https://github.com/doc-ai/cryptoprof) - Gas profiler for smart contracts

???
ref: https://github.com/ConsenSys/ethereum-developer-tools-list/blob/master/EcosystemResources.md

---
# Block gas limit (BGL)

So how many transactions can fit in a block? The answer is until the sum from each startGas reaches the block gas limit (BGL). The BGL is currently 4,712,388 (digits of 1.5π), meaning around 224 transactions that each have a startGas of 21000 can fit in 1 block (which is produced every 15 seconds on average). To prevent Bitcoin-like divisiveness over whether blocks should become larger, the Ethereum protocol allows the miner of a block to adjust the BGL by a factor of 1/1024 (0.0976%) in either direction. Separate from the protocol is a default mining strategy of a minimum BGL of 4,712,388.

???
ref: https://github.com/ConsenSys/ethereum-developer-tools-list/blob/master/EcosystemResources.md

---
# Reducing gas fees

There are processes for reducing gas fees, primarily in optimizing contract code to use the least number of instructions necessary.

???
ref: https://medium.com/@STKtoken/research-of-the-week-reducing-gas-fees-9061d19cc171

---
# Pay to play: Gas pricing from a miner's perspective

![Uncles](../media/eth-uncle.png)

One important fact is that the more transactions a block contains (or the more gas a block uses), the longer it will take to propagate through the network.

In all blockchains of the Satoshian proof-of-work variety, any block that is published has the risk of howbecoming a “stale”, ie. not being part of the main chain, because another miner published a competing block before the recently published block reached them, leading to a situation where there is a “race” between two blocks and so one of the two will necessarily be left behind.

Stale blocks in Ethereum can be re-included into the chain as “uncles”, where they receive up to 75% of their original block reward. This mechanic was originally introduced to reduce centralization pressures, by reducing the advantage that well-connected miners have over poorly connected miners

Miners in theory should specify a gas price that reflects their cost of inclusion of the transaction in the block (which currently is related to their uncle rate). Miners can increase their efficiency (through uncle inclusion mechanisms) so that they can bring down these costs, but there may be little incentive to do so unless users offer a meaningful number of transactions at low gas prices. Furthermore, while miners may believe that accepting only those transactions with high gas prices will help their profitability, adverse effects on network usability may ultimately lead to lower profits if it translates into a lower value of their block reward.

???
ref: https://ethgasstation.info/FAQpage.php
ref: https://blog.ethereum.org/2016/10/31/uncle-rate-transaction-fee-analysis/

---
# Metering vs. Fee

* In Bitcoin, metering is done with bytes: the number of bytes in the transaction (storage)
* In Ethereum, metering is done with gas: a dynamic calculation (storage + instructions)
 * a small amount of code could still be a program that exhausts a large number of resources (calculations)

Charging a gas fee requires metering, but having a meter for transaction cost doesn't mandate charging a fee.

Whose problem is the cost of transacting? On a private chain, you can decide to do away with the gas fee

???
ref: https://media.consensys.net/ethereum-gas-fuel-and-fees-3333e17fe1dc

---
