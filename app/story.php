<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class story extends Model
{
    //
    protected $table = 'storys';
    
    public function chapter()
    {
        return $this->hasMany('App\Chapter','story_id');
    }
    public function aurthor()
    {
        return $this->belongsTo('App\User','member_id');
    }
}
