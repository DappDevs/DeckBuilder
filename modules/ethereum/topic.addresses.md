class: center, middle, invert
name: ADDRESSES-START
# Addresses

???
TODO: migrate material from longer talks here

---
# 2 types
* Externally owned
* Contracts

---
# Private keys

See [Wallets](../build/modules/wallets.md)

???

For example of likelihood of brute forcing / collision, see this generator demo:
https://keys.lol/ethereum/

---
# Generating a new private key

Using RSA:

```shell
ssh-keygen -o -t rsa -b 4096 -C "comment, such as myemail@mydomain.com"
```
???
ref: https://gitlab.com/help/ssh/README#generating-a-new-ssh-key-pair
ref: https://ed25519.cr.yp.to/

---
# Addresses and networks

* Wallet (external) addresses (secured by private key) are network agnostic - holder has access across networks
* Contract (network) addresses are network specific - deployment to the network is required

---
# Generating an address from a private key

1. Generate the public key from the private key
2. Generate the address from the public key

???
ref: https://medium.freecodecamp.org/how-to-create-an-ethereum-wallet-address-from-a-private-key-ae72b0eee27b
---
# Generating an address from a private key
## Generate the public key 1/2

```python
private_key_bytes = codecs.decode(private_key, ‘hex’)
# Get ECDSA public key
key = ecdsa.SigningKey.from_string(private_key_bytes, curve=ecdsa.SECP256k1).verifying_key
key_bytes = key.to_string()
key_hex = codecs.encode(key_bytes, ‘hex’)
```
???
The first thing we need to go is to apply the ECDSA, or Elliptic Curve Digital Signature Algorithm, to our private key. An elliptic curve is a curve defined by the equation y² = x³ + ax + b with chosen a and b. There is a whole family of such curves that are widely known and used. Bitcoin uses the secp256k1 curve. Ethereum uses the same elliptic curve, secp256k1, so the process to get the public key is identical in both cryptocurrencies.

By applying the ECDSA to the private key, we get a 64-byte integer, which is two 32-byte integers that represent X and Y of the point on the elliptic curve, concatenated together.

ref: https://medium.freecodecamp.org/how-to-create-an-ethereum-wallet-address-from-a-private-key-ae72b0eee27b

---
# Generating an address from a private key 
## Generate the address 2/2

```python
public_key_bytes = codecs.decode(public_key, ‘hex’)
keccak_hash = keccak.new(digest_bits=256)
keccak_hash.update(public_key_bytes)
keccak_digest = keccak_hash.hexdigest()
# Take the last 20 bytes
wallet_len = 40
wallet = ‘0x’ + keccak_digest[-wallet_len:]
```

???
Apply Keccak-256 to the public key and then take the last 20 bytes of the result.
Add 0x to the beginning to denote an address in hexidecimal form.

unlike Bitcoin, Ethereum has the same addresses on both the main and all test networks.

---
# Address checksums

Originally there were none, unlike in Bitcoin. They were added in 2016 with EIP-55.

Adding a checksum to the Ethereum wallet address makes it case-sensitive.

```
# All caps
0x52908400098527886E0F7030069857D2E4169EE7
0x8617E340B3D01FA5F11F306F4090FD50E238070D
# All Lower
0xde709f2102306220921060314715629080e2fb77
0x27b1fdb04752bbc536007a920d24acb045561c26
# Normal
0x5aAeb6053F3E94C9b9A09f33669435E7Ef1BeAed
0xfB6916095ca1df60bB79Ce92cE3Ea74c37c5d359
0xdbF03B407c01E7cD3CBea99509d93f8DDDC8C6FB
0xD1220A0cf47c7B9Be7A2E6BA89F429762e7b9aDb
```
---
# Address checksum generation
1. First, you need to get the Keccak-256 hash of the address. Note that this address should be passed to the hash function without the 0x part.
2. Second, you iterate over the characters of the initial address. If the ith byte of the hash is greater than or equal to 8, you convert the ith address’s character to uppercase, otherwise you leave it lowercase.
3. Add the 0x back

```javascript
const createKeccakHash = require('keccak')

function toChecksumAddress (address) {
  address = address.toLowerCase().replace('0x', '')
  var hash = createKeccakHash('keccak256').update(address).digest('hex')
  var ret = '0x'

  for (var i = 0; i < address.length; i++) {
    if (parseInt(hash[i], 16) >= 8) {
      ret += address[i].toUpperCase()
    } else {
      ret += address[i]
    }
  }
  return ret
}

var hash = createKeccakHash('keccak256').update(
    Buffer.from(address.toLowerCase(), 'ascii') ).digest()
```

???
“on average there will be 15 check bits per address, and the net probability that a randomly generated address if mistyped will accidentally pass a check is 0.0247%.”
ref: https://github.com/ethereum/EIPs/blob/master/EIPS/eip-55.md

---
