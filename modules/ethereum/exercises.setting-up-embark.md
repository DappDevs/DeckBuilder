# Setting up a new project with Embark

???
ref: https://github.com/embark-framework/embark/tree/2.6.6
ref: https://ethereumdev.io/deploying-contract-embark-framework/

---
Creating a new project 

```shell
$ embark new <project name>
```

you can now
```shell
$ cd <project name>
```
---

save your contracts in the /contracts folder

```shell
$ embark simulator
```

In another terminal:
```shell
$ embark run
```
---
# Interacting via the console

An object is created for each contract with the contract's name. To examine the object, simply enter it in the console:
```shell
MDBAccount
```

```shell
MDBAccount.getNumberPosts().toNumber()

MDBAccount.getOwnerAddress
```

---
# Instantiate JS Contract objects for loaded contracts

ABI is stashed in .embark/constacts/CONTRACT-NAME.js

Edit `app/js/index.js`
```javascript
import EmbarkJS from 'Embark/EmbarkJS';

// import your contracts
import MDBAccount from 'Embark/contracts/MDBAccount';
```

---
# Create a new contract object for any contract

```javascript
var address = 0x037331;
var fs = require('fs');
var jsonFile = "dist/contracts/MY-CONTRACT-ABI.json";
var parsed= JSON.parse(fs.readFileSync(jsonFile));
var abi = parsed.abiDefinition;

var YourContract= new web3.eth.Contract(abi, address);
YourContract.methods; // See the contract method interfaces
let result = YourContract.methods.yourMethod().call() // call a method, returning a promise
result
```

This can be done in the console, but to have it done at launch, place it in `app/js/index.js`

---
# Compiling contracts to generate ABIs:

```shell
$ embark build --contracts
$ ls dist/contracts
```

Now ABIs are in `dist/contracts`
---

