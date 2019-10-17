<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
 


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
 
    public function about()
    {
        return view('aboutus');
    }

    public function teaching()
    {
            $user = new \App\User();
        $viewuser =   $user::all()->where('usertype','Lecturer');
        //   dd($viewuser);
        return view('staff.teaching',['viewuser'=>$viewuser]);
    }




    public function nonteaching()
    {
        $user = new \App\User();
        $viewuser =   $user::all()->where('usertype','Lecturer');
        //   dd($viewuser);
        return view('staff.nonteaching',['viewuser'=>$viewuser]);
    }

    public function testfollow(){
        return view('layouts.testfollow');
    }
  public function aboutme()
    {
        return view('aboutme');
    }
    
}
