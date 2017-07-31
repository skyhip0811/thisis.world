<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Chapter extends Model
{
    //
    protected $table = 'chapters';
    
    public function story()
    {
        return $this->belongsTo('App\story','story_id');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment','chapter_id');
    }
    
    public function last_chapter()
    {
        return $this->belongsTo($this,'last_chapter_id');
    }
    public function aurthor(){
        return $this->belongsTo('App\User', 'member_id');
    }
}
