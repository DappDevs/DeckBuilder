# Exploring IPFS

???

ref: https://medium.com/coinmonks/a-hands-on-introduction-to-ipfs-ee65b594937
ref: https://medium.freecodecamp.org/hands-on-get-started-with-infura-and-ipfs-on-ethereum-b63635142af0

---
# Installing IPFS

Check if it's already installed:
```shell
$ which ipfs
/usr/local/bin/ipfs

$ ipfs help
USAGE:

    ipfs - Global p2p merkle-dag filesystem.
...
```
???
ref: http://ipfs.io/docs/install/

---
# Installing IPFS - Manually
* Download a package from https://dist.ipfs.io/#go-ipfs

### Mac OS X and Linux
After downloading, untar the archive, and move the ipfs binary somewhere in your executables $PATH using the install.sh script:
```
$ tar xvfz go-ipfs.tar.gz
$ cd go-ipfs
$ ./install.sh
```

### Windows
After downloading, unzip the archive, and move ipfs.exe somewhere in your %PATH%.

???
ref: https://docs.ipfs.io/introduction/install/

---
# Installing IPFS - packages

```shell
$ brew install ipfs
...
To have launchd start ipfs now and restart at login:
  brew services start ipfs
Or, if you don't want/need a background service you can just run:
  ipfs daemon
```

---
# Updating IPFS

Before we move on...

```shell
go get -u github.com/ipfs/ipfs-update
```
---
# Initializing IPFS on your system

```
ipfs init
```

???
Error upon repeat:
```
    initializing IPFS node at /Users/rj/.ipfs
    Error: ipfs configuration file already exists!
    Reinitializing would overwrite your keys.
```
---
# Download and read the README file

```
$ ipfs cat /ipfs/QmS4ustL54uo8FzR9455qaxZwuMiUhyvMcX9Ba8nUH4uVv/readme
```

---
class: invert
```
Hello and Welcome to IPFS!

██╗██████╗ ███████╗███████╗
██║██╔══██╗██╔════╝██╔════╝
██║██████╔╝█████╗  ███████╗
██║██╔═══╝ ██╔══╝  ╚════██║
██║██║     ██║     ███████║
╚═╝╚═╝     ╚═╝     ╚══════╝

If you're seeing this, you have successfully installed
IPFS and are now interfacing with the ipfs merkledag!

 -------------------------------------------------------
| Warning:                                              |
|   This is alpha software. Use at your own discretion! |
|   Much is missing or lacking polish. There are bugs.  |
|   Not yet secure. Read the security notes for more.   |
 -------------------------------------------------------

Check out some of the other files in this directory:

  ./about
  ./help
  ./quick-start     <-- usage examples
  ./readme          <-- this file
  ./security-notes
```
---
# Read the quick-start guide

```
$ ipfs cat /ipfs/QmS4ustL54uo8FzR9455qaxZwuMiUhyvMcX9Ba8nUH4uVv/quick-start
```
---
# Download a cat photo

```shell
$ ipfs cat /ipfs/QmW2WQi7j6c7UgJTarActp7tDNikE4B2qXtFCfLPdsgaTQ/cat.jpg >cat.jpg
$ open cat.jpg
```

---
# Add a file to IPFS

```
$ echo "This is a test file" > MYFILE
$ ipfs add MYFILE

added QmYYG9kKXdbbQWyfQwJsT1r2BDiFbGNfAXCRng8CMY19Gi MYFILE
 20 B / 20 B [=================================================================================================================] 100.00%

$ ipfs cat QmYYG9kKXdbbQWyfQwJsT1r2BDiFbGNfAXCRng8CMY19Gi

This is a test file
```
See full usage for the add function:
```shell
$ ipfs --help add
```
---
# Add content from STDIN to IPFS

```shell
hash=`echo "I <3 IPFS -$(whoami)" | ipfs add -q` ; curl "https://ipfs.io/ipfs/$hash"
```

---
# Going online

Open another terminal and run the daemon:
```shell
$ ipfs daemon

Initializing daemon...
go-ipfs version: 0.4.18-aefc746
Repo version: 7
System version: amd64/darwin
Golang version: go1.11.2
Swarm listening on /ip4/10.1.10.126/tcp/4001
Swarm listening on /ip4/127.0.0.1/tcp/4001
Swarm listening on /ip6/2603:3005:650b:5500::f9c3/tcp/4001
Swarm listening on /ip6/2603:3005:650b:5500:c3f:6fba:2f88:7a03/tcp/4001
Swarm listening on /ip6/2603:3005:650b:5500:f114:7720:b87d:c198/tcp/4001
Swarm listening on /ip6/::1/tcp/4001
Swarm listening on /p2p-circuit
Swarm announcing /ip4/10.1.10.126/tcp/4001
Swarm announcing /ip4/127.0.0.1/tcp/4001
Swarm announcing /ip6/2603:3005:650b:5500::f9c3/tcp/4001
Swarm announcing /ip6/2603:3005:650b:5500:c3f:6fba:2f88:7a03/tcp/4001
Swarm announcing /ip6/2603:3005:650b:5500:f114:7720:b87d:c198/tcp/4001
Swarm announcing /ip6/::1/tcp/4001
API server listening on /ip4/127.0.0.1/tcp/5001
Gateway (readonly) server listening on /ip4/127.0.0.1/tcp/8080
Daemon is ready
```

Make note of the tcp ports you get. If they are different, use yours in the following example commands.

---
# IPFS Daemon

* Network client
* Runs in the background
* Serves files (of your choosing...)

???
Test it:
```shell
hash=`echo "I <3 IPFS -$(whoami)" | ipfs add -q` ; curl "http://127.0.0.1:8080/ipfs/$hash"
```

---
# Finding peers
```shell
$ ipfs swarm peers

/ip4/104.131.131.82/tcp/4001/ipfs/QmaCpDMGvV2BGHeYERUEnRQAwe3N8SzbUtfsmvsqQLuvuJ
/ip4/128.199.219.111/tcp/4001/ipfs/QmSoLSafTMBsPKadTEgaXctDQVcqN88CNLHXMkTNwMKPnu
/ip6/2604:a880:1:20::203:d001/tcp/4001/ipfs/QmSoLPppuBtQSGwKDZT2M73ULpjvfd3aZ6ha4oFGL1KrGM
/ip6/2604:a880:800:10::4a:5001/tcp/4001/ipfs/QmSoLV4Bbm51jM9C4gDYZQ9Cy3U6aXMJDAbzgu2fzaDs64
```

These are a combination of <transport address>/ipfs/<hash-of-public-key>.

---
# Examining peers:

```shell
$ ipfs id QmaCpDMGvV2BGHeYERUEnRQAwe3N8SzbUtfsmvsqQLuvuJ
```
---
# Access the web console

```shell
$ open http://localhost:5001/webui
```

or the shared web UI:
```shell
$ open https://webui.ipfs.io/
```

---
# View your HTTPHeaders config

```shell
$ ipfs config --json API.HTTPHeaders
```

```shell
$ ipfs config edit
```

---
# Configuring CORS 

Execute: https://github.com/ipfs-shipyard/ipfs-webui/blob/master/cors-config.sh
or
```shell
$ ipfs config --json API.HTTPHeaders.Access-Control-Allow-Origin '["http://localhost:3000", "https://webui.ipfs.io"]'
$ ipfs config --json API.HTTPHeaders.Access-Control-Allow-Methods '["PUT", "GET", "POST"]'
```

To revert:
```shell
ipfs config --json API.HTTPHeaders {}
```

---
# Your IPFS configuration

```shell
$ ipfs config show
```

* Addresses
* API
* Bootstrap
* Datastore
* Discovery
* Gateway
* Identity
* Ipns
* Mounts
* Reprovider
* Swarm

See full documenation: https://github.com/ipfs/go-ipfs/blob/v0.4.15/docs/config.md
???
ref: https://github.com/ipfs/go-ipfs/blob/v0.4.15/docs/config.md

---
# Pinning

IPFS nodes periodically garbage collect any content that you haven’t explicitly told your node you’d like to keep.
To ensure that your node doesn’t garbage collect your content, you need to pin it to your node.
This will tell your node to cache that content permanently.

```shell
$ ipfs pin add -r /ipfs/<hash_of_folder>
```

???
ref: https://developers.cloudflare.com/distributed-web/ipfs-gateway/connecting-website/

---
# List local pinned files

```shell
$ ipfs pin ls
```

---
# More IPFS Examples

* Configuring Your Node
* Dealing with Blocks
* Git, Even More Distributed
* IPFS for Websites
* Making Your Own IPFS Service
* Modifying the bootstrap peers list
* Pinning Files
* Playing Videos
* Playing with the Network
* Snapshots

https://docs.ipfs.io/guides/examples/

---
