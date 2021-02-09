<p align="center"><img width="400" src="https://github.com/zacksmash/fortify-uikit/raw/master/fortify-uikit-image.png"></p>

# Introduction

**FortifyUIkit** is a Laravel Fortify UI preset, built with UIkit.

- [Requirements](#requirements)
- [Installation](#installation)

<a name="requirements"></a>
## Requirements

This package requires [*FortifyUI*](https://github.com/zacksmash/fortify-ui). Please, install that first before installing **FortifyUIkit**.

<a name="installation"></a>
## Installation

To get started, you'll need to install **FortifyUIkit** using Composer.

```bash
composer require zacksmash/fortify-uikit
```

Next, you'll need to run the install command:

```bash
php artisan fortify:uikit
```

This command will publish **FortifyUIkits's** views and resources to your project.

- All `auth` views
- a `webpack.mix.js` file, tuned for UIkit
- a `package.json` file, for required NPM modules
- a slightly opinionated `.editorconfig` file
- a `.gitignore` file
- a new route for `user/profile`

<p align="center"><img  src="https://github.com/zacksmash/fortify-uikit/raw/master/fortify-uikit-screenshot.png"></p>

## License

**FortifyUIkit** is open-sourced software licensed under the [MIT license](LICENSE.md).
