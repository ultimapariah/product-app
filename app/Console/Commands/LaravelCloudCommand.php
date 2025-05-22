<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LaravelCloudCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cloud:deploy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $command = "composer install --optimize-autoloader";

        $path = base_path();

        exec("cd $path && $command");
        
        Artisan::call('db:seed');
    }
}
