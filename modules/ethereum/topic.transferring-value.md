# Transferring value in Solidity

Members of Addresses
For a quick reference of all members of address, see Members of Address Types.

balance and transfer
It is possible to query the balance of an address using the property balance and to send Ether (in units of wei) to a payable address using the transfer function:

address payable x = address(0x123);
address myAddress = address(this);
if (x.balance < 10 && myAddress.balance >= 10) x.transfer(10);
The transfer function fails if the balance of the current contract is not large enough or if the Ether transfer is rejected by the receiving account. The transfer function reverts on failure.

???
ref: https://solidity.readthedocs.io/en/v0.5.2/types.html?highlight=types
ref: https://solidity.readthedocs.io/en/develop/security-considerations.html#sending-and-receiving-ether

---
# Payable fallback function required

A contract without payable fallback function will be of type address, NOT type payable address.
???
ref: https://solidity.readthedocs.io/en/v0.5.2/types.html?highlight=types

---
# Address literals in Solidity 

As described in Address Literals, hex literals of the correct size that pass the checksum test are of address type. No other literals can be implicitly converted to the address type.

Explicit conversions from bytes20 or any integer type to address result in address payable.

???
ref: https://solidity.readthedocs.io/en/v0.5.2/types.html?highlight=types#address-literals

---
# Multiple methods

address.transfer()
* throws on failure
* forwards 2,300 gas stipend (not adjustable), safe against reentrancy
* should be used in most cases as it's the safest way to send ether

address.send()
* returns false on failure
* forwards 2,300 gas stipend (not adjustable), safe against reentrancy
* should be used in rare cases when you want to handle failure in the contract

address.call.value().gas()()
* returns false on failure
* forwards all available gas (adjustable), not safe against reentrancy
* should be used when you need to control how much gas to forward when sending ether or to call a function of another contract

transfer(), send() and call() functions are translated by the Solidity compiler into the CALL opcode.

???
ref: https://ethereum.stackexchange.com/questions/19341/address-send-vs-address-transfer-best-practice-usage

---
# Call gas

CALL has a multi-part gas cost:

* 700 base
* 9000 additional if the value is nonzero
* 25000 additional if the destination account does not yet exist (note: there is a difference between zero-balance and nonexistent!)

The child message of a nonzero-value CALL operation (NOT the top-level message arising from a transaction!) gains an additional 2300 gas on top of the gas supplied by the calling account; this stipend can be considered to be paid out of the 9000 mandatory additional fee for nonzero-value calls. This ensures that a call recipient will always have enough gas to log that it received funds.

???
ref: http://solidity.readthedocs.io/en/develop/security-considerations.html#sending-and-receiving-ether

---
# transfer vs send vs call.value().gas()()

* someAddress.send()and someAddress.transfer() are considered safe against reentrancy. While these methods still trigger code execution, the called contract is only given a stipend of 2,300 gas which is currently only enough to log an event.
* x.transfer(y) is equivalent to require(x.send(y)), it will automatically revert if the send fails.
* someAddress.call.value(y)() will send the provided ether and trigger code execution. The executed code is given all available gas for execution making this type of value transfer unsafe against reentrancy.

???
ref: https://ethereum.stackexchange.com/questions/19341/address-send-vs-address-transfer-best-practice-usage
ref: https://consensys.github.io/smart-contract-best-practices/recommendations/#be-aware-of-the-tradeoffs-between-send-transfer-and-callvalue

---
# call

call() can also be used to issue a low-level CALL opcode to make a message call to another contract:

if (!contractAddress.call(bytes4(keccak256("someFunc(bool, uint256)")), true, 3)) {
    revert;
}

The forwarded value and gas can be customized:

contractAddress.call.gas(5000)
    .value(1000)(bytes4(keccak256("someFunc(bool, uint256)")), true, 3);

This is equivalent to using a function call on a contract:

SomeContract(contractAddress).someFunc.gas(5000)
    .value(1000)(true, 3);

Beware of the right padding of the input data in call() https://github.com/ethereum/solidity/issues/2884

---
# Order of operations matters

```solidity

you = msg.sender;
tx_to = msg.value;

this.value -= value;
tx_to.transfer(value);

require(you == owner);

```

---
# The Checks-Effects-Interactions Pattern

Most functions will first perform some checks (who called the function, are the arguments in range, did they send enough Ether, does the person have tokens, etc.). These checks should be done first.

As the second step, if all checks passed, effects to the state variables of the current contract should be made. Interaction with other contracts should be the very last step in any function.

Early contracts delayed some effects and waited for external function calls to return in a non-error state. This is often a serious mistake because of the re-entrancy problem explained above.

Note that, also, calls to known contracts might in turn cause calls to unknown contracts, so it is probably better to just always apply this pattern.

???
ref: https://solidity.readthedocs.io/en/develop/security-considerations.html#sending-and-receiving-ether

---
# Best practices for secure transacting

* Take Warnings Seriously
* Restrict the Amount of Ether
* Keep it Small and Modular
* Use the Checks-Effects-Interactions Pattern
* Include a Fail-Safe Mode
* Ask for Peer Review

???
ref: https://solidity.readthedocs.io/en/develop/security-considerations.html#sending-and-receiving-ether
---
