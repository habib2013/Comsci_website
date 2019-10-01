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
<form action="/profile/{{$user->id}}" method="post" enctype="multipart/form-data">
@csrf
@method ('PATCH')


                            <label for="caption" class="col-md-4 col-form-label ">Title</label>

                            <div class="col-md-6">
                                <input id="title"
                                 type="text" 
                                 class="form-control @error('title') is-invalid @enderror" 
                                 name="title" value="{{ old('title') ?? $user->profile->title ?? 'No title'}}  " 
                                 required autocomplete="title" 
                                 autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="description" class="col-md-4 col-form-label">Description</label>

                            <div class="col-md-6">
                                <input id="description"
                                 type="text" 
                                 class="form-control @error('description') is-invalid @enderror" 
                                 name="description" value="{{ old('description') ?? $user->profile->description ?? 'No description'}}" 
                                 required autocomplete="description" 
                                 autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="url" class="col-md-4 col-form-label">Url</label>

<div class="col-md-6">
    <input id="url"
     type="text" 
     class="form-control @error('url') is-invalid @enderror" 
     name="url" value="{{ old('url') ?? $user->profile->url ?? 'No Url'}}" 
     required autocomplete="url" 
     autofocus>

    @error('username')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>


<label for="caption" class="col-md-4 col-form-label text-md-right"> Caption Image</label>

<div class="col-md-6">
<input type="file" name="image" class="form-control"/>

</div> 

<br>


                        <div class="row">
                        <button class="btn btn-primary" type="submit">Update profile</button>
                        </div>


</form>


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