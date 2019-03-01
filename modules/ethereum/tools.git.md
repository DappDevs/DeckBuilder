class: center, middle, invert
# Git


???
ref: https://captainsafia.writeas.com/git-from-the-ground-up

---
# Version control tool

---
# Linux

---
# Basic functions

---
# Modularity

---
# Distributed devleopment

---
# Git uses hashes

Hashes of file contents are used to track file state
Identical files with different names / locations can be identified

---
# Observing git's object hashing method 

```shell
echo 'test content' | git hash-object -w --stdin
```

The output from the above command is a 40-character checksum hash. This is the SHA-1 hash — a checksum of the content you’re storing plus a header, which you’ll learn about in a bit. Now you can see how Git has stored your data:

```shell
$ find .git/objects -type f
.git/objects/d6/70460b4b4aece5915caf5c68d12f560a9fe3e4
```

???
In its simplest form, git hash-object would take the content you handed to it and merely return the unique key that would be used to store it in your Git database. The -w option then tells the command to not simply return the key, but to write that object to the database. Finally, the --stdin option tells git hash-object to get the content to be processed from stdin; otherwise, the command would expect a filename argument at the end of the command containing the content to be used.

ref: https://git-scm.com/book/en/v2/Git-Internals-Git-Objects

---
# git's commit hashing method

* A header
* The source tree of the commit (which unravels to all the subtrees and blobs)
* The parent commit sha1
* The author info
* The committer info (right, those are different!)
* The commit message

--
### calculating the header: 
``` shell
$ printf "commit %s\0" $(git cat-file commit HEAD | wc -c)
commit 327
```
NOTE: there's a NUL byte you can't see on that last line

???
ref: https://gist.github.com/masak/2415865

---
# Merkle Trees

A tree in which every leaf node is labelled with the hash of a data block and every non-leaf node is labelled with the cryptographic hash of the labels of its child nodes.

Also used in the ZFS file system

???
ref: https://en.wikipedia.org/wiki/Merkle_tree

---
# Directed Acyclic Graphs (DAG)
### aka causal models or causal Bayesian networks

* Graph: composed of nodes (circles) and edges (lines between circles.)
* Directed: the edges have a direction, from one node to another
* Acyclic: without recursion (no loops)

Often used in planning for tracking prerequisites, dependencies, relationships, and the order of events.

Git uses DAGs for content storage, reference pointers for heads, object model representation, and remote protocol.

???
ref: https://en.wikipedia.org/wiki/Directed_acyclic_graph
ref: https://softwareengineering.stackexchange.com/questions/171671/when-to-use-dag-directed-acyclic-graph-in-programming
ref: https://en.wikipedia.org/wiki/Automated_planning_and_scheduling
ref: https://en.wikipedia.org/wiki/Wait-for_graph

tool: http://www.dagitty.net/

---
# Merging Change Reconciliation & Consensus methods

---
