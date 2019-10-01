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
  <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url({{asset('images/breadcrumbs-image-1.jpg')}});">
      
  <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">Blog</h6>
              <h1 class="breadcrumbs-custom-title">Single Blog Post</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li><a href="#">Blog</a></li>
              <li class="active">Single Blog Post</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section section-lg">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-8">
              <article class="post-creative">
                <h3 class="post-creative-title">{{$post->caption}}</h3>
                <ul class="post-creative-meta">
                  <li><span class="icon mdi mdi-calendar-clock"></span>
                    <time datetime="2018">{{$post->created_at}}</time>
                  </li>
                  <li><span class="icon mdi mdi-tag-multiple"></span><a href="#">Article</a></li>
                </ul>
 <img src="/storage/{{$post->image}}" alt="" width="770" height="458"/>
                <p>{!!$post->body!!}</p>
                <!-- Quote Light-->
           
           
             
            </div>
            <div class="col-lg-4">
              <!-- Profile Thin-->
              <article class="profile-thin">
                <div class="profile-thin-aside"><img class="profile-thin-image" src="{{$post->user->profile->profileImage()}}" alt="" width="168" height="268"/><a class="profile-thin-contact-button" href="/cdn-cgi/l/email-protection#6c4f"><span class="icon mdi mdi-email-outline"></span><span class="icon mdi mdi-email-outline"></span></a>
                </div>
                <div class="profile-thin-main">
                  <p class="profile-thin-title"><a href="/profile/{{$post->user->id}}"> {{$post->user->name}}</a></p>
                  <p class="profile-thin-subtitle">{{$post->user->title ?? 'No description available'}}</p>
                  <p>{{$post->user->description ?? 'No title available'}}</p>
                  <div class="group group-xs group-middle"><a class="icon icon-sm icon-creative mdi mdi-facebook" href="#"></a><a class="icon icon-sm icon-creative mdi mdi-twitter" href="#"></a><a class="icon icon-sm icon-creative mdi mdi-instagram" href="#"></a><a class="icon icon-sm icon-creative mdi mdi-google" href="#"></a><a class="icon icon-sm icon-creative mdi mdi-linkedin" href="#"></a></div><user-button></user-button>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
            <footer class="section footer-advanced bg-gray-800">
              <div class="footer-advanced-main">
                <div class="container">
                  <div class="row row-50">
                    <div class="col-lg-4">
                      <h4>About Us</h4>
                      <p class="footer-advanced-text">Our university offers high-quality education to students inside and outside of the USA. Our aim is to support our students as they become highly employable, creative, and culturally rich graduates, with the capacity to find employment that will enable them to be agents for change in a connected world.</p>
                    </div>
                    <div class="col-sm-7 col-md-5 col-lg-4">
                      <h4>Recent Blog Posts</h4>
                      <!-- Post Inline-->
                      <article class="post-inline">
                        <p class="post-inline-title"><a href="single-blog-post.html">Studying in the United States: Top 10 Facts You Need to Know About</a></p>
                        <ul class="post-inline-meta">
                          <li>by Theresa Barnes</li>
                          <li><a href="single-blog-post.html">2 days ago</a></li>
                        </ul>
                      </article>
                      <!-- Post Inline-->
                      <article class="post-inline">
                        <p class="post-inline-title"><a href="single-blog-post.html">10 Law Schools Where the Most Accepted Students Enroll</a></p>
                        <ul class="post-inline-meta"> 
                          <li>by Theresa Barnes</li>
                          <li><a href="single-blog-post.html">2 days ago</a></li>
                        </ul>
                      </article>
                    </div>
                    <div class="col-sm-5 col-md-7 col-lg-4">
                      <h4>Our Gallery</h4>
                    
                    </div>
                  </div>
                </div>
              </div>
              <div class="footer-advanced-aside">
                <div class="container">
                  <div class="footer-advanced-layout">
                    <div>
                      <ul class="list-nav"> 
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">About</a></li>
                        <li><a href="academics.html">Academics</a></li>
                        <li><a href="grid-gallery.html">Gallery</a></li>
                        <li><a href="grid-blog.html">Blog</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                      </ul>
                    </div>
                    <div>
                      <ul class="list-inline list-inline-md">
                        <li><a class="icon icon-sm link-default mdi mdi-facebook" href="#"></a></li>
                        <li><a class="icon icon-sm link-default mdi mdi-twitter" href="#"></a></li>
                        <li><a class="icon icon-sm link-default mdi mdi-instagram" href="#"></a></li>
                        <li><a class="icon icon-sm link-default mdi mdi-google" href="#"></a></li>
                        <li><a class="icon icon-sm link-default mdi mdi-linkedin" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container">
                <hr>
              </div>
              <div class="footer-advanced-aside">
                <div class="container">
                  <div class="footer-advanced-layout"><a class="brand" href="index.html"><img src="images/logo-inverse-small-230x43.png" alt="" width="230" height="43" srcset="images/logo-inverse-small-460x86.png 2x"/></a>
                    <!-- Rights-->
                    <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>All Rights Reserved.</span><span>&nbsp;</span><br class="d-sm-none"/><a href="#">Terms of Use</a><span> and</span><span>&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a></p>
                  </div>
                </div>
              </div>
            </footer>
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