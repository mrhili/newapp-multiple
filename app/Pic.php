<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pic extends Model
{
    //

    protected $fillable = [
    		'ads_id',
            'name',
    ];

    public function ads()
    {
        return $this->hasOne('App\Ads');
    }
}
