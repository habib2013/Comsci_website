@extends('layouts.app')
@section('content')
<html class="wide wow-animation" lang="en">

  <body>
    <div class="page">
      <!-- Page Header-->
  
      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">About</h6>
              <h1 class="breadcrumbs-custom-title">About Us</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li><a href="#">About</a></li>
              <li class="active">About Us</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Overview-->
      <section class="section section-lg">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-6">
              <h3>A Few Words About Us</h3>
            
            <p>The Department of Computer Science is guided by its philosophy of producing global citizens that are well grounded in the knowledge and expertise of the theories and applications of computer science so as to cope with the dynamic information technology world and manpower needs of the society .</p>
            <div class="group group-middle"><a class="button button-primary button-winona" href="#our-history" data-waypoint-to="#our-history">Our Mission</a><a class="button button-primary-outline button-winona" href="careers.html">Our Vision</a></div>
          
            </div>
         
            <div class="col-md-10 col-lg-6"><img class="img-responsive" src="images/large-features-1-613x350.png" alt="" width="613" height="350"/>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-gray-800" id="our-history">
        <div class="container">
          <!-- Timeline Classic-->
          <article class="timeline-classic">
            <div class="timeline-classic-item">
              <div class="timeline-classic-item-aside"><img class="timeline-classic-item-image" src="images/timeline-1-390x250.jpg" alt="" width="390" height="250"/>
              </div>
              <div class="timeline-classic-item-divider"></div>
              <div class="timeline-classic-item-main">
                <p class="timeline-classic-item-title">August 2009</p>
                <p class="thumbnail-classic-item-subtitle">The department of Computer Science is one of the foundation departments of the Kwara State University at its inception in 2009</p>
                <p>The department of Computer Science is one of the foundation departments of the Kwara State University at its inception in 2009. The department took off during the 2009/2010 academic session with the mandate of running a four- year Bachelor degree in Computer Science (B.Sc.). The department started with a student population of 46 and academic staff strength of 3.</p>
              </div>
            </div>
            <div class="timeline-classic-item">
              <div class="timeline-classic-item-aside"><img class="timeline-classic-item-image" src="images/timeline-2-390x250.jpg" alt="" width="390" height="250"/>
              </div>
              <div class="timeline-classic-item-divider"></div>
              <div class="timeline-classic-item-main">
                <p class="timeline-classic-item-title">2010/2011</p>
                <p class="thumbnail-classic-item-subtitle">The student population increased to 81 during 2010/2011 session</p>
              </div>
            </div>
            <div class="timeline-classic-item">
              <div class="timeline-classic-item-aside"><img class="timeline-classic-item-image" src="images/timeline-3-390x250.jpg" alt="" width="390" height="250"/>
              </div>
              <div class="timeline-classic-item-divider"></div>
              <div class="timeline-classic-item-main">
                <p class="timeline-classic-item-title">2011/2012</p>
                <p class="thumbnail-classic-item-subtitle">Albert Crawford University Introduces Distance Education for 90% of Degrees</p>
              </div>
            </div>

            <div class="timeline-classic-item">
              <div class="timeline-classic-item-aside"><img class="timeline-classic-item-image" src="images/timeline-3-390x250.jpg" alt="" width="390" height="250"/>
              </div>
              <div class="timeline-classic-item-divider"></div>
              <div class="timeline-classic-item-main">
                <p class="timeline-classic-item-title">2018 till date</p>
                <p class="thumbnail-classic-item-subtitle">At present, the department has over five hundred students which cuts across both undergraduate and post graduate programmes.</p>
              </div>
            </div>
      
          </article>
        </div>
      </section>
      

      
      <!-- Who We Are-->
      <section class="section section-lg section-last text-center">
        <div class="container">
          <h3>Who We Are</h3>
          <div class="row row-50">
            <div class="col-sm-6 col-lg-4">
              <!-- Profile Minimal-->
              <article class="profile-minimal"><img class="profile-minimal-image" src="images/team-1-370x368.jpg" alt="" width="370" height="368"/>
                <div class="profile-minimal-caption">
                  <h4 class="profile-minimal-title">Jean Thompson</h4>
                  <p class="profile-minimal-position">Psychology</p>
                </div>
              </article>
            </div>
         
            
            <div class="col-sm-6 col-lg-4">
              <!-- Profile Minimal-->
              <article class="profile-minimal"><img class="profile-minimal-image" src="images/team-3-370x368.jpg" alt="" width="370" height="368"/>
                <div class="profile-minimal-caption">
                  <h4 class="profile-minimal-title">Polly Tucker</h4>
                  <p class="profile-minimal-position">Graphic Design</p>
                </div>
              </article>
            </div>
         
          
          </div>
        </div>
      </section>
      <!-- Latest News-->
      <section class="section section-lg">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
            <div class="col-lg-6 col-xl-5">
              <div class="inset-right-3">
                <h3>About Undergraduate Study</h3>
                <h5>Fusce bibendum, augue non mattis blandit, nisl orci rhoncus arcu, eget volutpat mauris arcu quis justo.</h5>
                <p>Nam condimentum ligula dolor, ut eleifend sapien molestie at. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed auctor mi sed odio vulputate, tincidunt pellentesque nisi rhoncus.</p><a class="button button-lg button-primary button-winona" href="#">Learn more</a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="d3-chart-wrap">
                <div class="d3-chart" id="line-chart"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-xs bg-primary text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-10 col-md-12">
              <div class="box-cta-thin">
                <h4 class="wow-outer"><span class="wow slideInRight">Join our large growing community <span class="font-weight-bold"> with experienced professionals</span> Right Now!</span></h4>
                <div class="wow-outer button-outer"><a class="button button-primary button-winona wow slideInLeft" href="#">Join Now!!</a></div>
              </div>
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
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
@endsection