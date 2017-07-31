<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\story;
use App\User;
use App\Chapter;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storys = story::all()->toArray();
        $i = 0;
        $latest_chapters =  $this->get_latest_chapters();
       // return $latest_chapters;
        foreach ($storys as $story){
            $member = User::where('id',$story['member_id'])->take(1)->get();
          
            $storys[$i]['aurthor'] = $member[0]->name;
        }
        
        $data = ['storys' => $storys, 'chpaters'=>$latest_chapters];
        return view('home',compact('data'));
    }
    
    private function get_latest_chapters(){
        $chapters = Chapter::with(['story','last_chapter','aurthor'])->take(20)->orderBy('created_at','desc')->get();
        return $chapters;
        
    }
}
