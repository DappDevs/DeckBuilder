class: center, middle, invert
# Fungible Tokens

---
# ERC20 standard

An ERC20 token is a contract that keeps track of a mapping(address => uint256) that represents a user's balance. These tokens are fungible in that any one token is exactly equal to any other token; no tokens have special rights or behavior associated with them. This makes ERC20 useful for things like a medium of exchange currency, general voting rights, staking, and more.

???
todo: See Token Talk to extract slides
ref: https://openzeppelin.org/api/docs/learn-about-tokens.html
ref: https://medium.com/@dexaran820/previously-described-at-erc20-critical-problems-medium-article-db616c84acc1

---
# OpenZepplin Contracts supporting ERC20 

* IER20 — defines the interface that all ERC20 token implementations should conform to
* ERC20 — the base implementation of the ERC20 interface
* ERC20Detailed — the name(), symbol(), and decimals() getters are optional in the original standard, so ERC20Detailed adds that information to your token.

---
# OpenZepplin Contracts supporting ERC20 cont.

* ERC20Mintable — allows users with the MinterRole to call the mint() function and mint tokens to users. Minting can also be finished, locking the mint() function's behavior.
* ERC20Burnable — if your token can be burned (aka, it can be destroyed), include this one
* ERC20Capped — a type of ERC20Mintable that enforces a maximum cap on tokens; this is really useful if you want to ensure network participants that there will always be a maximum number of tokens, and is useful for making sure that multiple different minting methods don't accidentally create more tokens than you expected.
* ERC20Pausable — allows anyone with the Pauser role to pause the token, freezing transfers to and from users. This is useful if you want to stop trades until the end of a crowdsale, or if you want to have an emergency switch for freezing your tokens in the event of a large bug. Note that there are inherent decentralization tradeoffs when using a pausable token; users may not expect that their unstoppable money can be frozen by a single address!

???
After that, OpenZeppelin provides a few extra properties that you may want depending on your use-case:

---
# OpenZepplin Contracts supporting ERC20 cont.

* SafeERC20 — provides safeTransfer, safeTransferFrom, and safeApprove that are helpful wrappers around the normal ERC20 functions. Using SafeERC20 forces transfers and approvals to succeed, or the entire transaction is reverted.
* TokenTimelock — is an escrow contract for ERC20 tokens that will release some tokens after a specified timeout. This is useful for simple vesting schedules like "advisors get all of their tokens after 1 year". For a better vesting schedule, though, see TokenVesting

???
Finally, if you're working with ERC20 tokens, OpenZeppelin provides some utility contracts:

---
