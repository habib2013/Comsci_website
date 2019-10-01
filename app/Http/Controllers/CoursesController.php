<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Course;
use Auth;
use \App\User;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showcourse(){
        $course = new \App\Course();
        $post = new \App\Post();

        //Defining users from user model
        $user = new \App\User();
         $showuser =  $user::all()->take(3);

        $datapost = $post::all()->take(2);

        $datacourse = $course::all()->take(4);
          //  dd($datacourse );

            return view('welcome',
            [
                'datacourse'=>$datacourse,'datapost'=>$datapost,'showuser'=>$showuser
            ]);

     }



    public function create()
    {
      if(empty(auth()->user()->id)){
        return view('errors.403');
      }
      return view('courses.addcourse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate(
              $request,[
                  'name'=>'required',
                  'code'=>'required',
                  'day'=>'required',
                  'time'=>'required',
                  'description'=>'required',
          ]);
            
        //  $course->day = $request->input('day');

        

          $course = new Course();
          if($request->input('day') == 1 ){
            $course->day = 'Monday';
          }
          if($request->input('day') == 2 ){
            $course->day = 'Tuesday';
          }
          if($request->input('day') == 3 ){
            $course->day = 'Wednesday';
          }
          if($request->input('day') == 4 ){
            $course->day = 'Thursday';
          }
          if($request->input('day') == 5 ){
            $course->day = 'Friday';
          }

   $course->user_id = auth()->id();
        
          $course->time = $request->input('time');
          $course->description = $request->input('description');
          $course->name = $request->input('name');
          $course->code = $request->input('code');
          $course->save();
          

          return redirect('/profile/'.auth()->user()->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $course = new Course();
    $showcourse = $course::find($id);

    return view('courses.showcourse',[
            'showcourse'=>$showcourse
  ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course,User $user)
    {
   
      if(empty(auth()->user()->id)){
        return view('errors.403');
      }
      if(auth()->user()->id !==  $course->user_id){
        return redirect('/profile/'.auth()->user()->id);
      
    }

        return view ('courses.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
 
      $this->validate(
        $request,[
            'name'=>'required',
            'code'=>'required',
            'day'=>'',
            'time'=>'',
            'description'=>'required',
    ]);
      
  //  $course->day = $request->input('day');

  $course_id = $request->input('id');
  $course = Course::find($course_id);
 //dd($course);

   // $course = new Course();

  

    // if($request->input('day') == 1 ){
    //   $course->day = 'Monday';
    // }
    // if($request->input('day') == 2 ){
    //   $course->day = 'Tuesday';
    // }
    // if($request->input('day') == 3 ){
    //   $course->day = 'Wednesday';
    // }
    // if($request->input('day') == 4 ){
    //   $course->day = 'Thursday';
    // }
    // if($request->input('day') == 5 ){
    //   $course->day = 'Friday';
    // }
  
  
      $course->day = $request->input('day');
    $course->time = $request->input('time');
    $course->description = $request->input('description');
    $course->name = $request->input('name');
    $course->code = $request->input('code');
    
    $course->save();
    

    return redirect('/profile/'.auth()->user()->id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($course)
    {
      $course = Course::find($course);
     // dd($course);
      $course->delete();
      return redirect('/profile/'.auth()->user()->id)->with('success','Course deleted successfully');
    }


    public function showlist(){
        $course = new \App\Course();
        $showcourse= $course::all();

      return view('courses/courselist',['showcourse'=>$showcourse]);
    }
}
