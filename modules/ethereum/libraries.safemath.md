# The Safemath.sol library

---
# Purpose

---
# Function overview

Provides functions to replace 

    * : mul
    / : div
    + : add
    - : sub
    % : mod

Applies to uint, which is to say uint256.

???

https://openzeppelin.org/api/docs/math_SafeMath.html
https://medium.com/coinmonks/practicing-safemath-with-solidity-and-openzeppelin-cde4cba9ce39

---
# Get the library

Install as part of OpenZepplin:
`npm install openzepplin-solidity`

???
Copy it directly:

---
# SafeMath sample

```solidity
pragma solidity ^0.4.24;
 
import '../node_modules/contracts/openzeppelin-solidity/contracts/math/SafeMath.sol';
// import './SafeMath.sol';

contract SampleMath {

  using SafeMath for uint;
  uint public value;

  constructor() public {
  }

  function add (uint num) public {
    value = value + num;
  }

  function add_safe (uint num) public {
    value = value.add(num);
  }
  
}
```

---
# Other SafeMath versions for different sizes

## SafeMath8

```solidity
library SafeMath8 {

    function mul(uint8 a, uint8 b) internal pure returns (uint8) {
      if (a == 0) {
        return 0;
      }
      uint8 c = a * b;
      assert(c / a == b);
      return c;
    }

    function div(uint8 a, uint8 b) internal pure returns (uint8) {
      // assert(b > 0); // Solidity automatically throws when dividing by 0
      uint8 c = a / b;

      // assert(a == b * c + a % b); // There is no case in which this doesn’t hold
      return c;
    }

    function sub(uint8 a, uint8 b) internal pure returns (uint8) {
      assert(b <= a);
      return a — b;
    }

    function add(uint8 a, uint8 b) internal pure returns (uint8) {
      uint8 c = a + b;
      assert(c >= a);
      return c;
    }
}
```
