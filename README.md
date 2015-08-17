This is our custom fork of phpBB, for running the language forum site.
Note that this is actually a manual reconstruction of what we're running,
which will hopefully replace the current version sometime soon.

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
# directory before running the setup commands.
git clone https://github.com/language-learners/phpbb.git
cd phpbb

# Make certain folders accessible by PHP inside the Docker container.
chmod -R a+w phpBB/cache/ phpBB/files/ phpBB/store/ phpBB/images/

# Install the PHP packages required to run the site, and make sure the
# database exists.  You generally only need to do this once, unless we
# upgrade phpBB.
docker-compose run --rm setup
echo 'CREATE DATABASE phpbb;' | \
  docker-compose run --rm setup mysql -h db -u root -proot

# Start up the database and the site.
docker-compose up site
```

If you're on Windows, you'll need to make appropriate changes to the
`chmod` and `echo` commands. If the `docker-compose` command is missing,
or unable to find a working copy of `docker`, then please consult
your Docker Toolbox or other Docker setup instructions, particular the
part about getting the command-line tools correctly configured.

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

Once this is done, unfortunately, you'll need to hide the `phpBB/install`
directory from phpBB.  But please don't check the hidden or removed version
into `git`!

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
