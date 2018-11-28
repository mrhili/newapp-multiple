<?php

use Illuminate\Database\Seeder;

use App\Category;

class CategorySeeding extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $node = Category::create([
    'name' => 'Node', 'slug' => 'Node',

    'children' => [

    		[
            'name' => 'Business types', 'slug' => 'business-types',

            'children' => [

	           		[ 'name' => 'All business types', 'slug' => 'all-business-types' ],
	           		[ 'name' => 'Selling', 'slug' => 'selling'],
	           		[ 'name' => 'Rent', 'slug' => 'rent'],
	                [ 'name' => 'Other business type', 'slug' => 'other-business-type' ]
               		
                ],
    		],

	        [
	            'name' => 'Real Estate types', 'slug' => 'real-estate-types',

	            'children' => [
	                [ 'name' => 'Building', 'slug' => 'building' ],
	                [ 'name' => 'Villa', 'slug' => 'villa' ],
	                [ 'name' => 'Land', 'slug' => 'land' ],
	                [ 'name' => 'Other building type', 'slug' => 'other-building-type' ],
	            ],
	        ],

	        [
	            'name' => 'Methode types', 'slug' => 'methode-types',

	            'children' => [
	                [ 'name' => 'Commercial', 'slug' => 'comercial' ],
	                [ 'name' => 'Living', 'slug' => 'living' ]
	            ],
	        ],

	        [
	            'name' => 'Land Types', 'slug' => 'land-types',

	            'children' => [
	                [ 'name' => 'Free', 'slug' => 'free' ],
	                [ 'name' => 'Awqaf', 'slug' => 'awqaf' ]
	            ],
	        ],

	        [
	            'name' => 'Roof Types', 'slug' => 'roof-types',

	            'children' => [
	                [ 'name' => 'Concrete', 'slug' => 'concrete' ],
	                [ 'name' => 'Wood', 'slug' => 'wood' ]
	            ],
	        ],


	        [
	            'name' => 'Cities', 'slug' => 'cities',

	            'children' => [
	                [ 'name' => 'Snaa', 'slug' => 'sanaa' ,


	                	'children' =>[

	                		['name' => 'sanaa - part1', 'slug' => 'sanaa1'],
	                		['name' => 'sanaa - part2', 'slug' => 'sanaa2'],
	                		['name' => 'sanaa - part3', 'slug' => 'sanaa3'],
	                		['name' => 'sanaa - part4', 'slug' => 'sanaa4'],


	                	]
	                ],
	                [ 'name' => 'Taaz', 'slug' => 'taaz' ,


	                	'children' =>[

	                		['name' => 'taaz - part1', 'slug' => 'taaz1'],
	                		['name' => 'taaz - part2', 'slug' => 'taaz2'],
	                		['name' => 'taaz - part3', 'slug' => 'taaz3'],
	                		['name' => 'taaz - part4', 'slug' => 'taaz4']



	                	]
	                ],


	            ],
	        ],







		]

]);
    }
}
