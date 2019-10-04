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
              <h3>HOD's Welcome speech</h3>
            
            <p style="color:#000000">The Department of Computer Science is guided by its philosophy of producing global citizens that are well grounded in the knowledge and expertise of the theories and applications of computer science so as to cope with the dynamic information technology world and manpower needs of the society .</p>
           <p style="color:#000000">To this end, the Department has recruited several experienced staff dedicated to their duties and always ready to mentor students. In addition, the Department is housed in a serene environment inside the College of Information and Communication building which provides a conducive avenue for teaching and learning. In all, the relationship between the staff and students of the Department, College and University is a very Cordial one.
Your choice of this great Department can never be wrong as the Department has so much to offer. You are most welcome to the Department and I wish you success in your endeavours.
</p>
            <div class="group group-middle"><a class="button button-primary button-winona" href="#our_mission" data-waypoint-to="#our_mission">Our Mission</a><a class="button button-primary-outline button-winona" href="careers.html" data-waypoint-to="#our_vision">Our Vision</a></div>
          
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
                <p class="thumbnail-classic-item-subtitle">Computer science department Introduced Distance Education for 90% of Degrees</p>
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
      
      <section class="section section-lg" id="our_mission">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-6">
              <h3>Our Misssion</h3>
            
            <h5>The missions of the department are</h5>
            <p>•	To create in students the awareness of and enthusiasm for computer science and its capabilities</p>
          <p>•	To provide students with knowledge and skills base for further studies in computer science or multi-disciplinary studies involving computer science</p>  
        <p>•	To develop in students through an education in computer science a range of transferable applicable skills of information technology to all aspects of human endeavours</p> 
      <p>•	To generate in students an appreciation of the importance of computer in an industrial, economics, technological and social context.</p>  
      </div>
         
            <div class="col-md-10 col-lg-6" id="our_vision">
            <h1>Our Vision</h1>
            
           <h3 style="color:black"> To be a world class training centre for computer scientists that will be self starting, dynamic, team player and entrepreneurial. </h3>
          </div>
          </div>
        </div>
      </section>
      
      <!-- Who We Are-->
    
      <!-- Latest News-->
    
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
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
@endsection