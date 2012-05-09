# FloW Coding Standard

**FloW Coding Standard** is a coding standard for the style checker [PHP_CodeSniffer][2] which checks [PHP][4] source code against the [PSR-1][1] Coding Style Guide.

This coding standard is meant to be used with the PHP scripting language. It includes a lot of sniffs that ship with [PHP_CodeSniffer][2], but also defines some own sniffs.

In contrast to [klaussukveira/phpcs-psr1][2] this coding standard defines more sniffs and is available as a [PEAR][5] package. Therefore this standard provides a solid base to write clean code.

## Features

* Follows the [PSR-1][1] Coding Style Guide.
* Mostly compatible with the [PEAR Coding Standards][6].
* Includes almost every sniff that ships with [PHP_CodeSniffer][2] version 1.3.3 (stable).

## Requirements

* [PHP][4] 5.4.0 (or later)
* [PEAR Installer][5] 1.9.4 (or later)
* [PHP_CodeSniffer][2] 1.3.3 (or later)

## System-Wide Installation

**FloW Coding Standard** should be installed using the [PEAR Installer][5]. This installer is the PHP community's de-facto standard for installing PHP components.

    sudo pear channel-discover http://florianwolters.github.com/pear
    sudo pear install --alldeps fw/phpcs_FloW

## Usage

The best documentation for **FloW Coding Standard** are the unit tests, which are shipped in the package. You will find them installed into your PEAR repository, which on Linux systems is normally `/usr/share/php/test`.

[Click here](http://florianwolters.github.com/phpcs-FloW) for the API documentation of **FloW Coding Standard**.

### Best Practices

It is recommended to set the following [PHP_CodeSniffer][2] configuration options after the installation for convience.

    phpcs --config-set default_standard FloW
    phpcs --config-set encoding UTF-8
    phpcs --config-set severity 1
    phpcs --config-set tab_width 0

## Development Environment

If you want to patch or enhance this component, you will need to create a suitable development environment. The easiest way to do that is to install [phix4componentdev](http://phix-project.org):

    # phix4componentdev
    sudo apt-get install php5-xdebug
    sudo apt-get install php5-imagick
    sudo pear channel-discover pear.phix-project.org
    sudo pear -D auto_discover=1 install -Ba phix/phix4componentdev

You can then clone the git repository:

    # phpcs-FloW
    git clone https://github.com/florianwolters/phpcs-FloW

Then, install a local copy of this component's dependencies to complete the development environment:

    # build vendor/ folder
    phing build-vendor

To make life easier for you, common tasks (such as running unit tests, generating code review analytics, and creating the PEAR package) have been automated using [Phing](http://phing.info). You'll find the automated steps inside the `build.xml` file that ships with the component.

Run the command 'phing' in the component's top-level folder to see the full list of available automated tasks.

## License

This program is free software: you can redistribute it and/or modify it under the terms of the GNU Lesser General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License along with this program. If not, see http://gnu.org/licenses/lgpl.txt.



[1]: http://github.com/pmjones/fig-standards/blob/psr-1-style-guide/proposed/PSR-1.md
[2]: http://github.com/klaussilveira/phpcs-psr1
[3]: http://pear.php.net/package/PHP_CodeSniffer
[4]: http://php.net
[5]: http://pear.php.net
[6]: http://pear.php.net/manual/standards.php
