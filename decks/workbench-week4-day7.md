exclude:true
class: module-header ethereum/solidity.dev-env-vscode
---
# Setting up VSCode for Ethereum development

???
ref: https://medium.com/edgefund/ethereum-development-on-windows-part-1-da260f6a6c06
ref: https://davidburela.wordpress.com/2016/11/18/configuring-visual-studio-code-for-ethereum-blockchain-development/
ref: https://www.reddit.com/r/ethdev/comments/71c5zb/what_does_your_dev_environment_look_like/

---
# Solidity

---
# VSCode-solidity package
Extension name "solidity"
https://github.com/juanfranblanco/vscode-solidity/

---
# Installing VSCode
https://code.visualstudio.com/

# Install VSCode extensions
* Go into the extensions section
* Install these plugins:
 * solidity
 * Material Icon Theme

# Enable icon theme
File –> Preferences –> File Icon Theme

---
# Editorconfig
VSCode comes equipped to handle Editorconfig files:

https://editorconfig.org/

---
# Geth

???
ref: https://ethereum.stackexchange.com/questions/41001/how-to-build-and-debug-geth-with-visual-studio-code

---
# solhint
The Solhint Solidity linter 

VSCode extension name solidity-solhint

https://github.com/protofire/solhint

This extension supports .solhint.json configuration file. It must be placed to project root directory. After any changes in .solhint.json it will be synchronized with current IDE configuration.


---
# solium

An alternative to solhint

---
# Solidity-coverage

ref: https://blog.colony.io/code-coverage-for-solidity-eecfa88668c2

---
## Install Solidity-coverage

https://github.com/sc-forks/solidity-coverage

$ npm install --save-dev solidity-coverage

## Run
### Option 1

$ ./node_modules/.bin/solidity-coverage

### Option 2

$ $(npm bin)/solidity-coverage

---

exclude:true
class: module-header ethereum/tools.remix-testing
---
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

