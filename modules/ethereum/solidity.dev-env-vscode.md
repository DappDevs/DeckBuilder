# Setting up VSCode for Ethereum development

???
ref: https://medium.com/edgefund/ethereum-development-on-windows-part-1-da260f6a6c06
ref: https://davidburela.wordpress.com/2016/11/18/configuring-visual-studio-code-for-ethereum-blockchain-development/
ref: https://www.reddit.com/r/ethdev/comments/71c5zb/what_does_your_dev_environment_look_like/

---
# Solidity

---
# VSCode-solidity package
Extension name "solidity"
https://github.com/juanfranblanco/vscode-solidity/

---
# Installing VSCode
https://code.visualstudio.com/

# Install VSCode extensions
* Go into the extensions section
* Install these plugins:
 * solidity
 * Material Icon Theme

# Enable icon theme
File –> Preferences –> File Icon Theme

---
# Editorconfig
VSCode comes equipped to handle Editorconfig files:

https://editorconfig.org/

---
# Geth

???
ref: https://ethereum.stackexchange.com/questions/41001/how-to-build-and-debug-geth-with-visual-studio-code

---
# solhint
The Solhint Solidity linter 

VSCode extension name solidity-solhint

https://github.com/protofire/solhint

This extension supports .solhint.json configuration file. It must be placed to project root directory. After any changes in .solhint.json it will be synchronized with current IDE configuration.


---
# solium

An alternative to solhint

---
# Solidity-coverage

ref: https://blog.colony.io/code-coverage-for-solidity-eecfa88668c2

---
## Install Solidity-coverage

https://github.com/sc-forks/solidity-coverage

$ npm install --save-dev solidity-coverage

## Run
### Option 1

$ ./node_modules/.bin/solidity-coverage

### Option 2

$ $(npm bin)/solidity-coverage

---

