
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @laravelPWA
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
      <header class="section page-header">
        <!-- RD Navbar-->
       <div class="rd-navbar-wrap">
       <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-aside">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                  <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="index.html"><img src="{{asset('images/logo-default-317x71.png')}}" alt="" width="317" height="71" srcset="images/logo-default-551x124.png 2x"/></a>
                </div>
                <div class="rd-navbar-collapse">
                  <button class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle="#rd-navbar-collapse-content-1"><span></span></button>
                  <div class="rd-navbar-collapse-content" id="rd-navbar-collapse-content-1">
                  <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <a class="dropdown-item" href="/profile/{{Auth::user()->id}}"
                                    >
                                        {{ __('My profile') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                  <!-- RD Navbar Search-->
                  <div class="rd-navbar-search" id="rd-navbar-search-1">
                 
                  </div>
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                  <li class="rd-nav-item"><a href="/" class="rd-nav-link" ><b>HOME</b></a>
                      <!-- RD Navbar Dropdown-->
  
                    </li>
                  
                    <li class="rd-nav-item"><a href="/about" class="rd-nav-link" ><b>ABOUT US</b></a>
                      <!-- RD Navbar Dropdown-->
  
                    </li>


                    <li class="rd-nav-item"><a href="/showlist" class="rd-nav-link" ><b>OUR COURSES</b></a>
                      <!-- RD Navbar Dropdown-->
  
                    </li>

                    <li class="rd-nav-item"><a href="#" class="rd-nav-link" ><b>STAFF</b></a>
                      <!-- RD Navbar Dropdown-->
  
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="/teaching">Teaching staff</a></li>
                         <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="/nonteaching">Non-teaching staff</a></li>
                  
                      </ul>
                    </li>
                
                    <li class="rd-nav-item"><a href="#" class="rd-nav-link" ><b>NEWS & EVENTS</b></a>
                      <!-- RD Navbar Dropdown-->
  
                    
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-gallery.html">Examination updates</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="masonry-gallery.html">Media</a></li>
                       
                      </ul>
                    </li>
                  

                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Slider Light-->
      <section class="swiper-container swiper-slider swiper-slider-light context-dark" data-loop="true" data-autoplay="false" data-simulate-touch="false" data-custom-slide-effect="inter-leave-effect" data-inter-leave-offset="-.5">
        <div class="swiper-wrapper">
          <div class="swiper-slide" data-slide-bg="images/dsc.jpg">
            <div class="slide-inner">
              <div class="container">
                <div class="swiper-slide-caption">
                  <h1 class="wow-outer"><span class="font-weight-light wow-outer"><span class="wow" data-caption-animate="slideInDown">More Than Just</span></span><span class="font-weight-bold wow-outer"><span class="wow" data-caption-animate="slideInDown" data-wow-delay="0">Studying</span></span></h1>
                  <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow" href="#" data-caption-animate="slideInDown" data-wow-delay=".2s">Learn more</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="images/slider-slide-2-1920x776.jpg">
            <div class="slide-inner">
              <div class="container">
                <div class="swiper-slide-caption">
                  <h1 class="wow-outer"><span class="font-weight-light wow-outer"><span class="wow" data-caption-animate="slideInDown">Creating Your</span></span><span class="font-weight-bold wow-outer"><span class="wow" data-caption-animate="slideInDown" data-wow-delay="0">Future</span></span></h1>
                  <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow" href="#" data-caption-animate="slideInDown" data-wow-delay=".2s">Learn more</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="images/slider-slide-3-1920x776.jpg">
            <div class="slide-inner">
              <div class="container">
                <div class="swiper-slide-caption">
                  <h1 class="wow-outer"><span class="font-weight-light wow-outer"><span class="wow" data-caption-animate="slideInDown">Providing Higher</span></span><span class="font-weight-bold wow-outer"><span class="wow" data-caption-animate="slideInDown" data-wow-delay="0">Education</span></span></h1>
                  <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow" href="#" data-caption-animate="slideInDown" data-wow-delay=".2s">Learn more</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination-outer container">
          <div class="swiper-pagination swiper-pagination-modern swiper-pagination-marked" data-index-bullet="true"></div>
        </div>
      </section>
      <!-- A Few Words About Us-->
     <section class="section section-lg">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
            <div class="col-md-10 col-lg-6 col-xl-5">
              <h3 class="wow-outer"><span class="wow slideInDown">HOD's welcome note</span></h3>
              <p class="wow-outer" style="color: #000000"><span class="wow slideInDown" data-wow-delay=".05s">The Department of Computer Science is guided by its philosophy of producing global citizens that are well grounded in the knowledge and expertise of the theories and applications of computer science so as to cope with the dynamic information technology world and manpower needs of the society.</span></p>
              <p class="wow-outer"></p>
              <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow slideInDown" data-wow-delay=".1s" href="/about">Read more</a></div>
            </div>
            <div class="col-md-10 col-lg-6 wow-outer"><img class=" wow slideInLeft" src="images/lecturers/lecturer.png" alt="" style="height:200px;width:250px;border-radius:250px;padding-right:20px"/>
            </div>
          </div>
        </div>
      </section>
      <!-- Small Features-->
   
      <!-- Thin CTA-->
      <section class="section section-xs bg-primary text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-10 col-md-12">
              <div class="box-cta-thin">
                <h4 class="wow-outer"><span class="wow slideInRight">Get Unlimited Access to <span class="font-weight-bold">Premium Courses</span> Right Now!</span></h4>
                <div class="wow-outer button-outer"><a class="button button-primary button-winona wow slideInLeft" href="#">Get access</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Services-->
      <section class="section-lg text-center">
        <div class="container">
          <h3 class="wow-outer"><span class="wow slideInUp">Our Featured Courses</span></h3>
          <p class="wow-outer"><span class="wow slideInDown text-width-1">These courses are selected through a rigorous process and uniquely created for each semester to make your study more comfortable and versatile from year to year.</span></p>
          <div class="row row-30 offset-top-2">
          @foreach($datacourse as $course)
            <div class="col-sm-6 col-lg-3 wow-outer">
              <!-- Thumbnail Light-->
              <article class="thumbnail-light wow slideInLeft"><a class="thumbnail-light-media" href="/course/{{$course->id}}"><img class="thumbnail-light-image" src="images/index-thumbnail-1-270x200.jpg" alt="" width="270" height="200"/></a>
                <h5 class="thumbnail-light-title"><a href="/course/{{$course->id}}">{{$course->name}}</a></h5>
              </article>
            </div>
        @endforeach
          </div>
        </div>
        <div class="wow-outer button-outer"><a class="button button-primary-outline button-winona offset-top-2 wow slideInUp" href="/showlist">View all courses</a></div>
      </section>
      <!-- Team-->
      <section class="section section-lg bg-gray-100 text-center">
        <div class="container">
          <h3 class="wow-outer text-center"><span class="wow slideInDown">Our Lecturers</span></h3>
          <div class="row row-50">
@if(count($showuser) > 0)

          @foreach($showuser as $user)
            <div class="col-sm-6 col-lg-4 wow-outer">
              <!-- Profile Minimal-->
              <article class="profile-simple wow slideInLeft"><a href="/profile/{{$user->id}}"><img class="profile-simple-image" src="{{$user->profile->profileImage()}}" alt="" width="370" height="368"/></a>
                <h4 class="profile-simple-title">{{$user->name}}</h4>
                <p class="profile-simple-position">{{$user->profile->title}}</p>
              </article>
            </div>
        @endforeach

        @endif
     
     @if(count($showuser) == 0)

     <section class="section section-lg bg-gray-100 text-center" >
     <h3 style="float:center;padding-left:450px">No Lecturer available</h3>
   

     </section>

     @endif
          </div>
        </div>
      </section>
      <!-- Counters-->
      <section class="section section-lg text-center">
        <div class="container">
          <h3>Statistics</h3>
          <p><span class="text-width-1">ACU was founded on the principle that by pursuing big ideas and sharing what we learn, we make the world a better place. For more than 135 years, we haven’t strayed from that vision.</span></p>
          <div class="row row-50 offset-top-6">
            <div class="col-6 col-md-3">
              <!-- Counter Minimal-->
              <article class="counter-minimal">
                <div class="counter-minimal-icon fl-bigmug-line-circular220"></div>
                <div class="counter-minimal-main">
                  <div class="counter">{{$datapost->count()}}</div><span></span>
                </div>
                <h5 class="counter-minimal-title">Article(s) Posted</h5>
              </article>
            </div>
            <div class="col-6 col-md-3">
              <!-- Counter Minimal-->
              <article class="counter-minimal">
                <div class="icon icon-md icon-modern mdi mdi-security-network"></div>
                <div class="counter-minimal-main">
                  <div class="counter">{{$showstudent->count()}}</div><span></span>
                </div>
                <h5 class="counter-minimal-title">Student(s)</h5>
              </article>
            </div>
            <div class="col-6 col-md-3">
              <!-- Counter Minimal-->
              <article class="counter-minimal">
                <div class="icon icon-md icon-modern mdi mdi-library"></div>
                <div class="counter-minimal-main">
                  <div class="counter">{{$showuser->count()}}</div>
                </div>
                <h5 class="counter-minimal-title">Lecturer(s)</h5>
              </article>
            </div>
            <div class="col-6 col-md-3">
              <!-- Counter Minimal-->
              <article class="counter-minimal">
                <div class="icon icon-md icon-modern mdi mdi-language-python-text"></div>
                <div class="counter-minimal-main">
                  <div class="counter">{{$datacourse->count()}}</div><span></span>
                </div>
                <h5 class="counter-minimal-title">Course(s)</h5>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- Testimonials-->
 
      <!-- Centered CTA-->
  
      <!-- Latest Blog Posts-->
      <section class="section section-lg text-center">
        <div class="container">
          <h3 class="wow-outer text-center"><span class="wow slideInDown">Latest Blog Posts</span></h3>
          <div class="row row-50">

     @if(count($datapost) > 0)
          @foreach($datapost as $post)
            <div class="col-md-6 wow-outer">
              <!-- Post Modern-->       
              <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="/p/{{$post->id}}">
              <img src="/storage/{{$post->image}}" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a href="/p/{{$post->id}}">{!!$post->caption!!}</a></h4>
                <ul class="post-modern-meta">
                  <li>by {{$post->user->name}}</li>
                  <li>
                    <time datetime="2018">{{$post->created_at}}</time>
                  </li>
               
                </ul>
                <p>{!!$post->body!!}</p>
              </article>
            </div>
         @endforeach
@endif

@if(count($datapost)== 0)
<h3 style="margin-left:400px">No blog post available</h3>

@endif






          </div>
        </div>
        <div class="wow-outer button-outer"><a class="button button-primary-outline button-winona wow slideInUp" href="/viewall">View all Blog posts</a></div>
      </section>
      <!-- Contacts will be added in the next update-->
      <!-- <section class="section bg-gray-100">
        <div class="range justify-content-xl-between">
          <div class="cell-xl-6 align-self-center container">
            <div class="row">
              <div class="col-lg-9 cell-inner">
                <div class="section-lg">
                  <h3 class="wow-outer"><span class="wow slideInDown">Contact Us</span></h3>
                   RD Mailform
                  <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="#">
                    <div class="row row-10">
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-first-name">First Name</label>
                          <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-last-name">Last Name</label>
                          <input class="form-input" id="contact-last-name" type="text" name="name" data-constraints="@Required">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-email">E-mail</label>
                          <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-phone">Phone</label>
                          <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                        </div>
                      </div>
                      <div class="col-12 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-message">Your Message</label>
                          <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="group group-middle">
                      <div class="wow-outer"> 
                        <button class="button button-primary button-winona wow slideInRight" type="submit">Send a message</button>
                      </div>
                      <p>or use</p>
                      <div class="wow-outer"><a class="button button-primary-outline button-icon button-icon-left button-winona wow slideInLeft" href="#"><span class="icon text-primary mdi mdi-facebook-messenger"></span>Messenger</a></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="cell-xl-5 height-fill wow fadeIn">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d985.9503845395611!2d4.466552900049807!3d8.710387822744597!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf5a09414d7b223d4!2sKwara%20State%20University%2C%20Malete!5e0!3m2!1sen!2sng!4v1567876668614!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </section> -->

      <section class="section section-sm">
        <div class="container">
          <div class="layout-bordered">
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <div class="icon icon-lg mdi mdi-phone text-primary"></div>
                <ul class="list-0">
                 <button></button>
                </ul>
              </div>
            </div>
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <div class="icon icon-lg mdi mdi-email text-primary"></div><a class="link-gray-800" href="/cdn-cgi/l/email-protection#6d4e"><span class="__cf_email__" data-cfemail="3e575058517e5a5b53515257505510514c59">[email&#160;protected]</span></a>
              </div>
            </div>
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <div class="icon icon-lg mdi mdi-map-marker text-primary"></div><a class="link-gray-800" href="#">2130 Fulton Street San Diego, CA 94117-1080 USA</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact Info-->
  
      <!-- Page Footer-->
         @include('footer')
    </div>
  <div class="preloader"> 
      <div class="preloader-logo"><img src="images/logo-default-317x71.png" alt="" width="317" height="71" srcset="images/logo-default-551x124.png 2x"/>
      </div>
      <div class="preloader-body">
        <div id="loadingProgressG">
          <div class="loadingProgressG" id="loadingProgressG_1"></div>
        </div>
      </div>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script><script src="{{asset('js/core.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
	
	<!--LIVEDEMO_00 -->

	
	
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>