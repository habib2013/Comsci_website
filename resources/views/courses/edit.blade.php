@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
   <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,400,700,800%7COswald:300,400,500">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link rel="stylesheet" href="//cdn.materialdesignicons.com/4.0.96/css/materialdesignicons.min.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src=”https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js”></script>
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->


    
  </head>
  <body>
  <br>
<div class="row">
<div class="col-8 offset-2">
<P style="color:red"><b>***please note:by adding a course means you agreed to be the instructor of the course created</b></p><br>
{!! Form::open(['action' => ['CoursesController@update',$course->id],'method'=>'PUT','enctype'=>'multipart/formdata']) !!}
@csrf
<div class="form-group">
 {{Form::label('name','Course name')}}
 {{Form::text('name',$course->name,['class'=>'form-control','placeholder'=>'title'])}}
 </div>
 <div class="form-group">
 {{Form::label('csc 393','Course Code')}}
 {{Form::text('code',$course->code,['class'=>'form-control','placeholder'=>'code'])}}
 </div>
<div class="form-group">
{{Form::label('day','Course day')}}
{{Form::text('day',$course->day,['class'=>'form-control','placeholder'=>'code'])}}
</div>
 <div class="form-group">
 {{Form::label('time','Course Time')}}
 {{Form::text('time',$course->time,['class'=>'form-control','placeholder'=>'time'])}}
 {{Form::hidden('id',$course->id,['class'=>'form-control','placeholder'=>'time'])}}
 </div>
 <div class="form-group">
 {{Form::label('description','Course Description')}}
 {{Form::textarea('description',$course->description,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'title'])}}
 {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
 </div>
{!! Form::close() !!}


{!! Form::open(['action' => ['CoursesController@destroy',$course->id],'method'=>'DELETE','enctype'=>'multipart/form-data']) !!}
@csrf
{{Form::submit('Delete Post',['class'=>'btn btn-primary'])}} 

{!! Form::close() !!}
</div>

    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script><script src="{{asset('js/core.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

  </body>
</html>
@endsection