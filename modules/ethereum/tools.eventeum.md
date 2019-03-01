# Eventeum

ref: https://github.com/ConsenSys/eventeum/
ref: https://beta.kauri.io/article/90dc8d911f1c43008c7d0dfa20bde298

---
# Purpose

A service to monitor registered events on the blockchain for the purpose of notifying subscribed listeners, like microservices.

---
# Features

* Dynamically Configurable - Eventeum exposes a REST api so that smart contract events can be dynamically subscribed / unsubscribed.

* Highly Available - Eventeum instances communicate with each other to ensure that every instance is subscribed to the same collection of smart contract events.

* Resilient - Node failures are detected and event subscriptions will continue from the failure block once the node comes back online.

* Fork Tolerance - Eventeum can be configured to wait a certain amount of blocks before an event is considered 'Confirmed'. If a fork occurs during this time, a message is broadcast to the network, allowing your services to react to the forked/removed event.

---
# Supported Broadcast Mechanisms

* Kafka
* HTTP Post
* RabbitMQ

---
# Registering & unregistering

Let the service know what events to listen for

---
