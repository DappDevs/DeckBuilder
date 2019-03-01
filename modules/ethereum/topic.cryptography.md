class: center, middle, invert
# A short history of Cryptography

???
ref: https://en.wikipedia.org/wiki/History_of_cryptography

---
exclude: true
# Vocabulary

* Algorithm
* Asymmetric
* Authentication
* Ciphertext
* Data
* Decrypt
* Decryption function
* Elliptical curve encryption
* Encrypt
* Encryption
* Encryption function
* Hash
* Hashing function
* Information
* One-way function
* Password
* Private Key
* Processing
* Public Key
* Secret
* Steganography
* Symmetric
* Trust
* Two-way function
* Zero knowledge proof

---
class:img-50
# Arthshashtra

![Chanyanka](../media/Chanakya.jpg)

The Arthashastra ("the science of politics") is an ancient Indian treatise on statecraft, economic policy and military strategy, written in Sanskrit.
A classic work on statecraft written by Kautalya, describes the espionage service in India and mentions giving assignments to spies in "secret writing"

???
Translations of the title:
* The Science of Material Gain
* Science of Politics
* Science of Political Economy

The ideas expressed by Kautilya in the Arthashastra are completely practical and unsentimental. Kautilya openly writes about controversial topics such as assassinations, when to kill family members, how to manage secret agents, when it is useful to violate treaties, and when to spy on ministers.

ref: https://en.wikipedia.org/wiki/Arthashastra
ref: https://access.redhat.com/blogs/766093/posts/1976023
ref: https://www.ancient.eu/Arthashastra/

---
class:img-50
# Ciphers

![Pigpen cipher](../media/2000px-Pigpen_cipher_key.svg.png)

In cryptography, a cipher (or cypher) is an algorithm for performing encryption or decryption—a series of well-defined steps that can be followed as a procedure. 

???
ref: https://en.wikipedia.org/wiki/Cipher

---
# Caesar cipher

```
plaintext:  defend the east wall of the castle
ciphertext: efgfoe uif fbtu xbmm pg uif dbtumf
```

Around 100 BC, Julius Caesar was known to use a form of encryption to convey secret messages to his army generals posted in the war front. This substitution cipher, known as Caesar cipher, is perhaps the most mentioned historic cipher in academic literature.

It is a type of substitution cipher in which each letter in the plaintext is 'shifted' a certain number of places down the alphabet.

ROT13 is an example of a similar "shifting" cipher.

???
The Caesar cipher is one of the earliest known and simplest ciphers. It is a type of substitution cipher in which each letter in the plaintext is 'shifted' a certain number of places down the alphabet. For example, with a shift of 1, A would be replaced by B, B would become C, and so on. The method is named after Julius Caesar, who apparently used it to communicate with his generals.

More complex encryption schemes such as the Vigenère cipher employ the Caesar cipher as one element of the encryption process. The widely known ROT13 'encryption' is simply a Caesar cipher with an offset of 13. The Caesar cipher offers essentially no communication security, and it will be shown that it can be easily broken even by hand.

ref: http://practicalcryptography.com/ciphers/caesar-cipher/
ref: https://en.wikipedia.org/wiki/Caesar_cipher

---
# Keys

The operation of a cipher usually depends on a piece of auxiliary information, called a key (or, in traditional NSA parlance, a cryptovariable). The encrypting procedure is varied depending on the key, which changes the detailed operation of the algorithm. A key must be selected before using a cipher to encrypt a message. Without knowledge of the key, it should be extremely difficult, if not impossible, to decrypt the resulting ciphertext into readable plaintext.

???
ref: https://en.wikipedia.org/wiki/Cipher

---
class:tallpic
# Alberti Cipher

![Alberti Cipher](../media/Alberti_cipher_disk.JPG)

???
Leon Battista Alberti invented the first polyalphabetic cipher, which is now known as the Alberti cipher, and machine-assisted encryption using his Cipher Disk. The polyalphabetic cipher was, at least in principle, for it was not properly used for several hundred years, the most significant advance in cryptography since before Julius Caesar's time. Cryptography historian David Kahn titles him the "Father of Western Cryptography", pointing to three significant advances in the field which can be attributed to Alberti: "the earliest Western exposition of cryptanalysis, the invention of polyalphabetic substitution, and the invention of enciphered code."David Kahn (1967). The codebreakers: the story of secret writing. New York: MacMillan.

ref: https://en.wikipedia.org/wiki/Leon_Battista_Alberti
ref: https://en.wikipedia.org/wiki/Alberti_cipher
ref: https://en.wikipedia.org/wiki/Polyalphabetic_cipher

---
class:tallpic
# Blaise de Vigenère

![Viginere](../media/Vigenere.jpg)

???
During the 16th century, Vigenere designed a cipher that was supposedly the first cipher which used an encryption key. In one of his ciphers, the encryption key was repeated multiple times spanning the entire message, and then the cipher text was produced by adding the message character with the key character modulo 26. (Modulo, or mod, is a mathematical expression in which you calculate the remainder of a division when one number is divided by another.) As with the Caesar cipher, Vigenere's cipher can also easily be broken; however, Vigenere's cipher brought the very idea of introducing encryption keys into the picture, though it was poorly executed. Comparing this to Caesar cipher, the secrecy of the message depends on the secrecy of the encryption key, rather than the secrecy of the system.

ref: https://en.wikipedia.org/wiki/Vigen%C3%A8re_cipher
ref: https://en.wikipedia.org/wiki/Giovan_Battista_Bellaso

---
exclude: true
# The Great Cipher

???
Antoine Rossignol's cryptographic skills became known when in 1626 an encrypted letter was taken from a messenger leaving the city of Réalmont, controlled by the Huguenots and surrounded by the French army. The letter told that the Huguenots would not be able to hold on to the city for much longer, and by the end of the day Rossignol had successfully deciphered it. The French returned the letter with the deciphered message, forcing the Huguenots to surrender. He and his son, Bonaventure Rossignol, were soon appointed to prominent roles in the court.

The basis of the code cracked by Bazeries was a set of 587 numbers that stood for syllables. There were other variations, and Louis XIV's overseas ministers were sent different code sheets that encrypted not only syllables but also letters and words. To counter frequency analysis, some number sets were "nulls" meant to be ignored by the intended recipient. Others were traps, including a codegroup that meant to ignore the previous codegroup.

ref: https://en.wikipedia.org/wiki/Great_Cipher
ref: https://en.wikipedia.org/wiki/Rossignols

---
class:tallpic
# Jefferson's Disk aka Bazeries cylinder

![Jefferson's Cipher Disk](../media/Jefferson's_disk_cipher.jpg)

???
The Jefferson disk, or wheel cypher as Thomas Jefferson named it, also known as the Bazeries Cylinder, is a cipher system using a set of wheels or disks, each with the 26 letters of the alphabet arranged around their edge. The order of the letters is different for each disk and is usually scrambled in some random way. Each disk is marked with a unique number. A hole in the centre of the disks allows them to be stacked on an axle. The disks are removable and can be mounted on the axle in any order desired. The order of the disks is the cipher key, and both sender and receiver must arrange the disks in the same predefined order. Jefferson's device had 36 disks. [Kahn, p. 194]

Once the disks have been placed on the axle in the agreed order, the sender rotates each disk up and down until a desired message is spelled out in one row. Then the sender can copy down any row of text on the disks other than the one that contains the plaintext message. The recipient simply has to arrange the disks in the agreed-upon order, rotate the disks so they spell out the encrypted message on one row, and then look around the rows until he sees the plaintext message, i.e. the row that's not complete gibberish. There is an extremely small chance that there would be two readable messages, but that can be checked quickly by the person coding.

The Bazeries cylinder was the basis for the US "M-94" cipher machine, which was introduced in 1922 and derived from work by Parker Hitt. In 1914, Hitt had experimented with the Bazeries device, building one prototype using slides on a wooden frame, with the cipher alphabets printed twice consecutively on the slides, and then another using disks of wood. He forwarded his experiments up the Signal Corps chain of command, and in 1917 Joseph Mauborgne refined the scheme, with the final result being the M-94. 

ref: https://en.wikipedia.org/wiki/Jefferson_disk

---
class:tallpic
# Decoder rings

![Decoder ring](../media/Captain-midnight-decoder.jpg)

???
The most well-known example started in 1934 with the Ovaltine company's sponsored radio program Little Orphan Annie.
These rings were not wearable, but rather, used the circular nature to alter the initial state and mapping.

ref: https://en.wikipedia.org/wiki/Secret_decoder_ring

---
# Whence cryptography

Modern cryptography dates back to around 1900, in military signal intelligence. Until about the 1970s, cryptography was primarily practiced in secret by military and spy agencies. However, that changed when two publications brought it out of the closet into public awareness: the US government publication of the Data Encryption Standard (DES), a block cipher which became very widely used; and the first publicly available work on public-key cryptography, by Whitfield Diffie and Martin Hellman.

???
ref: https://cryptoanarchy.wiki/getting-started/what-is-a-cypherpunk

---
# Public-key cryptography

In his 1874 book The '''Principles of Science''', William Stanley Jevons wrote:

"Can the reader say what two numbers multiplied together will produce the number 8616460799? I think it unlikely that anyone but myself will ever know."

???
ref: https://en.wikipedia.org/wiki/Public-key_cryptography

question: What is signifigance about the difficulty of factoring a large number to public key cryptography?

---
# Signals Intelligence

The interception of messages, and decyphering/interpreting of them if encrypted or encoded.
Part of military intelligence.

---
# Electronic Interception

Electronic interception appeared as early as 1900, during the Boer War of 1899-1902. The British Royal Navy had installed wireless sets produced by Marconi on board their ships in the late 1890s and the British Army used some limited wireless signalling. The Boers captured some wireless sets and used them to make vital transmissions. Since the British were the only people transmitting at the time, no special interpretation of the signals that were intercepted by the British was necessary.

The birth of signals intelligence in a modern sense dates from the Russo-Japanese War of 1904-1905. As the Russian fleet prepared for conflict with Japan in 1904, the British ship HMS Diana stationed in the Suez Canal intercepted Russian naval wireless signals being sent out for the mobilization of the fleet, for the first time in history.

???
ref: https://en.wikipedia.org/wiki/Signals_intelligence

---
class:tallpic
# The Enigma Machines

![Enigma Machine](../media/enigma-machine.jpg)

???

The Enigma machines are a series of electro-mechanical rotor cipher machines, mainly developed and used in the early- to mid-20th century to protect commercial, diplomatic and military communication. Enigma was invented by the German engineer Arthur Scherbius at the end of World War I. Early models were used commercially from the early 1920s, and adopted by military and government services of several countries, most notably Nazi Germany before and during World War II. Several different Enigma models were produced, but the German military models, having a plugboard, were the most complex. Japanese and Italian models were also in use.

Around December 1932, Marian Rejewski, a Polish mathematician and cryptanalyst, while working at the Polish Cipher Bureau, used the theory of permutations and flaws in the German military message encipherment procedures to break the message keys of the plugboard Enigma machine. Rejewski achieved this result without knowledge of the wiring of the machine, so the result did not allow the Poles to decrypt actual messages. The French spy Hans-Thilo Schmidt obtained access to German cipher materials that included the daily keys used in September and October 1932. Those keys included the plugboard settings.

ref: https://en.wikipedia.org/wiki/Enigma_machine

---
# How Enigma Worked

To encrypt your message with an Enigma machine, you would simply type a letter and write down which corresponding letter lit up on the alphabet. For each key press, the rotors would move and the message was treated as one, so you had to send the full beginning-to-end message to your recipient. The encryption system attempted to get around frequency analysis by first scrambling the letters with the plug board (pictured frontmost) – which switched pairs of letters around adding a significant amount of complexity, and then encrypting the message with the rotors, which moved for each character in the message. This means that you could type the same letter continuously, but Enigma would output a bunch of different individual letters.

To decode your message, you would need to know what rotor and plug board settings were used to encrypt the message. The Germans accomplished this with monthly sheets – different codes for each day and they’d get a new sheet every month. This was the most significant problem for the allies – they had got their hands on quite a few Enigma machines, but getting the code sheets was difficult, and if they did they would only be good for the rest of the month. The allies focused instead of trying to crack the cipher, to eventually understand all of the German’s communications – without them knowing.

???
ref: https://learncryptography.com/history/the-enigma-machine

---
# Cracking Enigma

Cryptanalysis of the Enigma ciphering system enabled the western Allies in World War II to read substantial amounts of Morse-coded radio communications of the Axis powers that had been enciphered using Enigma machines. This yielded military intelligence which, along with that from other decrypted Axis radio and teleprinter transmissions, was given the codename Ultra. This was considered by western Supreme Allied Commander Dwight D. Eisenhower to have been "decisive" to the Allied victory.

The Enigma machines were a family of portable cipher machines with rotor scramblers. Good operating procedures, properly enforced, would have made the plugboard Enigma machine unbreakable. However, most of the German military forces, secret services and civilian agencies that used Enigma employed poor operating procedures, and it was these poor procedures that allowed the Enigma machines to be reverse-engineered and the ciphers to be read.

???

ref: https://en.wikipedia.org/wiki/Cryptanalysis_of_the_Enigma

---
# Protecting secrets is hard!

The part of the protocol carried out by people - distribution of the monthly key sheets - was done imperfectly and insecurely, allowing leakage that led to the reverse engineering of the protocol.

--
# Key exchange is hard!

???

---
exclude: true
# One time pads

In cryptography, the one-time pad (OTP) is an encryption technique that cannot be cracked, but requires the use of a one-time pre-shared key the same size as, or longer than, the message being sent. In this technique, a plaintext is paired with a random secret key (also referred to as a one-time pad). Then, each bit or character of the plaintext is encrypted by combining it with the corresponding bit or character from the pad using modular addition. 

Ciphertext resulting from an OTP will be impossible to decrypt or break if it is:
1. truly random
2. at least as long as the plaintext
3. never reused in whole or in part
4. kept completely secret

It has also been proven that any cipher with the perfect secrecy property must use keys with effectively the same requirements as OTP keys.

???
First described by Frank Miller in 1882, the one-time pad was re-invented in 1917. On July 22, 1919, U.S. Patent 1,310,719 was issued to Gilbert S. Vernam for the XOR operation used for the encryption of a one-time pad.

ref: https://en.wikipedia.org/wiki/One-time_pad
---
# Claude Shannon

![Shannon](../media/ClaudeShannon_MFO3807.jpg)

???
"the father of information theory"

well known for founding digital circuit design theory in 1937, when—as a 21-year-old master's degree student at the Massachusetts Institute of Technology (MIT)

he wrote his thesis demonstrating that electrical applications of Boolean algebra could construct any logical numerical relationship.

ref: https://en.wikipedia.org/wiki/History_of_cryptography#Claude_Shannon
ref: https://en.wikipedia.org/wiki/Claude_Shannon

---
class:smallpic
# A Mathematical Theory of Communication

![Shannon exchange](../media/2880px-Shannon_communication_system.svg.png)

* An information source that produces a message
* A transmitter that operates on the message to create a signal which can be sent through a channel
* A channel, which is the medium over which the signal, carrying the information that composes the message, is sent
* A receiver, which transforms the signal back into the message intended for delivery
* A destination, which can be a person or a machine, for whom or which the message is intended

???
Originally published in The Bell System Technical Journal ( Volume: 27 , Issue: 3 , July 1948 ) 

It is commonly accepted that this paper was the starting point for development of modern cryptography. Shannon was inspired during the war to address "[t]he problems of cryptography [because] secrecy systems furnish an interesting application of communication theory". Shannon identified the two main goals of cryptography: secrecy and authenticity. 

It also developed the concepts of information entropy and redundancy, and introduced the term bit (which Shannon credited to John Tukey) as a unit of information.

ref: https://en.wikipedia.org/wiki/A_Mathematical_Theory_of_Communication
ref: https://ieeexplore.ieee.org/document/6773024?arnumber=6773024

---
# Fiestel / Lucifer Block Ciphers

In cryptography, Lucifer was the name given to several of the earliest civilian block ciphers, developed by Horst Feistel and his colleagues at IBM. Lucifer was a direct precursor to the Data Encryption Standard.

Examples:
* DES
* Blowfish
* Twofish
* RC5

???
ref: https://en.wikipedia.org/wiki/Lucifer_(cipher)
ref: https://en.wikipedia.org/wiki/Horst_Feistel
ref: https://en.wikipedia.org/wiki/Feistel_cipher

---
class:tallpic
# DES

![DES](../media/500px-DES-main-network.png)

???

The Data Encryption Standard (DES /ˌdiːˌiːˈɛs, dɛz/) is a symmetric-key algorithm for the encryption of electronic data. Although its short key length of 56 bits, criticized from the beginning, makes it too insecure for most current applications, it was highly influential in the advancement of modern cryptography.

Developed in the early 1970s at IBM and based on an earlier design by Horst Feistel, the algorithm was submitted to the National Bureau of Standards (NBS) following the agency's invitation to propose a candidate for the protection of sensitive, unclassified electronic government data. In 1976, after consultation with the National Security Agency (NSA), the NBS eventually selected a slightly modified version (strengthened against differential cryptanalysis, but weakened against brute-force attacks), which was published as an official Federal Information Processing Standard (FIPS) for the United States in 1977.

The publication of an NSA-approved encryption standard simultaneously resulted in its quick international adoption and widespread academic scrutiny. Controversies arose out of classified design elements, a relatively short key length of the symmetric-key block cipher design, and the involvement of the NSA, nourishing suspicions about a backdoor. Today it is known that the S-boxes that had raised those suspicions were in fact designed by the NSA to actually remove a backdoor they secretly knew (differential cryptanalysis). However, the NSA also ensured that the key size was drastically reduced such that they could break it by brute force attack.[2] The intense academic scrutiny the algorithm received over time led to the modern understanding of block ciphers and their cryptanalysis. 

ref: https://en.wikipedia.org/wiki/Data_Encryption_Standard

---
# New Directions in Cryptography

Hellman and Whitfield Diffie's paper New Directions in Cryptography was published in 1976. It introduced a radically new method of distributing cryptographic keys, which went far toward solving one of the fundamental problems of cryptography, key distribution. It has become known as Diffie–Hellman key exchange, although Hellman has argued that it ought to be called Diffie-Hellman-Merkle key exchange because of Merkle's separate contribution. The article stimulated the development of a new class of encryption algorithms, known variously as public key encryption and asymmetric encryption. Hellman and Diffie were awarded the Marconi Fellowship and accompanying prize in 2000 for work on public-key cryptography and for helping make cryptography a legitimate area of academic research, and they were awarded the 2015 Turing Award for the same work.

???
ref: https://ee.stanford.edu/~hellman/publications/24.pdf

---
class:img-40
# Diffie–Hellman key exchange 

![diagram](../media/Diffie-Hellman_Key_Exchange.svg)

???
Diffie-Hellman is a way of generating a shared secret between two people in such a way that the secret can't be seen by observing the communication. That's an important distinction: You're not sharing information during the key exchange, you're creating a key together.

The Diffie–Hellman key exchange method allows two parties that have no prior knowledge of each other to jointly establish a shared secret key over an insecure channel. This key can then be used to encrypt subsequent communications using a symmetric key cipher. 

ref: https://en.wikipedia.org/wiki/Diffie%E2%80%93Hellman_key_exchange
ref: http://mathworld.wolfram.com/Diffie-HellmanProtocol.html
ref: https://en.wikipedia.org/wiki/Whitfield_Diffie
ref: https://en.wikipedia.org/wiki/Martin_Hellman
ref: https://en.wikipedia.org/wiki/Ralph_Merkle

---
class:tallpic
# Whitfield Diffie

![Diffie](../media/Whitfield_Diffie_Royal_Society.jpg)

???
ref: https://en.wikipedia.org/wiki/Whitfield_Diffie

---
class:tallpic
# Martin Hellman

![Hellman](../media/Martin-Hellman.jpg)

???
Hellman has been a longtime contributor to the computer privacy debate. He and Diffie were the most prominent critics of the short key size of the Data Encryption Standard (DES) in 1975. An audio recording survives of their review of DES at Stanford in 1976 with Dennis Branstad of NBS and representatives of the National Security Agency. Their concern was well-founded: subsequent history has shown not only that NSA actively intervened with IBM and NBS to shorten the key size, but also that the short key size enabled exactly the kind of massively parallel key crackers that Hellman and Diffie sketched out. In response to RSA Security's DES Challenges starting in 1997, brute force crackers were built that could break DES, making it clear that DES was insecure and obsolete. As of 2012, a $10,000 commercially available machine could recover a DES key in days.

In 1980 Martin Hellman first proposed using a time–memory tradeoff for cryptanalysis

ref: https://en.wikipedia.org/wiki/Martin_Hellman
ref: https://upload.wikimedia.org/wikipedia/commons/d/d4/Martin-Hellman.jpg
ref: https://en.wikipedia.org/wiki/Space%E2%80%93time_tradeoff

---
class:tallpic
# Ralph Merkle

![Merkle](../media/Ralph_Merkle.png)

???
While an undergraduate, Merkle devised Merkle's Puzzles, a scheme for communication over an insecure channel, as part of a class project. The scheme is now recognized to be an early example of public key cryptography. He co-invented the Merkle–Hellman knapsack cryptosystem, invented cryptographic hashing (now called the Merkle–Damgård construction based on a pair of articles published 10 years later that established the security of the scheme), and invented Merkle trees.

ref: https://en.wikipedia.org/wiki/Ralph_Merkle
---
class: center, middle, invert
# Cypherpunks

???
A cypherpunk is any activist advocating widespread use of strong cryptography and privacy-enhancing technologies as a route to social and political change. Originally communicating through the Cypherpunks electronic mailing list, informal groups aimed to achieve privacy and security through proactive use of cryptography. Cypherpunks have been engaged in an active movement since the late 1980s."

ref: https://en.wikipedia.org/wiki/Cypherpunk
ref: https://medium.com/swlh/the-untold-history-of-bitcoin-enter-the-cypherpunks-f764dee962a1
ref: https://cryptoanarchy.wiki/getting-started/what-is-a-cypherpunk
ref: https://mailing-list-archive.cryptoanarchy.wiki/

---
# Cypherpunks

* [Timothy May](https://en.wikipedia.org/wiki/Timothy_C._May) "[The Crypto Anarchist Manifesto](http://groups.csail.mit.edu/mac/classes/6.805/articles/crypto/cypherpunks/may-crypto-manifesto.html)" & "[Cyphernomicon](http://groups.csail.mit.edu/mac/classes/6.805/articles/crypto/cypherpunks/cyphernomicon/CP-FAQ)"
* [David Chaum](https://en.wikipedia.org/wiki/David_Chaum) - "Untraceable Electronic Mail, Return Addresses, and Digital Pseudonyms", 1981; dining cryptographers; ecash ; DigiCash 
* [Eric Hughes ](https://en.wikipedia.org/wiki/Eric_Hughes_(cypherpunk)) - "Cypherpunks write code" 1993
* [Nick Szabo](https://en.wikipedia.org/wiki/Nick_Szabo) - Smart contracts, 1994; Bitgold, 2005
* [Adam Back](https://en.wikipedia.org/wiki/Adam_Back) - [HashCash](https://en.wikipedia.org/wiki/Hashcash), 1997; RSA perl munitions tshirts
* [Wei Dai](https://en.wikipedia.org/wiki/Wei_Dai) - [B-money](https://en.bitcoin.it/wiki/B-money), 1998; crypto++ library
* [Hal Finney](https://en.wikipedia.org/wiki/Hal_Finney_(computer_scientist)) - Reusable Proofs of Work, 2004; first bitcoin recipient
* [Satoshi Nakamoto](https://en.wikipedia.org/wiki/Satoshi_Nakamoto) - Bitcoin, 2008
* [Julien Assange](https://en.wikipedia.org/wiki/Julian_Assange) - leaks.org, 1999; Wikileaks, 2006
* [Ralph Merkle](https://en.wikipedia.org/wiki/Ralph_Merkle) - cryptographic hashing
* [Bruce Schnier](https://en.wikipedia.org/wiki/Bruce_Schneier) - Cryptographer & security expert

???
ref: https://en.wikipedia.org/wiki/Category:Cypherpunks

---
# The Crypto Anarchist Manifesto 

"A specter is haunting the modern world, the specter of crypto anarchy."

...

"Arise, you have nothing to lose but your barbed wire fences!"

- Timothy C. May, 1992

https://www.activism.net/cypherpunk/crypto-anarchy.html 

???
A specter is haunting the modern world, the specter of crypto anarchy.

Computer technology is on the verge of providing the ability for individuals and groups to communicate and interact with each other in a totally anonymous manner. Two persons may exchange messages, conduct business, and negotiate electronic contracts without ever knowing the True Name, or legal identity, of the other. Interactions over networks will be untraceable, via extensive re- routing of encrypted packets and tamper-proof boxes which implement cryptographic protocols with nearly perfect assurance against any tampering. Reputations will be of central importance, far more important in dealings than even the credit ratings of today. These developments will alter completely the nature of government regulation, the ability to tax and control economic interactions, the ability to keep information secret, and will even alter the nature of trust and reputation.

The technology for this revolution--and it surely will be both a social and economic revolution--has existed in theory for the past decade. The methods are based upon public-key encryption, zero-knowledge interactive proof systems, and various software protocols for interaction, authentication, and verification. The focus has until now been on academic conferences in Europe and the U.S., conferences monitored closely by the National Security Agency. But only recently have computer networks and personal computers attained sufficient speed to make the ideas practically realizable. And the next ten years will bring enough additional speed to make the ideas economically feasible and essentially unstoppable. High-speed networks, ISDN, tamper-proof boxes, smart cards, satellites, Ku-band transmitters, multi-MIPS personal computers, and encryption chips now under development will be some of the enabling technologies.

The State will of course try to slow or halt the spread of this technology, citing national security concerns, use of the technology by drug dealers and tax evaders, and fears of societal disintegration. Many of these concerns will be valid; crypto anarchy will allow national secrets to be trade freely and will allow illicit and stolen materials to be traded. An anonymous computerized market will even make possible abhorrent markets for assassinations and extortion. Various criminal and foreign elements will be active users of CryptoNet. But this will not halt the spread of crypto anarchy.

Just as the technology of printing altered and reduced the power of medieval guilds and the social power structure, so too will cryptologic methods fundamentally alter the nature of corporations and of government interference in economic transactions. Combined with emerging information markets, crypto anarchy will create a liquid market for any and all material which can be put into words and pictures. And just as a seemingly minor invention like barbed wire made possible the fencing-off of vast ranches and farms, thus altering forever the concepts of land and property rights in the frontier West, so too will the seemingly minor discovery out of an arcane branch of mathematics come to be the wire clippers which dismantle the barbed wire around intellectual property.

Arise, you have nothing to lose but your barbed wire fences! 
- Timothy C. May, 1992

ref: https://www.activism.net/cypherpunk/crypto-anarchy.html 

---
# A Cypherpunk's Manifesto

"Privacy is necessary for an open society in the electronic age. Privacy is not secrecy. A private matter is something one doesn't want the whole world to know, but a secret matter is something one doesn't want anybody to know. Privacy is the power to selectively reveal oneself to the world."

...

"The Cypherpunks are actively engaged in making the networks safer for privacy. Let us proceed together apace."

- Eric Hughes, 1993

https://www.activism.net/cypherpunk/manifesto.html

???

A Cypherpunk's Manifesto
by Eric Hughes

Privacy is necessary for an open society in the electronic age. Privacy is not secrecy. A private matter is something one doesn't want the whole world to know, but a secret matter is something one doesn't want anybody to know. Privacy is the power to selectively reveal oneself to the world.

If two parties have some sort of dealings, then each has a memory of their interaction. Each party can speak about their own memory of this; how could anyone prevent it? One could pass laws against it, but the freedom of speech, even more than privacy, is fundamental to an open society; we seek not to restrict any speech at all. If many parties speak together in the same forum, each can speak to all the others and aggregate together knowledge about individuals and other parties. The power of electronic communications has enabled such group speech, and it will not go away merely because we might want it to.

Since we desire privacy, we must ensure that each party to a transaction have knowledge only of that which is directly necessary for that transaction. Since any information can be spoken of, we must ensure that we reveal as little as possible. In most cases personal identity is not salient. When I purchase a magazine at a store and hand cash to the clerk, there is no need to know who I am. When I ask my electronic mail provider to send and receive messages, my provider need not know to whom I am speaking or what I am saying or what others are saying to me; my provider only need know how to get the message there and how much I owe them in fees. When my identity is revealed by the underlying mechanism of the transaction, I have no privacy. I cannot here selectively reveal myself; I must always reveal myself.

Therefore, privacy in an open society requires anonymous transaction systems. Until now, cash has been the primary such system. An anonymous transaction system is not a secret transaction system. An anonymous system empowers individuals to reveal their identity when desired and only when desired; this is the essence of privacy.

Privacy in an open society also requires cryptography. If I say something, I want it heard only by those for whom I intend it. If the content of my speech is available to the world, I have no privacy. To encrypt is to indicate the desire for privacy, and to encrypt with weak cryptography is to indicate not too much desire for privacy. Furthermore, to reveal one's identity with assurance when the default is anonymity requires the cryptographic signature.

We cannot expect governments, corporations, or other large, faceless organizations to grant us privacy out of their beneficence. It is to their advantage to speak of us, and we should expect that they will speak. To try to prevent their speech is to fight against the realities of information. Information does not just want to be free, it longs to be free. Information expands to fill the available storage space. Information is Rumor's younger, stronger cousin; Information is fleeter of foot, has more eyes, knows more, and understands less than Rumor.

We must defend our own privacy if we expect to have any. We must come together and create systems which allow anonymous transactions to take place. People have been defending their own privacy for centuries with whispers, darkness, envelopes, closed doors, secret handshakes, and couriers. The technologies of the past did not allow for strong privacy, but electronic technologies do.

We the Cypherpunks are dedicated to building anonymous systems. We are defending our privacy with cryptography, with anonymous mail forwarding systems, with digital signatures, and with electronic money.

Cypherpunks write code. We know that someone has to write software to defend privacy, and since we can't get privacy unless we all do, we're going to write it. We publish our code so that our fellow Cypherpunks may practice and play with it. Our code is free for all to use, worldwide. We don't much care if you don't approve of the software we write. We know that software can't be destroyed and that a widely dispersed system can't be shut down.

Cypherpunks deplore regulations on cryptography, for encryption is fundamentally a private act. The act of encryption, in fact, removes information from the public realm. Even laws against cryptography reach only so far as a nation's border and the arm of its violence. Cryptography will ineluctably spread over the whole globe, and with it the anonymous transactions systems that it makes possible.

For privacy to be widespread it must be part of a social contract. People must come and together deploy these systems for the common good. Privacy only extends so far as the cooperation of one's fellows in society. We the Cypherpunks seek your questions and your concerns and hope we may engage you so that we do not deceive ourselves. We will not, however, be moved out of our course because some may disagree with our goals.

The Cypherpunks are actively engaged in making the networks safer for privacy. Let us proceed together apace.

Onward.

Eric Hughes <hughes@soda.berkeley.edu>

9 March 1993 


ref: https://www.activism.net/cypherpunk/manifesto.html

---
# Cyphernomicon

```raw
16.2 - SUMMARY: Crypto Anarchy

16.2.1. Main Points
  - "...when you want to smash the State, everything looks like
     a hammer."
  - strong crypto as the "building material" for cyberspace
     (making the walls, the support beams, the locks)
16.2.2. Connections to Other Sections
  - this section ties all the other sections together
16.2.3. Where to Find Additional Information
  - again, almost nothing written on this
  - Vinge, Friedman, Rand, etc.
16.2.4. Miscellaneous Comments
  - a very long section, possibly confusing to many
```

- Timothy May, 1994

https://nakamotoinstitute.org/static/docs/cyphernomicon.txt

???
Timothy May wrote a substantial cypherpunk-themed FAQ, "The Cyphernomicon" (incorporating his earlier piece "The Crypto Anarchist Manifesto"),[6] and his essay "True Nyms and Crypto Anarchy" was included in a reprint of Vernor Vinge's novel True Names. In 2001 his work was published in the book Crypto Anarchy, Cyberstates, and Pirate Utopias.[7]

???
ref: https://en.wikipedia.org/wiki/Timothy_C._May
ref: https://en.wikipedia.org/wiki/Cyphernomicon
ref: https://nakamotoinstitute.org/static/docs/cyphernomicon.txt

---
# Blowfish

Blowfish was one of the first secure block ciphers not subject to any patents and therefore freely available for anyone to use. This benefit has contributed to its popularity in cryptographic software.

Blowfish is a symmetric-key block cipher, designed in 1993 by Bruce Schneier and included in a large number of cipher suites and encryption products. Blowfish provides a good encryption rate in software and no effective cryptanalysis of it has been found to date. However, the Advanced Encryption Standard (AES) now receives more attention, and Schneier recommends Twofish for modern applications.

Schneier designed Blowfish as a general-purpose algorithm, intended as an alternative to the aging DES and free of the problems and constraints associated with other algorithms. At the time Blowfish was released, many other designs were proprietary, encumbered by patents or were commercial or government secrets. Schneier has stated that, "Blowfish is unpatented, and will remain so in all countries. The algorithm is hereby placed in the public domain, and can be freely used by anyone."

???
ref: https://en.wikipedia.org/wiki/Blowfish_(cipher)
ref: https://en.wikipedia.org/wiki/Bruce_Schneier

---
exclude: true
# Dining Cryptographers

In cryptography, the dining cryptographers problem studies how to perform a secure multi-party computation of the boolean-OR function. David Chaum first proposed this problem in the early 1980s and used it as an illustrative example to show that it was possible to send anonymous messages with unconditional sender and recipient untraceability. Anonymous communication networks based on this problem are often referred to as DC-nets (where DC stands for "dining cryptographers"). 

???
see: game.dining-cryptographers.md
ref: https://en.wikipedia.org/wiki/Dining_cryptographers_problem
ref: https://users.ece.cmu.edu/~adrian/731-sp04/readings/dcnets.html

---
# Legal matters

Privacy is a matter governments concern themselves with.

* Privacy of communication between parties
 * Citizens
 * Government agents
 * Foreign government agents

We have laws that attempt to strike the right balance between freedom and security, by limiting the communications between parties we don't want to have strong coordination abilities.

---
# NSA

Self admittedly the nation's leading employer of Mathematicians.
The reason? Cryptography

The whole point of the NSA originally was mathematical cryptography following the re-organization of the cryptanalysis divisions of the army and navy after World War Two. 

They maintain a stable of mathematicians to solve any problems that come up in the course of sleuthing.

???
from an NSA job listing:

"As an NSA Mathematician, you may find yourself designing and analyzing complex algorithms, or expressing difficult cryptographic problems in mathematical terms, and then applying both your art and science to find a solution ... or demonstrating that a solution cannot be found, given certain computational limitations and reasonable time limits."

ref: https://www.businessinsider.com/the-insane-application-process-to-land-a-job-at-the-nsa-the-largest-employer-of-mathematicians-in-the-world-2013-6

---
class:tallpic
# Cryptographic hash functions

![Hash results](../media/hashing_result_comparison.png)

???
Bruce Schneier has called one-way hash functions "the workhorses of modern cryptography"

Hashing functions suitable for cryptographic purposes.

It is a mathematical algorithm that maps data of arbitrary size to a bit string of a fixed size (a hash) and is designed to be a one-way function, that is, a function which is infeasible to invert.

The only way to recreate the input data from an ideal cryptographic hash function's output is to attempt a brute-force search of possible inputs to see if they produce a match, or use a rainbow table of matched hashes.

ref: https://en.wikipedia.org/wiki/Cryptographic_hash_function
ref: https://en.wikipedia.org/wiki/Trapdoor_function
ref: https://en.wikipedia.org/wiki/One-way_function

---
# Features of ideal cryptographic hash functions

* it is deterministic so the same message always results in the same hash
* it is quick to compute the hash value for any given message
* it is infeasible to generate a message from its hash value except by trying all possible messages
* a small change to a message should change the hash value so extensively that the new hash value appears uncorrelated with the old hash value
* it is infeasible to find two different messages with the same hash value

???
ref: https://en.wikipedia.org/wiki/Cryptographic_hash_function

---
# The paradox of encryption

* The security of encrypted data is equivalent to the security of the data + the encrypting key
* It's hard to attack encrypted data, but easy to attack the weak links

ref: https://www.vesvault.com/articles/encryption-paradox

---
# Private key

A private key is a randomly generated number.

The degree of randomness is the degree of strength, because if someone can find your number, they can impersonate you.

Various encodings of numbers, such as HEX, are the reason these don't look like integer based numbers: it's just a more compact form that shortens the numeric expression of the number.

???
ref: http://learnmeabitcoin.com/guide/private_keys
ref: https://medium.com/the-bitcoin-podcast-blog/reframing-how-you-think-about-the-concept-of-managing-your-private-keys-fdf95060728a

---
# Public key

A unique, unpredictable number derived from your private key

Derivation: use your private key as the input to a mathematical function that uses elliptic curve multiplication.

The private key provides a "trapdoor" that allows the holder to compute an easy inverse of an encryption function that uses the public key.
The public key provides no clue as to what the private key is, even though they are mathematically related.

???
ref: http://learnmeabitcoin.com/guide/public_keys
ref: http://www.fon.hum.uva.nl/rob/Courses/InformationInSpeech/CDROM/Literature/LOTwinterschool2006/szabo.best.vwh.net/smart_contracts_2.html

---
class:tallpic
# Key space

![Keys](../media/keys.jpg)

???

How secure is a private key?

How many possible permutations of a key are there?

To prevent an adversary from using a brute-force attack to find the key used to encrypt a message, the key space is usually designed to be large enough to make such a search infeasible. On average, half the key space must be searched to find the solution.

Another desirable attribute is that the key must be selected truly randomly from all possible key permutations. Should this not be the case, and the attacker is able to determine some factor that may influence how the key was selected, the search space (and hence also the search time) can be significantly reduced. Humans do not select passwords randomly, therefore attackers frequently try a dictionary attack before a brute force attack, as this approach can often produce the correct answer in far less time than a systematic brute force search of all possible character combinations.

ref: https://en.wikipedia.org/wiki/Key_space_(cryptography)

---
# Comprehending the size of a key space

If we map the surface of the earth to the key space for all possible Ethereum addresses, each is equivalent in size to a single grain of sand.

Imagine attempting to find any particular point on the surface of the earth that is only as large as a grain of sand, with no clue about where it is.

Randomly choosing is a lost cause. Assuming the location has no clues to its whereabouts, we can consider that secret safe from guessing attacks.

???
ref: https://hackernoon.com/why-generate-truly-random-private-keys-4a9d88406a96
ref: https://etherscan.io/chart/address

---
exclude: true
# Cryptographic Primitives

Cryptographic primitives are well-established, low-level cryptographic algorithms that are frequently used to build cryptographic protocols for computer security systems. These routines include, but are not limited to, one-way hash functions and encryption functions. 

???
ref: https://en.wikipedia.org/wiki/Cryptographic_primitive

---
exclude: true
# Authentication
???
e.g. "verifying the authenticity of a website with a digital certificate"
ref: https://en.wikipedia.org/wiki/Authentication

---
# One way functions

Functions that only operate in one direction, meaning the inputs are not derivable from the output.

In other words, you can’t go backwards

???
ref: https://en.wikipedia.org/wiki/One-way_function

---
class:bigpic
# Trapdoor functions

![Trapdoor](../media/trapdoor.png)

???
A trapdoor one-way function or trapdoor permutation is a special kind of one-way function. Such a function is hard to invert unless some secret information, called the trapdoor, is known.

A trapdoor function is a function that is easy to compute in one direction, yet difficult to compute in the opposite direction (finding its inverse) without special information, called the "trapdoor".

Diffie & Hellman (1976) coined the term

ref: https://en.wikipedia.org/wiki/Trapdoor_function

---
class:tallpic
# Elliptical curves

![Elliptical curves](../media/elliptic-curves.png)

???
Q: Why do we use elliptic curve multiplication to make public keys?
A: Elliptic curve multiplication is a “trapdoor function”. 

Public-key cryptography is based on the intractability of certain mathematical problems. Early public-key systems are secure assuming that it is difficult to factor a large integer composed of two or more large prime factors. For elliptic-curve-based protocols, it is assumed that finding the discrete logarithm of a random elliptic curve element with respect to a publicly known base point is infeasible: this is the "elliptic curve discrete logarithm problem" (ECDLP). The security of elliptic curve cryptography depends on the ability to compute a point multiplication and the inability to compute the multiplicand given the original and product points. The size of the elliptic curve determines the difficulty of the problem.

ref: https://en.wikipedia.org/wiki/Elliptic_curve
ref: https://en.wikipedia.org/wiki/Elliptic-curve_cryptography
ref: https://en.wikipedia.org/wiki/Counting_points_on_elliptic_curves

---
# Digital Signatures

When signing, you use your private key to write a message's signature, and they use your public key to check if it's really yours. It relies on the mathematical connection between your private and public keys.

Because they can use your public key to read it, they know you are able to encode with the private key that matches the public key, which shows that you have the corresponding private key through the mathematical relationship between them.

This is why "addresses" are derived from public keys: it provides a mechanism for claiming "ownership" of them.

???
ref: https://stackoverflow.com/questions/454048/what-is-the-difference-between-encrypting-and-signing-in-asymmetric-encryption

---
# Digest

A message digest is a fixed size numeric representation of the contents of a message, computed by a hash function.

A message digest can be encrypted, forming a digital signature.

???
ref: https://www.ibm.com/support/knowledgecenter/en/SSFKSJ_7.1.0/com.ibm.mq.doc/sy10510_.htm

---
# Rainbow table

A hashed value lookup table, allowing you to derive the original input of a hash from the hashed value.

To make impractical, use a salt to values before hashing.

---
# Salt

A value added to data before hashing in order to make it harder to derive.
Often a form of nonce, but needs to be stored along with the hash in order to allow proving.

???
consider the scope of the salt... same value across all records in a db will allow lookups across that db, so consider using a unique secret salt per record or account.

ref: https://www.oreilly.com/library/view/secure-programming-cookbook/0596003943/ch04s09.html

---
# Oblivious Transfer

A type of protocol in which a sender transfers one of potentially many pieces of information to a receiver, but remains oblivious as to what piece (if any) has been transferred.

???
ref: https://en.wikipedia.org/wiki/Oblivious_transfer
ref: https://www.youtube.com/watch?v=HP0HnVmBs3g

---
# Symmetrical Encryption

![Symmetrical Encryption](../media/Symmetric-Encryption.png)

???
This is the simplest kind of encryption that involves only one secret key to cipher and decipher information. Symmetrical encryption is an old and best-known technique. It uses a secret key that can either be a number, a word or a string of random letters. It is a blended with the plain text of a message to change the content in a particular way. The sender and the recipient should know the secret key that is used to encrypt and decrypt all the messages. Blowfish, AES, RC4, DES, RC5, and RC6 are examples of symmetric encryption. The most widely used symmetric algorithm is AES-128, AES-192, and AES-256.

The main disadvantage of the symmetric key encryption is that all parties involved have to exchange the key used to encrypt the data before they can decrypt it.

---
# Asymmetrical Encryption

![Asymmetrical Encryption](../media/Asymmetric-Encryption.png)
???
Asymmetrical encryption is also known as public key cryptography, which is a relatively new method, compared to symmetric encryption. Asymmetric encryption uses two keys to encrypt a plain text. Secret keys are exchanged over the Internet or a large network. It ensures that malicious persons do not misuse the keys. It is important to note that anyone with a secret key can decrypt the message and this is why asymmetrical encryption uses two related keys to boosting security. A public key is made freely available to anyone who might want to send you a message. The second private key is kept a secret so that you can only know.

A message that is encrypted using a public key can only be decrypted using a private key, while also, a message encrypted using a private key can be decrypted using a public key. Security of the public key is not required because it is publicly available and can be passed over the internet. Asymmetric key has a far better power in ensuring the security of information transmitted during communication.

Asymmetric encryption is mostly used in day-to-day communication channels, especially over the Internet. Popular asymmetric key encryption algorithm includes EIGamal, RSA, DSA, Elliptic curve techniques, PKCS.

---
# Difference Between Symmetric and Asymmetric Encryption

* Symmetric encryption uses a single key that needs to be shared among the people who need to receive the message while asymmetrical encryption uses a pair of public key and a private key to encrypt and decrypt messages when communicating.
* Symmetric encryption is an old technique while asymmetric encryption is relatively new.
* Asymmetric encryption was introduced to complement the inherent problem of the need to share the key in symmetrical encryption model, eliminating the need to share the key by using a pair of public-private keys.
* Asymmetric encryption takes relatively more time than the symmetric encryption.

???
ref: https://www.ssl2buy.com/wiki/symmetric-vs-asymmetric-encryption-what-are-differences

---
# Hybrid asymmetric/symmetric solutions

SSL/TLS uses both asymmetric and symmetric encryption along with quickly look at digitally signed certificates issued by trusted certificate

To use asymmetric encryption, there must be a way of discovering public keys. One typical technique is using digital certificates in a client-server model of communication. A certificate is a package of information that identifies a user and a server. It contains information such as an organization’s name, the organization that issued the certificate, the users’ email address and country, and users public key.

When a server and a client require a secure encrypted communication, they send a query over the network to the other party, which sends back a copy of the certificate. The other party’s public key can be extracted from the certificate. A certificate can also be used to uniquely identify the holder.

???

Since public-key algorithms tend to be much slower than symmetric-key algorithms, modern systems such as TLS and SSH use a combination of the two: one party receives the other's public key, and encrypts a small piece of data (either a symmetric key or some data used to generate it). The remainder of the conversation uses a (typically faster) symmetric-key algorithm for encryption. 
ref: https://en.wikipedia.org/wiki/Key_generation

---
exclude: true
# Stream Ciphers

Stream ciphers are often used for their speed and simplicity of implementation in hardware, and in applications where plaintext comes in quantities of unknowable length like a secure wireless connection. If a block cipher (not operating in a stream cipher mode) were to be used in this type of application, the designer would need to choose either transmission efficiency or implementation complexity, since block ciphers cannot directly work on blocks shorter than their block size. For example, if a 128-bit block cipher received separate 32-bit bursts of plaintext, three quarters of the data transmitted would be padding.

???
If a part of the plaintext repeats, the corresponding ciphertext usually is not the same – different parts of the message will be encrypted in different ways.
This contrasts with a block cypher, which will chunk the plaintext into appropriately sized block and encrypt them. Different blocks, if composed of repeated messages, could then produce the same ciphertext.

ref: https://en.wikipedia.org/wiki/Stream_cipher
ref: https://crypto.stackexchange.com/questions/5333/difference-between-stream-cipher-and-block-cipher

---
# Key Generation

How to make the best secret?
Maximize the entropy: as random as possible

* RNG - Random number generator
* PRNG - Pseudo random number generator

* Seed - information provided to initialize the state of the system, making it unique and unknown.

???
ref: https://en.wikipedia.org/wiki/Key_generation

---
# Cryptanalysis

Cryptanalysis is the art of breaking codes and ciphers.
It is the study of analyzing information systems in order to study the hidden aspects of the systems.
Cryptanalysis is used to breach cryptographic security systems and gain access to the contents of encrypted messages, even if the cryptographic key is unknown.

In addition to mathematical analysis of cryptographic algorithms, cryptanalysis includes the study of side-channel attacks that do not target weaknesses in the cryptographic algorithms themselves, but instead exploit weaknesses in their implementation. 

???
ref: https://en.wikipedia.org/wiki/Cryptanalysis

---
class:bigpic
# Side Channel Attack
![Power sidechannel attack](../media/sidechannel-power_attack.png)
An attempt to decode RSA key bits using power analysis. The left peak represents the CPU power variations during the step of the algorithm without multiplication, the right (broader) peak – step with multiplication, allowing an attacker to read bits 0, 1. - Wikipedia

???
In computer security, a side-channel attack is any attack based on information gained from the implementation of a computer system, rather than weaknesses in the implemented algorithm itself (e.g. cryptanalysis and software bugs). Timing information, power consumption, electromagnetic leaks or even sound can provide an extra source of information, which can be exploited.

Some side-channel attacks require technical knowledge of the internal operation of the system, although others such as differential power analysis are effective as black-box attacks. The rise of Web 2.0 applications and software-as-a-service has also significantly raised the possibility of side-channel attacks on the web, even when transmissions between a web browser and server are encrypted (e.g., through HTTPS or WiFi encryption)

ref: https://en.wikipedia.org/wiki/Side-channel_attack

---
class: tallpic
# Legality of publishing private keys

![TI83](../media/Ti83plus.jpg)

???
The Texas Instruments signing key controversy refers to the controversy which resulted from Texas Instruments' (TI) response to a project to factorize the 512-bit RSA cryptographic keys needed to write custom firmware to TI devices.

In July 2009, Benjamin Moody, a United-TI forum user, published the factors of a 512-bit RSA key used to sign the TI-83+ series graphing calculator. The discovery of the private key would allow end users to flash their own operating systems onto the device without having to use any special software. 

ref: https://en.wikipedia.org/wiki/Texas_Instruments_signing_key_controversy
---
# Illegal Numbers

An illegal number is a number that represents information which is illegal to possess, utter, propagate, or otherwise transmit in some legal jurisdiction. Any piece of digital information is representable as a number; consequently, if communicating a specific set of information is illegal in some way, then the number may be illegal as well.

???

question: if you generate a private key for a cryptocurrency system, and find that it already has value associated, is it stealing to transfer it?
ref: https://en.wikipedia.org/wiki/Illegal_number

---
# Illegal Prime

![HD free speech flag](../media/hd-free-speech-flag.png)

???
An illegal prime is a prime number that represents information whose possession or distribution is forbidden in some legal jurisdictions. One of the first illegal primes was found in 2001. When interpreted in a particular way, it describes a computer program that bypasses the digital rights management scheme used on DVDs. Distribution of such a program in the United States is illegal under the Digital Millennium Copyright Act.

ref: https://en.wikipedia.org/wiki/Illegal_prime

---
# Forward Secrecy

Forward secrecy is a feature of specific key agreement protocols that gives assurances your session keys will not be compromised even if the private key of the server is compromised. Forward secrecy protects past sessions against future compromises of secret keys or passwords. By .red[generating a unique session key for every session a user initiates], even the compromise of a single session key will not affect any data other than that exchanged in the specific session protected by that particular key. Forward secrecy further protects data on the transport layer of a network that uses common SSL/TLS protocols, including OpenSSL, which had previously been affected by the Heartbleed exploit. If forward secrecy is used, encrypted communications and sessions recorded in the past cannot be retrieved and decrypted should long-term secret keys or passwords be compromised in the future, even if the adversary actively interfered, for example via a man-in-the-middle attack. 

Forward secrecy cannot defend against a successful cryptanalysis of the underlying ciphers being used, since a cryptanalysis consists of finding a way to decrypt an encrypted message without the key, and forward secrecy only protects keys, not the ciphers themselves.

???
ref: https://en.wikipedia.org/wiki/Forward_secrecy

---
# Secret Sharing

Secret sharing (also called secret splitting) refers to methods for distributing a secret amongst a group of participants, each of whom is allocated a share of the secret. The secret can be reconstructed only when a sufficient number, of possibly different types, of shares are combined together; individual shares are of no use on their own. 

???
ref: https://en.wikipedia.org/wiki/Secret_sharing
ref: https://en.wikipedia.org/wiki/Shamir%27s_Secret_Sharing
ref: https://en.wikipedia.org/wiki/Homomorphic_secret_sharing
---
# "Secure" versus "insecure" secret sharing

A secure secret sharing scheme distributes shares so that anyone with fewer than t shares has no extra information about the secret than someone with 0 shares. 

---
exclude:true
# Access Structure

Access structures are used in the study of security system where multiple parties need to work together to obtain a resource. Groups of parties that are granted access are called qualified.

???

ref: https://en.wikipedia.org/wiki/Access_structure
---
# Black bag crytanalysis

Weak link: the private key

Locating and stealing the secret key is easier than attacking the encryption scheme of the data it protects.

???
ref: https://en.wikipedia.org/wiki/Black-bag_cryptanalysis
---
# Rubber-hose cryptanalysis

![ Rubber hose cryptanalysis ](../media/xkcd-538-security.png)

Weak link: the person
It's easier to coerce someone to share a secret key than to attacking the encryption scheme of the data it protects.

???
ref: https://en.wikipedia.org/wiki/Rubber-hose_cryptanalysis

---
