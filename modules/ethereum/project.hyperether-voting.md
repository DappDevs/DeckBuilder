class: center, middle, invert
# Hyperether Voting

![HyperEther Voting](../media/hyperether.png)

Voting DApp using Web3, Solidity, Hyperledger Fabric and Chaincode EVM

https://github.com/IBM/vote-hyperledger-ethereum

???
ref: https://github.com/IBM/vote-hyperledger-ethereum/blob/master/ingredients.md

---
# Installation prep

Make sure to have the following prerequisite tools are installed on your machine: NPM, Node, Go, Docker. Their versions used for this code (respectively): v6.4.1, v10.10.0, v1.9.3 darwin/amd64, v18.06.1-ce.

```shell
$ npm -i | grep npm@
npm@6.4.1 /usr/local/lib/node_modules/npm

$ node -v
v11.0.0

$ go version
go version go1.11.1 darwin/amd64

$ docker --version
Docker version 18.06.1-ce, build e68fc7a
```

---
# Prepare your copy of the repo

```shell
$ git clone git@github.com:IBM/vote-hyperledger-ethereum.git hyperether-voting
$ cd hyperether-voting/
$ chmod +x *sh
```
---
# Installation

red.[Take into consideration that running ./start/sh will remove existing docker containers and images.]

# Run this script file
```shell
./start.sh
```
---
# Bootstrap process output

* Removing existing containers
* Cloning fabric-samples 'origin/release-1.3'
* Cloning web3-fabric-voting-dapp
* Installing Hyperledger Fabric binaries
* ...
* Starting Fab Proxy on port 5000
* DApp listening on port 3000!
---
# Troubleshooting start.sh

* No docker instances running
 * See DappDevs version or comment out initial block
* fatal: could not create work tree dir 'fabric-samples': Permission denied
 * Run script as sudo, or change permissions in ~/go/ 
* Failed loading private key [70a5c9d5626598b23926ed23bb0f8e842408e06dbc72ab73880a68749a1cc622]: [open /opt/gopath/src/github.com/hyperledger/fabric/peer/crypto/peerOrganizations/org1.example.com/users/Admin@org1.example.com/msp/keystore/70a5c9d5626598b23926ed23bb0f8e842408e06dbc72ab73880a68749a1cc622_sk: permission denied].
 * `export GOPATH="$HOME/go"` #? maybe 


```shell
[bccsp_sw] loadPrivateKey -> ERRO 001 Failed loading private key [ed59e98856ef7d5f1bd93bd2c59010c96ad145af56f5481fd34f708df9336f0a]: [open /opt/gopath/src/github.com/hyperledger/fabric/peer/crypto/peerOrganizations/org1.example.com/users/Admin@org1.example.com/msp/keystore/ed59e98856ef7d5f1bd93bd2c59010c96ad145af56f5481fd34f708df9336f0a_sk: permission denied].
2018-11-19 16:45:07.636 UTC [main] InitCmd -> ERRO 002 Cannot run peer because error when setting up MSP of type bccsp from directory /opt/gopath/src/github.com/hyperledger/fabric/peer/crypto/peerOrganizations/org1.example.com/users/Admin@org1.example.com/msp: KeyMaterial not found in SigningIdentityInfo
!!!!!!!!!!!!!!! Channel creation failed !!!!!!!!!!!!!!!!
========= ERROR !!! FAILED to execute End-2-End Scenario ===========
```

---
# Copy/paste the following sections in the same terminal (A):

```shell
export CORE_PEER_MSPCONFIGPATH=/opt/gopath/src/github.com/hyperledger/fabric/peer/crypto/peerOrganizations/org1.example.com/users/Admin@org1.example.com/msp
export CORE_PEER_ADDRESS=peer0.org1.example.com:7051
export CORE_PEER_LOCALMSPID="Org1MSP"
export CORE_PEER_TLS_ROOTCERT_FILE=/opt/gopath/src/github.com/hyperledger/fabric/peer/crypto/peerOrganizations/org1.example.com/peers/peer0.org1.example.com/tls/ca.crt
```
--
```shell
peer chaincode install -n evmcc -l golang -v 0 -p github.com/hyperledger/fabric-chaincode-evm/evmcc
peer chaincode instantiate -n evmcc -v 0 -C mychannel -c '{"Args":[]}' -o orderer.example.com:7050 --tls --cafile /opt/gopath/src/github.com/hyperledger/fabric/peer/crypto/ordererOrganizations/example.com/orderers/orderer.example.com/msp/tlscacerts/tlsca.example.com-cert.pem
```
--
# Run this script file in a NEW separate terminal (B)
```shell
./proxy.sh
```

# The fab3 proxy will be available at `localhost:5000`.

--
# In a separate terminal (C), go back to the project's folder and run the web app locally by doing:

1) npm install
2) npm start

--
# Open your browser at `localhost:3000` to view the app.

---

![HyperEther Voting Start screen](../media/hyperether-start.png)

---
# Digging in

# Components

# File structure

# Startup process

# Making modification


