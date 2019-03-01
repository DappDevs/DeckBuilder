# Clevis 

Ethereum blockchain orchestration, testing, CLI, and Dapp scaffolding.

http://clevis.io/
https://github.com/austintgriffith/clevis
---
# Install

easiest: use docker (it handles the environment and RPC node for you):

```shell
docker run -ti --rm --name clevis -p 3000:3000 -p 8545:8545 \
  -v ~/your-dapp-directory:/dapp austingriffith/clevis:latest
```

OR install/link for the source:

```shell
git clone https://github.com/austintgriffith/clevis.git
cd clevis
npm install
sudo npm link
```

OR try an npm install:

```shell
sudo npm install --unsafe-perm -g clevis@latest
```

If you aren't using docker make sure you install ganache-cli and mocha:

```shell
npm install -g ganache-cli
npm install -g mocha
```

---
# Commands
```shell
clevis init
```
* help
* init
* version
* update
* accounts
[and many more]o

???
ref: https://github.com/austintgriffith/clevis

---
# Docker options


---
# Using Infura

If you want to use Infura to deploy, you need to make the following changes:

In your clevis.json config file, change:

```json
USE_INFURA: true
```

Create a .env file and add your private key under mnemonic:

```json
mnemonic=32h42hj34mysuperprivakeyasdasd2h34hjk234
```

