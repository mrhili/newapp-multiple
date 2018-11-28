<?php

use Illuminate\Database\Seeder;

class SliderSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*
        Schema::create('sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img');
            $table->string('link');
            $table->string('top_message');
            $table->string('bold_message');
            $table->string('button_message');
            $table->string('color_text');
            
            $table->timestamps();
        });

        */

        DB::table('sliders')->insert([
            'img' => 'home-night.jpg',
            'link' => '#',
            'top_message' => 'Message',
            'bold_message' => 'Message',
            'button_message' => 'Message',
            'color_text' => 'white',
            'active' => false,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('sliders')->insert([
            'img' => 'miami.jpg',
            'link' => '#',
            'top_message' => 'Message',
            'bold_message' => 'Message',
            'button_message' => 'Message',
            'color_text' => 'white',
            'active' => true,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('sliders')->insert([
            'img' => 'nakhil.jpg',
            'link' => '#',
            'top_message' => 'Message',
            'bold_message' => 'Message',
            'button_message' => 'Message',
            'color_text' => 'white',
            'active' => true,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('sliders')->insert([
            'img' => 'villa.jpg',
            'link' => '#',
            'top_message' => 'Message',
            'bold_message' => 'Message',
            'button_message' => 'Message',
            'color_text' => 'white',
            'active' => true,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        
    }
}
