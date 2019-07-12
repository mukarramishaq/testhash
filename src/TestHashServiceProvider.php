<?php
/**
 * TestHashServiceProvider.php file contains TestHashServiceProvider
 * class. This class is necessary for laravel projects to make this package
 * fully integrated in to them
 * 
 * @author Mukarram Ishaq <mukarramishaq189@gmail.com>
 */

namespace Mukarramishaq\TestHash;

use Illuminate\Support\ServiceProvider;

/**
 * TestHashServiceProvider extends Laravel ServiceProvider class
 * all your registrations for views/migrations/models/controllers and translations
 * would be handled through this class
 * 
 * @author Mukarram Ishaq <mukarramishaq189@gmail.com>
 */
class TestHashServiceProvider extends ServiceProvider
{
    /**
     * @inheritDoc
     *
     * @return void
     */
    public function boot()
    {
    }
    /**
     * @inheritDoc
     *
     * @return void
     */
    public function register()
    {
    }
}
