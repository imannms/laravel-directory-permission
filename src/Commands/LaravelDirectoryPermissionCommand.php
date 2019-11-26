<?php

namespace Imannms\LaravelDirectoryPermission\Commands;

use Illuminate\Console\Command;

class LaravelDirectoryPermissionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'imannms:laravel-directory-permission';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set appropiate permission for storage and bootstrap/cache directory.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $storage_path = storage_path();
        $cache_path = base_path('bootstrap/cache');

        exec('chown -R www-data:www-data '. $storage_path .' '. $cache_path .' && chmod -R ug+rwx '. $storage_path .' '. $cache_path);

        $this->info('Done: ' . $storage_path);
        $this->info('Done: ' . $cache_path);
    }

}