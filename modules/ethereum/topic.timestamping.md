class: center, middle, invert
# Timestamping

---
# Trusted Timestamping

Trusted timestamping is the process of securely keeping track of the creation and modification time of a document. Security here means that no one—not even the owner of the document—should be able to change it once it has been recorded provided that the timestamper's integrity is never compromised. 

Anyone trusting the timestamper can then verify that the document was not created after the date that the timestamper vouches.

???
Consider 
ref: https://en.wikipedia.org/wiki/Trusted_timestamping

---
# Why timestamp?

Previously, it was used as a means of creating a proof of a discovery without revealing the discovery.

Now, state officials concerned about cyber warfare are guarding against the threat of data tampering.

“I believe the next push on the envelope here is going to be the manipulation or deletion of data, which will of course compromise its integrity,” director of National Intelligence James Clapper told lawmakers on the House Intelligence Committee

???
ref: https://defensesystems.com/articles/2015/10/08/lockheed-guardtime-anti-data-manipulation.aspx

---
# Anagrams: The history of trusted timestamping

* Galileo first published his discovery of the phases of Venus in the anagram form.
 * .red["Haec immatura a me iam frustra leguntur o.y."] or "These are at present too young to be read by me"
 * .red["Cynthiae figuras aemulatur mater amorum"] or "The mother of love imitates the shape of Cynthia"

--
* when Robert Hooke discovered Hooke's law in 1660, he did not want to publish it yet, but wanted to be able to claim priority. So he published the anagram:
 * .red[ceiiinosssttuv]
 * .red[ut tensio sic vis] (Latin for "as is the extension, so is the force").

--
* Sir Isaac Newton, in responding to questions from Leibniz in a letter in 1677, concealed the details of his "fluxional technique" with an anagram

???
ref: https://www.physics.rutgers.edu/~croft/ANAGRAM.htm

---
class:bigpic
# Hashes: The state of trusted timestamping

![[Hashlinked timestamps]](../media/hashlink-timestamps.png)

???
Hashes have been recognized as superior because they allow the proving of an arbitrarily large size piece of input, and do not reveal any information that would help with guessing.

---
class: tallpic
# Haber and Stornetta: Surety
![Surety](../media/surety-timestamp.jpg)

???
The world’s oldest blockchain predates Bitcoin by 13 years and it’s been hiding in plain sight, printed weekly in the classified section of one of the world’s most widely circulated newspapers: The New York Times.

Blockchains, insofar as they constitute a chronological chain of hashed data, were first invented by the cryptographers Stuart Haber and Scott Stornetta in 1991 and their use cases were a lot less ambitious. Instead, Haber and Stornetta envisioned the technology as a way to timestamp digital documents to verify their authenticity.

Surety’s main product is called “AbsoluteProof” that acts as a cryptographically secure seal on digital documents. Its basic mechanism is the same described in Haber and Stornetta’s original paper. Clients use Surety’s AbsoluteProof software to create a hash of a digital document, which is then sent to Surety’s servers where it is timestamped to create a seal. This seal is a cryptographically secure unique identifier that is then returned to the software program to be stored for the customer.

At the same time, a copy of that seal and every other seal created by Surety’s customers is sent to the AbsoluteProof “universal registry database,” which is a “hash-chain” composed entirely of Surety customer seals. This creates an immutable record of all the Surety seals ever produced, so that it is impossible for the company or any malicious actor to modify a seal. But it leaves out an important part of the blockchain equation: Trustlessness. How can anyone trust that Surety’s internal records are legit?

ref: https://www.anf.es/pdf/Haber_Stornetta.pdf
ref: https://motherboard.vice.com/en_us/article/j5nzx4/what-was-the-first-blockchain

---
