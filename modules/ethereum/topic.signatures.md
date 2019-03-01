# Digital signatures

A digital signature is a mathematical scheme for verifying the authenticity of digital messages or documents. A valid digital signature gives a recipient reason to believe that the message was created by a known sender (authentication), that the sender cannot deny having sent the message (non-repudiation), and that the message was not altered in transit (integrity).

https://en.wikipedia.org/wiki/Digital_signature

???
ref: https://en.wikipedia.org/wiki/Digital_signature

---
# Public-key cryptography

In his 1874 book The '''Principles of Science''', William Stanley Jevons wrote:

```quote
"Can the reader say what two numbers multiplied together will produce the number 8616460799? I think it unlikely that anyone but myself will ever know."
```

???
ref: https://en.wikipedia.org/wiki/Public-key_cryptography
---
# Diffie–Hellman key exchange 

The Diffie–Hellman key exchange method allows two parties that have no prior knowledge of each other to jointly establish a shared secret key over an insecure channel. This key can then be used to encrypt subsequent communications using a symmetric key cipher. 

![diagram](Diffie-Hellman_Key_Exchange.svg)

???
ref: https://en.wikipedia.org/wiki/Diffie%E2%80%93Hellman_key_exchange

---
# Electronic signatures

Digital signatures are often used to implement electronic signatures, a broader term that refers to any electronic data that carries the intent of a signature.

---
# Signatures in Ethereum

4 different signature standards supported by different clients (wallets):

* eth.sign, which signs the data as-is. Supported by Metamask with a deprecation warning.
* eth.personal.sign, originally implemented in Geth, which prepends “\x19Ethereum Signed Message:\n” prefix and a data bytes length in ASCII. Supported by Metamask, Mist and some other wallets such as Trust.
* “Fixed” eth.personal.sign, which prepends “\x19Ethereum Signed Message:\n” prefix and a data bytes length in HEX. Implemented in Trezor and Ledger (and possibly in other software/hardware wallets).
* SignTypedData, originally proposed in EIP712 by Leonid Logvinov of 0x. Supported by Metamask.

???
ref: https://hackernoon.com/you-dont-need-ether-to-transfer-tokens-f3ae373606e1

---
# EIP 191: Signed Data Standard

"This ERC proposes a specification about how to handle signed data in Etherum contracts."

Several multisignature wallet implementations have been created which accepts presigned transactions. A presigned transaction is a chunk of binary signed_data, along with signature (r, s and v). The interpretation of the signed_data has not been specified, leading to several problems:

Standard Ethereum transactions can be submitted as signed_data. An Ethereum transaction can be unpacked, into the following components: RLP\<nonce, gasPrice, startGas, to, value, data> (hereby called RLPdata), r, s and v. If there are no syntactical constraints on signed_data, this means that RLPdata can be used as a syntactically valid presigned transaction.

Multisignature wallets have also had the problem that a presigned transaction has not been tied to a particular validator, i.e a specific wallet. Example:
* Users A, B and C have the 2/3-wallet X
* Users A, B and D have the 2/3-wallet Y
* User A and B submites presigned transaction to X.
* Attacker can now reuse their presigned transactions to X, and submit to Y.

???
ref: https://github.com/ethereum/EIPs/issues/191

---
# eth_sign

Old Method, deprecated due to security issue

???
ref: https://medium.com/metamask/the-new-secure-way-to-sign-data-in-your-browser-6af9dd2a1527

---
# personal_sign

???

---
# SignedTypedData

EIP712
https://github.com/ethereum/EIPs/issues/712

???
ref: https://medium.com/metamask/scaling-web3-with-signtypeddata-91d6efc8b290

---
# ERC-712

---
# Signing Ethereum transactions 

```javascript
const Web3 = require('web3');

// connect to any peer; using infura here
const web3 = new Web3(new Web3.providers.HttpProvider("https://ropsten.infura.io/<TOKEN>"));

// contents of keystore file, can do a fs read
const keystore = "Contents of keystore file";
const decryptedAccount = web3.eth.accounts.decrypt(keystore, 'PASSWORD');
const rawTransaction = {
  "from": "Keystore account id",
  "to": "Account you want to transfer to",
  "value": web3.utils.toHex(web3.utils.toWei("0.001", "ether")),
  "gas": 2000,
  "chainId": 3
};

decryptedAccount.signTransaction(rawTransaction)
  .then(signedTx => web3.eth.sendSignedTransaction(signedTx.rawTransaction))
  .then(receipt => console.log("Transaction receipt: ", receipt))
  .catch(err => console.error(err));

// Or sign using private key from decrypted keystore file

/*
web3.eth.accounts.signTransaction(rawTransaction, decryptedAccount.privateKey)
  .then(console.log);
*/

```
ref: https://medium.com/coinmonks/signing-and-making-transactions-on-ethereum-using-web3-js-1b5663207d63
---
# Signing Ethereum transactions offline

???
ref: https://medium.com/coinmonks/sign-an-ethereum-transaction-off-line-d3e38fbda677
---
# The danger of signing a transaction

You are certifying that the transaction is valid, even if it isn't submitted immediately.

---
# Keystore files

???
ref: https://github.com/ethereum/go-ethereum/wiki/Managing-your-accounts

---
