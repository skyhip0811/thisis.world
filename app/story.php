<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class story extends Model
{
    //
    protected $max_levels = 0;
    protected $table = 'storys';
    
    public function chapter()
    {
        return $this->hasMany('App\Chapter','story_id');
    }
    public function aurthor()
    {
        return $this->belongsTo('App\User','member_id');
    }
    
    public function aurthors(){
        return $this->hasMany('App\Chapter','story_id')->select();
    }

    public function getMaxLevelAttribute()
    {
        return $this->chapter()->getResults()->max('level');
    }
    public function getTotalChaptersAttribute()
    {
        return $this->chapter()->getResults()->count();
    }
    protected $appends = ['max_level','total_chapters'];
}
