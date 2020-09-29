<p align="center"><img width="400" src="https://github.com/zacksmash/fortify-uikit/blob/master/fortify-uikit-image.png"></p>

# Introduction

**FortifyUIkit** is a Laravel Fortify UI preset, built with UIkit.

- [Requirements](#requireents)
- [Installation](#installation)

<a name="requirements"></a>
## Requirements

This package requires Laravel Fortify and FortifyUI. Installing [*FortifyUI*](https://github.com/zacksmash/fortify-ui) will automatically install and configure Laravel Fortify for you, so you may start there.

<a name="installation"></a>
## Installation

To get started, you'll need to install **FortifyUIkit** using Composer.

```bash
composer require zacksmash/fortify-uikit
```

Next, you'll need to run the install command:

```bash
php artisan fortify-ui:uikit
```

This command will publish **FortifyUIkits's** views and resources to your project.

- All `auth` views
- a `webpack.mix.js` file, tuned for UIkit
- a `package.json` file, for required NPM modules
- a slightly opioniated `.editorconfig` file
- a `.gitignore`

<p align="center"><img  src="https://github.com/zacksmash/fortify-uikit/blob/master/fortify-uikit-screenshot.png"></p>

## License

**FortifyUIkit** is open-sourced software licensed under the [MIT license](LICENSE.md).
