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
    <div class="page">
      <!-- Page Header-->
      <body>
    <div class="page">
      <!-- Page Header-->
    
      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url({{asset('images/breadcrumbs-image-1.jpg')}});">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">About</h6>
              <h4 class="breadcrumbs-custom-title"> Welcome {{$user->name}} </h4>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li><a href="#">About</a></li>
              <li class="active">About Me</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section section-md">
        <div class="container">
          <!-- Profile Modern-->
          <article class="profile-modern">
            <div class="profile-modern-figure"><img class="profile-modern-image" src="{{$user->profile->profileImage()}}" alt="" width="236" height="326"/>
            @can('update',$user->profile)
            <a class="profile-modern-button" href="/profile/{{$user->id}}/edit"></a>
            @endcan
            </div>
            <div class="profile-modern-main">
              <div class="profile-modern-header">
                <div class="profile-modern-header-item">
                  <h3> </h3>
                  <p>{{$user->profile->title ?? 'No title'}}</p>
                </div>
                <div class="profile-modern-item">

                  <div class="group group-xs group-middle">
                  @can('update',$user->profile)
                  <a class="" href="/p">Add new post</a><br>
                  <a class="" href="/course/create">Add new Course</a>
                  @endcan
                  </div>
                
                </div>
              </div>
              <div class="row row-30">
                <div class="col-lg-6">
                  <p>{{$user->profile->description ?? 'No description'}}</p>
                </div>
                <div class="col-lg-6">
                        <!-- Linear progress bar-->
                        <article class="progress-linear">
                          <div class="progress-header">
                            <p>Total posts</p><span class="progress-value">{{$user->posts->count()}}</span>
                          </div>
                          <div class="progress-bar-linear-wrap">
                            <div class="progress-bar-linear"></div>
                          </div>
                        </article>
                        <!-- Linear progress bar-->
                     
                </div>
              </div>
            </div>
          </article>
        </div>
      </section>
      <!-- Nathan’s Projects-->
    
      <!-- Nathan’s Blog Posts-->
      <section class="section section-lg text-center">
        <div class="container">
          <h3>{{$user->name}}’s Blog Posts</h3>
          <div class="row row-50">
          @foreach($user->posts as $post)
            <div class="col-sm-6 col-md-4 col-lg-3 wow-outer">
              <!-- Post Tiny--> 
              <article class="post-tiny wow fadeSlideInDown"><a class="post-tiny-media" href="/p/{{$post->id}}">
              <img src="/storage/{{$post->image}}" alt="" width="270" height="184"/></a>
                <h5 class="post-tiny-title"><a href="/p/{{$post->id}}">{{$post->caption}}</a></h5>
                <time class="post-tiny-time" datetime="2018">{{$post->created_at}}</time>
              
                @if(!Auth::guest())
                @if(Auth::user()->id == $post-> user_id)
            <a class="profile-modern-button" href="/p/{{$post->id}}/edit"></a>
            @endif
            @endif
           
              </article>
            </div>
        @endforeach
        
       
      </section>

      <section class="section section-lg text-center">
        <div class="container">
          <h3>{{$user->name}}’s Course(s)</h3>
          <div class="row row-50">
          @foreach($user->courses as $course)
            <div class="col-sm-6 col-md-4 col-lg-3 wow-outer">
              <!-- Post Tiny--> 
              <article class="post-tiny wow fadeSlideInDown"><a class="post-tiny-media" href="/course/{{$course->id}}"><img src="{{asset('images/index-thumbnail-1-270x200.jpg')}}" alt="" width="270" height="184"/></a>
                <h5 class="post-tiny-title"><a href="/p/{{$post->id}}">{{$course->name}}</a></h5>
                <time class="post-tiny-time" datetime="2018">{{$course->created_at}}</time>
              
                @if(!Auth::guest())
                @if(Auth::user()->id == $post-> user_id)
            <a class="profile-modern-button" href="/course/{{$course->id}}/edit"></a>
            @endif
            @endif
           
              </article>
            </div>
        @endforeach
        
        
       
      </section>




      <!-- Page Footer-->
        @include('footer')
    </div>


    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script><script src="{{asset('js/core.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
  </body>
</html>
@endsection