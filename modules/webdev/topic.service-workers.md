# Service Workers

???
ref: https://developers.google.com/web/fundamentals/primers/service-workers/
ref: https://developers.google.com/web/fundamentals/primers/service-workers/lifecycle
---
# What are service workers?

A service worker is a script that your browser runs in the background, separate from a web page, opening the door to features that don't need a web page or user interaction.

---
# Why?
Now:
* intercept and handle network requests
* handle push notifications 
* perform background sync
Later?:
* periodic sync 
* geofencing

The reason this is such an exciting API is that it allows you to support offline experiences, giving developers complete control over the experience.
---
# Considerations

* It's a JavaScript Worker, so it can't access the DOM directly. Instead, a service worker can communicate with the pages it controls by responding to messages sent via the postMessage interface, and those pages can manipulate the DOM if needed.
* Service worker is a programmable network proxy, allowing you to control how network requests from your page are handled.
* It's terminated when not in use, and restarted when it's next needed, so you cannot rely on global state within a service worker's onfetch and onmessage handlers. If there is information that you need to persist and reuse across restarts, service workers do have access to the IndexedDB API.
* Service workers make extensive use of promises, so if you're new to promises, then you should stop reading this and check out Promises, an introduction.

