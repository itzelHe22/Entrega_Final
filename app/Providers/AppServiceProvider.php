<?php

namespace App\Providers;
use Enl\Flysystem\Cloudinary\ApiFacade as CloudinaryClient;
use Enl\Flysystem\Cloudinary\CloudinaryAdapter;
use Cloudinary;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use TheDarkKid\Flysystem\Cloudinary\CloudinaryAdapter as CloudinaryCloudinaryAdapter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Storage::extend('cloudinary', function ($app, $config) {

            return new Filesystem(new CloudinaryAdapter($config));
        });
    }
}
