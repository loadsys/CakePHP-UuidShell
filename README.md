# CakePHP-UuidShell

[![Latest Version](https://img.shields.io/github/release/loadsys/CakePHP-UuidShell.svg?style=flat-square)](https://github.com/loadsys/CakePHP-UuidShell/releases)
[![Build Status](https://img.shields.io/travis/loadsys/CakePHP-UuidShell/master.svg?style=flat-square)](https://travis-ci.org/loadsys/CakePHP-UuidShell)
[![Coverage Status](https://img.shields.io/coveralls/loadsys/CakePHP-UuidShell/master.svg?style=flat-square)](https://coveralls.io/r/loadsys/CakePHP-UuidShell)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/loadsys/cakephp-uuid-shell.svg?style=flat-square)](https://packagist.org/packages/loadsys/cakephp-uuid-shell)

A CakePHP plugin that provides a Shell to read an app's Configure vars from the command line.

* This is the Cake 3.x version of the plugin, which exists on the `master` branch and is tracked by the `~1.0` semver.
* For the Cake 2.x version of this plugin, please use the repo's `cake-2.x` branch.


## Requirements

* CakePHP 3.0.0+
* PHP 5.6+


## Installation

```bash
$ composer require loadsys/cakephp-uuid-shell:~1.0
```


## Usage

To use this plugin, call it from the command line:

```shell
$ cd path/to/app/
$ ./bin/cake uuid

# Generate 15 UUIDs.
$ ./bin/cake uuid 15
```


## Contributing

### Code of Conduct

This project has adopted the Contributor Covenant as its [code of conduct](CODE_OF_CONDUCT.md). All contributors are expected to adhere to this code. [Translations are available](http://contributor-covenant.org/).

### Reporting Issues

Please use [GitHub Isuses](https://github.com/loadsys/CakePHP-UuidShell/issues) for listing any known defects or issues.

### Development

When developing this plugin, please fork and issue a PR for any new development.

## License

[MIT](https://github.com/loadsys/CakePHP-UuidShell/blob/master/LICENSE.md)


## Copyright

[Loadsys Web Strategies](http://www.loadsys.com) 2015
