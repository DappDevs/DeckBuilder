# Execution timing

* Parallel (vs sequential)
* Concurrent (vs consecutive)
* Synchronous (vs asynchronous)

How many instructions can be started, executed, and completed at the same time?
How many instructions can be executed at one time?

???

ref: https://developer.mozilla.org/en/docs/Web/JavaScript/Reference/Global_Objects/Promise
ref: https://developers.google.com/web/fundamentals/primers/promises
ref: https://stackoverflow.com/questions/4844637/what-is-the-difference-between-concurrency-parallelism-and-asynchronous-methods

---
# Processors

Processors originally supported execution of a single instruction.
Multiple cores are essentially multiple processing units, allowing concurrent parallel execution

---
# Threads

Threads allow processors to manage instruction queues for separate processes.

Single threaded execution is still the standard for most programs.

???
ref: https://www.pluralsight.com/guides/introduction-to-asynchronous-javascript

See "web workers" as multi-htreading solution

---
# Blocking

When only 1 instruction can be executed at a time, all other isntructions that might be executed are BLOCKED until the current instruction finishes.

---
# Concurrency

Able to process at the same time

---
# Concurrent vs Asynchronous

* Concurrent: starting of instructions at the same time
* Asynchronous: execution out of order, possibly concurrent but not necessarily

???

---
