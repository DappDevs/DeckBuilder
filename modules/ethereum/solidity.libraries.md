# Imports


---
# Convention

* Always put at the top, per style guide

---
# Example

```solidity
pragma solidity >=0.4.0 <0.6.0;

import "./Owned.sol";

contract A {
    // ...
}
```

https://solidity.readthedocs.io/en/v0.5.1/style-guide.html
---
# Pragma is defined per file

Importing a file into another file with a different pragma will not affect the pragma defined in the imported file.

---
# Import styles

### Global
```solidity
import "filename";
```
This statement imports all global symbols from “filename” (and symbols imported there) into the current global scope (different than in ES6 but backwards-compatible for Solidity). This simple form is not recommended for use, because it pollutes the namespace in an unpredictable way: If you add new top-level items inside “filename”, they will automatically appear in all files that import like this from “filename”. It is better to import specific symbols explicitly.

### Aliased
```solidity
import * as symbolName from "filename";
```
then:
symbolName.contractFunction()

OR

```solidity
import "filename" as symbolName;
```
then:
symbolName.ContactName.contractFunction()

This statement creates a new global symbol symbolName and imports as members all the global symbols from "filename".

### Specified
```solidity
import {symbol1 as alias, symbol2} from "filename";
```
If there is a naming collision, you can also rename symbols while importing. This code creates new global symbols alias and symbol2 which reference symbol1 and symbol2 from inside "filename", respectively.

---
# Paths

The file name is always treated as a path with .red[/] as directory separator, .red[.] as the current and .red[..] as the parent directory.
When .red[.] or .red[..] is followed by a character except .red[/], it is not considered as the current or the parent directory. All path names are treated as absolute paths unless they start with the current .red[.] or the parent directory .red[..].

To import a file x from the same directory as the current file, use ```import "./x" as x;```. If you use ```import "x" as x;``` instead, a different file could be referenced (in a global “include directory”).

It depends on the compiler (see below) how to actually resolve the paths. In general, the directory hierarchy does not need to strictly map onto your local filesystem, it can also map to resources discovered via e.g. ipfs, http or git.
---
# Best Practice

Always use relative imports like import "./filename.sol"; and avoid using .. in path specifiers. In the latter case, it is probably better to use global paths and set up remappings as explained below.

???
ref: https://solidity.readthedocs.io/en/v0.5.1/layout-of-source-files.html
---
# Remapping import paths with the compiler

### solc: commandline arguments

---
# solc remapping example

If you clone github.com/ethereum/dapp-bin/ locally to /usr/local/dapp-bin, you can use the following in your source file:
```
import "github.com/ethereum/dapp-bin/library/iterable_mapping.sol" as it_mapping;
```

Then run the compiler with:

```shell
solc github.com/ethereum/dapp-bin/=/usr/local/dapp-bin/ source.sol
```
---
# solc inclusion limitations 

solc only allows you to include files from certain directories. They have to be in the directory (or subdirectory) of one of the explicitly specified source files or in the directory (or subdirectory) of a remapping target. If you want to allow direct absolute includes, add the remapping /=/.

You can use the ```--allow-paths``` flag to include additional paths.

---
# remix remapping

Remix supports mapping directly from github

```
import “github.com/ethereum/dapp-bin/library/iterable_mapping.sol” as it_mapping;
```

---
