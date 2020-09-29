<p align="center"><img width="400" src="https://github.com/zacksmash/fortify-uikit/blob/master/fortify-uikit-image.png"></p>

# Introduction

**FortifyUIkit** is a Laravel Fortify UI preset, built with UIkit.

- [Installation](#installation)
- [Features](#features)

<a name="installation"></a>
## Installation

To get started, you'll need to install **FortifyUIkit** using Composer. This package requires FortifyUI, so please make sure you have installed that first..

```bash
composer require zacksmash/fortify-uikit
```

Next, you'll need to run the install command:

```bash
php artisan uikit:install
```

This command will publish **FortifyUIkits's** views and resources to your project.

- All Auth views
- a `webpack.mix.js` file, tuned for UIkit
- a `package.json` file, for all NPM modules
- an `.editorconfig` file
- a `.gitignore`

<p align="center"><img  src="https://github.com/zacksmash/fortify-uikit/blob/master/fortify-uikit-screenshot.png"></p>

## License

**FortifyUI** is open-sourced software licensed under the [MIT license](LICENSE.md).
