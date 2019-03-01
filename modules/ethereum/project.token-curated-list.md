# Project: Token Curated List

???
ref: https://medium.com/@ilovebagels/token-curated-registries-1-0-61a232f8dac7
---
# Parameters

* MIN_DEPOSIT
The number of tokens a candidate must lock as a deposit for their application, and for the duration of their listing thereafter.

* APPLY_STAGE_LEN
The duration, in blocks or epoch time, during which an application can be challenged. If this period passes with no challenge being issued, the candidate becomes a listee.

* COMMIT_PERIOD_LEN
The duration, in blocks or epoch time, during which token holders can commit votes for a particular challenge.

* REVEAL_PERIOD_LEN
The duration, in blocks or epoch time, during which token holders can reveal committed votes for a particular challenge.

* DISPENSATION_PCT
The percentage of the forfeited deposit in a challenge which is awarded to the winning party as a special dispensation compensating for their capital risk.

* VOTE_QUORUM
The percentage of tokens out of the total tokens revealed in favor of admitting/keeping a challenged candidate necessary for that candidate to get/keep listee status. The VOTE_QUORUM does not count non-voting tokens, and unrevealed tokens are considered non-voting. By way of example, a VOTE_QUORUM of 50 means all challenges are simple majority votes.

---
# Listings

---
# Applications

???
When a candidate for listing in a token-curated registry decides to take the step of actually applying for a listing, an application process begins. To make an application, a candidate must make a deposit in the registry’s intrinsic token of at least MIN_DEPOSIT, where MIN_DEPOSIT is the number of tokens at stake should a challenge arise. Once an application is made, it can be resolved after APPLY_STAGE_LEN if no challenge was raised in that period. An application which resolves with no challenge results in the candidate becoming a listee.

An application which is challenged resolves at the conclusion of the challenge, and the candidate’s status is determined then by the result of the challenge.

An application stores a snapshot of the current canonical parameters when it is instantiated, and all actions taken on or against an application reference its snapshotted parameters.

---
# Challenges

???
Challenges may be initiated against candidates in their application period, or against listees. There may not be more than one challenge active against a candidate or listee at a given time. A challenge is initiated by putting at stake a deposit of MIN_DEPOSIT against some application or listing whose deposit is of at least MIN_DEPOSIT (see “touch-and-remove” for challenges against listings whose deposits are less than MIN_DEPOSIT).

When a challenge is instantiated, a snapshot of the registry’s current canonical parameters are stored with the challenge and a vote begins (see: Voting) in which any token holder can participate. At the vote’s conclusion, either the challenger or candidate’s deposit is forfeited. DISPENSATION_PCT percent of the forfeited deposit is awarded to the winning party in the challenge as compensation for that party’s capital risk. The remainder of the forfeited deposit is awarded to voters in the majority voting bloc according to token weight. Token voters in the minority voting bloc neither lose tokens nor receive any reward.

(Note: The DISPENSATION_PCT essentially specifies the necessary certainty of a rational challenger in their ability to win a challenge for them to actually issue that challenge. For example, if the special dispensation is set at 50% a rational challenger must be above 66% confident in their ability to win a token vote to raise a challenge. This is because when there is a 33% chance of -100% deposit and a 66% chance of +50% deposit, (0.33)(-1) + (0.66)(.5) = 0.)

If the challenge was made against an application, then at its conclusion the application is deleted and the candidate may or may not become a listee. If the challenge was made against a listing, then at its conclusion the listing may or may not be deleted.

---
# Edge case: “touch-and-remove”

If a challenge is made against a listing whose deposit is less than the current canonical MIN_DEPOSIT, the listing is immediately removed and the deposits of both challenger and listee are returned. This can occur when a candidate becomes a listee having posted some snapshotted deposit amount, and at some point after the snapshot was taken the current canonical MIN_DEPOSIT increases.

Why touch-and-remove? First, accept that deposit amounts in challenges must be of equal value, lest token-voters behave in a manner biased by a rational financial incentive to defeat the party with the larger deposit (as this gives them a larger payout). Having accepted that, why not specify deposits sizes in challenges always be matched against the deposit of the challenged listing? It is possible that a deposit of some amount could, on the basis of the deposited token’s market price, become of less value than the gas and opportunity cost the challenger, and particularly voters, would incur by initiating and participating in the challenge. Touch-and-remove mitigates the opportunity for registry poisoning which could be done by listings whose deposits are too small to challenge by giving strategically-minded, activist token holders discretion to simply remove such listings at a minimal cost.

For honest listings to guard against touch-and-remove griefing should the canonical MIN_DEPOSIT increase, listees can make deposits as large as they like, and any amount over the current canonical MIN_DEPOSIT may be withdrawn at any time. In a challenge, the current canonical MIN_DEPOSIT tokens are snapshotted at challenge instantiation and only that amount are ever at stake.

---
# Voting

The critical game-theoretic considerations of voting in token-curated registries are that it be token-weighted and commit-reveal. Beyond that, voting need not be implemented in any particular way strictly speaking, but consideration should be given to the efficiency of the voting mechanism in terms of token liquidity.

Token-weightedness is important to give those with the most at stake the most say in the registry’s curation, as these token holders are most incentivized to exercise the greatest diligence. Commit-reveal is important so as not to let the voting process itself influence voters to vote in any other way than that which they feel will be most productive for the registry’s curation. Token liquidity should be maximized to the extent possible so as to encourage participation in the voting process.

Partial-lock commit/reveal voting is presently the most efficient known token voting mechanism for token-curated registries.

---
# Parameterization

The parameters of a token-curated registry must be responsive to the market dynamics of the registry’s intrinsic token. For example, if the market price of the token declines such that application volume increases to a point where token holders cannot effectively audit all of the applications being made, the MIN_DEPOSIT parameter should be increased in response. How parameterization, which is really registry governance, can be done best is considered an open question at this time.

In AdChain, for the purposes of example, parameterization is done on a similar basis as listing applications. A different set of the same parameters are used such that MIN_DEPOSIT might be much higher to propose a re-parameterization than it is to apply for a listing. Reparameterization proposals are challengeable, with the tokens deposited being at stake for both proposer and challenger. Token holders can vote to reparameterize the registry parameters, or the parameters of the parameterizer itself.
---

