# Purescript Web3

An implementation of Web3 for purescript

???
ref: https://github.com/f-o-a-m/purescript-web3
ref: https://blog.foam.space/purescript-web3-release-631b16bec7a

---
# Advantages

* If you have a solidity function accepting a ```bytes[2][4]``` type, and your code is trying to give it a ```bytes[2][]```, you will receive a compile time error, meaning less chance for a run time exception, a failed transaction, or worse, an unintentional loss of ether.

* Our units of ether are typed, meaning that if you are trying to submit a transaction with a value of ```7 Babbage``` or whatever the case, there is no need to risk manually converting it to the appropriate value in wei.

* There is a compile time guarantee that you cannot send any value for a non-payable function.

???

ref: https://blog.foam.space/purescript-web3-release-631b16bec7a

---
