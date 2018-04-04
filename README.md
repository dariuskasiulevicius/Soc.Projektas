# NFQ "Outsiders" Komanda



Requirements
------------

  * PHP 7.1.3 or higher
  * [Node.js](https://nodejs.org/en/download/) 6.0.0 or higher
  * and the [usual Symfony application requirements][1].

Installation
------------

Install the composer dependencies:

```bash
$ composer install
```

Then install the node dependencies:

```bash
$ yarn

# OR

$ npm install
```

Usage
-----

Build the assets with Webpack Encore

```bash
$ yarn run encore dev
# yarn run encore dev --watch to automatically rebuild on every change
```

And start the built-in webserver

```bash
$ ./bin/console server:start
# stop it again with ./bin/console server:stop
```
