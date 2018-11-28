<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    //
    
    protected $fillable = [

            'user_id', 'title', 'price', 'size_land', 'floor_number', 'rooms', 'apart_number', 'bathrooms', 'kitchens', 'livingrooms', 'garages', 'position', 'cat', 'cat_business', 'cat_land', 'cat_roof', 'disc', 'vue', 'status'
    ];

    public function pics()
    {
        return $this->hasMany('App\Pic');
    }

}

