# Solidity Time Calculations

???
TODO: assemble some common time calculation examples

ref: https://solidity.readthedocs.io/en/v0.5.1/units-and-global-variables.html
---
# Time Literals
Suffixes like seconds, minutes, hours, days and weeks after literal numbers can be used to specify units of time where seconds are the base unit and units are considered naively in the following way:

* 1 == 1 seconds
* 1 minutes == 60 seconds
* 1 hours == 60 minutes
* 1 days == 24 hours
* 1 weeks == 7 days

Take care if you perform calendar calculations using these units, because not every year equals 365 days and not even every day has 24 hours because of leap seconds. Due to the fact that leap seconds cannot be predicted, an exact calendar library has to be updated by an external oracle.

The suffix years has been removed in version 0.5.0 due to the reasons above.

These suffixes cannot be applied to variables. For example, if you want to interpret a function parameter in days, you can in the following way:

```solidity
function f(uint start, uint daysAfter) public {
    if (now >= start + daysAfter * 1 days) {
      // ...
    }
}
```
---

