# Getting started with Ganache

???
ref: https://medium.com/@adamh90/creating-a-local-test-environment-for-ethereum-smart-contracts-1f638efca020
ref: https://truffleframework.com/docs/truffle/reference/configuration
---
# Quick intro: using ganache as a local network with remix

Run ganache-cli
Open Browser, metamask
Import accounts using seed phrase from ganache window
Select network “Localhost 8545”
Set remix env to “injected web3”
Deploy contract

Command overview
ganache

ganache-cli
Usage: ganache-cli 

```
rj@Orko ~ : ganache-cli
Ganache CLI v6.1.6 (ganache-core: 2.1.5)

Available Accounts
==================
(0) 0x0fafcff23dacd4e828c5af786b19ef1df8a532b5 (~100 ETH)
(1) 0x549052023f164e525c35fe3b66bbfc7cf7bc658e (~100 ETH)
(2) 0xbc5b2a67efa90a22406b2dd1f79e3b3e2e21ca2b (~100 ETH)
(3) 0x0734e5fb9f9a3f0f2f37be69d886e67ab9f4f38b (~100 ETH)
(4) 0xaad05544cce681d7a469e2814b5c59c27784df74 (~100 ETH)
(5) 0x67c19084fc917a85749a994fb5894aa1cb6efd66 (~100 ETH)
(6) 0x9fb4a0a3f6e5b9647597dbe987512771c8c00bb0 (~100 ETH)
(7) 0x87961cb22481d2ab338ca697bbcd8eee39b64275 (~100 ETH)
(8) 0xdd0c3e528d78af276d217e887dbb0f8aa84c9444 (~100 ETH)
(9) 0xa7ff1b32a1d844b7a7879f41c63d5ae812b036e1 (~100 ETH)

Private Keys
==================
(0) 0xe99ee6d9ee23f902a6fedaf3467832f1b8d15047dfca1ad2f3b28e49427859e8
(1) 0x636fbe9b4245c3ce580c232ee086e7d2ac415cc77ec68373f2af786ddca72b62
(2) 0x44dff99da453044924a90f2d93d9bf3b1a21f67534096633c815cf32069c6b80
(3) 0xedbd81381e0efbc08e5b63ed3ffdb3ae0a84ea0e89df3c6ce688346751c40af5
(4) 0x9f1e76ef5b6d338721b1f20457b07f9733803050f447a163060b04d79f7834dd
(5) 0x1ef49c0c384fab7bda28da204a4b9233231c7ca955820021afda5048f80674b2
(6) 0x083eeeb72ce83af46db1d9cc16a8fea3142071a5c0d6ea872602acfa6eae6efe
(7) 0xc670459c57cb16b284ac8e61ba6375c87956f161ce9943d77b1c474d7ae42d70
(8) 0xcd5e797dac9570b49afe522c9fa9b69e09763ed717d29246659feb49ff49613c
(9) 0x8eae7ab1e92129d80e30204230b5e3f15908777bd21539cff2f087eba3c6f57a

HD Wallet
==================
Mnemonic:      tank grass remove brave silent antenna tower latin gain rigid bright drastic
Base HD Path:  m/44'/60'/0'/0/{account_index}

Gas Price
==================
20000000000

Gas Limit
==================
6721975

Listening on 127.0.0.1:8545
```
---
