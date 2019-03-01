# Ethereum Opcode CREATE2

???
ref: https://eips.ethereum.org/EIPS/eip-1014
ref: https://blog.goodaudience.com/one-weird-trick-to-fix-user-on-boarding-d54b7ff9d711
---
# Specification

Adds a new opcode at 0xf5, which takes 4 stack arguments: endowment, memory_start, memory_length, salt. Behaves identically to CREATE, except using keccak256( 0xff ++ address ++ salt ++ keccak256(init_code)))[12:] instead of the usual sender-and-nonce-hash as the address where the contract is initialized at.

The CREATE2 has the same gas schema as CREATE, but also an extra hashcost of GSHA3WORD * ceil(len(init_code) / 32), to account for the hashing that must be performed. The hashcost is deducted at the same time as memory-expansion gas and CreateGas is deducted: before evaluation of the resulting address and the execution of init_code.

    0xff is a single byte,
    address is always 20 bytes,
    salt is always 32 bytes (a stack item).

The preimage for the final hashing round is thus always exactly 85 bytes long.

The coredev-call at 2018-08-10 decided to use the formula above.

---
# Motivation

Allows interactions to (actually or counterfactually in channels) be made with addresses that do not exist yet on-chain but can be relied on to only possibly eventually contain code that has been created by a particular piece of init code. Important for state-channel use cases that involve counterfactual interactions with contracts.

---
# Rationale

* Address formula
 * Ensures that addresses created with this scheme cannot collide with addresses created using the traditional keccak256(rlp([sender, nonce])) formula, as 0xff can only be a starting byte for RLP for data many petabytes long.
 * Ensures that the hash preimage has a fixed size,
* Gas cost
 * Since address calculation depends on hashing the init_code, it would leave clients open to DoS attacks if executions could repeatedly cause hashing of large pieces of init_code, since expansion of memory is paid for only once. This EIP uses the same cost-per-word as the SHA3 opcode.

---
# Problem: bootstrapping new users

You cannot receive Ether without a wallet address.
You can use an external account (private key) but it's like operating under the root account at all times
New users shouldn't be put in immediate Jeoprody of losing thier investment

---
# Example Steps for Ethereum New User Flow (ENUF)

* User generates key pair locally (keys never leave the device)
* Key pair used to generate contract address
* Funds sent to address prior to contract deployment
* Contract deployed after user has funds to at least pay for gas

---
# Centralize key recovery

---
# Centralization!

---
# ENUF - Ethereum New User Flow

???
ref: https://medium.com/@jamesyoung/layer2-first-design-c136fdb059db
---
