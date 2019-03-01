# Truffle Boxes
## project templates & prepared code samples

See https://github.com/truffle-box for the truffle boxes available.

???
ref: http://truffleframework.com/boxes/
ref: https://github.com/truffle-box
ref: https://medium.com/edgefund/ethereum-development-on-windows-part-1-da260f6a6c06

---
# Box: bare-box

`truffle init` without a box name defaults to 'bare-box'
`truffle unbox bare-box` is its equivalent

```shell
$ truffle init
✔ Preparing to download
✔ Downloading
✔ Cleaning up temporary files
✔ Setting up box

Unbox successful. Sweet!

Commands:

  Compile:        truffle compile
  Migrate:        truffle migrate
  Test contracts: truffle test
```
repo: https://github.com/truffle-box/bare-box

---
# Box: Metacoin

```$ truffle unbox metacoin```

```shell
$ find .

./truffle.js
./migrations
./migrations/1_initial_migration.js
./migrations/2_deploy_contracts.js
./LICENSE
./test
./test/metacoin.js
./test/TestMetacoin.sol
./test/.placeholder
./contracts
./contracts/MetaCoin.sol
./contracts/ConvertLib.sol
./contracts/Migrations.sol
./contracts/.placeholder
./truffle-config.js
```

repo: https://github.com/truffle-box/metacoin-box

---
# Box: vyper-example

```$ truffle unbox vyper-example```

Results:
```shell
$ find .
./migrations
./migrations/1_initial_migration.js
./migrations/2_deploy_contracts.js
./test
./test/vyperStorage.js
./contracts
./contracts/Migrations.sol
./contracts/VyperStorage.vy
./truffle-config.js
```

---
