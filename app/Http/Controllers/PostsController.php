<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\Post;
use \App\User;
class PostsController extends Controller
{
public function __construct(){
    $this->middleware('auth');
}
    public function create(){
        return view('posts.create');
    }
public function show(\App\Post $post){
    return view('posts.show',compact('post'));
dd($post);
}
    public function store(){
   //  $caption =  request()->caption;
    // $image= request()->image;

    $data = request()->validate([
        'caption'=>'required',
        'body'=>'required',
        'image'=> ['required','image']
    ]);

$imagepath = request('image')->store('uploads','public');
    auth()->user()->posts()->create([
        'caption'=>$data['caption'],
        'body'=>$data['body'],
        'image' =>$imagepath
    ]);
    return redirect('/profile/'.auth()->user()->id);
    }

    public function viewall(){
$post  = new \App\Post();
$showpost = $post::all();


        return view('posts.viewall',['showpost'=>$showpost]);
    }



public function update(Request $request,$post){
    
    $this->validate($request,[
        'caption'=>'required',
        'body'=>'required',
        'image'=> ['image']
    ]);
if($request->hasFile('image')){
    $filenameWithExt = $request->file('image')->getClientOriginalName();
    $filename = pathInfo($filenameWithExt,PATHINFO_FILENAME);
    $extension = $request->file('image')->getClientOriginalExtension();
    $fileNameToStore = $filename.'_'.time().'.'.$extension;
    $path = $request->file('image')->storeAs('public/uploads',$fileNameToStore);
}

// if(request('image')){
//     $imagepath = request('image')->store('uploads','public');
//       $image = Image::make(public_path("storage/{$imagepath}"));
//       $image->save();

//       $imageArray = ['image'=>$imagepath];
//   }

    //$imagepath = request('image')->store('uploads','public');
    $post = Post::find($post);
   $post->caption = $request->input('caption');
   $post->body = $request->input('body');
// if($request->file('image')){
//     $post->image = $imagepath;
// }
if($request->hasFile('image')){
    $up = 'uploads/';
    $post->image = $up.$fileNameToStore; 
}


   $post->save();
   return redirect('/profile/'.auth()->user()->id)->with('success','Post Updated successfully');

}
public function destroy($post){
    $post = Post::find($post);
    $post->delete();
    return redirect('/profile/'.auth()->user()->id)->with('success','Post deleted successfully');
}



    public function edit(Post $post,User $user){
        if(auth()->user()->id !==  $post->user_id){
            return redirect('/profile/'.auth()->user()->id);
        }
       // $this->authorize('update',$post->user);
        return view ('posts.edit',compact('post'));

    }
}
