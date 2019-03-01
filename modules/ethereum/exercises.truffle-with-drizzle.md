# Truffle: Drizzle

![Drizzle logo](../media/logo-drizzle.svg)

Reactive Ethereum datastore for dapp UIs

ref: http://truffleframework.com/docs/drizzle/getting-started
ref: https://github.com/trufflesuite/drizzle

---
# What is drizzle?

Drizzle is a collection of front-end libraries that make writing dapp frontends easier and more predictable. The core of Drizzle is based on a Redux store, so you have access to the spectacular development tools around Redux. We take care of synchronizing your contract data, transaction data and more. Things stay fast because you declare what to keep in sync.

* Fully reactive contract data, including state, events and transactions.
* Declarative, so you're not wasting valuable cycles on uneeded data.
* Maintains access to underlying functionality. Web3 and your contract's methods are still there, untouched.

---
# drizzle-react

???
ref: https://github.com/trufflesuite/drizzle-react
---
# drizzle-react-components

???
ref: https://github.com/trufflesuite/drizzle-react-components
---
# Project Requirements

Drizzle uses web3 1.0 and web sockets, be sure your development environment can support these.

---
# Installing

```
$ npm install --save drizzle
```
---
# Usage

1. Import the provider.
```
import { Drizzle, generateStore } from 'drizzle'
```
--

2. Create an options object and pass in the desired contract artifacts for Drizzle to instantiate.
```javascript
// Import contracts
import SimpleStorage from './../build/contracts/SimpleStorage.json'
import TutorialToken from './../build/contracts/TutorialToken.json'

const options = {
  contracts: [
    SimpleStorage
  ]
}

const drizzleStore = generateStore(this.props.options)
const drizzle = new Drizzle(this.props.options, drizzleStore)
```
--

3. Get contract data.
```javascript
// Assuming we're observing the store for changes.
var state = drizzle.store.getState()

// If Drizzle is initialized (and therefore web3, accounts and contracts), continue.
if (state.drizzleStatus.initialized) {
 // Declare this call to be cached and synchronized. We'll receive the store key for recall.
 const dataKey = drizzle.contracts.SimpleStorage.methods.storedData.cacheCall()

 // Use the dataKey to display data from the store.
 return state.contracts.SimpleStorage.storedData[dataKey].value
}

// If Drizzle isn't initialized, display some loading indication.
return 'Loading...'
```
--

4. Send a contract transaction.
```javascript
// Assuming we're observing the store for changes.
var state = drizzle.store.getState()

// If Drizzle is initialized (and therefore web3, accounts and contracts), continue.
if (state.drizzleStatus.initialized) {
 // Declare this transaction to be observed. We'll receive the stackId for reference.
 const stackId = drizzle.contracts.SimpleStorage.methods.set.cacheSend(2, {from: '0x3f...'})

 // Use the dataKey to display the transaction status.
 if (state.transactionStack[stackId]) {
   const txHash = state.transactionStack[stackId]

   return state.transactions[txHash].status
 }
}

// If Drizzle isn't initialized, display some loading indication.
return 'Loading...'
```
---
# Confirming drizzle is initialized

We have to check that Drizzle is initialized before fetching data. A simple if statement such as below is fine for displaying a few pieces of data, but a better approach for larger dapps is to use a loading component. We've already built one for you in our drizzle-react-components library as well.

```javascript
if (state.drizzleStatus.initialized) { ... }
```

Alternately, you can skip using the store:
```javascript
drizzle.contracts.SimpleStorage.methods.storedData().call()

drizzle.contracts.SimpleStorage.methods.set(2).send({from: '0x3f...'})
```
---
# cacheCall()

Calling the cacheCall() function on a contract will execute the desired call and return a corresponding key so the data can be retrieved from the store. When a new block is received, Drizzle will refresh the store automatically if any transactions in the block touched our contract.

https://github.com/trufflesuite/drizzle#how-data-stays-fresh
---
# cacheSend()

Calling the cacheSend() function on a contract will send the desired transaction and return a corresponding transaction hash so the status can be retrieved from the store. The last argument can optionally be an options object with the typical from, gas and gasPrice keys. Drizzle will update the transaction's state in the store (pending, success, error) and store the transaction receipt.

---
# addContract() & ADD_CONTRACT

Dynamically add contracts:
```javascript
var contractConfig = {
  contractName: "0x066408929e8d5Ed161e9cAA1876b60e1fBB5DB75",
  web3Contract: new web3.eth.Contract(/* ... */)
}
events = ['Mint']

// Using an action
dispatch({type: 'ADD_CONTRACT', drizzle, contractConfig, events, web3})

// Or using the Drizzle context object
this.context.drizzle.addContract(contractConfig, events)
```

---
# Options

Here's the full list of options along with their default values.

```javascript
{
  contracts,
  events: {
    contractName: [
      eventName,
      {
        eventName,
        eventOptions
      }
    ]
  },
  polls: {
    accounts: interval,
    blocks: interval
  },
  syncAlways,
  web3: {
    fallback: {
      type
      url
    }
  }
}
```

???
ref: https://github.com/trufflesuite/drizzle#options

---
---
# state
```javascript
{
  accounts,
  contracts: {
    contractName: {
      initialized,
      synced,
      events,
      callerFunctionName: {
        argsHash: {
          args,
          value
        }
      }
    }
  },
  transactions: {
    txHash: {
      confirmations,
      error,
      receipt,
      status
    }
  },
  transactionStack,
  drizzleStatus: {
    initialized
  },
  web3: {
    status
  }
}
```
???
ref: https://github.com/trufflesuite/drizzle#drizzle-state

---
# How Data Stays Fresh

1. Once initialized, Drizzle instantiates web3 and our desired contracts, then observes the chain by subscribing to new block headers.
![Drizzle sync 1](../media/drizzle-sync1.png)
2. Drizzle keeps track of contract calls so it knows what to synchronize.
![Drizzle sync 2](../media/drizzle-sync2.png)
3. When a new block header comes in, Drizzle checks that the block isn't pending, then goes through the transactions looking to see if any of them touched our contracts.
![Drizzle sync 3](../media/drizzle-sync3.png)
4. If they did, we replay the calls already in the store to refresh any potentially altered data. If they didn't we continue with the store data.
![Drizzle sync 4](../media/drizzle-sync4.png)

---
