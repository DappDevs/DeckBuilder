# Software development methodologies

Design principles, guides, manifestos

---
# SOLID

    S — Single Responsibility Principle(S.R.P)
    O — Open-Closed Principle
    L — Liskov Substitution Principle
    I — Interface Segregation Principle
    D — Dependency Inversion Principle

???
ref: https://hackernoon.com/solid-principles-made-easy-67b1246bcdf
ref: https://lostechies.com/derickbailey/2009/02/11/solid-development-principles-in-motivational-pictures/

---
# 12 Factor applications

I. Codebase
One codebase tracked in revision control, many deploys

II. Dependencies
Explicitly declare and isolate dependencies

III. Config
Store config in the environment

IV. Backing services
Treat backing services as attached resources

V. Build, release, run
Strictly separate build and run stages

VI. Processes
Execute the app as one or more stateless processes

VII. Port binding
Export services via port binding

VIII. Concurrency
Scale out via the process model

IX. Disposability
Maximize robustness with fast startup and graceful shutdown

X. Dev/prod parity
Keep development, staging, and production as similar as possible

XI. Logs
Treat logs as event streams

???
ref: https://12factor.net/

---
