<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $businessTypesNode = \App\Category::where('slug', 'business-types')->first();

        $businessTypes = \App\Category::descendantsOf( $businessTypesNode )->toTree()->pluck('name','id')->toArray();

        $realEstateTypesNode = \App\Category::where('slug', 'real-estate-types')->first();

        $realEstateTypes = \App\Category::descendantsOf( $realEstateTypesNode )->toTree()->pluck('name','id')->toArray();


        return view()->share(compact('businessTypes', 'realEstateTypes'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
