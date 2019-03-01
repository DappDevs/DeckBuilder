# Web of Trust

---
# Trust in Authentication

How do you know if you can trust someone to be who they say they are?

---
# Trusted Introducers

---
# Web of trust

The web of trust concept was first put forth by PGP creator Phil Zimmermann in 1992 in the manual for PGP version 2.0:

As time goes on, you will accumulate keys from other people that you may want to designate as trusted introducers. Everyone else will each choose their own trusted introducers. And everyone will gradually accumulate and distribute with their key a collection of certifying signatures from other people, with the expectation that anyone receiving it will trust at least one or two of the signatures. This will cause the emergence of a decentralized fault-tolerant web of confidence for all public keys. 

???
ref: https://en.wikipedia.org/wiki/Web_of_trust
---
# Key Signing Parties

All OpenPGP-compliant implementations include a certificate vetting scheme to assist with this; its operation has been termed a web of trust. OpenPGP identity certificates (which include one or more public keys along with owner information) can be digitally signed by other users who, by that act, endorse the association of that public key with the person or entity listed in the certificate. This is commonly done at key signing parties. 

???
ref: https://en.wikipedia.org/wiki/Web_of_trust
ref: https://en.wikipedia.org/wiki/Key_signing_party
---
# Public key fingerprint

In public-key cryptography, a public key fingerprint is a short sequence of bytes used to identify a longer public key. Fingerprints are created by applying a cryptographic hash function to a public key. Since fingerprints are shorter than the keys they refer to, they can be used to simplify certain key management tasks. In Microsoft software, "thumbprint" is used instead of "fingerprint". 

???
ref: https://en.wikipedia.org/wiki/Public_key_fingerprint

---
# Key-signing protocols

???
ref: https://en.wikipedia.org/wiki/Zimmermann%E2%80%93Sassaman_key-signing_protocol
ref: https://web.archive.org/web/20120209185153/http://www.keysigning.org/methods/sassaman-efficient
---
# Ethereum addresses are thumbprints

They are shortened products of hashing public keys, and they are "owned" by all who possess the private key.

---
# Ethereum contract signing protocol

Let's use a contract to sign off on eachother's addresses.

What we need:

A contract with a sign() function. Sign() should register the address calling it along with a text parameter for storing data. Let's also add a parameter to describe what that data is, a heading.
Each of us should call that function and provide our name, along with the "Name" heading.

Now, you need to prove to your fellow students that this is really your name and your address.

What is to prevent someone from impersonating you?

What is to stop you from making up a name?

Let's add another function, verify(), with which we can add our support to a signature. This is the equivalent of saying we are a "trusted introducer" for that address, because we are saying that we have met with and verified the identity of the address holder. The verify function will need the address, the name they provided, and the "Name" heading. It will register our address as either confirming or denying the assertion of authentication: we agree or disagree with the claim being made
that the name matches the address. 

---
# What else?

We made the data field open for use with anything we want to describe. Of course
