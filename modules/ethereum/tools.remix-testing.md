name: TOOLS.REMIX-TESTING
# Testing with Remix

???
https://github.com/ethereum/remix/tree/master/remix-tests

---
# IDE

The remix IDE includes testing functionality via a javascript library they maintain.
Functionality is exposed directly through the remote hosted web interface, local web interfaces, command line utilities, and scripts.

???

---
# npm module remix-tests

Remix includes a testing module

npm module remix-tests

---
# Installing & using locally
On the command line:
```shell
npm -g install remix-tests
```

???
ref: https://github.com/ethereum/remix/tree/master/remix-tests

---
# Command line usage

Remix-Tests will assume the tests will files whose name end with "_test.sol". e.g simple_storage_test.sol

```shell
remix-tests PATH/TO/YOUR-CONTRACT_test.sol
```

???
* A directory with tests files remix-tests examples/
* A test file remix-tests examples/simple_storage_test.sol

ref: https://github.com/ethereum/remix/tree/master/remix-tests

---
# Using directly in javascript
Inside your javascript:
```javascript
const RemixTests = require('remix-tests');

remixTests.runTest(contractName, contractObj, testCallback, resultsCallback)
```

---
# Test file structure

```solidity
pragma solidity ^0.4.7;
import "remix_tests.sol"; // injected by remix-tests
import "./simple_storage.sol";

contract MyTest {
  SimpleStorage foo;
  uint i = 0;

  function beforeAll() {
    foo = new SimpleStorage();
  }

  function beforeEach() {
    if (i == 1) {
      foo.set(200);
    }
    i += 1;
  }

  function initialValueShouldBe100() public {
    Assert.equal(foo.get(), 100, "initial value is not correct");
  }

  function initialValueShouldBe200() public constant returns {
    return Assert.equal(foo.get(), 200, "initial value is not correct");
  }

}
```

???
Other example of a test file: https://github.com/su-squares/ethereum-contract/blob/e542f37d4f8f6c7b07d90a6554424268384a4186/tests/AccessControl_test.sol

---
# Available special functions:

* beforeEach() - runs before each test
* beforeAll() - runs before all tests

Assert library
```javascript
// Available functions 	Supported types
Assert.ok() 	        bool
Assert.equal() 	        uint, int, bool, address, bytes32, string
Assert.notEqual() 	    uint, int, bool, address, bytes32, string
Assert.greaterThan() 	uint, int
Assert.lesserThan() 	uint, int
```

---
# Demo Tests

The Demo contract in remix also comes with some demo tests. Let's run them and see how it works.

---
# Adding Tests

---
# Running Tests

---
# Recording Tests

---

