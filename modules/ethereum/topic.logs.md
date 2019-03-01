# Logs

???
ref: https://engineering.linkedin.com/distributed-systems/log-what-every-software-engineer-should-know-about-real-time-datas-unifying
---
# What Is a Log?

![log](../media/log.png)

A log is perhaps the simplest possible storage abstraction. It is an append-only, totally-ordered sequence of records ordered by time.
---
# Purpose of logs

* What happened
* When it happeneds
* Capture relevant details

---
# Append-only data structure

Records are appended to the end of the log, and reads proceed left-to-right.
Each entry is assigned a unique sequential log entry number.
Logs will grow to consume all space available and require management.

???

---
# Chronological ordering

The ordering of records defines a notion of "time" since entries to the left are defined to be older then entries to the right. The log entry number can be thought of as the "timestamp" of the entry. Describing this ordering as a notion of time seems a bit odd at first, but it has the convenient property that it is decoupled from any particular physical clock. This property will turn out to be essential as we get to distributed systems. 

---
# State machine replication principle

If two identical, deterministic processes begin in the same state and get the same inputs in the same order, they will produce the same output and end in the same state. 

???
The state of the process is whatever data remains on the machine, either in memory or on disk, at the end of the processing. 

---
# Deterministic

Deterministic means that the processing isn't timing dependent and doesn't let any other "out of band" input influence its results. For example a program whose output is influenced by the particular order of execution of threads or by a call to gettimeofday or some other non-repeatable thing is generally best considered as non-deterministic. 

???
ref: https://engineering.linkedin.com/distributed-systems/log-what-every-software-engineer-should-know-about-real-time-datas-unifying

---

