# Github gists

https://gist.github.com/

---
# What is github gists?

With gists, you can share single files, parts of files, and full applications with other people. 

Directories can't be shared.

Every gist is a Git repository, which means that it can be forked and cloned.

You can access your gists at https://gist.github.com.

???
ref: https://help.github.com/articles/about-gists/
---
# Public gists

Public gists show up in Discover, where people can browse new gists as they're created. They're also searchable, so you can use them if you'd like other people to find and see your work. After creating a gist, you cannot convert it from public to secret.

---
# Secret gists

Secret gists don't show up in Discover and are not searchable. Use them to jot down an idea that came to you in a dream, create a to-do list, or prepare some code or prose that's not ready to be shared with the world. After creating a gist, you cannot convert it from public to secret.

Secret gists aren't private. If you send the URL of a secret gist to a friend, they'll be able to see it. However, if someone you don't know discovers the URL, they'll also be able to see your gist. If you need to keep your code away from prying eyes, you may want to create a private repository instead.
---
# Embedding gists

You can embed a gist in any text field that supports Javascript, such as a blog post. To get the embed code, click the clipboard icon next to the Embed URL of a gist.

To embed a specific gist file, append the Embed URL with ?file=FILENAME.
---
# Creating a gist

1. Sign in to GitHub.
1. Navigate to your gist home page.
1. Type an optional description and name for your gist.
1. Type the text of your gist into the gist text box.
1. Do one of the following:
 * To create a public gist, click Create public gist.
 * To create a secret gist, click Create secret Gist.

???
ref: https://help.github.com/articles/creating-gists/
---
# Use case: Runnable github gists with npx

* index.js - the code (name not important, set in package.json)
```
#!/usr/bin/env node

console.log('yay gist')
```
* package.json - define the command executed via the `bin` attribute
```
{
 "name": "npx-is-cool",
 "version": "0.0.0",
 "bin": "./index.js"
}
```
* README.md

Example: 
```
$ npx https://gist.github.com/zkat/4bc19503fe9e9309e2bfaa2c58074d32
```

.red[WARNING] DO NOT RUN CODE FROM THE INTERNET YOU HAVE NOT VALIDATED

???
ref: https://medium.com/@maybekatz/introducing-npx-an-npm-package-runner-55f7d4bd282b
---
