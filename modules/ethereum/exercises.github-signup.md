# Signing up for Github

---
# Selecting a username

* Consider length, last name, ease of use, professionalism 

http://github.com/<username>/<projectname>

---
# Verifying your email

If you do not verify your email address, you will not be able to:

* Create or fork repositories
* Create issues or pull requests
* Comment on issues, pull requests, or commits
* Authorize OAuth App applications
* Generate personal access tokens
* Receive email notifications

https://help.github.com/articles/verifying-your-email-address/

---
# Publishing your user page

http(s)://<username>.github.io

???
https://help.github.com/articles/user-organization-and-project-pages/

---
# Authentication setup
Connection methods:
* SSH
* HTTPS

???
ref: https://help.github.com/articles/which-remote-url-should-i-use/

---
# Connecting to GitHub with SSH

Using the SSH protocol, you can connect and authenticate to remote servers and services.
With SSH keys, you can connect to GitHub without supplying your username or password at each visit.

???
ref: https://help.github.com/articles/connecting-to-github-with-ssh/

---
# Setting up SSH access

* [Checking for existing SSH keys on your system](https://help.github.com/articles/checking-for-existing-ssh-keys)
 * Before you generate an SSH key, you can check to see if you have any existing SSH keys.
```shell
$ ls -al ~/.ssh
```
* [Generating a new SSH key and adding it to the ssh-agent](https://help.github.com/articles/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent)
 * After you've checked for existing SSH keys, you can generate a new SSH key to use for authentication, then add it to the ssh-agent.
* [Adding a new SSH key to your GitHub account](https://help.github.com/articles/adding-a-new-ssh-key-to-your-github-account)
 * To configure your GitHub account to use your new (or existing) SSH key, you'll also need to add it to your GitHub account.
* [Testing your SSH connection](https://help.github.com/articles/testing-your-ssh-connection)
 * After you've set up your SSH key and added it to your GitHub account, you can test your connection.
* [Working with SSH key passphrases](https://help.github.com/articles/working-with-ssh-key-passphrases)
 * You can secure your SSH keys and configure an authentication agent so that you won't have to reenter your passphrase every time you use your SSH keys.
???
ref: https://help.github.com/articles/connecting-to-github-with-ssh/

---
# Cloning with HTTPS

The https:// clone URLs are available on all repositories, public and private. These URLs work everywhere--even if you are behind a firewall or proxy. In certain cases, if you'd rather use SSH, you might be able to use SSH over the HTTPS port.

When you git clone, git fetch, git pull, or git push to a remote repository using HTTPS URLs on the command line, you'll be asked for your GitHub username and password.

If you have enabled two-factor authentication, or if you are accessing an organization that uses SAML single sign-on, you must provide a personal access token instead of entering your password for HTTPS Git.
???
ref: https://help.github.com/articles/which-remote-url-should-i-use/

---
# Cloning with SSH

SSH URLs provide access to a Git repository via SSH, a secure protocol. To use these URLs, you must generate an SSH keypair on your computer and add the public key to your GitHub account. For information on setting up an SSH keypair, see "Generating an SSH key."

When you git clone, git fetch, git pull, or git push to a remote repository using SSH URLs, you'll be prompted for a password and must provide your SSH key passphrase.

If you are accessing an organization that uses SAML single sign-on, you won't be able to clone with SSH. Instead, clone with the HTTPS URL.
???
ref: https://help.github.com/articles/which-remote-url-should-i-use/

---
