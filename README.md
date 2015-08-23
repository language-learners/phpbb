This is our custom fork of phpBB, for running the language forum site.

Your code contributions are welcome!

## How to Contribute

[Bug reports](https://github.com/language-learners/phpbb/issues) are
always welcome!

If you want to propose a code change, here are a few principles:

1. We strongly prefer to use phpBB 3.1 extensions that plug in cleanly
   using the official extension API.  Actually editing the phpBB source
   code is a last resort.
2. If your proposed change involves a lot of work, or if it would
   substantially alter the feel of the forum, please discuss it on the
   forum first!
3. You can submit your proposed change as an ordinary GitHub "Pull
   Request."

## How to prepare a pull request

First, create a fork of this repository using the "Fork" button on the
upper right.  Then, check out your fork, substituting the appropriate
username below:

```sh
# Insert your own username here.
git git@github.com:$MY_GITHUB_NAME/phpbb.git

# Switch to the newly-created directory, and check out the correct
# branch, along with any submodules:
cd phpbb
git checkout custom
git submodule update --init

# Create an upstream branch so that you can access the main repo later:
git remote add upstream git@github.com:language-learners/phpbb.git
```

Now, create a branch for the feature you want to add:

```sh
# Make sure we base our branch off the latest `custom`.
git checkout custom
git pull upstream custom

# Create a new branch and check it out.
git checkout -b cool_extension

# Push a copy of our new branch to our personal repo.
git push -u origin cool_extension
```

Now you can go ahead and make any changes you want.  See below for
instructions on using `docker-compose` to run a local copy of the site.

Some notes about preparing pull requests:

1. Please include no more than one extension or feature per branch.  This
   makes it easy for us to pick which features to merge right away, and
   which to discuss further.  (As a special exception, you may include
   multiple language packs in one branch, as long as each is in a separate
   commit.)  You may submit multiple branches, each based off of `custom`.
2. When including third-party code, please always (a) have exactly one
   commit for each piece of third-party code and (b) include the version
   number of the code and the URL where you found it.  This is so future
   maintainers can figure out how to upgrade extensions and language
   packs. :-)
3. Please do not the `README.md` file (unless you're actually submitting
   improvements).
4. Please double-check your patches for files that don't belong.
5. Please try very hard to avoid making patches to the existing phpBB
   source code.  These make it very hard for us to upgrade to new versions
   of phpBB.  Whenever possible, we prefer to use the extension API.

When your branch looks good, you can run:

```sh
git push origin cool_extension
```

...and then go to GitHub and create a pull request based off the upstream
`custom` branch.

## Running the site locally

The recommended way to run the site locally is to install `docker` and
`docker-compose`, which will allow you to run code inside "containers",
which are sort of like lightweight virtual machines.  This will allow you
to hack on the code without manually installing PHP, MySQL, and a bunch of
different extensions and libraries.

You can [get Docker from the official site](https://www.docker.com/).  Mac
and Windows users should probably try using Docker Toolbox, which provides
all the necessary command-line tools plus a GUI.

Assuming you have working copies of `docker` and `docker-compose`, and that
your system supports a Unix-like Terminal with `git`, you can run the
following commands:

```sh
# Check out the source code from GitHub and switch into the source
# directory before running the setup commands, if you haven't already done
# so following the steps above.
git clone https://github.com/language-learners/phpbb.git
cd phpbb

# Check out our custom branch (or substitute the name our feature branch),
# if you haven't already done so.
git checkout custom
git submodule update --init

# Install the PHP packages required to run the site, and make sure the
# database exists.  You generally only need to do this once, unless we
# upgrade phpBB.
docker-compose run --rm setup

# Start up the database and the site.
docker-compose up site
```

If the `docker-compose` command is missing, or unable to find a working
copy of `docker`, then please consult your Docker Toolbox or other Docker
setup instructions, particularly the part about getting the command-line
tools correctly configured.  You may be told to run something like:

```sh
eval "$(docker-machine env default)"
```

From here, you can visit http://localhost:8000/ and finish the phpBB
install process.  Fill in the following:

- Database server hostname or DSN: db
- Database name: phpbb
- Database username: root
- Database password: root

You will be asked to install a `config.php` file.  This goes in the `phpBB`
subdirectory of the repository, and you'll need to run:

```sh
chmod a+r phpBB/config.php
```

Once this is done, unfortunately, you'll be asked to remove `phpBB/install`
directory from phpBB.  To temporarily get rid of `phpBB/install`, run:

```sh
rm -r phpBB/install/
```

Before checking your changes in, you can run the following command to
restore the deleted `phpBB/install`:

```sh
git checkout phpBB/install
```

## Deploying the site to production

This requires being a site admin with server access.  But you can do it as
follows, if you run a secure machine where your environment variables are
not vulnerable.

Before starting, make sure that all your local changes are properly
commited.

```sh
# One-time setup.  (We'll make this better.)
(cd deploy && bundle install)

# Specify where to deploy to.
export DEPLOY_HOST=foo.com DEPLOY_USER=bar
# Leading space required to omit password from shell history.
 export DEPLOY_PASSWORD=CorrectHorseBatteryStaple

# Run the deploy.
deploy/deploy-site
```

The deploy is deliberately slowed down.  Once it's done, it will update the
`deployed` branch to point to the version of the code that it just deployed.

## License

[GNU General Public License v2](http://opensource.org/licenses/gpl-2.0.php)
