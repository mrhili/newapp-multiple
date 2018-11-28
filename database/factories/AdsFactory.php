<?php

use Faker\Generator as Faker;

use App\Category;

$factory->define(App\Ads::class, function (Faker $faker) {

    $realEstateTypesNodeId = \App\Category::where('slug', 'real-estate-types')->first();

    $realEstateChildrenIds = \App\Category::descendantsOf( $realEstateTypesNodeId )->toTree()->pluck('id')->toArray();

    $businessTypesNodeId = \App\Category::where('slug', 'business-types')->first();

    $businessChildrenIds = \App\Category::descendantsOf( $businessTypesNodeId )->toTree()->pluck('id')->toArray();

    $cityNodeId = \App\Category::where('slug', 'cities')->first();

    $citiesChildrenIds = \App\Category::descendantsOf( $cityNodeId )->toTree()->pluck('id')->toArray();

    $citiesChildrenOfChildren = array();

    $citiesChildrenOfChildrenNode;

    $positions = array();

    foreach ($citiesChildrenIds as $citiesChildrenId) {

    	$citiesChildrenOfChildrenNode = \App\Category::find($citiesChildrenId);

    	$citiesChildrenOfChildren = \App\Category::descendantsOf( $citiesChildrenOfChildrenNode )->toTree()->pluck('id')->toArray();

    	foreach ($citiesChildrenOfChildren as $position) {

    		array_push( $positions , $position );

    	}

    	$citiesChildrenOfChildrenNode = null;

    	$citiesChildrenOfChildren = array();
    }



    return [
        //
    	'user_id'=> $faker->numberBetween(1, 3),
    	'title' => $faker->word,
    	'price' => $faker->randomDigit,
    	'disc' => $faker->text(200),
    	'vue' => $faker->randomDigit,
    	'size_land' => $faker->randomDigit,
    	'cat' => $faker->randomElement( $realEstateChildrenIds),
    	'cat_business' => $faker->randomElement( $businessChildrenIds),
    	'position' => $faker->randomElement( $positions),
    	'status' => true
    ];
});
