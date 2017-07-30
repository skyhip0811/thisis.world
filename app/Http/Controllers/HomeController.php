<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\story;
use App\User;

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
        foreach ($storys as $story){
            $member = User::where('id',$story['member_id'])->take(1)->get();
          
            $storys[$i]['aurthor'] = $member[0]->name;
        }
        return view('home',compact('storys'));
    }
}
