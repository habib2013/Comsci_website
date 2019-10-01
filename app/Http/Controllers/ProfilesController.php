<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Intervention\Image\Facades\Image;



class ProfilesController extends Controller
{
    public function index(User $user)
    {
       
        return view('profiles.index',[
            'user'=>$user,
        ]);
    }

    public function edit(User $user){
        $this->authorize('update',$user->profile);
        return view ('profiles.edit',compact('user'));

    }
    public function update(User $user){
        $this->authorize('update',$user->profile);
      $data = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'url' => 'url',
            'image' => ''
        ]);
       // dd($data);
 
 
      if(request('image')){
        $imagepath = request('image')->store('profile','public');
          $image = Image::make(public_path("storage/{$imagepath}"));
          $image->save();

          $imageArray = ['image'=>$imagepath];
      }
     // dd($data);
  
      auth()->user()->profile->update(array_merge(
          $data,$imageArray ?? []
      ));  

      return redirect('/profile/'.auth()->user()->id);
    }


}
