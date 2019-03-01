# Populus

An alternative to truffle

https://populus.readthedocs.io/en/latest/quickstart.html

---
# System Dependencies

Populus depends on the following system dependencies.

* The Solidity Compiler : Contracts are authored in the Solidity language, and then compiled to the bytecode of the Ethereum Virtual Machine (EVM).

* Geth: The official Go implementation of the Ethereum protocol. The Geth client runs a blockchain node, lets you interact with the blockchain, and also runs and deploys to the test blockchains during development.

--
In addition, populus needs some system dependencies to be able to install the PyEthereum library.

---

## Debian, Ubuntu, Mint
sudo apt-get install libssl-dev

## Fedora, CentOS, RedHat
sudo yum install openssl-devel

## OSX
brew install pkg-config libffi autoconf automake libtool openssl

---
# Command Line Options
```shell
$ populus

Usage: populus [OPTIONS] COMMAND [ARGS]...

  Populus

Options:
  -p, --project PATH  Specify a populus project directory
  -l, --logging TEXT  Specify the logging level.  Allowed values are
                      DEBUG/INFO or their numeric equivalents 10/20
  -v, --version       Show the version and exit.
  -h, --help          Show this message and exit.

Commands:
  chain          Manage and run ethereum blockchains.
  compile        Compile project contracts, storing their...
  deploy         Deploys the specified contracts to a chain.
  init           Generate project layout with an example...
  makemigration  Generate an empty migration.
  migrate        Run project migrations
```

---
# Project Layout
By default Populus expects a project to be laid out as follows:

```shell
└── project root
    ├── populus.json
    ├── build (automatically created during compilation)
    │   └── contracts.json
    ├── contracts
    |   ├── MyContract.sol
    |   ├── ....
    └── tests
        ├── test_my_contract.py
        ├── test_some_other_tests.py
        ├── ....
        └── ....
```

---
