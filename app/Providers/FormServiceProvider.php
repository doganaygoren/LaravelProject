<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;
class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //16-07-19
        Form::component('bsText', 'components.form.text', 
            ['name','name_of_value','value'=> null, 'attributes'=> [] ]);
    }
}
