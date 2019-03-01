# Solidity

---
# Updates

Solidity is still under rapid development, and as such still sees breaking changes.

---
# 0.4.x -> 0.5.x breaking changes

* Change solidity pragma version to ^0.5.0.
* Add calldata storage keyword to external function complex parameters like arrays that lack an already defined storage location.
* Add memory storage keyword to public, private and internal complex parameters that don’t already have a defined parameter storage location.
* Rename constructor function definition from function ContractName to constructor.
* Add default function visibility of public to those functions which don’t have function visibility explicitly defined.
* Add function visibility of external to fallback functions and all functions of any interface.
* Convert constant function state mutability modifier to view.

See https://solidity.readthedocs.io/en/latest/050-breaking-changes.html for a complete list

???
ref: https://mudit.blog/tool-refactor-your-solidity-0-4-x-code-to-solidity-0-5-x-code/
ref: https://solidity.readthedocs.io/en/latest/050-breaking-changes.html

---
# Compatibility in 0.5.0

Contracts compiled with Solidity v0.5.0 can still interface with contracts and even libraries compiled with older versions without recompiling or redeploying them. Changing the interfaces to include data locations and visibility and mutability specifiers suffices. 

---

