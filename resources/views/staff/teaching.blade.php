@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  
  <body>
    <div class="page">
      <!-- Page Header-->

      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">staff</h6>
              <h1 class="breadcrumbs-custom-title">Our teaching staff</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li><a href="#">staff</a></li>
              <li class="active">Teaching staff</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section section-lg">
        <div class="container">
          <article class="blog-layout">
            <div class="blog-layout-main">
              <div class="row row-50 row-xxl-70">
                <div class="col-sm-6">
                  <!-- Post Classic-->
                  <article class="post-classic"><a class="post-classic-media" href="single-blog-post.html"><img src="images/sidebar-blog-1-370x264.jpg" alt="" width="370" height="264"/></a>
                    <ul class="post-classic-meta">
                      <li><a class="button-winona" href="#">News</a></li>
                      <li>
                        <time datetime="2018">Apr 21, 2018 at 12:05 pm</time>
                      </li>
                    </ul>
                    <h4 class="post-classic-title"><a href="single-blog-post.html">Liberal Arts Colleges Rankings</a></h4>
                  </article>
                </div>
                <div class="col-sm-6">
                  <!-- Post Classic-->
                  <article class="post-classic"><a class="post-classic-media" href="single-blog-post.html"><img src="images/sidebar-blog-2-370x264.jpg" alt="" width="370" height="264"/></a>
                    <ul class="post-classic-meta">
                      <li><a class="button-winona" href="#">Advertising</a></li>
                      <li>
                        <time datetime="2018">Apr 21, 2018 at 12:05 pm</time>
                      </li>
                    </ul>
                    <h4 class="post-classic-title"><a href="single-blog-post.html">5 Ways to Pay for Community College</a></h4>
                  </article>
                </div>
                <div class="col-sm-6">
                  <!-- Post Classic-->
                  <article class="post-classic"><a class="post-classic-media" href="single-blog-post.html"><img src="images/sidebar-blog-3-370x264.jpg" alt="" width="370" height="264"/></a>
                    <ul class="post-classic-meta">
                      <li><a class="button-winona" href="#">News</a></li>
                      <li>
                        <time datetime="2018">Apr 21, 2018 at 12:05 pm</time>
                      </li>
                    </ul>
                    <h4 class="post-classic-title"><a href="single-blog-post.html">Why International Students Come to the USA</a></h4>
                  </article>
                </div>
                <div class="col-sm-6">
                  <!-- Post Classic-->
                  <article class="post-classic"><a class="post-classic-media" href="single-blog-post.html"><img src="images/sidebar-blog-4-370x264.jpg" alt="" width="370" height="264"/></a>
                    <ul class="post-classic-meta">
                      <li><a class="button-winona" href="#">News</a></li>
                      <li>
                        <time datetime="2018">Apr 21, 2018 at 12:05 pm</time>
                      </li>
                    </ul>
                    <h4 class="post-classic-title"><a href="single-blog-post.html">Consider MBA Programs That Offer Summer Prep</a></h4>
                  </article>
                </div>
                <div class="col-sm-6">
                  <!-- Post Classic-->
                  <article class="post-classic"><a class="post-classic-media" href="single-blog-post.html"><img src="images/sidebar-blog-5-370x264.jpg" alt="" width="370" height="264"/></a>
                    <ul class="post-classic-meta">
                      <li><a class="button-winona" href="#">News</a></li>
                      <li>
                        <time datetime="2018">Apr 21, 2018 at 12:05 pm</time>
                      </li>
                    </ul>
                    <h4 class="post-classic-title"><a href="single-blog-post.html">10 Law Schools Where the Most Accepted Students Enroll</a></h4>
                  </article>
                </div>
                <div class="col-sm-6">
                  <!-- Post Classic-->
                  <article class="post-classic"><a class="post-classic-media" href="single-blog-post.html"><img src="images/sidebar-blog-6-370x264.jpg" alt="" width="370" height="264"/></a>
                    <ul class="post-classic-meta">
                      <li><a class="button-winona" href="#">News</a></li>
                      <li>
                        <time datetime="2018">Apr 21, 2018 at 12:05 pm</time>
                      </li>
                    </ul>
                    <h4 class="post-classic-title"><a href="single-blog-post.html">Ways Parents Can Help Students Earn Scholarships</a></h4>
                  </article>
                </div>
              </div>
              <div class="pagination">
                <div class="page-item active"><a class="page-link button-winona" href="#">1</a></div>
                <div class="page-item"><a class="page-link button-winona" href="#">2</a></div>
                <div class="page-item"><a class="page-link button-winona" href="#">3</a></div>
                <div class="page-item"><a class="page-link button-winona" href="#">4</a></div>
              </div>
            </div>
            <div class="blog-layout-aside">
              <div class="blog-layout-aside-item">
                <p class="blog-layout-aside-title">Search lecturer</p>
                <!-- RD Search-->
                <form class="rd-form rd-search rd-search-classic" action="search-results.html" method="GET">
                  <div class="form-wrap">
                    <input class="form-input" id="rd-search-form-input" type="text" name="s" autocomplete="off">
                    <label class="form-label" for="rd-search-form-input">Search</label>
                  </div>
                  <button class="rd-search-submit" type="submit"></button>
                </form>
              </div>
              <div class="blog-layout-aside-item">
                <p class="blog-layout-aside-title">Quick search</p>
                <ul class="list-marked">
                  <li><a href="#">By Qualification</a></li>
                  <li><a href="#">By Rank</a></li>
            
               
                </ul>
              </div>
           
              <div class="blog-layout-aside-item">
                <p class="blog-layout-aside-title">Tags</p>
                <ul class="list-inline-comma">
                  <li><a href="#">Add automatically later</a></li>
                
                </ul>
              </div>
            </div>
          </article>
        </div>
      </section>
    
    </div>
    <div class="preloader"> 
      <div class="preloader-logo"><img src="images/logo-default-317x71.png" alt="" width="317" height="71" srcset="images/logo-default-551x124.png 2x"/>
      </div>
      <div class="preloader-body">
        <div id="loadingProgressG">
          <div class="loadingProgressG" id="loadingProgressG_1"></div>
        </div>
      </div>
      <!-- Page Footer-->
         
    </div>
    
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>
@endsection