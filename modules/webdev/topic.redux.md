# Redux

![Redux](../media/logo-redux.svg)

???
ref: https://redux.js.org/
ref: https://redux.js.org/introduction/getting-started
ref: https://redux-starter-kit.js.org/

---
# What is Redux?

A predictable state container for JavaScript apps.

---
# Why Redux?

tl;dr: Because handling mutation and asynchronicity is hard.

As the requirements for JavaScript single-page applications have become increasingly complicated, our code must manage more state than ever before. This state can include server responses and cached data, as well as locally created data that has not yet been persisted to the server. UI state is also increasing in complexity, as we need to manage active routes, selected tabs, spinners, pagination controls, and so on.

Managing this ever-changing state is hard. If a model can update another model, then a view can update a model, which updates another model, and this, in turn, might cause another view to update. At some point, you no longer understand what happens in your app as you have lost control over the when, why, and how of its state. When a system is opaque and non-deterministic, it's hard to reproduce bugs or add new features.

As if this weren't bad enough, consider the new requirements becoming common in front-end product development. As developers, we are expected to handle optimistic updates, server-side rendering, fetching data before performing route transitions, and so on. We find ourselves trying to manage a complexity that we have never had to deal with before, and we inevitably ask the question: is it time to give up? The answer is no.

???
ref: https://redux.js.org/introduction/motivation

---
# How does it work?
## 3 Principles

* Single source of truth
 * The state of your whole application is stored in an object tree within a single store.
* State is read-only
 * The only way to change the state is to emit an action, an object describing what happened.
* Changes are made with pure functions
 * To specify how the state tree is transformed by actions, you write pure reducers.

???
ref: https://redux.js.org/introduction/three-principles

---
# Reducers

Instead of mutating the state directly, you specify the mutations you want to happen with plain objects called actions. Then you write a special function called a reducer to decide how every action transforms the entire application's state.

In a typical Redux app, there is just a single store with a single root reducing function. As your app grows, you split the root reducer into smaller reducers independently operating on the different parts of the state tree. This is exactly like how there is just one root component in a React app, but it is composed out of many small components.

This architecture might seem like an overkill for a counter app, but the beauty of this pattern is how well it scales to large and complex apps. It also enables very powerful developer tools, because it is possible to trace every mutation to the action that caused it. You can record user sessions and reproduce them just by replaying every action.

---
# Usage

```shell
$ npm install --save redux
```

???
ref: https://redux.js.org/introduction/installation
---
# Example: counter

See live example: https://codesandbox.io/s/github/reduxjs/redux/tree/master/examples/counter

```javascript
import { createStore } from 'redux'

/**
 * This is a reducer, a pure function with (state, action) => state signature.
 * It describes how an action transforms the state into the next state.
 *
 * The shape of the state is up to you: it can be a primitive, an array, an object,
 * or even an Immutable.js data structure. The only important part is that you should
 * not mutate the state object, but return a new object if the state changes.
 *
 * In this example, we use a `switch` statement and strings, but you can use a helper that
 * follows a different convention (such as function maps) if it makes sense for your
 * project.
 */
function counter(state = 0, action) {
  switch (action.type) {
    case 'INCREMENT':
      return state + 1
    case 'DECREMENT':
      return state - 1
    default:
      return state
  }
}

// Create a Redux store holding the state of your app.
// Its API is { subscribe, dispatch, getState }.
let store = createStore(counter)

// You can use subscribe() to update the UI in response to state changes.
// Normally you'd use a view binding library (e.g. React Redux) rather than subscribe() directly.
// However it can also be handy to persist the current state in the localStorage.

store.subscribe(() => console.log(store.getState()))

// The only way to mutate the internal state is to dispatch an action.
// The actions can be serialized, logged or stored and later replayed.
store.dispatch({ type: 'INCREMENT' })
// 1
store.dispatch({ type: 'INCREMENT' })
// 2
store.dispatch({ type: 'DECREMENT' })
// 1
```
???
ref: https://redux.js.org/introduction/getting-started
ref: https://codesandbox.io/s/github/reduxjs/redux/tree/master/examples/counter
---

