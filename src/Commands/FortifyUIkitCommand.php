<?php

namespace Zacksmash\FortifyUIkit\Commands;

use Illuminate\Console\Command;

class FortifyUIkitCommand extends Command
{
    public $signature = 'uikit:install';

    public $description = 'Install UIkit views and resources';

    public function handle()
    {
        $this->publishAssets();
        $this->updateWebpackUrl();

        $this->comment('UIkit is now installed!');
        $this->info('Remember to run npm i && npm run watch.');
    }

    protected function publishAssets()
    {
        $this->callSilent('vendor:publish', ['--tag' => 'resources', '--force' => true]);
    }

    protected function updateWebpackUrl()
    {
        $webpack_file = file_get_contents(base_path('webpack.mix.js'));

        $webpack_file = str_replace(
            'http://CHANGE_ME.test',
            env('APP_URL'),
            $webpack_file
        );

        file_put_contents(
            base_path('webpack.mix.js'),
            $webpack_file
        );
    }
}
