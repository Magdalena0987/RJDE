The Big Orange Starter Theme
===

Installation
---------------

### Requirements

`The Big Orange Starter Theme` requires the following dependencies installed globaly:

- [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/)
- [Browser-Sync](https://www.browsersync.io/)

### Setup

To start using all the tools that come with `The Big Orange Starter Theme`  you need to install the necessary Node.js and Composer dependencies - run these in your theme folder directory:

```sh
$ composer install
$ npm install
```

### Running
To work and compile your Sass files on the fly start:

- `$ gulp watch-bs`

Then start editing your files and they will update in the browser automatically on save without the need to refresh the page.

Or, to run without Browser-Sync:

- then run: `$ gulp watch`

### Available CLI commands

- `composer lint:wpcs` : checks all PHP files against [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- `composer lint:php` : checks all PHP files for syntax errors.
- `composer make-pot` : generates a .pot file in the `languages/` directory.
- `npm run lint:scss` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
