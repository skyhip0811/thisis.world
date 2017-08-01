<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\story;

class StoryController extends Controller
{
    //
    public function index($id){
        $story = story::find($id)->first();
        $aurthors = [];
        foreach ($story->chapter()->getResults() as $chapter)
        {
            array_push($aurthors, $chapter->aurthor());
        }
//        $story->aurthors = ['max','is','pussy'];
        $story->aurthors =  $story->aurthors()->getResults()->unique('aurthor');
        return view('story',['story'=>$story]);
    }
}
