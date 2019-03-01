# NatSpec
## Ethereum Natural Specification Format

???
ref: https://github.com/ethereum/wiki/wiki/Ethereum-Natural-Specification-Format
---
# What is NatSpec?

Solidity contracts can have a special form of comments that form the basis of the Ethereum Natural Specification Format.

```solidity
pragma solidity ^0.4.19;

/// @title A simulator for Bug Bunny, the most famous Rabbit
/// @author Warned Bros
/// @notice You can use this contract for only the most basic simulation
/// @dev All function calls are currently implement without side effects
contract BugsBunny {
    /// @author Bob Clampett
    /// @notice Determine if Bugs will accept `(_food)` to eat
    /// @dev String comparison may be inefficient
    /// @param _food The name of a food to evaluate (English)
    /// @return true if Bugs will eat it, false otherwise
    function doesEat(string _food) external pure returns (bool) {
        return keccak256(_food) == keccak256("carrot");
    }
}
```
---
# NatSpec comments

An extension of the native comment formats.
They are written with a triple slash (///) or a double asterisk block(/** ... */) and they should be used directly above function declarations or statements. You can use Doxygen-style tags inside these comments to document functions, annotate conditions for formal verification, and provide a confirmation text which is shown to users when they attempt to invoke a function.

```
/// single line: comments here until end of line
```

```
/** multi-line: comments here
    and mostly here
    but also even here */
```

Example: 
```
pragma solidity >=0.4.0 <0.6.0;

/** @title Shape calculator. */
contract ShapeCalculator {
    /** @dev Calculates a rectangle's surface and perimeter.
      * @param w Width of the rectangle.
      * @param h Height of the rectangle.
      * @return s The calculated surface.
      * @return p The calculated perimeter.
      */
    function rectangle(uint w, uint h) public pure returns (uint s, uint p) {
        s = w * h;
        p = 2 * (w + h);
    }
}
```
???
ref: https://solidity.readthedocs.io/en/v0.5.1/layout-of-source-files.html

---
# Tags

| Tag  | Description  | Context |
|---|---|---|
| @title  | A title that should describe the contract  | contract, interface |
| @author  | The name of the author of the contract  | contract, interface, function |
| @notice  | Explain to a user what a function does  | contract, interface, function |
| @dev  | Explain to a developer any extra details  | contract, interface, function |
| @param  | Documents a parameter just like in doxygen (must be followed by parameter name)  | function |
| @return  | Documents the return type of a contract's function  | function |

---
# Dynamic expressions

In function documentation, you may use dynamic expressions for all tags. Example:

```solidity
/// @notice Send `(valueInmGAV / 1000).fixed(0,3)` GAV from the account of 
/// `message.caller.address()` to an account accessible only by `to.address()`
function send(address to, uint256 valueInmGAV) {
...
```

If a user (address 0x2334) attempts to call this function with a to address of 0x0 and valueInmGAV of 4,135 then this will render to the user as:
```
Send 4.135 GAV from the account of 0.2334 to an account accessible only by 0x0
```
Use any Javascript/Paperscript expression encapsulated in backticks as per the above example. This script will be run on a EVM Javascript environment that has access to message and all parameters.

---
# Output formats

* User documentation
```shell
$ solc contract.sol --userdoc
```

* Developer documentation
```shell
$ solc contract.sol --devdoc
```

---
# Example

???
ref: https://github.com/ethereum/wiki/wiki/Natspec-Example
---
