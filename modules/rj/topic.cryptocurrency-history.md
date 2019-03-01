
class:center, middle
# A short history of Cryptocurrency

???
    Welcome to the 90s

---
class:tallpic
# Trust & Uncertainty

![WIRED cypherpunks cover](../media/WIRED_1993_02.jpg)

???
Eventually, commerce won out. But many situations remain where we lack trust, and alternative methods for securing it have been tried.

We still have uncertainty in some operations, leaving us asking:

* Is this person who they say they are?
** Social network reputation
* Are these product claims verifiable?
** Certification
* Were these records altered?
** Carfax
* Will this person carry out our agreement?
** Smart contracts
* Was my vote counted?
** ???


---
class: center, middle, invert
# Encryption to the rescue!

---
# Cryptowars

<p align=center>
<img src="../media/munitions_tshirt.jpg" width="60%">
</p>

???
Encryption as a munition

The export of cryptographic technology and devices from the United States was severely restricted by U.S. law until 1992, but was gradually eased until 2000; some restrictions still remain.

Since World War II, many governments, including the U.S. and its NATO allies, have regulated the export of cryptography for national security reasons, and, as late as 1992, cryptography was on the U.S. Munitions List as an Auxiliary Military Equipment.[2]

Due to the enormous impact of cryptanalysis in World War II, these governments saw the military value in denying current and potential enemies access to cryptographic systems. Since the U.S. and U.K. believed they had better cryptographic capabilities than others, their intelligence agencies tried to control all dissemination of the more effective crypto techniques. They also wished to monitor the diplomatic communications of other nations, including those emerging in the post-colonial period and whose position on Cold War issues was vital.[3]

The First Amendment made controlling all use of cryptography inside the U.S. illegal, but controlling access to U.S. developments by others was more practical — there were no constitutional impediments.

---
# Cypherpunks

<p align=center>
<img src="../media/cypherpunks.jpg" style="width:100%">
</p>
???

The original CypherPunks met in 1992 in San Francisco, CA. In many ways, their meeting was a product of the founder of the movement, David Chaum.

The CypherPunk meeting in 1992 led to the creation of the CypherPunk Manifesto, published by Eric Hughes on March 9, 1993. In this manifesto, Hughes lamented the current systems where governments, corporations, and other “large, faceless organizations” grant individuals privacy out of their own benevolent leadership. The paper noted the irony of authorities “letting” individuals be private and free — at this point, freedom and privacy aren’t inalienable rights, they are simply gifts from a stronger, ruling entity.

The essence of Hughes’ response is summed up with the words, “We must defend our own privacy if we expect to have any. We must come together and create systems which allow anonymous transactions to take place… The technologies of the past did not allow for strong privacy, but electronic technologies do.”

https://medium.com/swlh/cypherpunks-and-the-rise-of-cryptocurrencies-899011538907

---
# Pretty Good Privacy (PGP)

Pretty Good Privacy (PGP) is the most widely used email encryption software in the world.
Pretty Good Privacy (PGP) is an encryption program that provides cryptographic privacy and authentication for data communication. PGP is used for signing, encrypting, and decrypting texts, e-mails, files, directories, and whole disk partitions and to increase the security of e-mail communications. Phil Zimmermann developed PGP in 1991.

???
ref: https://en.wikipedia.org/wiki/Pretty_Good_Privacy

---
class:tallpic
# Phil Zimmerman
<p align=center>
<img src="../media/zimmerman.jpg" width="50%">
</p>

???
Phil Zimmermann's PGP cryptosystem and its distribution on the Internet in 1991 was the first major 'individual level' challenge to controls on export of cryptography.

ref: https://en.wikipedia.org/wiki/Phil_Zimmermann
---
# David Chaum

In 1982, while studying at the University of California, Berkeley, Chaum wrote a paper describing the technological advancements to public and private key technology in order to create this Blind Signature Technology.[3] Chaum's Blind Signature Technology was designed to ensure the complete privacy of users who conduct online transactions. Chaum was concerned with the public nature and open access to online payments and personal information.

In 1985 (one year after the events of Orwell’s 1984 were set), Chaum published the paper “Security Without Identification: Transaction Systems to Make Big Brother Obsolete.” The paper discussed the concepts of anonymous digital cash and pseudo-reputation protocols — thought by many to be the grandfather of cryptocurrencies and blockchain technology.

He then proposed to construct a system of cryptographic protocols in which a bank or the government would be unable to trace personal payments conducted online. Originally called Ecash, this technology became fully implemented in 1990 through Chaum's company, DigiCash. 

???
ref: https://en.wikipedia.org/wiki/DigiCash

---
# DigiCash

DigiCash Inc. was an electronic money corporation founded by David Chaum in 1989. DigiCash transactions were unique in that they were anonymous due to a number of cryptographic protocols developed by its founder. DigiCash declared bankruptcy in 1998, and subsequently sold its assets to eCash Technologies, another digital currency company, which was acquired by InfoSpace on Feb. 19, 2002.

DigiCash went bankrupt in 1998, despite flourishing electronic commerce, but with credit cards as the "currency of choice".[4]

???
ref: https://en.wikipedia.org/wiki/DigiCash
ref: https://en.wikipedia.org/wiki/Ecash

---
# HashCash

Hashcash is a proof-of-work system used to limit email spam and denial-of-service attacks, and more recently has become known for its use in bitcoin (and other cryptocurrencies) as part of the mining algorithm. Hashcash was proposed in 1997 by Adam Back and described more formally in Back's paper "Hashcash - A Denial of Service Counter-Measure"

http://hashcash.org/

???
Hashcash is a cryptographic hash-based proof-of-work algorithm that requires a selectable amount of work to compute, but the proof can be verified efficiently. For email uses, a textual encoding of a hashcash stamp is added to the header of an email to prove the sender has expended a modest amount of CPU time calculating the stamp prior to sending the email. In other words, as the sender has taken a certain amount of time to generate the stamp and send the email, it is unlikely that they are a spammer. The receiver can, at negligible computational cost, verify that the stamp is valid. However, the only known way to find a header with the necessary properties is brute force, trying random values until the answer is found; though testing an individual string is easy, satisfactory answers are rare enough it will require a substantial number of tries to find the answer.

The hypothesis is that spammers, whose business model relies on their ability to send large numbers of emails with very little cost per message, will cease to be profitable if there is even a small cost for each spam they send. Receivers can verify whether a sender made such an investment and use the results to help filter email.

ref: https://en.wikipedia.org/wiki/Hashcash
ref: http://www.hashcash.org/papers/announce.txt
ref: http://hashcash.org/

---
exclude: true
# Adam Back

???
ref: https://en.wikipedia.org/wiki/Adam_Back
ref: https://en.wikipedia.org/wiki/Stefan_Brands

---
# Dwork

A similar idea to Hashcash was first proposed by Cynthia Dwork and Moni Naor and Eli Ponyatovski in their 1992 paper "Pricing via Processing or Combatting Junk Mail", but using weakened signature schemes rather than the simpler and more efficient hash-based approach introduced in hashcash. Hashcash was an independent rediscovery of the proof of work concept, with the author not being aware of Dwork et al's work.

https://en.wikipedia.org/wiki/Cynthia_Dwork

---
# Eric Hughes

“We must defend our own privacy if we expect to have any. We must come together and create systems which allow anonymous transactions to take place… The technologies of the past did not allow for strong privacy, but electronic technologies do.”

???
* created and hosted the first anonymous remailer
* wrote the cypherpunk manifesto 


ref: https://en.wikipedia.org/wiki/Eric_Hughes_(cypherpunk)

---
class:tallpic
# Hal Finney

![Hal Finney]( ../media/Hal_Finney.jpg )

???
Hal Finney was a developer for PGP Corporation, and was the second developer hired after Phil Zimmermann. In his early career, he was credited as lead developer on several console games. He also was an early Bitcoin contributor and received the first bitcoin transaction from Bitcoin's creator Satoshi Nakamoto. 

Died from ALS compilications in 2014, having used bitcoin to fund end of life care. Cryonically frozen, so perhaps he'll be back eventually.

ref: https://en.wikipedia.org/wiki/Hal_Finney_(computer_scientist)
ref: https://nakamotoinstitute.org/finney/rpow/

---
# Reusable Proof-of-Work (RPOW)

Reusable Proof-of-Work (RPOW) was an invention by Hal Finney intended as a prototype for a digital cash based on Nick Szabo's theory of collectibles. RPOW was a significant early step in the history of digital cash and was a precursor to Bitcoin. Although never intended to be more than a prototype, RPOW was a very sophisticated piece of software that would have been capable of serving a huge network, had it caught on.

An RPOW client creates an RPOW token by providing a proof-of-work string of a given difficulty, signed by his private key. The server then registers that token as belonging to the signing key. The client can then give the token to another key by signing a transfer order to a public key. The server then duly registers the token as belonging to the corresponding private key.

The double spending problem is fundamental to all digital cash. RPOW solves this problem by keeping the ownership of tokens registered on a trusted server. However, RPOW was built with a sophisticated security model intended to make the server managing the registration of all RPOW tokens more trustworthy than an ordinary bank. Servers are intended to run on the IBM 4758 secure cryptographic coprocessor, which is able to securely verify the hash of the software that it is running. RPOW servers are capable of cooperating to serve more requests.

???
ref: https://nakamotoinstitute.org/finney/rpow/
ref: https://nakamotoinstitute.org/finney/rpow/index.html
ref: https://nakamotoinstitute.org/finney/rpow/faqs.html

---
# Smart Contracts
<p align=center>
    <img src="../media/smartcontracts.jpg" width="100%">
</p>

???
1994 Nick Szabo Coined the term "smart contract"
The idea that a transaction is a contract between participants, and that the terms can be unambiguously encoded and agreed to via digital signature, becomes re-used in cryptocurrency projects.
Some cryptocurrency networks, such as Ethereum, implement smart contracts as a means of enabling complex transactions and programatic digital assets.

ref: https://en.wikipedia.org/wiki/Nick_Szabo
ref: https://nakamotoinstitute.org/shelling-out/
---
class:bigpic
# Digital Currency

![Money flower](../media/taxonomy-of-money.png)

???
ref: https://en.wikipedia.org/wiki/Digital_currency
ref: https://en.wikipedia.org/wiki/Complementary_currency
ref: https://en.wikipedia.org/wiki/Medium_of_exchange
ref: https://en.wikipedia.org/wiki/Money

---
# bit gold

Szabo's effort to describe a cryptocurrency, building on Finney's PoW

???
ref: https://en.wikipedia.org/wiki/Nick_Szabo
ref: https://unenumerated.blogspot.com/2005/12/bit-gold.html

---
# b-money

Article published in 1998 by Wei Dai describes a system for cryptocurrency that uses:
* computation as proof of investment (work)
* digital signatures for proof of identity
* a public ledger maintained by network participants
* broadcasting transaction/contract details to the network
* rewarding network participants for their effort at maintaining the network

It also describes some problems with money creation and network 

???
Wei Dai a computer engineer best known as the creator of the Bitcoin predecessor "b-money" and as the developer of the Crypto++ library. 

His b-money paper starts:
"I am fascinated by Tim May's crypto-anarchy. Unlike the communities traditionally associated with the word "anarchy", in a crypto-anarchy the government is not temporarily destroyed but permanently forbidden and permanently unnecessary. It's a community where the threat of violence is impotent because violence is impossible, and violence is impossible because its participants cannot be linked to their true names or physical locations."
... and ends
"The protocol proposed in this article allows untraceable pseudonymous entities to cooperate with each other more efficiently, by providing them with a medium of exchange and a method of enforcing contracts. The protocol can probably be made more efficient and secure, but I hope this is a step toward making crypto-anarchy a practical as well as theoretical possibility."

ref: https://en.wikipedia.org/wiki/Wei_Dai
ref: http://www.weidai.com/
ref: http://www.weidai.com/bmoney.txt

---
# Bitcoin
<p align=center>
    <img src="../media/bitcoin_logo.png" width="60%">
</p>
???
Abstract.
   A  purely   peer-to-peer   version   of   electronic   cash   would   allow   online
    payments   to   be   sent   directly   from   one   party   to   another   without   going   through   a
    financial institution.   Digital signatures provide part of the solution, but the main
    benefits are lost if a trusted third party is still required to prevent double-spending.
    We propose a solution to the double-spending problem using a peer-to-peer network.
    The   network   timestamps   transactions   by   hashing   them   into   an   ongoing   chain   of
    hash-based proof-of-work, forming a record that cannot be changed without redoing
    the proof-of-work.   The longest chain not only serves as proof of the sequence of
    events witnessed, but proof that it came from the largest pool of CPU power.   As
    long as a majority of CPU power is controlled by nodes that are not cooperating to
    attack the network,  they'll  generate the  longest  chain  and  outpace attackers.   The
    network itself requires minimal structure.   Messages are broadcast on a best effort
    basis,   and   nodes   can   leave   and   rejoin   the   network   at   will,   accepting   the   longest
    proof-of-work chain as proof of what happened while they were gone.
---
# Satoshi's whitepaper
<p align=center>
    <a href="?./media/bitcoin.pdf">
    <img src="../media/bitcoin_whitepaper.png" style="width:80%">
    </a>
</p>
???
Problem summary:
    Commerce on the Internet has come to rely almost exclusively on financial institutions serving as
    trusted third  parties  to process electronic payments.   While the  system works  well enough for
    most   transactions,   it   still   suffers   from   the   inherent   weaknesses   of   the   trust   based   model.
    Completely non-reversible transactions are not really possible, since financial institutions cannot
    avoid   mediating   disputes. 

---
class:center,middle
# Bitcoin's Underpinnings

???

---
# Public ledger
<p align=center>
<img src="../media/distledger.png" width="100%">
</p>

???
secured via distributed verification

---
# Append only Database
<p align=center>
<img src="../media/appendonly.png" width="100%">
</p>

???
"Timestmap server"
secured because Append
AKA a log

---
# Hashing for validation
<p align=center>
<img src="../media/hashfingerprint.jpg" width="100%">
</p>

???
* Examples of Hashing
* "Keccak-256" / SHA3

---
# Hashing as investment: Proof Of Work

###Challenge-response
<p align=center>
    <img src="../media/Proof_of_Work_challenge_response.svg.png" width="70%">
</p>

###Solution-verification
<p align=center>
    <img src="../media/Proof_of_Work_solution_verification.svg.png" width="70%">
</p>

???
Proof-of-work is essentially one-CPU-one-vote.

The concept was invented by Cynthia Dwork and Moni Naor as presented in a 1993 journal article.

The term "Proof of Work" or POW was first coined and formalized in a 1999 paper by Markus Jakobsson and Ari Juels titled,
"Proofs of work and bread pudding protocols"  - http://www.hashcash.org/papers/bread-pudding.pdf

A proof-of-work (PoW) system (or protocol, or function) is an economic measure to deter denial of service attacks and other service abuses such as spam on a network by requiring some work from the service requester, usually meaning processing time by a computer. The concept was invented by Cynthia Dwork and Moni Naor as presented in a 1993 journal article. The term "Proof of Work" or POW was first coined and formalized in a 1999 paper by Markus Jakobsson and Ari Juels. An early example of the proof-of-work system used to give value to a currency is the shell money of the Solomon Islands.

ref: https://en.wikipedia.org/wiki/Proof-of-work_system
ref: http://www.hashcash.org/papers/bread-pudding.pdf

---
# Merkle Tree
<p align=center>
    <img src="../media/Hash_Tree.svg" width="100%">
</p>
???
AKA Hash tree
Allows for a merkle proof, showing information is present without revealing it

---
exclude: true
## Directed acyclic graph (DAG)

<p align=center>
    <img src="../media/Topological_Ordering.svg">
</p>

???
A contender for blockchain networks, another type of protocol that allows for direct transaction throughput.

In mathematics and computer science, a directed acyclic graph, is **a finite directed graph with no directed cycles**. That is, it consists of finitely many vertices and edges, with each edge directed from one vertex to another, such that there is no way to start at any vertex v and follow a consistently-directed sequence of edges that eventually loops back to v again. Equivalently, a DAG is a directed graph that has a topological ordering, a sequence of the vertices such that every edge is directed from earlier to later in the sequence.

---
# Wallets

* Private key = proof of ownership

Addresses are controlled by private keys, as trusted a method of proving identity as might be used.

???
secured via encryption
Wallets are an address with a verifiable owner, based on a secret

---
# Distributed network of verifiers
<p align=center>
  <img src="../media/networkeyes.png" width="100%">
</p>

---
exclude:true
# Trade-offs
???
Speed vs security

Reference Antonopolous article
ref: https://bitcoin.org/en/you-need-to-know

---
exclude:true
# Threats
* Double spend
???
In the literature on electronic cash, this property was often refer to as "solving the double-spending problem". Double-spending is the result of successfully spending some money more than once. Bitcoin users protect themselves from double spending fraud by waiting for confirmations when receiving payments on the blockchain, the transactions become more irreversible as the number of confirmations rises. 

https://en.bitcoin.it/wiki/Irreversible_Transactions

--
exclude:true
* Majority (51%) attack
???
The attacker submits to the merchant/network a transaction which pays the merchant, while privately mining a blockchain fork in which a double-spending transaction is included instead. After waiting for n confirmations, the merchant sends the product. If the attacker happened to find more than n blocks at this point, he releases his fork and regains his coins; otherwise, he can try to continue extending his fork with the hope of being able to catch up with the network. If he never manages to do this, the attack fails, the payment to the merchant will go through, and the work done mining will also go to waste, as any new bitcoins would be overwritten by the longest chain.

The probability of success is a function of the attacker's hashrate (as a proportion of the total network hashrate) and the number of confirmations the merchant waits for. For example, if the attacker controls 10% of the network hashrate but the merchant waits for 6 confirmations, the success probability is on the order of 0.1%. If the attacker controls more than half of the network hashrate, this has a probability of 100% to succeed. Since the attacker can generate blocks faster than the rest of the network, he can simply persevere with his private fork until it becomes longer than the branch built by the honest network, from whatever disadvantage. 

https://en.bitcoin.it/wiki/Majority_attack

---
# Who is Satoshi Nakamoto?
<p align=center>
  <img src="../media/satoshi.jpg" width="100%">
</p>

---
class: center, middle
# Early market
---
# The Dark Web

<p align=center>
    <img src="../media/bitcoin_drugs.jpg" style="width:80%">
</p>
???

According to the FBI, Silk Road made a total of $1.2bn between 2011 and 2013.

The marketplace is widely understood to be the fist 'killer app' for bitcoin, and drugs still make up a large proportion of transactions made using the digital currency today.
$650,000 - The daily sales volume reached by 6 dark markets in 2014
$435,000 - Average daily volume of bitcoin's top merchant processor, BitPay

---
# Onion Routing
<p align=center>
    <img src="../media/tor.jpg" style="width:80%">
</p>
???
            Possible via Onion routing
                Development by US DOD
---
# TOR and the law

Who is responsible for the traffic passing through your equipment?

* Tor Exit Node Operator Charged With Distributing Child Porn - Austria
* Tor Exit Node Operator Charged With preparing to organize mass disorder - Russia

[US legal FAQ from EFF](https://www.torproject.org/eff/tor-legal-faq.html.en)

???
ref: https://www.torproject.org/eff/tor-legal-faq.html.en

Tor Exit Node Operator Charged With Distributing Child Porn

https://www.techdirt.com/articles/20121130/07495221185/tor-exit-node-operator-charged-with-distributing-child-porn.shtml

On April 6, Russian math instructor Dmitry Bogatov was arrested in Moscow and charged with “preparing to organize mass disorder” and making “public calls for terrorist activity” due to a gross misunderstanding about the operation of the Tor internet anonymization service. Bogatov is accused of authoring a series of online posts published to the sysadmins.ru discussion platform on March 29 under the username “Ayrat Bashirov.” One post called for protesters to attend an unsanctioned, anonymously organized demonstration on April 2 with “rags, bottles, gas, turpentine, styrofoam, and acetone.” Another post linked to the music video for Kanye West’s “No Church in the Wild,” described by investigators as “a video recording with insubordination to the legal demands of the police, and mass disorder.”

The posts appear to have come from the IP address of a server located in Bogatov’s home, but this server is a part of the Tor network—an exit node that routes anonymous traffic from all over the world and makes it appear to have originated from that computer.

https://www.eff.org/deeplinks/2017/04/access-now-and-eff-condemn-arrest-tor-node-operator-dmitry-bogatov-russia
---
# Exit Relays

Exit relays raise special concerns because the traffic that exits from them can be traced back to the relay's IP address. While we believe that running an exit relay is legal, it is statistically likely that an exit relay will at some point be used for illegal purposes, which may attract the attention of private litigants or law enforcement. An exit relay may forward traffic that is considered unlawful, and that traffic may be attributed to the operator of a relay. If you are not willing to deal with that risk, a bridge or middle relay may be a better fit for you. These relays do not directly forward traffic to the Internet and so can't be easily mistaken for the origin of allegedly unlawful content.
???
From the EFF Tor FAQ:

* Should I tell my ISP that I'm running an exit relay?
 * Yes. Make sure you have a Tor-friendly ISP that knows you're running an exit relay and supports you in that goal. This will help ensure that your Internet access isn't cut off due to abuse complaints. The Tor community maintains a list of ISPs that are particularly Tor-savvy, as well as ones that aren't.

* Is it a good idea to let others know that I'm running an exit relay?
 * Yes. Be as transparent as possible about the fact that you're running an exit relay. If your exit traffic draws the attention of the government or disgruntled private party, you want them to figure out quickly and easily that you are part of the Tor network and not responsible for the content. This could mean the difference between having your computer seized by law enforcement and being left alone.

* Should I snoop on the plaintext traffic that exits through my Tor relay?
 * No. You may be technically capable of modifying the Tor source code or installing additional software to monitor or log plaintext that exits your relay. However, Tor relay operators in the United States can possibly create civil and even criminal liability for themselves under state or federal wiretap laws if they monitor, log, or disclose Tor users' communications, while non-U.S. operators may be subject to similar laws. Do not examine anyone's communications without first talking to a lawyer.
---
# Suggested exit relay operator precautions

* Set up a reverse DNS name for the IP address that makes clear that the computer is an exit relay.
* Set up a notice like this to explain that you're running an exit relay that's part of the Tor network.
* If possible, get an ARIN registration for your exit relay that displays contact information for you, not your ISP. This way, you'll receive any abuse complaints and can respond to them directly. Otherwise, try to ensure that your ISP forwards abuse complaints that it receives to you.

... not something you should do lightly, in other words.

---
# Silk road
<p align=center>
    <img src="../media/silkroadseized.jpg" style="width:80%">
</p>
???
"Ross Ulbricht conceived of his Silk Road black market as an online utopia beyond law enforcement's reach."
    
The Judge gave Ulbricht the most severe sentence possible, beyond what even the prosecution had explicitly requested. The minimum Ulbricht could have served was 20 years.

"The stated purpose [of the Silk Road] was to be beyond the law. In the world you created over time, democracy didn’t exist. You were captain of the ship, the Dread Pirate Roberts," she told Ulbricht as she read the sentence, referring to his pseudonym as the Silk Road's leader. 
"Silk Road’s birth and presence asserted that its...creator was better than the laws of this country. This is deeply troubling, terribly misguided, and very dangerous."

In addition to his prison sentence, Ulbricht was also ordered to pay a massive restitution of more than $183 million

ref: https://en.wikipedia.org/wiki/Silk_Road_(marketplace)
ref: https://www.wired.com/2015/05/silk-road-creator-ross-ulbricht-sentenced-life-prison/
---
# Botnets

Commonly controlled through the publication of messages on channels in protocols like IRC, anonymous networking allows for remote control of infected hosts. Often used to relay illicit traffic or participate in DDOS attacks. Since most botnets using IRC networks and domains can be taken down with time, hackers have moved to P2P botnets with C&C as a way to make it harder to be taken down.

???
ref: https://en.wikipedia.org/wiki/Botnet

---
# Ransomware
<p align=center>
    <img src="../media/wannacry_screencap.jpg" style="width:100%">
</p>

???
The WannaCry ransomware attack was a May 2017 worldwide cyberattack by the WannaCry ransomware cryptoworm, which targeted computers running the Microsoft Windows operating system by encrypting data and demanding ransom payments in the Bitcoin cryptocurrency. 

---
# Exchanges
<p align=center>
  <img src="../media/crypto-exchange.jpg" width="100%">
</p>

???
Lack of regulation on secondary markets
There's that third party threat of violence again

---
exclude: true
# Hashgraph

???
ref: https://en.wikipedia.org/wiki/Hashgraph

---
