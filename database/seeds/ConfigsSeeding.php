<?php

use Illuminate\Database\Seeder;

class ConfigsSeeding extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        //
        DB::table('configs')->insert([
            'slug' => 'site-name',
            'nameSetting' => 'site name',
            'value' => 'إسم',
            'type' => 'text',
            'created_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('configs')->insert([
            'slug' => 'description',
            'nameSetting' => 'Description',
            'value' => 'ديسكريبشيون',
            'type' => 'textarea',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('configs')->insert([
            'slug' => 'company',
            'nameSetting' => 'company',
            'value' => 'Descktop company',
            'type' => 'text',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('configs')->insert([
            'slug' => 'mobile-number',
            'nameSetting' => 'phone number',
            'value' => '+212 06 06 06 06 06',
            'type' => 'tel',
            'created_at' => date('Y-m-d H:i:s'),
        ]);




        DB::table('configs')->insert([
            'slug' => 'adress',
            'nameSetting' => 'adress',
            'value' => 'Canada',
            'type' => 'textarea',
            'created_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('configs')->insert([
            'slug' => 'email',
            'nameSetting' => 'Adress email',
            'value' => 'site@host.com',
            'type' => 'email',
            'created_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('configs')->insert([
            'slug' => 'youtube',
            'nameSetting' => 'Youtube chanel',
            'value' => 'troklo',
            'type' => 'text',
            'created_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('configs')->insert([
            'slug' => 'twitter',
            'nameSetting' => 'Twitter account',
            'value' => 'troklo',
            'type' => 'text',
            'created_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('configs')->insert([
            'slug' => 'facebook',
            'nameSetting' => 'Facebook Page',
            'value' => 'troklo',
            'type' => 'text',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('configs')->insert([
            'slug' => 'github',
            'nameSetting' => 'Git account',
            'value' => 'troklo',
            'type' => 'text',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('configs')->insert([
            'slug' => 'google-plus',
            'nameSetting' => 'Google account',
            'value' => 'troklo',
            'type' => 'text',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('configs')->insert([
            'slug' => 'lat',
            'nameSetting' => 'Latitude',
            'value' => "34.525994",
            'type' => 'number',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('configs')->insert([
            'slug' => 'lng',
            'nameSetting' => 'Langitude',
            'value' => "-6.322755",
            'type' => 'number',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('configs')->insert([
            'slug' => 'paypal',
            'nameSetting' => 'Paypal account',
            'value' => 'app',
            'type' => 'text',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('configs')->insert([
            'slug' => 'tags',
            'nameSetting' => 'Tags',
            'value' => 'tag1|tag2',
            'type' => 'textarea',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('configs')->insert([
            'slug' => 'no-image',
            'nameSetting' => 'No image',
            'value' => 'no-image.jpg',
            'type' => 'file',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('configs')->insert([
            'slug' => 'logo',
            'nameSetting' => 'Logo',
            'value' => 'logo.png',
            'type' => 'file',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('configs')->insert([
            'slug' => 'favicon',
            'nameSetting' => 'Favicon',
            'value' => 'favicon.png',
            'type' => 'file',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('configs')->insert([
            'slug' => 'top-message',
            'nameSetting' => 'Top message',
            'value' => 'The site is under construction',
            'type' => 'text',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('configs')->insert([
            'slug' => 'top-message-check',
            'nameSetting' => 'Top message check',
            'value' => 'true',
            'type' => 'checkbox',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('configs')->insert([
            'slug' => 'top-message-link',
            'nameSetting' => 'Top message Link',
            'value' => '',
            'type' => 'text',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('configs')->insert([
            'slug' => 'top-message-link-text',
            'nameSetting' => 'Top message Link',
            'value' => 'Reload',
            'type' => 'text',
            'created_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('configs')->insert([
            'slug' => 'top-bar-child',
            'nameSetting' => 'Top bar child',
            'value' => 'Welcome in our website',
            'type' => 'text',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('configs')->insert([
            'slug' => 'top-bar-child-check',
            'nameSetting' => 'Top bar child check',
            'value' => 'true',
            'type' => 'checkbox',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('configs')->insert([
            'slug' => 'banner-search',
            'nameSetting' => 'Banner search',
            'value' => 'banner-search.jpg',
            'type' => 'file',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('configs')->insert([
            'slug' => 'banner-main',
            'nameSetting' => 'Banner search',
            'value' => 'banner-main.jpg',
            'type' => 'file',
            'created_at' => date('Y-m-d H:i:s'),
        ]);





    }
}
