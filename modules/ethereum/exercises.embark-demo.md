# Embark Demo DApp

???
ref: https://ethereumdev.io/getting-started-with-embark-framework/
ref: https://ethereumdev.io/deploying-contract-embark-framework/

---
# Install Embark

```shell
$ npm -g install embark
...

Have some ❤️ for Sinon? You can support the project via Open Collective:
 > https://opencollective.com/sinon/donate

+ embark@3.2.7
added 1379 packages from 1729 contributors in 41.53s

$ embark --version
3.2.7
```
---
# Install the demo

This will create a new directory in your cwd called ```embark_demo```

```shell
$ embark demo

Initializing Embark template...
Installing packages...
-------------------
Next steps:
-> cd embark_demo
-> embark run
For more info go to http://embark.status.im
Init complete

App ready at embark_demo
```
---
# Prepare network node for the demo

! Open another terminal from which to manage your network node. Then either
```shell
$ embark blockchain

# Alternatively, to use an ethereum rpc simulator simply run:

$ embark simulator
```

Extra: See network config file ```config/blockchain.js``` for additional tuning.

---
# Launch the demo
```shell
$ cd embark_demo
$ embark run
```
This will automatically deploy the contracts, update their JS bindings and deploy your DApp to a local server at http://localhost:8000

You should see a console start in this terminal and a browser window open to the web front-end @ http://localhost:8000

---
# Demo Web Interface

We see a simple 4 tabbed interface, each tab showing off some of the functionality of the Embark framework.

* Blockchain - interact with an Ethereum demo contract, SimpleStorage
* Decentralized Storage - interact with IPFS
* P2P Communication (Whisper) - interact with Whisper
* Naming (ENS) - interact with ENS

---
# Decentralized Storage

Ensure that you have an IPFS client running:

```shell
$ ipfs daemon
```

---
# IPFS CORS config

To allow for communication between the app running in your browser and the IPFS node, you need to explicitly allow them by adjusting your CORS (Cross-Origin Resource Sharing) settings:

```shell
$ ipfs config --json API.HTTPHeaders.Access-Control-Allow-Credentials '["true"]'
$ ipfs config --json API.HTTPHeaders.Access-Control-Allow-Methods '["PUT", "POST", "GET"]'
$ ipfs config --json API.HTTPHeaders.Access-Control-Allow-Headers '["Authorization"]'
$ ipfs config --json API.HTTPHeaders.Access-Control-Expose-Headers '["Location"]'

# This will overwrite any explicit rule you have... consider manually editing via `ipfs config --edit` instead
$ ipfs config --json API.HTTPHeaders.Access-Control-Allow-Origin '["*"]'
```

If you make changes while the ipfs daemon is running, you will need to stop and re-start it.

???

ref: https://stackoverflow.com/questions/43295770/how-to-run-ipfs-with-embark-framework-demo-program
ref: https://github.com/INFURA/tutorials/wiki/IPFS-and-CORS
---
