<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
   public function index(){
       return view('contact_us');
   }

   public function store(){
return 'Item stored';
   }
}
