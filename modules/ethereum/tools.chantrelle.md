# Chantrelle: A truffle alternative

An alternative to Truffle, developed by the FOAM project team

???
ref: https://blog.foam.space/introducing-chanterelle-d284bdfc0e71

---
# Source

https://github.com/f-o-a-m/chanterelle

---
# Installing

 $ git clone git@github.com:f-o-a-m/chanterelle.git

### creates the local directory ```chantrelle```
 $ cd chantrelle
 $ npm install
 $ npm audit fix

---
# Configuration

Projects should have a local chantrelle.json configuration file. See:
https://chanterelle.readthedocs.io/en/latest/chanterelle-json.html 

---
# Running

$ node <PATH_TO>/chanterelle/chanterelle.js


---
# Documentation

https://chanterelle.readthedocs.io/en/latest/

---
# Example Project: Parking DAO

https://github.com/f-o-a-m/parking-dao

---
# Other projects by the same team

--
## cliquebait: a ganache replacement

* https://github.com/f-o-a-m/cliquebait

---
# Running cliquebait via Docker:

* Start docker daemon locally if not already

* Pull the image and start it:

```$ docker run --rm -it -p 8545:8545 foamspace/cliquebait:latest```

Should automatically start running. Ctrl + C to stop

---
