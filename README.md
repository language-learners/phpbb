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

## Installing Dependencies

(from the main phpBB docs)

To be able to run an installation from the repo (and not from a pre-built
package) you need to run the following commands to install phpBB's
dependencies.

	cd phpBB
	php ../composer.phar install --dev

## License

[GNU General Public License v2](http://opensource.org/licenses/gpl-2.0.php)
