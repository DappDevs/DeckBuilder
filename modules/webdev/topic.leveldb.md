# LevelDB

![logo leveldb](../media/logo-leveldb.png)

???
ref: http://leveldb.org/

---
# What is LevelDB?

LevelDB is a fast key-value storage library written at Google that provides an ordered mapping from string keys to string values.

A light-weight, single-purpose library for persistence with bindings to many platforms.

---
# LevelDB features

* Keys and values are arbitrary byte arrays.
* Data is stored sorted by key.
* Callers can provide a custom comparison function to override the sort order.
* The basic operations are Put(key,value), Get(key), Delete(key).
* Multiple changes can be made in one atomic batch.
* Users can create a transient snapshot to get a consistent view of data.
* Forward and backward iteration is supported over the data.
* Data is automatically compressed using the Snappy compression library.
* External activity (file system operations etc.) is relayed through a virtual interface so users can customize the operating system interactions.

???
ref: https://github.com/google/leveldb

---
# LevelDB limitations

* This is not a SQL database. It does not have a relational data model, it does not support SQL queries, and it has no support for indexes.
* Only a single process (possibly multi-threaded) can access a particular database at a time.
* There is no client-server support builtin to the library. An application that needs such support will have to wrap their own server around the library.

---
# LevelDB sample

```javascript
var level = require('level')
var db = level('./db', { valueEncoding: 'json' })

db.put('key', { example: true }, function (err) {
  if (err) throw err

  db.get('key', function (err, value) {
    if (err) throw err
    console.log(value)
  })
})
```

???
ref: http://leveldb.org/

---
# Access via web3 (prior to 1.x)

Note: DEPRECATED in geth (and so web3) 1.x in favor of localStorage

```javascript
// Setters
web3.db.putString(db, key, value)
web3.db.putHex(db, key, value)

// Getters
web3.db.getString(db, key)
web3.db.getHex(db, key)
```

Parameters:

db (String) - The database to store to.
key: (String) - The name of the store.
value: (String) - The string value to store.


???
ref: https://github.com/ethereum/wiki/wiki/JavaScript-API#web3db
ref: https://github.com/ethereum/go-ethereum/issues/311

---
