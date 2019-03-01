# OpenLaw

https://openlaw.io/

???

ref: https://media.consensys.net/introducing-openlaw-7a2ea410138b
ref: https://media.consensys.net/openlaw-explainer-the-future-of-law-4ff74a1c683d
ref: https://media.consensys.net/open-sourcing-the-law-the-release-of-openlaw-core-439b53f26f86
ref: https://medium.com/@michaelriceLE/introducing-a-new-project-a-collection-of-legal-solidity-based-smart-contracts-6d6b534e193

---
# Why OpenLaw?

---
# OpenLaw contract lifecycle

* Template: It starts as a template: a legal agreement, marked up using the OpenLaw Markup Language, with empty fields corresponding to various provisions.
* Draft: When the user fills out some, but not all, of the fields, it becomes a draft.
* Contract: Once all fields have been filled out, the draft becomes a contract.
* Verified, unsigned contract: A contract can then be sent to signatories and its signing will be registered and verified on the Ethereum blockchain.
* Verified, signed contract: Signing by all parties will also cause any smart contracts embedded in the document to execute according to the provisions which the user has specified.

???
ref: https://docs.openlaw.io/openlaw-core/

---
# Getting Started

???
ref: https://docs.openlaw.io/openlaw-core/
---
# Using OpenLaw in your project

???
ref: https://media.consensys.net/open-sourcing-the-law-the-release-of-openlaw-core-439b53f26f86

---
# Example: Bill of sale

"A bill of sale is 
* a document that transfers ownership of an asset from a seller to the buyer, 
* a basic agreement for sale of goods, and 
* a sales receipt."

ref: https://definitions.uslegal.com/b/bill-of-sale/

---
# OpenLaw BillOfSale

ref: https://github.com/mrice/solidity-legal-contracts/blob/master/contracts/BillOfSale.sol

---
# Example: Will

---
# OpenLaw Will

ref: https://github.com/mrice/solidity-legal-contracts/blob/master/contracts/Will.sol
---
# Competitors

[Contract Vault](https://www.contractvault.io/)

---
