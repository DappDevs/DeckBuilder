# IndexedDB API

IndexedDB is a low-level API for client-side storage of significant amounts of structured data, including files/blobs. This API uses indexes to enable high-performance searches of this data. While Web Storage is useful for storing smaller amounts of data, it is less useful for storing larger amounts of structured data. IndexedDB provides a solution.

???
ref: https://developer.mozilla.org/en-US/docs/Web/API/IndexedDB_API
---
# What is IndexedDB? 

IndexedDB is a transactional database system, like an SQL-based RDBMS. However, unlike SQL-based RDBMSes, which use fixed-column tables, IndexedDB is a JavaScript-based object-oriented database. IndexedDB lets you store and retrieve objects that are indexed with a key; any objects supported by the structured clone algorithm can be stored. You need to specify the database schema, open a connection to your database, and then retrieve and update data within a series of transactions.

---
# CORS

Like most web storage solutions, IndexedDB follows a same-origin policy. So while you can access stored data within a domain, you cannot access data across different domains.
---
# Storage limits & eviction criteria

There are a number of web technologies that store data of one kind or another on the client side (i.e. on your local disk). IndexedDB is the most commonly talked about one. The process by which the browser works out how much space to allocate to web data storage and what to delete when that limit is reached is not simple, and differs between browsers.

See: https://developer.mozilla.org/en-US/docs/Web/API/IndexedDB_API/Browser_storage_limits_and_eviction_criteria

???
ref: https://developer.mozilla.org/en-US/docs/Web/API/IndexedDB_API/Browser_storage_limits_and_eviction_criteria

---
# Storage types

* Persistent: This is data that is intended to be kept around for a long time. This will only be evicted if the user chooses to (for example, in Firefox you can choose to delete all stored data or only stored data from selected origins by going to Preferences and using the options under Privacy & Security > Cookies & Site Data).
* Temporary: This is data that doesn't need to persist for a very long time. This will be evicted under a .blue[least recently used] \(LRU policy) when Storage limits are reached.

Storage is temporary by default; developers can choose to use persistent storage for their sites using the `StorageManager.persist()` method available in the Storage API.
???
ref: https://developer.mozilla.org/en-US/docs/Web/API/Storage_API
ref: https://developer.mozilla.org/en-US/docs/Web/API/StorageManager/persist

---
# User opt-in

Persistent storage: a UI popup alert the user that this data will persist, and asks if they are happy with that. 
Temporary data storage: no user prompts.

---
# Basic pattern

The basic pattern that IndexedDB encourages is the following:

1. Open a database.
2. Create an object store in the database. 
3. Start a transaction and make a request to do some database operation, like adding or retrieving data.
4. Wait for the operation to complete by listening to the right kind of DOM event.
5. Do something with the results (which can be found on the request object).

???
https://developer.mozilla.org/en-US/docs/Web/API/IndexedDB_API/Using_IndexedDB
---
# Version checking

```javascript
if (!window.indexedDB) {
    window.alert("Your browser doesn't support a stable version of IndexedDB. Such and such feature will not be available.");
}
```

```javascript
// In the following line, you should include the prefixes of implementations you want to test.
window.indexedDB = window.indexedDB || window.mozIndexedDB || window.webkitIndexedDB || window.msIndexedDB;
// DON'T use "var indexedDB = ..." if you're not in a function.
// Moreover, you may need references to some window.IDB* objects:
window.IDBTransaction = window.IDBTransaction || window.webkitIDBTransaction || window.msIDBTransaction || {READ_WRITE: "readwrite"}; // This line should only be needed if it is needed to support the object's constants for older browsers
window.IDBKeyRange = window.IDBKeyRange || window.webkitIDBKeyRange || window.msIDBKeyRange;
// (Mozilla has never prefixed these objects, so we don't need window.mozIDB*)
```
---
# Opening a Database

```javascript
// Let us open our database
var request = window.indexedDB.open("MyTestDatabase", 3);
```

open() returns an IDBOpenDBRequest object with a result (success) or error value that you handle as an event.

The result of a successful open() is an instance of IDBDatabase.
???
ref: https://developer.mozilla.org/en-US/docs/Web/API/IDBFactory/open

---
# IDBRequest objects

Most other asynchronous functions in IndexedDB do the same thing as open() - return an IDBRequest object with the result or error.

---
# Database version number & schema

The second parameter to the open method is the version of the database. The version of the database determines the database schema — the object stores in the database and their structure.

If the database doesn't already exist, it is created by the open operation, then an `onupgradeneeded` event is triggered and you create the database schema in the handler for this event.
If the database does exist but you are specifying an upgraded version number, an onupgradeneeded event is triggered straight away, allowing you to provide an updated schema in its handler.

???
ref: https://developer.mozilla.org/en-US/docs/Web/API/IndexedDB_API/Using_IndexedDB
ref: https://developer.mozilla.org/en-US/docs/Web/API/IndexedDB_API/Using_IndexedDB#Updating_the_version_of_the_database

---
# Schema

---
# Generating handlers

```javascript
request.onerror = function(event) {
  // Do something with request.errorCode!
};

request.onsuccess = function(event) {
  // Do something with request.result!
};
```
---
# Example
```javascript
var db;
var request = indexedDB.open("MyTestDatabase");
request.onerror = function(event) {
  alert("Why didn't you allow my web app to use IndexedDB?!");
};
request.onsuccess = function(event) {
  db = event.target.result;
};
```

---
# Handling errors

Error events are targeted at the request that generated the error, then the event bubbles to the transaction, and then finally to the database object. If you want to avoid adding error handlers to every request, you can instead add a single error handler on the database object, like so:

```javascript
db.onerror = function(event) {
  // Generic error handler for all errors targeted at this database's
  // requests!
  alert("Database error: " + event.target.errorCode);
};
```
---
# Creating or updating the version of the database

When you create a new database or increase the version number of an existing database (by specifying a higher version number than you did previously, when Opening a database), the onupgradeneeded event will be triggered and an IDBVersionChangeEvent object will be passed to any onversionchange event handler set up on request.result (i.e., db in the example). In the handler for the upgradeneeded event, you should create the object stores needed for this version of the database:

```javascript
// This event is only implemented in recent browsers   
request.onupgradeneeded = function(event) { 
  // Save the IDBDatabase interface 
  var db = event.target.result;

  // Create an objectStore for this database
  var objectStore = db.createObjectStore("name", { keyPath: "myKey" });
};
```
---
# Object Stores

IndexDB Databases store data in a set of ObjectStores. These are named key/value stores, and there can be any number of them.

---
# ObjectStore parameters

* keyPath: makes an individual object in the store unique.
* autoIncrement: enables the key generator for that object store. By default this flag is not set.
---
# Key generation

The current number of a key generator is always set to 1 when the object store for that key generator is first created.

---
# Indexing


???
ref: https://developer.mozilla.org/en/IndexedDB/Using_IndexedDB#Using_an_index
---
# Constraints

---
# Example

```javascript
const dbName = "the_name";

var request = indexedDB.open(dbName, 2);

request.onerror = function(event) {
  // Handle errors.
};
request.onupgradeneeded = function(event) {
  var db = event.target.result;

  // Create an objectStore to hold information about our customers. We're
  // going to use "ssn" as our key path because it's guaranteed to be
  // unique - or at least that's what I was told during the kickoff meeting.
  var objectStore = db.createObjectStore("customers", { keyPath: "ssn" });

  // Create an index to search customers by name. We may have duplicates
  // so we can't use a unique index.
  objectStore.createIndex("name", "name", { unique: false });

  // Create an index to search customers by email. We want to ensure that
  // no two customers have the same email, so use a unique index.
  objectStore.createIndex("email", "email", { unique: true });

  // Use transaction oncomplete to make sure the objectStore creation is 
  // finished before adding data into it.
  objectStore.transaction.oncomplete = function(event) {
    // Store values in the newly created objectStore.
    var customerObjectStore = db.transaction("customers", "readwrite").objectStore("customers");
    customerData.forEach(function(customer) {
      customerObjectStore.add(customer);
    });
  };
};
```

---
# Transactions

Before you can do anything with your new database, you need to start a transaction. Transactions come from the database object, and you have to specify which object stores you want the transaction to span. Once you are inside the transaction, you can access the object stores that hold your data and make your requests. Next, you need to decide if you're going to make changes to the database or if you just need to read from it.

???
ref: https://developer.mozilla.org/en-US/docs/Web/API/IDBDatabase/transaction

---
# Transaction modes
* readonly
* readwrite
* versionchange

When defining the scope, specify only the object stores you need. This way, you can run multiple transactions with non-overlapping scopes concurrently.

Only specify a readwrite transaction mode when necessary. You can concurrently run multiple readonly transactions with overlapping scopes, but you can have only one readwrite transaction for an object store.

---
# versionchange mode

To change the "schema" or structure of the database—which involves creating or deleting object stores or indexes—the transaction must be in versionchange mode. This transaction is opened by calling the IDBFactory.open method with a version specified.

---
# readonly vs readwrite mode

Only specify a readwrite transaction mode when necessary.

You can concurrently run multiple readonly transactions with overlapping scopes,
but you can have only one readwrite transaction for an object store.

---
# Writing

```javascript
var transaction = db.transaction(["customers"], "readwrite");
// Note: Older experimental implementations use the deprecated constant IDBTransaction.READ_WRITE instead of "readwrite".
// In case you want to support such an implementation, you can write: 
```

---
#
Only specify a readwrite transaction mode when necessary. You can concurrently run multiple readonly transactions with overlapping scopes, but you can have only one readwrite transaction for an object store.
