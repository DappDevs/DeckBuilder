# Solidity Style Recommendations

???
ref: https://solidity.readthedocs.io/en/v0.5.1/style-guide.html
---
# Contract Component Ordering

Ordering helps readers identify which functions they can call and to find the constructor and fallback definitions easier.

Functions should be grouped according to their visibility and ordered:

    constructor
    fallback function (if exists)
    external
    public
    internal
    private

Within a grouping, place the view and pure functions last.

```solidity
pragma solidity >=0.4.0 <0.6.0;

contract A {
    constructor() public {
        // ...
    }

    // Don’t include a whitespace in the fallback function's declaration
    function() external {
        // ...
    }

    // External functions
    // ...

    // External functions that are view
    // ...

    // External functions that are pure
    // ...

    // Public functions
    // ...

    // Internal functions
    // ...

    // Private functions
    // ...

    ...
}
```

