<?php

namespace Zacksmash\FortifyUIkit;

use Illuminate\Support\ServiceProvider;
use Zacksmash\FortifyUIkit\Commands\FortifyUIkitCommand;

class FortifyUIkitServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../stubs/resources/views' => base_path('resources/views'),
                __DIR__ . '/../stubs/resources/scss' => base_path('resources/scss'),
                __DIR__ . '/../stubs/resources/js' => base_path('resources/js'),
                __DIR__ . '/../stubs/.editorconfig' => base_path('.editorconfig'),
                __DIR__ . '/../stubs/.gitignore' => base_path('.gitignore'),
                __DIR__ . '/../stubs/package.json' => base_path('package.json'),
                __DIR__ . '/../stubs/webpack.mix.js' => base_path('webpack.mix.js'),
            ], 'fortify-uikit-resources');

            $this->commands([
                FortifyUIkitCommand::class,
            ]);
        }
    }
}
