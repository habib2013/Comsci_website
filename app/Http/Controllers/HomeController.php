<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('staff.teaching');
    }

    public function nonteaching()
    {
        return view('staff.nonteaching');
    }

    public function testfollow(){
        return view('layouts.testfollow');
    }
  public function aboutme()
    {
        return view('aboutme');
    }
    
}
