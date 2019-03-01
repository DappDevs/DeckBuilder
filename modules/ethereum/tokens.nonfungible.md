class: invert, middle, center
# Non-Fungible Tokens

---
# ERC721 Standard

ERC721 is a standard for representing ownership that is non-fungible aka, each token has unique properties.

???
todo: See Token Talk to extract slides
ref: https://openzeppelin.org/api/docs/learn-about-tokens.html
ref: https://github.com/ethereum/EIPs/blob/master/EIPS/eip-721.md
ref: https://nakamotoinstitute.org/shelling-out/

---
# "NFT" Word Choice

"NFT" was satisfactory to nearly everyone surveyed and is widely applicable to a broad universe of distinguishable digital assets. We recognize that "deed" is very descriptive for certain applications of this standard (notably, physical property).

Alternatives considered: distinguishable asset, title, token, asset, equity, ticket

???
ref: https://github.com/ethereum/EIPs/blob/master/EIPS/eip-721.md

---
# OpenZepplin Contracts supporting ERC721 

* ERC721 — the full implementation of ERC721, and the contract you'll most likely be inheriting from. Interfaces are part of the IERC721.sol file:
 * IERC721
 * IERC721Metadata
 * IERC721Enumerable
* IERC721Receiver — in some cases, it's beneficial to be 100% certain that a contract knows how to handle ERC721 tokens (imagine sending an in-game item to an exchange address that can't send it back!). When using safeTransferFrom(), the contract checks to see that the receiver is an IERC721Receiver, which implies that it knows how to handle ERC721 tokens. If you're writing a contract that accepts 721 tokens, you'll want to implement this interface.
* ERC721Mintable — like the ERC20 version, ERC721Mintable allows addresses with the Minter role to mint tokens.
* ERC721Pausable — like the ERC20 version, ERC721Pausable allows addresses with the Pauser role to freeze transfers of tokens.

???

https://openzeppelin.org/api/docs/learn-about-tokens.html

---
# Transfer 

ERC-721 standardizes a safe transfer function safeTransferFrom (overloaded with and without a bytes parameter) and an unsafe function transferFrom. Transfers may be initiated by:

* The owner of an NFT
* The approved address of an NFT
* An authorized operator of the current owner of an NFT


Additionally, an authorized operator may set the approved address for an NFT. This provides a powerful set of tools for wallet, broker and auction applications to quickly use a large number of NFTs.

---
# ERC-165 Standard Interface Detection

Used to expose the interfaces that a ERC-721 smart contract supports and avoid ill-equipped recipient contracts.

???
ref: http://erc721.org/
---
exclude: true
# Extensions

---
# Utility libraries

* [OpenZepplin utils/Address](https://github.com/OpenZeppelin/openzeppelin-solidity/blob/master/contracts/utils/Address.sol) - exposes
 * isContract(address) internal view returns (bool) 
* [OpenZepplin utils/SafeMath](https://github.com/OpenZeppelin/openzeppelin-solidity/blob/master/contracts/math/SafeMath.sol) - exposes
 * mul(int, int) , mul(uint, uint)
 * div(int, int) , div(uint, uint)
 * add(int, int) , add(uint, uint)
 * sub(int, int) , sub(uint, uint)
 * mod(unit, unit) 

???
https://github.com/OpenZeppelin/openzeppelin-solidity/blob/master/contracts/utils/Address.sol
---
# Library: Address

```solidity
library Address {
    /**
     * Returns whether the target address is a contract
     * @dev This function will return false if invoked during the constructor of a contract,
     * as the code is not actually created until after the constructor finishes.
     * @param account address of the account to check
     * @return whether the target address is a contract
     */
    function isContract(address account) internal view returns (bool) {
        uint256 size;
        // XXX Currently there is no better way to check if there is a contract in an address
        // than to check the size of the code at that address.
        // See https://ethereum.stackexchange.com/a/14016/36603
        // for more details about how this works.
        // TODO Check this again before the Serenity release, because all addresses will be
        // contracts then.
        // solium-disable-next-line security/no-inline-assembly
        assembly { size := extcodesize(account) }
        return size > 0;
    }
}
```
---
