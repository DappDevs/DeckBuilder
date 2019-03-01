# Creating a new repo on github

---
# Sign in

---
# Open the "+" menu

---
# Fill in repo info

???
questions:
* public or private?

---
# Setup methods

* start a new repo on github and copy it onto your local machine
* take a repo from your machine and import it into github
* take a repo from elsewhere online and import it into github

---
# Copy new repo to your machine

```shell
$ git clone git@github.com:beyondlogical/mwlookup.git

Cloning into 'mwlookup'...
remote: Enumerating objects: 6, done.
remote: Counting objects: 100% (6/6), done.
remote: Compressing objects: 100% (5/5), done.
remote: Total 6 (delta 0), reused 6 (delta 0), pack-reused 0
Receiving objects: 100% (6/6), done.
```

This creates a new directory in the current directory named after the repo, eg "mwlookup" in this case.

---
# Importing an existing repo to github

```shell
# cd to your repo, then add the remote
$ git remote add origin git@github.com:beyondlogical/mwlookup.git
# The -u is optional, stands for 
$ git push -u origin master

Enumerating objects: 6, done.
Counting objects: 100% (6/6), done.
Delta compression using up to 8 threads
Compressing objects: 100% (5/5), done.
Writing objects: 100% (6/6), 1.23 KiB | 1.23 MiB/s, done.
Total 6 (delta 0), reused 0 (delta 0)
To github.com:beyondlogical/mwlookup.git
 * [new branch]      master -> master
```

The -u flag:
```text
-u, --set-upstream
   For every branch that is up to date or successfully pushed, add upstream (tracking) reference, used by
   argument-less git-pull(1) and other commands. For more information, see branch.<name>.merge in git-config(1).
```

---
