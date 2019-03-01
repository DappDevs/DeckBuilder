# Calling contracts without and ABI in Solidity

???
ref: https://medium.com/@blockchain101/calling-the-function-of-another-contract-in-solidity-f9edfa921f4c

---
# The Contracts

```solidity
pragma solidity ^0.4.19;

contract Deployed {
    uint store;
    function setA(uint _a) public returns (uint) { store = _a;}
    
    function a() public view returns (uint) { return store; }
    
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

contract ExistingWithoutABI  {
    
    address dc;
    
    function ExistingWithoutABI(address _t) public {
        dc = _t;
    }
    
    function setA_ASM(uint _val) public returns (uint answer) {
        
        bytes4 sig = bytes4(keccak256("setA(uint256)"));

        assembly {

            // move pointer to free memory spot
            let ptr := mload(0x40)

            // put function sig at memory spot
            mstore(ptr,sig)

            // append argument after function sig
            mstore(add(ptr,0x04), _val)

            let result := call(
              15000, // gas limit
              sload(dc_slot),  // to addr. append var to _slot to access storage variable
              0, // not transfer any ether
              ptr, // Inputs are stored at location ptr
              0x24, // Inputs are 36 bytes long
              ptr,  //Store output over input
              0x20) //Outputs are 32 bytes long

            if eq(result, 0) {
                revert(0, 0)
            }

            answer := mload(ptr) // Assign output to answer var
            mstore(0x40,add(ptr,0x24)) // Set storage pointer to new space
        }

    }

}
```
???
note: this was modifier from the article
1. 4.19 works, 4.18 doesn't
2. Converted Deployed from an abstract contract to a functional one for testing purposes.
---
