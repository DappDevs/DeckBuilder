name: TOOLS.TRUFFLE-TESTING
# Testing in Truffle

---
# Truffle uses Mocha & Chai

~[Mocha & Chai](../media/mocha-chai.png)

---
# Basic testing with just the mocha test framework

~[Mocha logo](../media/logo-mocha.png)

Set up testing
* `npm init`
* `npm install mocha`
* `mkdir test`
* `touch test/ContractName.test.js`
* `npm run test`


???

Other invocations:

`npm test`
`./node_modules/mocha/bin/mocha`
`mocha test`
`mocha`

---
# Setting up mocha as your test framework

In package.json, point the "test" scripts entry to mocha. (This is done automatically when installing mocha locally via npm.)

```javascript
  "scripts": {
    "test": "mocha"
  },
```

Mocha tries to find test files in the `test` directory by default.

???

./node_modules/mocha/bin/mocha test/test.test.js

This runs mocha locally, which may or may not do anything...

---
# Mocha features

* describe() - grouping of tests
* it() - test cases from Chai

### Test runner hooks
* before() - global setup
* beforeEach() - individual test setup
* afterEach() - indivdual test cleanup
* after() - global cleanup

---
# Writing tests with the Chai Assertion Library

~[Chai logo](../media/chai-mocha.png)

"Chai is a BDD / TDD assertion library for node and the browser that can be delightfully paired with any javascript testing framework."

https://www.chaijs.com/

---
# Getting started with Chai

https://www.chaijs.com/guide/

???
ref: https://www.chaijs.com/guide/
ref: https://mherman.org/blog/testing-node-js-with-mocha-and-chai/

---
# Assertion styles

Assert style interface:
```javascript
var assert = require('chai').assert
  , foo = 'bar'
  , beverages = { tea: [ 'chai', 'matcha', 'oolong' ] };

assert.typeOf(foo, 'string'); // without optional message
assert.typeOf(foo, 'string', 'foo is a string'); // with optional message
assert.equal(foo, 'bar', 'foo equal `bar`');
assert.lengthOf(foo, 3, 'foo`s value has a length of 3');
assert.lengthOf(beverages.tea, 3, 'beverages has 3 types of tea');
```

```javascript
var expect = require('chai').expect
  , foo = 'bar'
  , beverages = { tea: [ 'chai', 'matcha', 'oolong' ] };

expect(foo).to.be.a('string');
expect(foo).to.equal('bar');
expect(foo).to.have.lengthOf(3);
expect(beverages).to.have.property('tea').with.lengthOf(3);
```

```javascript
var should = require('chai').should() //actually call the function
  , foo = 'bar'
  , beverages = { tea: [ 'chai', 'matcha', 'oolong' ] };

foo.should.be.a('string');
foo.should.equal('bar');
foo.should.have.lengthOf(3);
beverages.should.have.property('tea').with.lengthOf(3);
```

???
https://www.chaijs.com/guide/styles/

---
# Handling Async

Use the chai module chai-as-promised to facilitate testing of asynchronous functions.

https://github.com/domenic/chai-as-promised


---
# Interface testing

Selenium using chai-webdriver

```javascript
chai.use(chaiWebdriver(driver));
driver.get('http://chaijs.com/');
expect('nav h1').dom.to.contain.text('Chai');
expect('#node .button').dom.to.have.style('float', 'left');
```
