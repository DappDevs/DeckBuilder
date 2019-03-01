# Patterns in Solidity contracts


???
TODO: add from https://github.com/ice09/SmartContractDev-Cookbook
---
# DAO

---
# Faucet

---
# Fungible Token patterns

* ERC-20
* ERC-220

---
# ERC-20

```solidity
// ----------------------------------------------------------------------------
// ERC Token Standard #20 Interface
// https://github.com/ethereum/EIPs/blob/master/EIPS/eip-20-token-standard.md
// ----------------------------------------------------------------------------
contract ERC20InterfacePlusTickerInfo {

    function totalSupply() public constant returns (uint);

    function balanceOf(address tokenOwner) public constant returns (uint balance);
    function allowance(address tokenOwner, address spender) public constant returns (uint remaining);

    function transfer(address to, uint tokens) public returns (bool success);

    function approve(address spender, uint tokens) public returns (bool success);
    function transferFrom(address from, address to, uint tokens) public returns (bool success);

    event Transfer(address indexed from, address indexed to, uint tokens);
    event Approval(address indexed tokenOwner, address indexed spender, uint tokens);

    // And optionally "Plus ticker info"
    string public constant name = "Token Name";
    string public constant symbol = "SYM";
    uint8 public constant decimals = 18;  // 18 is the most common number of decimal places
}
```

---
# Transfer

Send value directly: user driven

Problems:

---
# Approve and TransferFrom

Send value indirectly: user initiated, recipient completed

???
https://theethereum.wiki/w/index.php/ERC20_Token_Standard#Approve_And_TransferFrom_Token_Balance

---
# Specifying decimals

Currency math is done in the smallest unit of that currency.
Tokens are atomic units when performing math operations, like wei is to ether.
Ether uses 18 decimal places.
How many a token should use is debatable, but 18 is common.

???
ref: https://openzeppelin.org/api/docs/learn-about-tokens.html

---
# Non-Fungible Token patterns

* ERC-721

---
# Token Curated Registry

The product or output of a token-curated registry is a list.
Useful lists are curated.
A token-curated registry uses an intrinsic token to assign curation rights proportional to the relative token weight of entities holding the token.

There are three user types in a token-curated registry and each has different interests, incentives, and interaction patterns towards the registry. 
* Consumers desire high-quality lists. 
* Candidates desire to be included in such lists. 
* Token holders desire to increase the price of the tokens they hold.

???
ref: https://github.com/skmgoldin/tcr/
ref: https://medium.com/@ilovebagels/token-curated-registries-1-0-61a232f8dac7
---
# Delegated calls

Don't make the user pay. Have them sign the transaction parameters and submit the signature with the data to invoke the contract.

Can be used to, for example, move tokens.

How to incentivize the transactor? (Perhaps with tokens?)

???
ref: https://medium.com/zastrin/how-to-save-your-ethereum-dapp-users-from-paying-gas-for-transactions-abd72f15e14d
ref: https://hackernoon.com/you-dont-need-ether-to-transfer-tokens-f3ae373606e1

---
# Restricting access with modifiers

???
Restricting access is a common pattern for contracts. Note that you can never restrict any human or computer from reading the content of your transactions or your contract’s state. You can make it a bit harder by using encryption, but if your contract is supposed to read the data, so will everyone else.

You can restrict read access to your contract’s state by other contracts. That is actually the default unless you declare make your state variables public.

Furthermore, you can restrict who can make modifications to your contract’s state or call your contract’s functions and this is what this section is about.

The use of function modifiers makes these restrictions highly readable.

ref: https://solidity.readthedocs.io/en/v0.5.1/common-patterns.html
---
# Computing the hash of structured data

`keccak256(abi.encodePacked(a, b))`

NOTE: it is possible to craft a “hash collision” using different function parameter types.
Only compare hashes that have the same "signature" composition to encodePacked.

???
ref: https://solidity.readthedocs.io/en/v0.5.1/units-and-global-variables.html?highlight=encodePacked

---
