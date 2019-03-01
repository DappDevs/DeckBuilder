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

