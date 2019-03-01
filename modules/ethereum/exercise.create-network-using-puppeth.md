# Using puppeth to create a custom network

```shell
$ which puppeth
/usr/local/bin/puppeth

$ puppeth
+-----------------------------------------------------------+
| Welcome to puppeth, your Ethereum private network manager |
|                                                           |
| This tool lets you create a new Ethereum network down to  |
| the genesis block, bootnodes, miners and ethstats servers |
| without the hassle that it would normally entail.         |
|                                                           |
| Puppeth uses SSH to dial in to remote servers, and builds |
| its network components out of Docker containers using the |
| docker-compose toolset.                                   |
+-----------------------------------------------------------+

Please specify a network name to administer (no spaces or hyphens, please)
```

Enter the network name, and you'll see some options:

```shell
What would you like to do? (default = stats)
 1. Show network stats
 2. Configure new genesis
 3. Track new remote server
 4. Deploy network components
```

For now we'll skip to 2, which will ask us to choose the consensus engine (proof type)
```shell
Which consensus engine to use? (default = clique)
 1. Ethash - proof-of-work
 2. Clique - proof-of-authority
```

Selecting 1, we see:

```shell
Which accounts should be pre-funded? (advisable at least one)
> 0x
```

Your private key is not network specific, so you can use it across networks.
Use a dedicated testing account here (and in all testing), not an account that has any value on the mainnet, to avoid any potential confusion about whether you are performing an action with real world consequences!

```shell
Specify your chain/network ID if you want an explicit one (default = random)
```

1 is the mainnet, others are also already configured, so use random unless you know you aren't conflicting with an existing number.

```shell
INFO [11-07|16:36:55.915] Configured new genesis block
```

Done! Now, to use:

```shell
$ geth --
```

```shell
4. Deploy network components
> 4

What would you like to deploy? (recommended order)
 1. Ethstats  - Network monitoring tool
 2. Bootnode  - Entry point of the network
 3. Sealer    - Full node minting new blocks
 4. Explorer  - Chain analysis webservice (ethash only)
 5. Wallet    - Browser wallet for quick sends
 6. Faucet    - Crypto faucet to give away funds
 7. Dashboard - Website listing above web-services
```
---
