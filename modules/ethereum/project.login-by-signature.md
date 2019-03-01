# Login by signature

ref: https://medium.com/metamask/the-new-secure-way-to-sign-data-in-your-browser-6af9dd2a1527
ref: https://github.com/danfinlay/js-eth-personal-sign-examples
ref: https://github.com/MetaMask/eth-sig-util

---
# Sample

```javascript
window.voteForCandidate = function(candidate) {
  let candidateName = $("#candidate").val();

  let msgParams = [
    {
      type: 'string',      // Any valid solidity type
      name: 'Message',     // Any string label you want
      value: 'Vote for ' + candidateName  // The value to sign
    }
  ]

  var from = web3.eth.accounts[0]

  var params = [msgParams, from]
  var method = 'eth_signTypedData'

  console.log("Hash is ");
  console.log(sigUtil.typedSignatureHash(msgParams));
  
  // Invoke the eth_signTypedData function and pass in the message and account address.
  web3.currentProvider.sendAsync({
    method,
    params,
    from,
  }, function (err, result) {
    if (err) return console.dir(err)
    if (result.error) {
      alert(result.error.message)
    }
    if (result.error) return console.error(result)
    $("#msg").html("User intends to vote for " + candidateName + ". Any one can now submit the vote to the blockchain on behalf of this user. Copy the values");
    $("#vote-for").html("Candidate: " + candidateName);
    $("#addr").html("Address: " + from);
    $("#signature").html("Signature: " + result.result);
    console.log('PERSONAL SIGNED:' + JSON.stringify(result.result))
  })
}
```

???
ref: https://medium.com/zastrin/how-to-save-your-ethereum-dapp-users-from-paying-gas-for-transactions-abd72f15e14d

---
# Reducing lookup cost

Pre-hash all the messages beforehand and pass it in the constructor so it is easy to lookup when verifying.

???
ref: https://medium.com/zastrin/how-to-save-your-ethereum-dapp-users-from-paying-gas-for-transactions-abd72f15e14d

---
# Verifying in Solidity

```solidity
pragma solidity ^0.4.4;

contract SignTypedData {
	function doHash(string message) constant returns (bytes32) {
	  return keccak256(
	    keccak256('string message'),
	    keccak256(message)
    );
	}

	function checkSignature(string message, bytes32 r, bytes32 s, uint8 v) constant returns (address) {
	  var hash = doHash(message);
    return ecrecover(hash, v, r, s);
	}
}
```

ref: https://github.com/ukstv/sign-typed-data-test/blob/master/contracts/SignTypedData.sol#L11
