exclude:true
class: module-header ethereum/lang.solidity
---
# Solidity

---
# Updates

Solidity is still under rapid development, and as such still sees breaking changes.

---
# 0.4.x -> 0.5.x breaking changes

* Change solidity pragma version to ^0.5.0.
* Add calldata storage keyword to external function complex parameters like arrays that lack an already defined storage location.
* Add memory storage keyword to public, private and internal complex parameters that don’t already have a defined parameter storage location.
* Rename constructor function definition from function ContractName to constructor.
* Add default function visibility of public to those functions which don’t have function visibility explicitly defined.
* Add function visibility of external to fallback functions and all functions of any interface.
* Convert constant function state mutability modifier to view.

See https://solidity.readthedocs.io/en/latest/050-breaking-changes.html for a complete list

???
ref: https://mudit.blog/tool-refactor-your-solidity-0-4-x-code-to-solidity-0-5-x-code/
ref: https://solidity.readthedocs.io/en/latest/050-breaking-changes.html

---
# Compatibility in 0.5.0

Contracts compiled with Solidity v0.5.0 can still interface with contracts and even libraries compiled with older versions without recompiling or redeploying them. Changing the interfaces to include data locations and visibility and mutability specifiers suffices. 

---

exclude:true
class: module-header ethereum/project.ethereum-token
---
class: center, middle, invert
# Project: Ethereum Token
[https://ethereum.org/token](https://ethereum.org/token)

???
As presented on the Ethereum.org website

This project shows you how to create a fungible token, as per the ERC20 spec.

https://theethereum.wiki/w/index.php/ERC20_Token_Standard#Approve_And_TransferFrom_Token_Balance

---
exclude:true
class: module-header ethereum/project.faucet
---

ref: https://github.com/rsksmart/faucet
---
exclude:true
class: module-header ethereum/project.simple-contracts
---
---
class: middle, center, invert
# Project: Eth Demos

[https://github.com/beyondlogical/eth-demos](https://github.com/beyondlogical/eth-demos)
???
TODO: copy this file and break out with each of: https://github.com/beyondlogical/eth-demos

---
# Overview

This repo is a set of introductory Solidity contracts. They are each a .sol file, and are intended to be worked on in this order:

* simple_value.sol - MVP of immutable data storage via smart contract
* simple_field.sol - a mutable data storage field
* simple_record.sol - an improved single record contract
* simple_db.sol - a contract that stores multiple records

---
# Code Repository

##  [https://github.com/beyondlogical/eth-demos](https://github.com/beyondlogical/eth-demos)

---
# Simple Value
## [https://github.com/beyondlogical/eth-demos/blob/master/simple_value.sol](https://github.com/beyondlogical/eth-demos/blob/master/simple_value.sol)

???
<p align=center>
    <img src="../media/simple-value-sol.png" style="width:100%">
</p>

---
# Simple Field
## [https://github.com/beyondlogical/eth-demos/blob/master/simple_field.sol](https://github.com/beyondlogical/eth-demos/blob/master/simple_field.sol)

???
<p align=center>
    <img src="../media/simple-field-sol.png" style="width:100%">
</p>

---
# Simple Record
## [https://github.com/beyondlogical/eth-demos/blob/master/simple_record.sol](https://github.com/beyondlogical/eth-demos/blob/master/simple_record.sol)

???
<p align=center>
    <img src="../media/simple-record-sol.png" style="width:100%">
</p>

---
# Simple DB
## [https://github.com/beyondlogical/eth-demos/blob/master/simple_db.sol](https://github.com/beyondlogical/eth-demos/blob/master/simple_record.sol)

???
<p align=center>
    <img src="../media/simple-db-sol.png" style="width:100%">
</p>

---

exclude:true
class: module-header ethereum/solidity.basics
---
name: SOLIDITY-1-START
class: center, magenta
background-image: url(https://i.ytimg.com/vi/ELWSKMcJfI8/maxresdefault.jpg)
exclude: true
<link rel="stylesheet" type="text/css" href="../resources/bryant.css">
# Introduction to Solidity

???
---
# Introduction to Solidity
<p align=center>
  <img src="../media/solidity_logo.svg" width="70%">
</p>

---

# Overview
Solidity is a contract-oriented, high-level language for implementing smart contracts. It was influenced by C++, Python and JavaScript and is designed to target the Ethereum Virtual Machine (EVM).

Solidity is statically typed, supports inheritance, libraries and complex user-defined types among other features.

???
ref: https://solidity.readthedocs.io/en/v0.4.25/

---
# Solidity

* JavaScript-like syntax, but...
    * Statically-typed
    * Object-oriented
    * Compiled
* Powerful, allows:
    * assembly
    * variable gas usage
    * inheritance
* Power ==> Vulnerability
    * gas attacks
    * re-entrancy
    * opaque logic
---
# History
![Solidity code](https://blockonomi-9fcd.kxcdn.com/wp-content/uploads/2018/01/solidity-code.jpg)
]
???

A little background on Solidity. It was developed to be the language of
choice for web application developers getting into decentralized application
development for the first time. It's syntax borrows heavily from JavaScript,
with major modifications to support an Object-oriented design approach.
It is statically typed, due to the needs of the EVM, as well as compiled.

Solidity programs are typically very high level in design,
but they compile quickly to low-level EVM bytecode, which is an interesting
matchup of concerns. It is also very powerful, giving the user control
over many low-level abilities such as assembly and gas usage.
This means that while it may be easy to design a Solidity smart contract for
a specific task, it is decidedly difficult to write a Smart Contract that
securely performs it's given task without having too many vulnerabilities
that can be exploited by hackers.

The vulnerability to attack is of prime concern to a dapp developer writing
smart contracts, because the liklihood of attack is extremely high.
A hacker's barrier to entry is as low as possible (anyone can join Ethereum),
and Smart Contract's typically hold valuable assets for long periods of time.
To cap it all off, you can't fix bugs! That's right, once a Smart Contract is
deployed to the Ethereum network, it is impossible to change by the design of
Ethereum. This means you have exactly one chance to get it right, sort of like
when SpaceX is launching a satellite into orbit.


---
# Smart Contracts

Smart contracts are...
* compiled bytecode for the EVM
* able to accept calls
* contains access rules and logic

Smart contract langauges:
* Solidity
* Vyper
* others...

Solidity is the most widely used
???
![solidity](https://i.ytimg.com/vi/nnVX6fQUu4o/maxresdefault.jpg)

First, what is a Smart Contract?

Well, a smart contract is basically a small computer program.
It is compiled into Bytecode and interpretted by the Ethereum VM
for use by the network of Ethereum users it is developed to target.

A smart contract is able to accept calls from Ethereum's users,
who provide external data in the form of arguments in order
to perform the logic specified within the smart contract
and modify the underlying state of the smart contract moving forward.

Smart contracts typically contain access restrictions in order to
ensure only the right parties, under the right conditions, are
able to modify this state. Otherwise, anyone could say whatever they
want and the smart contract wouldn't be useful.

There are a few smart contract languages in existance that target the EVM,
but Solidity is by far and away the most widely used





---
# Contracts in Solidity

.left-column.width-50[
Basic contract:
* State Variables
    * Can have visibility
    * `public` adds "getter"
* Methods
    * Must have visibility
    * Can return and/or take inputs

*Don't forget the pragma!*
]

.right-column.width-50[
```javascript
pragma solidity ^0.4.19; // won't compile without this

contract A {
  
  uint public stateVariable; // Stored in contract's state on-chain

  function someMethod(uint argA, bool argB) public {
    
    require(argA > 0); // Check incoming arguments
    
    if (argB) { // Logic statements
      
      stateVariable = argA; // Assignment of state variable
    
    } else {
      
      stateVariable -= 1; // Decrement state variable
    
    }
    
    assert(stateVariable > 0); // Post-execution checks
    // NOTE: If assert fails, transaction reverts stateVariable
  
  }

}
```
]
???

+++

Anyways, let's look at a Smart Contract and how we write one.
Here's a basic example. We have a smart contract, called `A`,
that contains one State Variable (here a `uint`, which is shorthand
for an unsigned, 256-bit integer, or `uint256`) and one method,
`someMethod` that takes 2 arguments, and modifies the state variable.

Looking into the method, we can break it down into 3 stages:
1. Pre-condition checks of the input arguments
2. State variable logic changes and external calls
3. Post-execution logical checks of state variables

Now, this isn't a required structure to your methods,
but it certainly helps to adopt this structure to make it easier
for *other* developers to review your code.

This is Lesson number 1: other people need to read your code, make it easy. 

Any error that occurs during execution of these stages fails the
transaction and reverts the state. That means no changes happen,
no assets are swapped, etc. This is actually preferred execution model,
it makes it easy to tell if a pending transaction will be successful or not.

P.S. you need that weird `pragma` thing at the top for Solidity to know what
compiler you're using. Here it says you need version 0.4.19 or greater

---

# Inheritance in Solidity

.left-column.width-50[
B inherits from A, this means:
* B has all of A's state variables
* B has all of A's methods
* B can mutate anything in A (but don't...)

This is a compiler convienence...

A never gets' deployed with B
]

.right-column.width-50[
```solidity
pragma solidity ^0.4.19;

import "A.sol"; // Imports contract A

contract B is A {
  
  // B now has `stateVariable`
  function anotherMethod() public {
    
    // Preferred way to access superclass variables
    // since it shows that it is inherited
    uint arg = super.stateVariable + 10;
    // p.s. this is how you do a local variable

    // Call superclass method
    super.someMethod(arg, true);
  
  }
}
```
]

???

+++

Solidity allows Inheritance as an abstraction mechanism.

For those that don't know, inheritance is a way to define some functionality
in one class (or contract here), and have another inherit all the parameters
and methods defined in that class in order to reduce the amount of code
in different classes.

Parameters in parent classes come along for free. This means you need to keep
track of all the paraemters in your parent classes and make sure you don't
overwrite that functionality in your subclass.

You can override the parent class's methods through the use of the `super`
keyword. You should use this mechanism for modifying your parent class's
parameters, as it is more obvious that trying to modify the underlying
classes parameters.

The biggest use of this paradigm is to import classes from outside your
current file, in order to reduce the amount of code present in any one file
in your codebase.

---

# Multiple inheritance

.left-column.width-50[
Solidity allows multiple inheritance

C3 linearization for inheritance tree

Multiple inheritance can make things complicated

If it's too complicated, it will not compile

Basically, don't make it too complicated
]

.right-column.width-50[
```javascript
pragma solidity ^0.4.19;

/* We can load specific contracts from files */
import A from "A.sol";
import B from "B.sol"; // Doesn't load contract A

contract C is A // C has all of A's stuff

contract D is B // D has all of B's stuff

// resolves according to C3 superclass linearization rules
contract E is A, B, C, D // E has all of A, B, C, and D's stuff
// that's a lot of stuff!

// `contract E is D, C, B, A` would fail to compile

// p.s. you can do multiple contracts in one .sol file
```
]

???

+++

You can do multiple inheritance with Solidity. This means you can define
multiple abstractions into different contract classes (in different files even)
and use those to build increasingly more complex programs.

Multiple inheritance is resolved through the common C3 linearization rules
that Python and other languages use to resolve class inheritance.
This means that your contracts may not compile unless the inheritance is
specified in a certain order, and it may occasionally not be possible for
you to define a correct order for it to work.

Another note, you *can* define multiple contracts in a single file.
Try not to go overboard with too many contracts in one file
(unless you're posting in Etherscan) as this can create visual clutter in
your codebase.

To import from a single contract from one of your files, you can use
the `import from` mechanism to only grab certain files and reduce the pollution
you may have from different imports.

---

## Constructors & Environment Variables
.left-column.width-66[

```solidity
contract hasConstructor {
  address owner;

  // Constructors must have the same name as the contract
  function hasConstructor() {
    // You can set initial state variables in the constructor
    // This gets run on contract deployment, and does not stay
    // in the deployed contract as an executable method
    owner = msg.sender; // The account that deploys this contract
  }
}
```

Commonly used Ethereum environment variables:
* `msg.sender` - caller of this method call
* `msg.value` - value of ether forwarded with this call
* `block.timestamp` - current timestamp (`now` is an alias)
    * Can be manipulated by miners to a certain degree
* `block.number` - current block number txn is in
* Many others, not listed due to subtle considerations
]

???

+++

Smart Contracts, by default, initialize all their state variables to whatever
their zero value is. You may not want this to be the case, so the most common
way to initialize these values is through the use of a constructor.

Constructors must have the same name as their contract.
It is called during the deployment event, and can do anything a normal method can do.
Commons used of the constructor is to set up access control restrictions,
such as ownership, or timing restructions, such as initializing a block timestamp or number.
It can also be used to set external contract variables such as token references.

If you notice in this example, we are using the `msg.sender` environment variable.
This is the sender of the message in the calling context of this smart contract.
This varibale is *not* the same as the originator of the transaction, only the
last account in the call chain that made the call here. Typically however, this is
what you want to track. There are other environment variables you may wish to use.

---

# Ethereum Addresses

.left-column.width-66[
```solidity
contract Charity {
  // Adding `public` to a state variable adds a "getter"
  address public beneficiary;
  uint public budget;

  function Charity(uint _budget) public payable {
    // `payable` means `require(msg.value > 0);`
    // This means you have to send value to create this smart cotnract
    beneficiary = msg.sender;
    budget = _budget;
  }

  function getFunds() public {
    // Common access restriction pattern
    require(msg.sender == beneficiary);
    // Send all funds in this contract to beneficiary
    beneficary.transfer(this.balance); // reverts if `transfer` fails
  }

  // The fallback function, called when eth is sent to contract
  function () payable {
    // at this point, `this.balance` increases by `msg.value`
    require(this.balance < budget); // `this` means this contract's address
  }
}
```
]

.right-column.width-33[
Addresses have special methods and parameters

* `<address>.balance (uint256)`
    * balance of the Address in Wei
* `<address>.transfer(uint256 amount)`
    * send given amount of Wei to Address, throws on failure
* Others... again not listed due to subtle considerations
]

???

Addresses (aka accounts) in Ethereum have some special properties available for use.
Addresses can stored an ether balance, can send and receive ether, as well as
send and receive calls (this is advanced).

The `transfer` method of an address specifies a recipient and an amount of wei to send.
If the contract doing the sending doesn't have enough wei available to complete the txn,
it will fail and revert from that point.

You may choose to let your smart contract accept ether `send`/`transfer` calls by specifying
a "fallback" function. This is a special function in solidity that executes if no other method
signature matches in the call. Typically the `payable` modifier is added ensuring that the
call is sending value, since the fallback function is only alotted a small amount of gas to
execute the function call, and that's usually just enough for a few simple checks for eth transfer.

If the fallback function is omitted from your contract (which is enouraged due to it's
subtle considerations), then any unmatched method call will fail.

One last thing to note, `this` is a special variable that refers to the contract itself.
This usually is used in the context of figuring out the contract's balance of ether.

---

# Types
.left-column.width-50[
Types in solidity:
* Addresses
    * Just talked about it
* Integers (signed/unsigned, numbers of bits)
    * uint256
    * int128
    * etc...
* Arrays
    * has a `<array>.length` member
* Structs
    * Like C structs
* Mappings
    * Hashtable / Python `dict`
* Strings
    * Basically an array of bytes
]

.right-column.width-50[
```solidity
address someone;

// Integers
uint aNumber;
uint256 sameAsAbove;
int256 signed256bitInteger;
uint128 thingA;
int128 thingB;
uint64 yesWeCanGoSmaller;
uint32 andSmaller;
uint16 andSmallerStill;
uint8 smallestInt;

uint[] arrayOfInts;
assert arrayOfInts.length == 0;
arrayOfInts.push(1); // length is now 1

struct MyStruct {
  uint number;
  address addr;
}

mapping (address => MyStruct) mapsAddressToStruct;

str thisIsAString;
```
]
---

# Modifiers
.left-column.width-50[
Built-in modifiers
* `payable` - expects payment (must have `msg.value` > 0)

* `view`(was `constant`) - no state changes (look, don't touch)
* `pure` - no state change, AND no state access (purely operational)

* `public` - any account can call this method
* `private` - only this contract can call this method

* `external` - contract cannot call method
* `internal` - method is copied directly into contract

Some of these end up in the ABI

(ABI tells front end what it can do)
]
.right-column.width-50[
Custom modifiers:
```solidity
contract Owned {
  address public owner;
  
  modifier onlyOwner() {
    require(msg.sender == owner);
    _; // This means "now do everything else"
  }
  
  function changeOwner(address _owner) onlyOwner() public {
    // `require(msg.sender == owner);` inserted here
    owner = _owner;
  }
}
```
Great way to confuse someone!
]
---
# State variable visibility
Functions can be specified as being external, public, internal or private, where the default is public. For state variables, external is not possible and the default is internal.

external:
    External functions are part of the contract interface, which means they can be called from other contracts and via transactions. An external function f cannot be called internally (i.e. f() does not work, but this.f() works). External functions are sometimes more efficient when they receive large arrays of data.
public:
    Public functions are part of the contract interface and can be either called internally or via messages. For public state variables, an automatic getter function (see below) is generated.
internal:
    Those functions and state variables can only be accessed internally (i.e. from within the current contract or contracts deriving from it), without using this.
private:
    Private functions and state variables are only visible for the contract they are defined in and not in derived contracts. 
???
ref: https://solidity.readthedocs.io/en/v0.4.21/contracts.html
---

# Returning and Events

.left-column.width-50[

Solidity methods can return values

```solidity
function myMethod() view public returns (uint) {
  return block.number;
}

// Multiple returns through tuples
function otherMethod() view public returns (uint, bool) {
  return block.number, block.number > 1000;
}

struct Friend {
  address friend;
  uint friendMeter;
}
Friend[] myFriends;

// Return structs
function getFriend(uint8 friendID)
    view public returns (Friend) {
  return myFriends[friendID];
}

```

*Note*: transactions don't return values in Web3, they return txn hash.
*Best Practice*: Only non-state changing functions should return

]

.right-column.width-50[

Events are special logs stored in the Ethereum blockchain

* Easy lookup in light clients
* Great for async state feedback
* Stored in ABI for Web3 use

```solidity
event MyEvent(
  address indexed topic1, 
  uint indexed topic2, 
  str otherData
);

function stateChangingMethod() public {
  someStateVariable %= block.number;
  
  // `emit` is new for v0.4.21,
  MyEvent(msg.sender, someStateVariable, 'we did this!');
  
  // `emit` is new for v0.4.21, suggest using it
  emit MyEvent(...);
}

```
Note: State-changing transactions are async,
use events to feedback state to UI.

]
---

# Interfaces & External calls

.left-column.width-50[
```solidity
interface myInterface {
  function myMethod() public returns (uint);
}
```

Interfaces are like header files in C,
basically unimplemented methods.

Interfaes are useful to help separate concerns between different files,
as well as for interoperability and external calls.

Fun fact: ERC20 is just an interface!
]

.right-column.width-50[
```solidity
contract A {
  myInterface public externAddr;

  function A(address _externAddr) public {
    // The given address should have the
    // specified interface for calling
    externAddr = myInterface(_externAddr);
    // _externAddr is casted to the given interface
  }

  function callExtern() public returns (uint) {
    // We can make an external call this way
    return externAddr.myMethod();
  }
}

// We can also use this to specify what
// methods our contracts must implement
contract B is myInterface {
  function myMethod() public returns (uint) {
    return msg.value;
  }
}
```
]

---

# ERC 20 Standard

* Arguably Ethereum's best known innovation
* Most exchanges and clients support
* Other standards are being developed (e.g. ERC 721)

```solidity
// ----------------------------------------------------------------------------
// ERC Token Standard #20 Interface
// https://github.com/ethereum/EIPs/blob/master/EIPS/eip-20-token-standard.md
// ----------------------------------------------------------------------------

contract ERC20Interface {
  // "Basic" methods, allows transfer of coins
  function totalSupply() public constant returns (uint);
  function balanceOf(address tokenOwner) public constant returns (uint balance);
  function transfer(address to, uint tokens) public returns (bool success);
  
  // "Standard" methods, e.g. approval workflow
  function allowance(address tokenOwner, address spender) public constant returns (uint remaining);
  function approve(address spender, uint tokens) public returns (bool success);
  function transferFrom(address from, address to, uint tokens) public returns (bool success);

  // UI Events, so UI Can update when txns are mined
  event Transfer(address indexed from, address indexed to, uint tokens);
  event Approval(address indexed tokenOwner, address indexed spender, uint tokens);
}
```

---
# Initializing variables

Value Types
* boolean: false
* string: ""
* int: 0
* uint: 0
* fixed: 0.0 (presumably; this type is not fully supported)
* enum: the first element of the enum
* address: 0x0
* function
 * internal: empty function, returning initial values (if return is needed)
 * external: function that throws when called

Reference Types
* mapping: empty mapping
* struct: a struct where all members are set to initial values
* array
 * dynamically-sized: []
 * fixed-sized: an array of the fixed size where all elements are set to initial values

NOTE: When you use the ```delete``` keyword it will assign the initial value to the variable, except for mappings, where it doesn't have any effect. For structs the delete keyword will recurse into the members, unless they are mappings.

???
ref: https://ethereum.stackexchange.com/questions/40559/what-are-the-initial-zero-values-for-different-data-types-in-solidity/40571

---
# Functions

function (<parameter types>) {internal|external} [pure|view|payable] [returns (<return types>)]

---
# Literals

Hexadecimal literals that pass the address checksum test, for example 0xdCad3a6d3569DF655070DEd06cb7A1b2Ccd1D3AF are of address payable type. Hexadecimal literals that are between 39 and 41 digits long and do not pass the checksum test produce a warning and are treated as regular rational number literals.

???
https://solidity.readthedocs.io/en/develop/types.html#address-literals

---
# Comparators

???
ref: https://www.bitdegree.org/learn/solidity-value-types/

---
# Memory location

* memory - for local use only - passed by value
* storage - for saving back to the network in a transaction - passed by reference as a pointer

--
* calldata - where non-modifiable, non-persistent area where function arguments are stored. Function parameters (not return parameters) of external functions are forced to calldata and behave mostly like memory.

Forced data location:
* parameters (not return) of external functions: calldata
* state variables: storage

Default data location:
* parameters (also return) of functions: memory
* all other local variables: storage

???
ref: https://solidity.readthedocs.io/en/v0.4.21/types.html#data-location

---
# Differences in memory location for assignment
"Data locations are important because they change how assignments behave: assignments between storage and memory and also to a state variable (even from other state variables) always create an independent copy. Assignments to local storage variables only assign a reference though, and this reference always points to the state variable even if the latter is changed in the meantime. On the other hand, assignments from a memory stored reference type to another memory-stored reference type do not create a copy."

???
ref: https://solidity.readthedocs.io/en/v0.4.21/types.html#data-location

---
# Initializing arrays

???
ref: https://medium.com/loom-network/ethereum-solidity-memory-vs-storage-how-to-initialize-an-array-inside-a-struct-184baf6aa2eb

---
# Mappings

???
ref: https://coursetro.com/posts/code/102/Solidity-Mappings-&-Structs-Tutorial

---
# Structs

???
ref: https://coursetro.com/posts/code/102/Solidity-Mappings-&-Structs-Tutorial

---
# Abstract Contracts 

---

exclude:true
class: module-header ethereum/solidity.calling
---
# Calling contracts

Interacting with deployed smart contracts on the blockchain.

---
# Transfers

* direct transfer
* allowed withdrawl

ref: https://solidity.readthedocs.io/en/v0.5.1/common-patterns.html
---
# Direct transfer danger

Calling transfer() on a contract allows the contract's fallback function to execute 

---
# Gotchas

Sending non-zero Ether to non-payable function will revert the transaction.

???
ref: https://solidity.readthedocs.io/en/develop/abi-spec.html
---
exclude:true
class: module-header ethereum/solidity.datastructures
---
exclude: true

???
@outcome: how do you store data in contract state variables?
@outcome: how do you pick which data type to store your data in?
ref: https://solidity.readthedocs.io/en/v0.4.24/types.html
ref: https://blog.qtum.org/diving-into-the-ethereum-vm-6e8d5d2f3c30

---
name: SOLIDITY-DATA-STRUCTURES-START
# Solidity Data structures

---
# Information Structures
* Simple
 * Binary
 * Numeric
 * Text

* Complex
 * Arrays
 * Structs
 * Mappings
 * Structs
 * Functions

---
# Types in Solidity
* Boolean
* Integer
* Fixed point*
* Address
* Byte arrays
 * Dynamically-sized
 * Fixed-size
---
# Types of structures
* Individual - uint
* 
---
# Data composition
* Serialized: how is the data encoded and stored?
 * Sufficient?
 * Endian?
 * Wasted space?
* Interpreted: how is the encoded data read?
 * What do we assume about the bits from the type?
---
# Type: Boolean
## bool

* Values: false, true
* Smallest data type
* A binary data type expressing 1 bit of information
---
# Boolean operators

* ! (logical negation)
* && (logical conjunction, “and”)
* || (logical disjunction, “or”)
* == (equality)
* != (inequality)
???
ref: 


---
# Type: Boolean
## bool

* Values: false, true

---
# Literals
* String literals
* Array literals
* Address literals
* Hexadecmial literals
* Enums
* Functions


---
# Complex Types


---
# LValues

* target of assignment
* Simple or complex data structure

---
# Type Casting: Converting between types

---
# Common data storage needs

* date / time values
 * unix timestamp
* checksums
 * hashes

---
# Dates: storage and considerations

```solidity
pragma solidity ^0.4.18;

contract BirthDate {
    uint256 public birthdate;

    function set(uint256 _birthdate) {
        birthdate = _birthdate;
    }

    function get() view returns (uint _birthdate) {
        return birthdate;
    }
}
```

To set date in smart-contract with web3.js:

```javascript
let date = (new Date()).getTime();
let birthDateInUnixTimestamp = date / 1000;
await BirthDate.methods.set(birthDateInUnixTimestamp).send(opts);
```

To get date from smart-contract with web3.js:

```javascript
let birthDateInUnixTimestamp = await BirthDate.methods.get().call();
let date = new Date(birthDateInUnixTimestamp * 1000);
```

???
ref: https://ethereum.stackexchange.com/questions/32173/how-to-handle-dates-in-solidity-and-web3

---
# Datetime utilities

https://github.com/pipermerriam/ethereum-datetime

---
# Checksums

Use ```solidity bytes4``` (128 bits)

---
# Logs
## Data storage outside contracts

Cheaper than state data storage

* logs: 8 gas / byte
* contract data: 625 gas / byte, 32 byte chunks

--
BUT

Not accessible from smart contracts
* useful for data only needed for the client application layer

---
# Arrays

* Use brackets [] on variable to denote an array of that type of variable
* 2 types
 * [] Dynamic array - no set size or limit
 * [3] Fixed size array - constrained to 3 elements

---
# Multidimensional array

uint[2][4] should be read as (uint[2])[4], that is, 4 arrays each of size 2

[uint, uint]
[uint, uint]
[uint, uint]
[uint, uint]

uint[][3] Fixed size;
uint[3][] Dynamic size;

???
ref: https://hackernoon.com/arrays-in-solidity-b65c1326f48b

---
# Initialisation of multi-dimensional dynamic arrays


---
# Storage refs & pointers

* Storage refs: a reference to a location in storage, and the assignment copies the memory array to that storage.
* Storage pointer: to assign to a local variable which according to the documentation just creates a new reference to a previous pointer:

---
# Mappings

???
ref: https://blog.qtum.org/diving-into-the-ethereum-vm-6e8d5d2f3c30
---
# EVM Datastructures

```
Block =
	ParentHash: BlockHash,
	UncleHash: BlockHash[],
	MinerAddress: Address,
	StateRoot: StateRoot,
	TransactionRoot: TransactionRoot,
	TransactionReceiptRoot: TransactionReceiptRoot,
	LogsBloom: BloomFilter,
	Difficulty: UInt256,
	Number: UInt256,
	GasLimit: UInt64,
	GasUsed: UInt64,
	Timestamp: UInt256,
	ExtraData: UInt8[32],
	ProofOfWork: Keccak256, // AKA: MixHash; AKA: MixDigest
	Nonce: UInt8[8],
```

```
BlockHash = keccak256(rlp(Block))
```

```
StateRoot = patriciaTree(keccak256(Address) => rlp(
	Nonce,
	Balance,
	StorageRoot,
	CodeHash,
))
```

```
StorageRoot = patriciaTree(UInt256 => UInt256)
```

```
TransactionRoot = patriciaTree(rlp(TransactionIndexInBlock) => rlp(Transaction)).rootHash
```

```
TransactionReceiptRoot = patriciaTree(rlp(TransactionIndexInBlock) => rlp(TransactionReceipt)).rootHash
```

```
Transaction =
	AccountNonce: UInt64
	Price: UInt256
	GasLimit: UInt64
	Amount: UInt256
	Payload: UInt8[]
	V: UInt256
	R: UInt256
	S: UInt256
```

```
TransactionReceipt =
	PostStateOrStatus: StateRoot|UInt32, // TODO: figure out what this union actually means
	CumulativeGasUsed: UInt64,
	LogsBloom: BloomFilter,
	Logs: Log[],
```


???
ref: https://github.com/ethereum/wiki/wiki/Consensus-Datastructures

exclude:true
class: module-header ethereum/solidity.libraries
---
# Imports


---
# Convention

* Always put at the top, per style guide

---
# Example

```solidity
pragma solidity >=0.4.0 <0.6.0;

import "./Owned.sol";

contract A {
    // ...
}
```

https://solidity.readthedocs.io/en/v0.5.1/style-guide.html
---
# Pragma is defined per file

Importing a file into another file with a different pragma will not affect the pragma defined in the imported file.

---
# Import styles

### Global
```solidity
import "filename";
```
This statement imports all global symbols from “filename” (and symbols imported there) into the current global scope (different than in ES6 but backwards-compatible for Solidity). This simple form is not recommended for use, because it pollutes the namespace in an unpredictable way: If you add new top-level items inside “filename”, they will automatically appear in all files that import like this from “filename”. It is better to import specific symbols explicitly.

### Aliased
```solidity
import * as symbolName from "filename";
```
then:
symbolName.contractFunction()

OR

```solidity
import "filename" as symbolName;
```
then:
symbolName.ContactName.contractFunction()

This statement creates a new global symbol symbolName and imports as members all the global symbols from "filename".

### Specified
```solidity
import {symbol1 as alias, symbol2} from "filename";
```
If there is a naming collision, you can also rename symbols while importing. This code creates new global symbols alias and symbol2 which reference symbol1 and symbol2 from inside "filename", respectively.

---
# Paths

The file name is always treated as a path with .red[/] as directory separator, .red[.] as the current and .red[..] as the parent directory.
When .red[.] or .red[..] is followed by a character except .red[/], it is not considered as the current or the parent directory. All path names are treated as absolute paths unless they start with the current .red[.] or the parent directory .red[..].

To import a file x from the same directory as the current file, use ```import "./x" as x;```. If you use ```import "x" as x;``` instead, a different file could be referenced (in a global “include directory”).

It depends on the compiler (see below) how to actually resolve the paths. In general, the directory hierarchy does not need to strictly map onto your local filesystem, it can also map to resources discovered via e.g. ipfs, http or git.
---
# Best Practice

Always use relative imports like import "./filename.sol"; and avoid using .. in path specifiers. In the latter case, it is probably better to use global paths and set up remappings as explained below.

???
ref: https://solidity.readthedocs.io/en/v0.5.1/layout-of-source-files.html
---
# Remapping import paths with the compiler

### solc: commandline arguments

---
# solc remapping example

If you clone github.com/ethereum/dapp-bin/ locally to /usr/local/dapp-bin, you can use the following in your source file:
```
import "github.com/ethereum/dapp-bin/library/iterable_mapping.sol" as it_mapping;
```

Then run the compiler with:

```shell
solc github.com/ethereum/dapp-bin/=/usr/local/dapp-bin/ source.sol
```
---
# solc inclusion limitations 

solc only allows you to include files from certain directories. They have to be in the directory (or subdirectory) of one of the explicitly specified source files or in the directory (or subdirectory) of a remapping target. If you want to allow direct absolute includes, add the remapping /=/.

You can use the ```--allow-paths``` flag to include additional paths.

---
# remix remapping

Remix supports mapping directly from github

```
import “github.com/ethereum/dapp-bin/library/iterable_mapping.sol” as it_mapping;
```

---
exclude:true
class: module-header ethereum/tokens.fungible
---
class: center, middle, invert
# Fungible Tokens

---
# ERC20 standard

An ERC20 token is a contract that keeps track of a mapping(address => uint256) that represents a user's balance. These tokens are fungible in that any one token is exactly equal to any other token; no tokens have special rights or behavior associated with them. This makes ERC20 useful for things like a medium of exchange currency, general voting rights, staking, and more.

???
todo: See Token Talk to extract slides
ref: https://openzeppelin.org/api/docs/learn-about-tokens.html
ref: https://medium.com/@dexaran820/previously-described-at-erc20-critical-problems-medium-article-db616c84acc1

---
# OpenZepplin Contracts supporting ERC20 

* IER20 — defines the interface that all ERC20 token implementations should conform to
* ERC20 — the base implementation of the ERC20 interface
* ERC20Detailed — the name(), symbol(), and decimals() getters are optional in the original standard, so ERC20Detailed adds that information to your token.

---
# OpenZepplin Contracts supporting ERC20 cont.

* ERC20Mintable — allows users with the MinterRole to call the mint() function and mint tokens to users. Minting can also be finished, locking the mint() function's behavior.
* ERC20Burnable — if your token can be burned (aka, it can be destroyed), include this one
* ERC20Capped — a type of ERC20Mintable that enforces a maximum cap on tokens; this is really useful if you want to ensure network participants that there will always be a maximum number of tokens, and is useful for making sure that multiple different minting methods don't accidentally create more tokens than you expected.
* ERC20Pausable — allows anyone with the Pauser role to pause the token, freezing transfers to and from users. This is useful if you want to stop trades until the end of a crowdsale, or if you want to have an emergency switch for freezing your tokens in the event of a large bug. Note that there are inherent decentralization tradeoffs when using a pausable token; users may not expect that their unstoppable money can be frozen by a single address!

???
After that, OpenZeppelin provides a few extra properties that you may want depending on your use-case:

---
# OpenZepplin Contracts supporting ERC20 cont.

* SafeERC20 — provides safeTransfer, safeTransferFrom, and safeApprove that are helpful wrappers around the normal ERC20 functions. Using SafeERC20 forces transfers and approvals to succeed, or the entire transaction is reverted.
* TokenTimelock — is an escrow contract for ERC20 tokens that will release some tokens after a specified timeout. This is useful for simple vesting schedules like "advisors get all of their tokens after 1 year". For a better vesting schedule, though, see TokenVesting

???
Finally, if you're working with ERC20 tokens, OpenZeppelin provides some utility contracts:

---
exclude:true
class: module-header ethereum/tools.metamask
---
name: TOOLS.METAMASK-START
exclude:true

---
class: middle, center
# Metamask
<p align=center>
    <img src="../media/metamask.png">
</p>
[https://metamask.io/](https://metamask.io/)

???
Everyone's favorite browser extension wallet

ref: https://cryptospaceguides.com/step-by-step-guide-to-metamask/
ref: https://metamask.zendesk.com/hc/en-us/articles/360015489211-MetaMask-Basics
ref: https://metamask.zendesk.com/hc/en-us/articles/360015489531-Getting-Started-With-MetaMask-Part-1-
ref: https://metamask.zendesk.com/hc/en-us/articles/360015489391-Getting-Started-With-MetaMask-Part-2-
ref: https://metamask.zendesk.com/hc/en-us/articles/360015290092-How-To-Get-Logs-And-Help-MetaMask-Support-and-Diagnose-Your-Issue

todo: add a live metamask logo here, as from https://github.com/MetaMask/metamask-logo

---
# Hello, Metamask

MetaMask is an extension for accessing Ethereum enabled distributed applications, or "Dapps" in your normal browser!

The extension injects the Ethereum web3 API into every website's javascript context, so that dapps can read from the blockchain.

MetaMask also lets the user create and manage their own identities, so when a Dapp wants to perform a transaction and write to the blockchain, the user gets a secure interface to review the transaction, before approving or rejecting it.

Because it adds functionality to the normal browser context, MetaMask requires the permission to read and write to any webpage. You can always "view the source" of MetaMask the way you do any extension, or view the source code on Github:
https://github.com/MetaMask/metamask-plugin

---
# Installing Metamask

* From your browser's extension market
 * Chrome: https://chrome.google.com/webstore/category/extensions
 * Firefox: https://addons.mozilla.org/en-US/firefox/addon/ether-metamask/
* From a scratch build
 * Source from github: https://github.com/MetaMask
* Pre-installed in your browser
 * Brave: https://brave.com/

---
# Creating a new Metamask account

Your Metamask account is protected with a password, and is used to "unlock" Metamask so that it can be used.

Similar to password keeper programs, Password Safe, KeePass, etc.

---
class: center, middle
# Protect your seed phrase!

---
exclude: true
# Accessing different wallets

---
exclude: true
# Adding tokens

---
# Enabling Blockies icons

Addresses are not easily compared at a glance. Ethereum dapp browsers have converged on using a variant of the [Blockies]() code to generate an image from an address, allowing for an an easy additional visual check that two addresses match.

To switch from Metamask's default image to a Blockie style image, flip the toggle switch in your Metamask plugin settings tab.

For applications that use the same variant of Blockies, addresses should be rendered as the same image, making it more convenient to compare addresses across applications / screens. 

???
todo: add image

---
exclude:true
class: module-header ethereum/tools.remix
---
name: REMIX-1
# Introduction to remix

???

---
# remix: the in-browser Solidity IDE

Available in your browser @ https://remix.ethereum.org/
---
# Navigating
---
# Editing smart contracts
---
# Deploying a contract
---
# Accessing remote contracts

---
# Compiling in remix

---
# Compiling issue troubleshooting checklist


exclude:true
class: module-header ethereum/tools.truffle
---
# Truffle 
## An Ethereum smart contract development toolbox

---
# Installation

```solidity
npm install -g truffle
```

---
# package.json

Used by npm to track the packages being used in this project, for installation & updating.

By default, npm install will install all modules listed as dependencies in package.json

Allows you to specify the version of each package.

---
# Aside: "development" vs "production"

A "development" environment is where development happens. It may have additional tools set up and files that are not necessary (or desireable) for when the application is "live."

A "production" environment is where the live project lives when it is in use. It is likely to differ significantly from the environment where it was developed.

With the --production flag (or when the NODE_ENV environment variable is set to production), npm will not install modules listed in devDependencies.

---
# Step: Initialize the project with truffle

```solidity
truffle init
```

* Must be done in an empty directory
* Installs https://github.com/truffle-box/bare-box : just another truffle "box" (project template)

## You will now have:

* truffle-config.js
* truffle.js
* contracts/
* migrations/
* test/

---
# truffle.js & truffle-config.js

Your configuration file is called truffle.js and is located at the root of your project directory. This file is a Javascript file and can execute any code necessary to create your configuration. It must export an object representing your project configuration like the example below.

## Why 2 files?

Both files are created on initiation because default configuration file name can cause a conflict with the truffle executable.

On windows systems having truffle.js in your main folder may create a conflict when you try to execute truffle.

Windows first looks for executables in your current directory, and .js files are considered executables. It will try to execute your configuration file it will fail, hence truffle-config.js.

.red[Recommendation: neither is "correct", consider using truffle-config.js, it works on all systems.]

???
ref: https://truffleframework.com/docs/truffle/reference/configuration
ref: http://truffleframework.com/docs/advanced/configuration
ref: https://ethereum.stackexchange.com/questions/38117/truffle-configuration-file-name-is-it-truffle-js-or-truffle-config-js

---
# contracts/

Where your Solidity smart contract files can live (*.sol)

Starts with contracts/Migrations.sol, which we'll look at in a moment.

---
# Aside: What is a truffle migration?

```solidity
truffle migrate
```

Command used to deploy the project smart contracts

```solidity
contracts/Migrations.sol
```

Contract used by truffle for managing the status of contract deployment.

```solidity
migrations/1_initial_migration.js
```

Script for handling deployment, including any setup required, proper ordering of resources, etc.

???
ref: https://medium.com/@blockchain101/demystifying-truffle-migrate-21afbcdf3264

---
# migrations/

Scripts in order of steps to be taken when deploying these contracts.

* 1_initial_migration.js - default
* 2_your_deployment_step_script_here.js
* etc

---
# migrations/1_initial_migration.js 

```solidity
// Get a handle for the Migrations contract
var Migrations = artifacts.require("./Migrations.sol");

// Export a function that deploys the contract
module.exports = function(deployer) {
  // This function will be called in the process of truffle migrate
  deployer.deploy(Migrations);
};
```

---
# contracts/Migrations.sol

Migrations.sol added by Truffle

Uses state value `last_completed_migration` to track project status, mapping to the script prefix in migrations/

---
# test/

Used with the `truffle test` command, a set of scripts to use for testing contract functionality

---
# `truffle test`

* Executes the test scripts in test/.
* Re-compiles contracts.
* Does migrations (deployments) as necessary.
* Reports passing/failing tests.

```shell
Compiling ./contracts/Migrations.sol...

  0 passing (0ms)
```

---
exclude: true
# Example contract: simple-record

???
TODO: add simple-record for demo
---
exclude: true
# Example test for simple-record

???
TODO: add simple-record truffle test for demo
---
class: middle, center, invert
# Other truffle commands

---
# `truffle compile`

Compiles the contract code in /contracts and places the ABI for each in /build/contracts/<contract-name>.json

Automatically performed by `truffle migrate`

---
# Reminder: ABI

Deployed contracts are in "bytecode" format: not human readable or easily understood.

ABI stands for "Application Bytecode Interface" and is a description of the compiled code's contents.

ABI files are .json format, human + machine readable.

It tells the code that wants to interact with a deployed contract how to, since the source code might not be known.
---
# Development console

```shell
$ truffle develop
```
---
# Upgrading Truffle

Installed version may not be the latest. Between full versions especially, do a full re-install:

```shell
$ npm uninstall -g truffle
$ npm install -g truffle
```
???
This was necessary switching to 5.

---
exclude:true
class: module-header ethereum/topic.addresses
---
class: center, middle, invert
name: ADDRESSES-START
# Addresses

???
TODO: migrate material from longer talks here

---
# 2 types
* Externally owned
* Contracts

---
# Private keys

See [Wallets](../build/modules/wallets.md)

???

For example of likelihood of brute forcing / collision, see this generator demo:
https://keys.lol/ethereum/

---
# Generating a new private key

Using RSA:

```shell
ssh-keygen -o -t rsa -b 4096 -C "comment, such as myemail@mydomain.com"
```
???
ref: https://gitlab.com/help/ssh/README#generating-a-new-ssh-key-pair
ref: https://ed25519.cr.yp.to/

---
# Addresses and networks

* Wallet (external) addresses (secured by private key) are network agnostic - holder has access across networks
* Contract (network) addresses are network specific - deployment to the network is required

---
# Generating an address from a private key

1. Generate the public key from the private key
2. Generate the address from the public key

???
ref: https://medium.freecodecamp.org/how-to-create-an-ethereum-wallet-address-from-a-private-key-ae72b0eee27b
---
# Generating an address from a private key
## Generate the public key 1/2

```python
private_key_bytes = codecs.decode(private_key, ‘hex’)
# Get ECDSA public key
key = ecdsa.SigningKey.from_string(private_key_bytes, curve=ecdsa.SECP256k1).verifying_key
key_bytes = key.to_string()
key_hex = codecs.encode(key_bytes, ‘hex’)
```
???
The first thing we need to go is to apply the ECDSA, or Elliptic Curve Digital Signature Algorithm, to our private key. An elliptic curve is a curve defined by the equation y² = x³ + ax + b with chosen a and b. There is a whole family of such curves that are widely known and used. Bitcoin uses the secp256k1 curve. Ethereum uses the same elliptic curve, secp256k1, so the process to get the public key is identical in both cryptocurrencies.

By applying the ECDSA to the private key, we get a 64-byte integer, which is two 32-byte integers that represent X and Y of the point on the elliptic curve, concatenated together.

ref: https://medium.freecodecamp.org/how-to-create-an-ethereum-wallet-address-from-a-private-key-ae72b0eee27b

---
# Generating an address from a private key 
## Generate the address 2/2

```python
public_key_bytes = codecs.decode(public_key, ‘hex’)
keccak_hash = keccak.new(digest_bits=256)
keccak_hash.update(public_key_bytes)
keccak_digest = keccak_hash.hexdigest()
# Take the last 20 bytes
wallet_len = 40
wallet = ‘0x’ + keccak_digest[-wallet_len:]
```

???
Apply Keccak-256 to the public key and then take the last 20 bytes of the result.
Add 0x to the beginning to denote an address in hexidecimal form.

unlike Bitcoin, Ethereum has the same addresses on both the main and all test networks.

---
# Address checksums

Originally there were none, unlike in Bitcoin. They were added in 2016 with EIP-55.

Adding a checksum to the Ethereum wallet address makes it case-sensitive.

```
# All caps
0x52908400098527886E0F7030069857D2E4169EE7
0x8617E340B3D01FA5F11F306F4090FD50E238070D
# All Lower
0xde709f2102306220921060314715629080e2fb77
0x27b1fdb04752bbc536007a920d24acb045561c26
# Normal
0x5aAeb6053F3E94C9b9A09f33669435E7Ef1BeAed
0xfB6916095ca1df60bB79Ce92cE3Ea74c37c5d359
0xdbF03B407c01E7cD3CBea99509d93f8DDDC8C6FB
0xD1220A0cf47c7B9Be7A2E6BA89F429762e7b9aDb
```
---
# Address checksum generation
1. First, you need to get the Keccak-256 hash of the address. Note that this address should be passed to the hash function without the 0x part.
2. Second, you iterate over the characters of the initial address. If the ith byte of the hash is greater than or equal to 8, you convert the ith address’s character to uppercase, otherwise you leave it lowercase.
3. Add the 0x back

```javascript
const createKeccakHash = require('keccak')

function toChecksumAddress (address) {
  address = address.toLowerCase().replace('0x', '')
  var hash = createKeccakHash('keccak256').update(address).digest('hex')
  var ret = '0x'

  for (var i = 0; i < address.length; i++) {
    if (parseInt(hash[i], 16) >= 8) {
      ret += address[i].toUpperCase()
    } else {
      ret += address[i]
    }
  }
  return ret
}

var hash = createKeccakHash('keccak256').update(
    Buffer.from(address.toLowerCase(), 'ascii') ).digest()
```

???
“on average there will be 15 check bits per address, and the net probability that a randomly generated address if mistyped will accidentally pass a check is 0.0247%.”
ref: https://github.com/ethereum/EIPs/blob/master/EIPS/eip-55.md

---
exclude:true
class: module-header ethereum/topic.databases
---
# Databases

---
# Persistence of Data

---
# Access to Data

---
# 
* Unstructured: key/value stores
* Relational: schema based

---
# Unstructured 

* Key/value store
```shell
 1 -> "hello, world"
 2 -> 1234.50
 3 -> { name: "Alice", color:blue }
```

---
# Relational Topographies

* Table

* Graph

---
# Data storage format

---
# ACID Compliance

---
# Querying Databases

---
# SQL Standards

---
# NoSQL Databases

---
# RDBMS

---
# sqlite

---
# Drivers

Used by programming languages to connect to and interact with databases.

---
# Logs

???
ref: https://engineering.linkedin.com/distributed-systems/log-what-every-software-engineer-should-know-about-real-time-datas-unifying

---
# Replication

---
# Sharding

---
# Decentralized Databases

* Orbit - https://github.com/orbitdb/orbit-db

???
ref: https://github.com/orbitdb/orbit-db

---
exclude:true
class: module-header ethereum/topic.eip
---

ref: https://eips.ethereum.org/EIPS/eip-1
---
# 3 Types of EIP

* Standard Track EIP
* Informational EIP
* Meta EIP

???
# Standard Track EIP
"A Standard Track EIP describes any change that affects most or all Ethereum implementations, such as a change to the the network protocol, a change in block or transaction validity rules, proposed application standards/conventions, or any change or addition that affects the interoperability of applications using Ethereum. Furthermore Standard EIPs can be broken down into the following categories. Standards Track EIPs consist of three parts, a design document, implementation, and finally if warranted an update to the formal specification. "

???

---
# Informational EIP 
An Informational EIP describes an Ethereum design issue, or provides general guidelines or information to the Ethereum community, but does not propose a new feature. Informational EIPs do not necessarily represent Ethereum community consensus or a recommendation, so users and implementers are free to ignore Informational EIPs or follow their advice.

???

---
# Meta EIP 
A Meta EIP describes a process surrounding Ethereum or proposes a change to (or an event in) a process. Process EIPs are like Standards Track EIPs but apply to areas other than the Ethereum protocol itself. They may propose an implementation, but not to Ethereum’s codebase; they often require community consensus; unlike Informational EIPs, they are more than recommendations, and users are typically not free to ignore them. Examples include procedures, guidelines, changes to the decision-making process, and changes to the tools or environment used in Ethereum development. Any meta-EIP is also considered a Process EIP.

???

exclude:true
class: module-header ethereum/topic.networks
---
name: NETWORKS-1-START
# Networks

![Networks](../media/networks.png)

???

---
# Where's the blockchain?

* Blockchains are processed on network clients
* State differs across clients
* Consensus mechanisms provide eventual consistency 
* Clients on a network all work on the same transaction set

---
# Ethereum Networks

* Main - the "real" / "production" network
* Morden - old test network
* Ropsten - 
* Rinkeby - Test network for the geth client
* Kovan - Test network for the parity client
* Guerli - Rinkeby + Kovan

???
ref: https://kovan-testnet.github.io/website/

---
# Rinkeby

https://www.rinkeby.io/#stats

???
ref: https://www.rinkeby.io/
---
# Kovan

Kovan is a Proof of Authority (PoA) publicly accessible blockchain for Ethereum; created and maintained by a consortium of Ethereum developers, to aide the Ethereum developer community.

https://kovan-testnet.github.io/website/

???
ref: https://kovan-testnet.github.io/website/
q: What is Kovan?
q: What consensus mechanism does Kovan use?

---
# Why consensus mechanisms matter

On 24th Feb 2017, Ropsten was under a denial-of-service attack (“spam attack”). Average block propagation time has since slowed to a crawl as a large miner has decided to deploy several zero-value high-gas transactions to spam the test network continually. The attacker’s intentions are unknown, but the result is that Ethereum developers who rely on Ropsten no longer have a stable public testing environment to deploy and test their smart contract code prior to deploying to production on the mainnet chain.

The use of Proof-of-Work (PoW) for testnets presents a fundamental game theoretical problem: the only significant economic incentive to mine on testnets using dedicated GPU resources is to launch an attack and reduce stability and the viability of the testnet (and thus hamper development for the mainnet chain).

https://kovan-testnet.github.io/website/proposal/

???
ref: https://kovan-testnet.github.io/website/proposal/

---
# Proof-of-Authority (PoA)

Parity supports a PoA consensus engine to be used with Ethereum Virtual Machine (EVM) based chains. PoA is a replacement for PoW, which can be used for both public and private chain setups. There is no mining involved to secure the network with PoA, and relies on trusted ‘Validators’ to ensure that valid transactions are added to blocks, processed and executed by the EVM faithfully.

Because mining does not occur on our proposed public test net, malicious actors are prevented from acquiring testnet Ether, solving the spam attack that Ropsten is currently facing.

There is no difference in the way that contracts are executed compared to PoW chains, so developers can test their contracts and user interfaces before deploying to the mainnet in a more reliable and convenient environment.

More information about PoA can be found at: https://github.com/ethcore/parity/wiki/Proof-of-Authority-Chains

???
ref: https://kovan-testnet.github.io/website/proposal/
q: How are transactions validated in a PoA network?
q: How does PoA differ from PoW?

---
# Faucets

A secure “Faucet” service allows for verified (non-malicious) developers to acquire testnet Ether. It is important that the distribution of testnet Ether is available but is also rate-limited, so as to be not available in large amounts to non-trusted parties (to prevent spam attacks).

???
q: What use is a faucet to a PoA network?

---
# Which network are we on?

Javascript using web3:

```javascript
web3.version.getNetwork((err, netId) => {
  switch (netId) {
    case "1":
      console.log('This is mainnet')
      break
    case "2":
      console.log('This is the deprecated Morden test network.')
      break
    case "3":
      console.log('This is the ropsten test network.')
      break
    case "4":
      console.log('This is the Rinkeby test network.')
      break
    case "42":
      console.log('This is the Kovan test network.')
      break
    default:
      console.log('This is an unknown network.')
  }
})
```

---
exclude:true
class: module-header ethereum/topic.tools-intro
---
# Tools

---

# Specialized tools

* Etherlinker for Unreal Engine
 * https://bitbucket.org/kelheor/etherlinker-for-ue4/

---
exclude:true
class: module-header ethereum/topic.wallets
---
name: WALLETS-START
class: middle, center, invert 
# Wallets

???
TODO: fill in
ref: https://medium.com/@attores/step-by-step-guide-getting-started-with-ethereum-mist-wallet-772a3cc99af4

---
# What is a wallet?

Functions:
* Transacting - data in motion
 * Receiving & sending cryptocurrency
 * Interacting with smart contracts (on supported platforms)
* Storing - data at rest

---
# Wallets may include

* a mnemonic / seed phrase
* one or more accounts, each with
 * a private key
 * a public key
 * an address

???
ref: https://en.bitcoin.it/wiki/Seed_phrase

---
# Externally Owned Accounts

* Built off a private key.
* Address is derived from the private key via series of 1 way hashing and truncation

---
# Keys

* Private keys
 * generated secret with guaranteed strength
 * uses randomness (entropy) during generation to make less predictable

* Public keys
 * derived from the private key
 * cannot be used to derive the private key (one-way hashed)

You should know: Who holds the (private) key to your wallet?

???
ref: https://github.com/vkobel/ethereum-generate-wallet

---
exclude: true
# Keystores

???
ref: https://theethereum.wiki/w/index.php/Accounts,_Addresses,_Public_And_Private_Keys,_And_Tokens
todo: add snippets of example keystore files
todo: point out where students can find a keystore file in software they have installed to examine

---
# Tools for key generation

![Metamask](../media/metamask.png)

???
Metamask: wallet generation is built in, and private key / mnemonic can be exported

ref: https://kobl.one/blog/create-full-ethereum-keypair-and-address/

---
# Mnemonics / Seed phrases

A wallet specific mechanism for generating multiple private keys / accounts.

Introduced on the Trezor hardware wallet.

A random sequence of words from a dictionary.

Typically a 12, 18, or 24 word "phrase"

See BIP39 for a mnemonic protocol recommendation
https://github.com/bitcoin/bips/blob/master/bip-0039.mediawiki

???
ref: https://github.com/bitcoin/bips/blob/master/bip-0039.mediawiki
ref: https://blockchain.wtf/wallets/hardware/
ref: https://gitlab.com/help/ssh/README#generating-a-new-ssh-key-pair
ref: https://iancoleman.io/bip39/

---
# .red[Hot] & .blue[Cold] wallets

### Hot
* "online" - connected to a network (typically the internet)
* ready to use
* less secure
* more like cash

### Cold
* "offline" - not connected to a network
* requires steps to access
* more secure
* more like a bank acct

---
# Types of wallets

* Web
* Software
 * Desktop
 * Mobile
* Hardware
* Physical

---
# Online wallets

Available via browser -> website

Provided by a 3rd party

Aka "Cloud" wallets

PROVIDER MAY MANAGE YOUR PRIVATE KEY--THIS IS NOT OWNERSHIP.

* Coinbase - https://www.coinbase.com/
* MyEtherWallet - https://www.myetherwallet.com/

---
# Software wallets: Desktop 

Software installed on laptops & computers (Windows / OS X / Linux)

Often part of full network client node software.

Examples:
* Mist - dapp browser
* Metamask (browser plugin) - https://metamask.io/
* geth - ethereum client
* parity - https://www.parity.io/ethereum/
* Jaxx - https://jaxx.io/

---
# Software wallets: Mobile 

Software installed on mobile devices (Android, iOS) as an app

Examples:
* Metamask - web browser plugin
* Jaxx (app) - https://jaxx.io/
* Coinbase (app) - https://www.coinbase.com/

---
# Hardware wallets

Often a dongle format, like a USB stick

Examples:
* Trezor - https://trezor.io/ - the first to market
* Ledger - https://www.ledger.com/
* Bitbox - https://shiftcrypto.ch/
* KeepKey - https://www.keepkey.com/

Some feature 2FA (2 factor authentication) additions to prevent unauthorized access, even with physical access to the device.

---
# Physical wallets

Physical record of the private key (and optionally, other information)

* required: include the private key OR mnemonic
 * mnemonic can be used for multiple private keys
 * mnemonic is easier to accurately record / read / type...
* optional: include the public key - not necessary, this can be derived from the private key
* optional: include the address - not necessary, this can be derived from the public key
* optional: include a QR code for the address - not necessary, just convenient

* Paper - "Paper" wallets are hardware wallets that use the keyboard (or camera via QR code) as the interface.
Risk of fire loss!

* Steel - provide a fire (etc) resistant means of storing your private key
---
exclude: true
# On paper wallets

???
https://medium.com/@pi0neerpat/walrus-paper-wallet-5c39b89c9e22
https://github.com/blockchainbuddha/Walrus-Paper-Wallet-Generator

see exercise

---
# Mist Browser

https://github.com/ethereum/mist

https://wallet.ethereum.org

---
# Bitcoin "paper wallet" generators

* https://www.bitaddress.org/
* https://walletgenerator.net/
* <strike>https://bitcoinpaperwallet.com/</strike>
* https://mycelium.com/mycelium-entropy.html - notable as a USB device that plugs directly into the printer

### Considerations:
* Do you trust a service to be involved with generating your private key?
* Do you trust that information was not shared back to the service / eavesdroppers?
* Do you trust the randomness generator process?

* \[Update: bitcoinpaperwallet.com domain sold, no longer tied to the github code--no proof generated keys are not shared!!!\]

???
ref: https://www.coindesk.com/information/paper-wallet-tutorial/

---
# Hierarchical Deterministic Wallets

"Using some tricks with cryptography and elliptic curve mathematics, a method to generate a tree of key-pairs from a single key-pair was introduced to help with the management/storage/backup of all the addresses a user has.

This enables users to focus on the security and storage of a single key-pair while simultaneously having the flexibility to use as many key-pairs as needed. This also allows for easy recovery or portability, as you only have to enter a single private-key into a new wallet to restore all of your accounts."

This also makes the secrecy of those private keys only as strong as the secrecy of the parent key... all the more reason to protect that secret.

???
ref: https://medium.com/the-bitcoin-podcast-blog/reframing-how-you-think-about-the-concept-of-managing-your-private-keys-fdf95060728a

---
exclude: true
# Generating a new private key on your computer

---
# Wallet projects

* [Arkane](https://arkane.network)
* [BitGo](https://www.bitgo.com/)
* [Emerald Wallet](https://www.etcdevteam.com/) - ETC
* [KeepKey](https://shapeshift.io/)
* [MetaMask](https://metamask.io/) -ETH
* [MyCrypto](https://mycrypto.com/)
* [MyEtherWallet](https://www.myetherwallet.com/) - ETH
* [Parity](https://www.parity.io/)
* [Trustwallet](https://trustwallet.com/)
* [Unchained Capital](https://www.unchained-capital.com/)

---
