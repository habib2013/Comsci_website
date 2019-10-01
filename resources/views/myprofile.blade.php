@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

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
                  <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="index.html"><img src="images/logo-default-317x71.png" alt="" width="317" height="71" srcset="images/logo-default-551x124.png 2x"/></a>
                </div>
                <div class="rd-navbar-collapse">
                  <button class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle="#rd-navbar-collapse-content-1"><span></span></button>
                  <div class="rd-navbar-collapse-content" id="rd-navbar-collapse-content-1">
                    <article class="unit align-items-center">
                      <div class="unit-left"><span class="icon icon-md icon-modern mdi mdi-phone"></span></div>
                      <div class="unit-body">
                        <ul class="list-0">
                          <li><a class="link-default" href="tel:#">1-800-1234-567</a></li>
                          <li><a class="link-default" href="tel:#">1-800-8763-765</a></li>
                        </ul>
                      </div>
                    </article>
                    <article class="unit align-items-center">
                      <div class="unit-left"><span class="icon icon-md icon-modern mdi mdi-map-marker"></span></div>
                      <div class="unit-body"><a class="link-default" href="tel:#">2130 Fulton Street <br> San Diego, CA 94117-1080</a></div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                  <!-- RD Navbar Search-->
                  <div class="rd-navbar-search" id="rd-navbar-search-1">
                    <button class="rd-navbar-search-toggle" data-rd-navbar-toggle="#rd-navbar-search-1"><span></span></button>
                    <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live-1" method="GET">
                      <div class="form-wrap">
                        <label class="form-label" for="rd-navbar-search-form-input-1">Search...</label>
                        <input class="form-input rd-navbar-search-form-input" id="rd-navbar-search-form-input-1" type="text" name="s" autocomplete="off">
                        <div class="rd-search-results-live" id="rd-search-results-live-1"></div>
                      </div>
                      <button class="rd-search-form-submit fa-search" type="submit"></button>
                    </form>
                  </div>
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Home</a>
                    </li>
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="#">About</a>
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="about-us.html">About Us</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="about-me.html">About Me</a></li>
                      </ul>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="academics.html">Academics</a>
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="single-academic.html">Single Academic</a></li>
                      </ul>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">Blog</a>
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-blog.html">Grid Blog</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="sidebar-blog.html">Sidebar Blog</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="single-blog-post.html">Single Blog Post</a></li>
                      </ul>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">Campus</a>
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-gallery.html">Grid Gallery</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="masonry-gallery.html">Masonry Gallery</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="modern-gallery.html">Modern Gallery</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="single-gallery-item.html">Single Gallery Item</a></li>
                      </ul>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">Pages</a>
                      <!-- RD Navbar Megamenu-->
                      <ul class="rd-menu rd-navbar-megamenu">
                        <li class="rd-megamenu-item">
                          <ul class="rd-megamenu-list">
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Typography</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="buttons.html">Buttons</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="forms.html">Forms</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="progress-bars.html">Progress bars</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="tabs.html">Tabs</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="tables.html">Tables</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="accordions.html">Accordions</a></li>
                          </ul>
                        </li>
                        <li class="rd-megamenu-item">
                          <ul class="rd-megamenu-list">
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="small-features.html">Small Features</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="testimonials.html">Testimonials</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="large-features.html">Large Features</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="404-page.html">404 Page</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="503-page.html">503 Page</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="coming-soon.html">Coming Soon</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="under-construction.html">Under Construction</a></li>
                          </ul>
                        </li>
                        <li class="rd-megamenu-item">
                          <ul class="rd-megamenu-list">
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="careers.html">Careers</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="search-results.html">Search results</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="single-job.html">Single Job</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="privacy-policy.html">Privacy policy</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Contacts</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">About</h6>
              <h1 class="breadcrumbs-custom-title">About Me</h1>
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
            <div class="profile-modern-figure"><img class="profile-modern-image" src="images/team-1-336x336.jpg" alt="" width="336" height="336"/><a class="profile-modern-button" href="#"><span class="icon mdi mdi-facebook-messenger"></span><span class="icon mdi mdi-facebook-messenger"></span></a>
            </div>
            <div class="profile-modern-main">
              <div class="profile-modern-header">
                <div class="profile-modern-header-item">
                  <h3>Nathan Porter</h3>
                  <p>Economics</p>
                </div>
                <div class="profile-modern-item">
                  <div class="group group-xs group-middle"><a class="icon icon-sm icon-creative mdi mdi-facebook" href="#"></a><a class="icon icon-sm icon-creative mdi mdi-twitter" href="#"></a><a class="icon icon-sm icon-creative mdi mdi-instagram" href="#"></a><a class="icon icon-sm icon-creative mdi mdi-google" href="#"></a><a class="icon icon-sm icon-creative mdi mdi-linkedin" href="#"></a></div>
                </div>
              </div>
              <div class="row row-30">
                <div class="col-lg-6">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mollis arcu sit amet sapien tempor mollis. In sodales est lorem, quis viverra purus tristique ultrices. In ac ipsum sed massa molestie egestas. Nulla et mi at dui blandit pellentesque sit amet eget ante. Pellentesque semper, nunc in aliquet commodo, purus eros auctor neque, ac posuere lectus enim vitae ante.</p>
                </div>
                <div class="col-lg-6">
                        <!-- Linear progress bar-->
                        <article class="progress-linear">
                          <div class="progress-header">
                            <p>Professionalism</p><span class="progress-value">90</span>
                          </div>
                          <div class="progress-bar-linear-wrap">
                            <div class="progress-bar-linear"></div>
                          </div>
                        </article>
                        <!-- Linear progress bar-->
                        <article class="progress-linear">
                          <div class="progress-header">
                            <p>Knowledge</p><span class="progress-value">65</span>
                          </div>
                          <div class="progress-bar-linear-wrap">
                            <div class="progress-bar-linear"></div>
                          </div>
                        </article>
                        <!-- Linear progress bar-->
                        <article class="progress-linear">
                          <div class="progress-header">
                            <p>Experience</p><span class="progress-value">100</span>
                          </div>
                          <div class="progress-bar-linear-wrap">
                            <div class="progress-bar-linear"></div>
                          </div>
                        </article>
                </div>
              </div>
            </div>
          </article>
        </div>
      </section>
      <!-- Nathan’s Projects-->
      <section class="section section-lg bg-gray-100 text-center">
        <div class="container">
          <h3>Nathan’s Courses</h3>
          <div class="isotope offset-top-2" data-isotope-layout="masonry">
            <div class="row row-30">
              <div class="col-12 col-sm-6 col-lg-4 isotope-item wow-outer">
                          <!-- Thumbnail Corporate-->
                          <article class="thumbnail-corporate wow slideInDown"><img class="thumbnail-corporate-image" src="images/gallery-masonry-1-370x256.jpg" alt="" width="370" height="256"/>
                            <div class="thumbnail-corporate-caption">
                              <p class="thumbnail-corporate-title">Financial Accounting</p>
                              <p>We offer a wide variety of courses and programs at the university that cover the needs of our students.</p><a class="thumbnail-corporate-link" href="single-gallery-item.html"><span class="icon mdi mdi-plus"></span><span class="icon mdi mdi-plus"></span></a>
                            </div>
                            <div class="thumbnail-corporate-dummy"> </div>
                          </article>
              </div>
              <div class="col-12 col-sm-6 col-lg-4 isotope-item wow-outer">
                          <!-- Thumbnail Corporate-->
                          <article class="thumbnail-corporate thumbnail-corporate-lg wow slideInDown"><img class="thumbnail-corporate-image" src="images/gallery-masonry-2-370x464.jpg" alt="" width="370" height="464"/>
                            <div class="thumbnail-corporate-caption">
                              <p class="thumbnail-corporate-title">Financial Planning</p>
                              <p>We offer a wide variety of courses and programs at the university that cover the needs of our students.</p><a class="thumbnail-corporate-link" href="single-gallery-item.html"><span class="icon mdi mdi-plus"></span><span class="icon mdi mdi-plus"></span></a>
                            </div>
                            <div class="thumbnail-corporate-dummy"> </div>
                          </article>
              </div>
              <div class="col-12 col-sm-6 col-lg-4 isotope-item wow-outer">
                          <!-- Thumbnail Corporate-->
                          <article class="thumbnail-corporate wow slideInUp"><img class="thumbnail-corporate-image" src="images/gallery-masonry-3-370x256.jpg" alt="" width="370" height="256"/>
                            <div class="thumbnail-corporate-caption">
                              <p class="thumbnail-corporate-title">Global Financial Markets</p>
                              <p>We offer a wide variety of courses and programs at the university that cover the needs of our students.</p><a class="thumbnail-corporate-link" href="single-gallery-item.html"><span class="icon mdi mdi-plus"></span><span class="icon mdi mdi-plus"></span></a>
                            </div>
                            <div class="thumbnail-corporate-dummy"> </div>
                          </article>
              </div>
              <div class="col-12 col-sm-6 col-lg-4 isotope-item wow-outer">
                          <!-- Thumbnail Corporate-->
                          <article class="thumbnail-corporate thumbnail-corporate-lg wow slideInUp"><img class="thumbnail-corporate-image" src="images/gallery-masonry-4-370x464.jpg" alt="" width="370" height="464"/>
                            <div class="thumbnail-corporate-caption">
                              <p class="thumbnail-corporate-title">Financial Engineering</p>
                              <p>We offer a wide variety of courses and programs at the university that cover the needs of our students.</p><a class="thumbnail-corporate-link" href="single-gallery-item.html"><span class="icon mdi mdi-plus"></span><span class="icon mdi mdi-plus"></span></a>
                            </div>
                            <div class="thumbnail-corporate-dummy"> </div>
                          </article>
              </div>
              <div class="col-12 col-sm-6 col-lg-4 isotope-item wow-outer">
                          <!-- Thumbnail Corporate-->
                          <article class="thumbnail-corporate thumbnail-corporate-lg wow slideInDown"><img class="thumbnail-corporate-image" src="images/gallery-masonry-6-370x464.jpg" alt="" width="370" height="464"/>
                            <div class="thumbnail-corporate-caption">
                              <p class="thumbnail-corporate-title">Intermediate Finance</p>
                              <p>We offer a wide variety of courses and programs at the university that cover the needs of our students.</p><a class="thumbnail-corporate-link" href="single-gallery-item.html"><span class="icon mdi mdi-plus"></span><span class="icon mdi mdi-plus"></span></a>
                            </div>
                            <div class="thumbnail-corporate-dummy"> </div>
                          </article>
              </div>
              <div class="col-12 col-sm-6 col-lg-4 isotope-item wow-outer">
                          <!-- Thumbnail Corporate-->
                          <article class="thumbnail-corporate wow slideInDown"><img class="thumbnail-corporate-image" src="images/gallery-masonry-5-370x256.jpg" alt="" width="370" height="256"/>
                            <div class="thumbnail-corporate-caption">
                              <p class="thumbnail-corporate-title">Emerging Markets</p>
                              <p>We offer a wide variety of courses and programs at the university that cover the needs of our students.</p><a class="thumbnail-corporate-link" href="single-gallery-item.html"><span class="icon mdi mdi-plus"></span><span class="icon mdi mdi-plus"></span></a>
                            </div>
                            <div class="thumbnail-corporate-dummy"> </div>
                          </article>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Nathan’s Blog Posts-->
      <section class="section section-lg text-center">
        <div class="container">
          <h3>Nathan’s Blog Posts</h3>
          <div class="row row-50">
            <div class="col-sm-6 col-md-4 col-lg-3 wow-outer">
              <!-- Post Tiny-->
              <article class="post-tiny wow fadeSlideInDown"><a class="post-tiny-media" href="single-blog-post.html"><img src="images/blog-layouts-1-270x184.jpg" alt="" width="270" height="184"/></a>
                <h5 class="post-tiny-title"><a href="single-blog-post.html">Liberal Arts Colleges Rankings</a></h5>
                <time class="post-tiny-time" datetime="2018">2 days ago</time>
              </article>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 wow-outer">
              <!-- Post Tiny-->
              <article class="post-tiny wow fadeSlideInDown" data-wow-delay=".05s"><a class="post-tiny-media" href="single-blog-post.html"><img src="images/blog-layouts-2-270x184.jpg" alt="" width="270" height="184"/></a>
                <h5 class="post-tiny-title"><a href="single-blog-post.html">5 Ways to Pay for Community College</a></h5>
                <time class="post-tiny-time" datetime="2018">2 days ago</time>
              </article>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 wow-outer">
              <!-- Post Tiny-->
              <article class="post-tiny wow fadeSlideInDown" data-wow-delay=".1s"><a class="post-tiny-media" href="single-blog-post.html"><img src="images/blog-layouts-3-270x184.jpg" alt="" width="270" height="184"/></a>
                <h5 class="post-tiny-title"><a href="single-blog-post.html">Why International Students Come to the USA</a></h5>
                <time class="post-tiny-time" datetime="2018">2 days ago</time>
              </article>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 wow-outer">
              <!-- Post Tiny-->
              <article class="post-tiny wow fadeSlideInDown" data-wow-delay=".15s"><a class="post-tiny-media" href="single-blog-post.html"><img src="images/blog-layouts-4-270x184.jpg" alt="" width="270" height="184"/></a>
                <h5 class="post-tiny-title"><a href="single-blog-post.html">Consider MBA Programs That Offer Summer Prep</a></h5>
                <time class="post-tiny-time" datetime="2018">2 days ago</time>
              </article>
            </div>
          </div><a class="button button-primary-outline button-winona" href="grid-blog.html">View all Blog posts</a>
        </div>
      </section>
      <section class="section section-lg bg-gray-100">
        <div class="container">
          <h3 class="wow-outer text-center"><span class="wow slideInUp">Testimonials & Video</span></h3>
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-5 wow-outer">
              <div class="owl-carousel wow slideInLeft" data-items="1" data-dots="true" data-nav="false" data-loop="true" data-margin="30" data-stage-padding="0" data-mouse-drag="false">
                <blockquote class="quote-modern">
                  <svg class="quote-modern-mark" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">
                    <path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>
                  </svg>
                  <div class="quote-modern-text">
                    <p>When I researched the programs available I realized that the Albert Crawford University University was offering exactly the type of program in app development that interested me.</p>
                  </div>
                  <div class="quote-modern-meta">
                    <div class="quote-modern-avatar"><img src="images/testimonials-person-3-96x96.jpg" alt="" width="96" height="96"/>
                    </div>
                    <div class="quote-modern-info">
                      <cite class="quote-modern-cite">Albert Webb</cite>
                      <p class="quote-modern-caption">Programming Graduate, MSc</p>
                    </div>
                  </div>
                </blockquote>
                <blockquote class="quote-modern">
                  <svg class="quote-modern-mark" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">
                    <path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>
                  </svg>
                  <div class="quote-modern-text">
                    <p>The First Year Program at ACU affords so much more than great classes and advisors, as well as an environment that emanates success—it allows dreams to become imaginable and realized.</p>
                  </div>
                  <div class="quote-modern-meta">
                    <div class="quote-modern-avatar"><img src="images/testimonials-person-1-96x96.jpg" alt="" width="96" height="96"/>
                    </div>
                    <div class="quote-modern-info">
                      <cite class="quote-modern-cite">Kelly McMillan</cite>
                      <p class="quote-modern-caption">Economics Graduate, MA</p>
                    </div>
                  </div>
                </blockquote>
                <blockquote class="quote-modern">
                  <svg class="quote-modern-mark" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">
                    <path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>
                  </svg>
                  <div class="quote-modern-text">
                    <p>Courses I took at this university allowed me to acquire the skills I needed to take control of my life and get on the road to the career I want. With the help of my advisor, I was able to set the right goals.</p>
                  </div>
                  <div class="quote-modern-meta">
                    <div class="quote-modern-avatar"><img src="images/testimonials-person-2-96x96.jpg" alt="" width="96" height="96"/>
                    </div>
                    <div class="quote-modern-info">
                      <cite class="quote-modern-cite">Harold Barnett</cite>
                      <p class="quote-modern-caption">Management Graduate, MBA</p>
                    </div>
                  </div>
                </blockquote>
              </div>
            </div>
            <div class="col-md-10 col-lg-6 wow-outer">
              <div class="thumbnail-video-1 bg-gray-800 wow slideInLeft">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe width="570" height="320" src="//www.youtube.com/embed/QZzbm-FrkGk" allowfullscreen=""></iframe>
                </div>
                <div class="thumbnail-video__overlay video-overlay" style="background-image: url(images/video-preview-1-570x320.jpg)">
                  <div class="button-video"></div>
                  <h5>Lawrence Alvarado</h5>
                </div>
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
                    <div class="col-sm-5 col-md-7 col-lg-4">
                      <h4>Our Gallery</h4>
                      <div class="row row-x-10" data-lightgallery="group">
                        <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-1.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-1-85x85.jpg" alt="">
                            <div class="thumbnail-minimal-caption"></div></a></div>
                        <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-2.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-2-85x85.jpg" alt="">
                            <div class="thumbnail-minimal-caption"></div></a></div>
                        <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-3.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-3-85x85.jpg" alt="">
                            <div class="thumbnail-minimal-caption"></div></a></div>
                        <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-4.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-4-85x85.jpg" alt="">
                            <div class="thumbnail-minimal-caption"></div></a></div>
                        <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-5.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-5-85x85.jpg" alt="">
                            <div class="thumbnail-minimal-caption"></div></a></div>
                        <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-6.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-6-85x85.jpg" alt="">
                            <div class="thumbnail-minimal-caption"> </div></a></div>
                        <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-7.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-7-85x85.jpg" alt="">
                            <div class="thumbnail-minimal-caption"></div></a></div>
                        <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-8.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-8-85x85.jpg" alt="">
                            <div class="thumbnail-minimal-caption"></div></a></div>
                      </div>
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
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
@endcontent