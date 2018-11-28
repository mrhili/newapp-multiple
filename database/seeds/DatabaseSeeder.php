<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
        $this->call(UsersTableSeeder::class);

        $this->call(ConfigsSeeding::class);

        $this->call(CategorySeeding::class);

        $this->call(AdsSeeder::class);

        $this->call(SliderSeed::class);
    }
}
