# Contract Metadata & ABIs

???
ref: https://solidity.readthedocs.io/en/develop/abi-spec.html
ref: https://www.sitepoint.com/compiling-smart-contracts-abi/

---
# JSON metadata format

The Solidity compiler automatically generates a JSON file, the contract metadata, that contains information about the current contract. You can use this file to query the compiler version, the sources used, the ABI and NatSpec documentation to more safely interact with the contract and verify its source code.

* JSON format (JavaScript Object Notation)
 * native to JS
 * useful for key/value data, like config
 * has no fixed order, can change with compiler versions.

???
ref: https://solidity.readthedocs.io/en/develop/metadata.html
---
# Metadata file example

```json
{
  // Required: The version of the metadata format
  version: "1",
  // Required: Source code language, basically selects a "sub-version"
  // of the specification
  language: "Solidity",
  // Required: Details about the compiler, contents are specific
  // to the language.
  compiler: {
    // Required for Solidity: Version of the compiler
    version: "0.4.6+commit.2dabbdf0.Emscripten.clang",
    // Optional: Hash of the compiler binary which produced this output
    keccak256: "0x123..."
  },
  // Required: Compilation source files/source units, keys are file names
  sources:
  {
    "myFile.sol": {
      // Required: keccak256 hash of the source file
      "keccak256": "0x123...",
      // Required (unless "content" is used, see below): Sorted URL(s)
      // to the source file, protocol is more or less arbitrary, but a
      // Swarm URL is recommended
      "urls": [ "bzzr://56ab..." ]
    },
    "mortal": {
      // Required: keccak256 hash of the source file
      "keccak256": "0x234...",
      // Required (unless "url" is used): literal contents of the source file
      "content": "contract mortal is owned { function kill() { if (msg.sender == owner) selfdestruct(owner); } }"
    }
  },
  // Required: Compiler settings
  settings:
  {
    // Required for Solidity: Sorted list of remappings
    remappings: [ ":g/dir" ],
    // Optional: Optimizer settings (enabled defaults to false)
    optimizer: {
      enabled: true,
      runs: 500
    },
    // Required for Solidity: File and name of the contract or library this
    // metadata is created for.
    compilationTarget: {
      "myFile.sol": "MyContract"
    },
    // Required for Solidity: Addresses for libraries used
    libraries: {
      "MyLib": "0x123123..."
    }
  },
  // Required: Generated information about the contract.
  output:
  {
    // Required: ABI definition of the contract
    abi: [ ... ],
    // Required: NatSpec user documentation of the contract
    userdoc: [ ... ],
    // Required: NatSpec developer documentation of the contract
    devdoc: [ ... ],
  }
}
```
---
# Metadata file publication

The compiler appends a Swarm hash of the metadata file to the end of the bytecode of each contract, so that you can retrieve the file in an authenticated way without having to resort to a centralized data provider.

You have to publish the metadata file to Swarm (or another service) so that others can access it. You create the file by using the solc --metadata command that generates a file called ContractName_meta.json. It contains Swarm references to the source code, so you have to upload all source files and the metadata file.

*NOTE:* Since the bytecode of the resulting contract contains the metadata hash, any change to the metadata results in a change of the bytecode. This includes changes to a filename or path, and since the metadata includes a hash of all the sources used, a single whitespace change results in different metadata, and different bytecode.

---
# Usage: Automatic Interface Generation and NatSpec

The metadata is used in the following way: A component that wants to interact with a contract (e.g. Mist or any wallet) retrieves the code of the contract, from that the Swarm hash of a file which is then retrieved. That file is JSON-decoded into a structure like above.

The component can then use the ABI to automatically generate a rudimentary user interface for the contract.

Furthermore, the wallet can use the NatSpec user documentation to display a confirmation message to the user whenever they interact with the contract, together with requesting authorization for the transaction signature.

---
# Usage: Source Code Verification

In order to verify the compilation, sources can be retrieved from Swarm via the link in the metadata file. The compiler of the correct version (which is checked to be part of the “official” compilers) is invoked on that input with the specified settings. The resulting bytecode is compared to the data of the creation transaction or CREATE opcode data. This automatically verifies the metadata since its hash is part of the bytecode. Excess data corresponds to the constructor input data, which should be decoded according to the interface and presented to the user.

---
# ABI: Application Binary Interface

When sending or receiving data, it needs to be serialized into a string of bytes.
Data is encoded according to its type, as described in this specification. The encoding is not self describing and thus requires a schema in order to decode.
Binary format describes how data is packed, JSON format describes how to unpack the data

???
todo: add a good graphic of the data encoding, and how the ABI provides the parsing
ref: https://solidity.readthedocs.io/en/develop/abi-spec.html
---
# ABI JSON function description

* type: "function", "constructor", or "fallback" (the unnamed “default” function);
* name: the name of the function;
* inputs: an array of objects, each of which contains:
 * name: the name of the parameter;
 * type: the canonical type of the parameter (more below).
 * components: used for tuple types (more below).
* outputs: an array of objects similar to inputs, can be omitted if function doesn’t return anything;
* stateMutability: a string with one of the following values:
 * pure (specified to not read blockchain state),
 * view (specified to not modify the blockchain state),
 * nonpayable (function does not accept Ether) 
 * payable (function accepts Ether);
* payable: true if function accepts Ether, false otherwise; DEPRECATED - see *stateMutability*
* constant: true if function is either pure or view, false otherwise. DEPRECATED - see *stateMutability*

Defaults:
* type can be omitted, defaulting to "function",
* likewise payable and constant can be omitted, both defaulting to false.

Constructor and fallback function never have name or outputs. Fallback function doesn’t have inputs either.
---
# ABI JSON event description

* type: always "event"
* name: the name of the event;
* inputs: an array of objects, each of which contains:
 * name: the name of the parameter;
 * type: the canonical type of the parameter (more below).
 * components: used for tuple types (more below).
 * indexed: true if the field is part of the log’s topics, false if it one of the log’s data segment.
* anonymous: true if the event was declared as anonymous.

---
# Example

```solidity
pragma solidity >0.4.99 <0.6.0;

contract Test {
  constructor() public { b = hex"12345678901234567890123456789012"; }
  event Event(uint indexed a, bytes32 b);
  event Event2(uint indexed a, bytes32 b);
  function foo(uint a) public { emit Event(a, b); }
  bytes32 b;
}
```

```json
[{
"type":"event",
"inputs": [{"name":"a","type":"uint256","indexed":true},{"name":"b","type":"bytes32","indexed":false}],
"name":"Event"
}, {
"type":"event",
"inputs": [{"name":"a","type":"uint256","indexed":true},{"name":"b","type":"bytes32","indexed":false}],
"name":"Event2"
}, {
"type":"function",
"inputs": [{"name":"a","type":"uint256"}],
"name":"foo",
"outputs": []
}]
```

---
# Partial ABI acceptable for transacting

* Not necessary to reveal the entire interface
* Only interface with defined functions
 * Much match signature, i.e. same # arguments

---
# Function call data
The first four bytes of the call data for a function call specifies the function to be called.
It is the first (left, high-order in big-endian) four bytes of the Keccak-256 (SHA-3) hash of the signature of the function.

---
# Function signatures
The signature is defined as the canonical expression of the basic prototype without data location specifier, i.e. the function name with the parenthesised list of parameter types. Parameter types are split by a single comma - no spaces are used.

ex: functionName(uint,string,address) 
---
# Argument Encoding

Starting from the fifth byte, the encoded arguments follow. This encoding is also used in other places, e.g. the return values and also event arguments are encoded in the same way, without the four bytes specifying the function.

???
ref: https://solidity.readthedocs.io/en/develop/abi-spec.html
---
# Supported types

Solidity supports all the ABI's data types

* uint<M>: unsigned integer type of M bits, 0 < M <= 256, M % 8 == 0. e.g. uint32, uint8, uint256.
* int<M>: two’s complement signed integer type of M bits, 0 < M <= 256, M % 8 == 0.
* address: equivalent to uint160, except for the assumed interpretation and language typing. For computing the function selector, address is used.
* uint, int: synonyms for uint256, int256 respectively. For computing the function selector, uint256 and int256 have to be used.
* bool: equivalent to uint8 restricted to the values 0 and 1. For computing the function selector, bool is used.
* fixed<M>x<N>: signed fixed-point decimal number of M bits, 8 <= M <= 256, M % 8 ==0, and 0 < N <= 80, which denotes the value v as v / (10 ** N).
* ufixed<M>x<N>: unsigned variant of fixed<M>x<N>.
* fixed, ufixed: synonyms for fixed128x18, ufixed128x18 respectively. For computing the function selector, fixed128x18 and ufixed128x18 have to be used.
* bytes<M>: binary type of M bytes, 0 < M <= 32.
* function: an address (20 bytes) followed by a function selector (4 bytes). Encoded identical to bytes24.

* <type>[M]: a fixed-length array of M elements, M >= 0, of the given type.

* bytes: dynamic sized byte sequence.
* string: dynamic sized unicode string assumed to be UTF-8 encoded.
* <type>[]: a variable-length array of elements of the given type.

---
# Type Tuples

The ABI also supports use of tuples ()

Types can be combined to a tuple by enclosing them inside parentheses, separated by commas:

    (T1,T2,...,Tn): tuple consisting of the types T1, …, Tn, n >= 0

It is possible to form tuples of tuples, arrays of tuples and so on. It is also possible to form zero-tuples (where n == 0).

---
# Support for Solidity specific types

* address payable: address
* contract: address
* enum: smallest uint type that is large enough to hold all values
For example, an enum of 255 values or less is mapped to uint8 and an enum of 256 values is mapped to uint16.
* struct: tuple

---
# Other modes

* Strict encoding mode
* Non-standard packed mode

Which you don't need to worry about at this point.
---
# ABI Encoding and Decoding Functions

* abi.decode(bytes memory encodedData, (...)) returns (...): ABI-decodes the given data, while the types are given in parentheses as second argument. Example: (uint a, uint[2] memory b, bytes memory c) = abi.decode(data, (uint, uint[2], bytes))
* abi.encode(...) returns (bytes memory): ABI-encodes the given arguments
* abi.encodePacked(...) returns (bytes memory): Performs packed encoding of the given arguments
* abi.encodeWithSelector(bytes4 selector, ...) returns (bytes memory): ABI-encodes the given arguments starting from the second and prepends the given four-byte selector
* abi.encodeWithSignature(string memory signature, ...) returns (bytes memory): Equivalent to abi.encodeWithSelector(bytes4(keccak256(bytes(signature))), ...)`

???

---
# encodePacked
## Computing the hash of structured data

`keccak256(abi.encodePacked(a, b))`

NOTE: it is possible to craft a “hash collision” using different function parameter types.

???
ref: https://solidity.readthedocs.io/en/v0.5.1/units-and-global-variables.html?highlight=encodePacked

---
# Interacting with deployed contracts

```solidity
pragma solidity ^0.4.18;

contract Deployed {
    
    function setA(uint) public returns (uint) {}
    
    function a() public pure returns (uint) {}
    
}

contract Existing  {
    
    Deployed dc;
    
    function Existing(address _t) public {
        dc = Deployed(_t);
    }
 
    function getA() public view returns (uint result) {
        return dc.a();
    }
    
    function setA(uint _val) public returns (uint result) {
        dc.setA(_val);
        return _val;
    }
}
```
???
ref: https://medium.com/@blockchain101/calling-the-function-of-another-contract-in-solidity-f9edfa921f4c

---
# Calling contracts without an ABI

Deep magic warning!

???
ref: https://medium.com/@blockchain101/calling-the-function-of-another-contract-in-solidity-f9edfa921f4c
