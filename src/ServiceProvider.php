<?php

namespace Imannms\LaravelDirectoryPermission;

use Illuminate\Support\ServiceProvider as Provider;

class ServiceProvider extends Provider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {

    }
	
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		if ($this->app->runningInConsole()) {
			$this->commands([
				Commands\LaravelDirectoryPermissionCommand::class,
			]);
		}
	}
}