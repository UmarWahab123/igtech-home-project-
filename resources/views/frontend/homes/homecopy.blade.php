@extends('../../../frontend.layouts.header')
@section('title','IG TECH SERVICES | Home')
@section('content')
<svg class="defs">
        <defs>
          <lineargradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="50%" stop-color="#AA54ED">
              <animate attributename="stop-color" values="#AA54ED; #5348E2; #AA54ED" dur="5s" repeatcount="indefinite"></animate>
            </stop>
            <stop offset="100%" stop-color="#5348E2">
              <animate attributename="stop-color" values="#5348E2; #AA54ED; #5348E2" dur="5s" repeatcount="indefinite"></animate>
            </stop>
          </lineargradient>
        </defs>
      </svg>
      <!--banners-->
      <div class="swiper-container swiper-slider swiper-slider_fullheight swiper-digital" data-effect="circle-bg" data-loop="false" data-autoplay="4600" data-speed="1600" data-mousewheel="false" data-keyboard="false" data-circle-fill="url(#gradient1)">
        <div class="swiper-wrapper">
          <div class="swiper-slide" data-circle-cx=".3" data-circle-cy=".5" data-circle-r=".14"
           style="background-image: url({{ asset('/frontend/images/slider1.png')}});">
            <div class="swiper-slide-caption" style="width: 100%">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-xxl-5 d-flex justify-content-center">
                    <div>
                      <h6 class="text-white text-right" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 500 }">WEB Agency</h6>
                      <h1 class="text-white" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 700 }"> <span class="heading-4 text-white">IG</span><span>TECH</span></h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-circle-cx=".7" data-circle-cy=".5" data-circle-r=".2" style="background-image: url({{ asset('/frontend/images/slider-2.png')}});">
            <div class="swiper-slide-caption text-center" style="width: 100%">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <h2 class="text-white" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 500 }">Enterprise Software Development</h2>
                    <h5 class="text-white text-width-2 block-centered" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 700 }">{{get_settings("company_name")}} aims to satisfy real needs of real projects.</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-circle-cx=".6" data-circle-cy=".5" data-circle-r=".18" style="background-image:  url({{ asset('/frontend/images/slider-3.png')}});">
            <div class="swiper-slide-caption d-flex justify-content-center">
              <div>
                <h4 class="text-white text-right" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 200 }">{{get_settings("company_name")}} PROVIDES</h4>
                <h1 class="text-white bg-accent p-4 pt-lg-3 pl-lg-3 pr-lg-3" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 400 }"><span>MOBILE APP </span></h1>
                <p class="text-white text-left mt-1" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 600 }">
                {{get_settings("company_name")}} is using REACT NATIVE for delivering android and iOS apps which is widely used, and latest technology. </p>
              </div>
            </div>
          </div>
           <div class="swiper-slide" data-circle-cx=".6" data-circle-cy=".5" data-circle-r=".18" style="background-image:url({{ asset('/frontend/images/slider-3.png')}});">
            <div class="swiper-slide-caption d-flex justify-content-center">
              <div>
                <h4 class="text-white text-right" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 200 }">{{get_settings("company_name")}} PROVIDES</h4>
                <h1 class="text-white bg-accent p-4 pt-lg-3 pl-lg-3 pr-lg-3" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 400 }"><span>WEB Devlopment </span></h1>
                <p class="text-white text-left mt-1" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 600 }">
                {{get_settings("company_name")}} provides web development services including websites, web systems, erp systems, wordpress websites, custom websites, customized wordpress websites, web api's and much more </p>
              </div>
            </div>
          </div>
           <div class="swiper-slide" data-circle-cx=".6" data-circle-cy=".5" data-circle-r=".18" style="background-image: url({{ asset('/frontend/images/slider-3.png')}});">
            <div class="swiper-slide-caption d-flex justify-content-center">
              <div>
                <h4 class="text-white text-right" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 200 }">{{get_settings("company_name")}} PROVIDES</h4>
                <h1 class="text-white bg-accent p-4 pt-lg-3 pl-lg-3 pr-lg-3" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 400 }"><span>Ecommerce Apps </span></h1>
                <p class="text-white text-left mt-1" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 600 }">
                {{get_settings("company_name")}} provides web development services including websites, wordpress websites,Ecommerce website, custom websites, customized wordpress websites, web api's and much more</p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev linear-icon-chevron-left"></div>
        <div class="swiper-button-next linear-icon-chevron-right"></div>
      </div>
      <!-- Our Services -->

      <section class="services section-xl bg-default text-center">
        <div class="bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;y&quot;: 100,  &quot;smoothness&quot;: 30}"><img src="{{ asset('/frontend/images/bg-decor-1.png')}}" alt=""/>
        </div>
        <div class="bg-decor d-flex align-items-end" data-parallax-scroll="{&quot;x&quot;: -150, &quot;from-scroll&quot;: 420, &quot;smoothness&quot;: 30}">
          <img src="{{ asset('/frontend/images/bg-decor-2.png')}}" alt=""/>
        </div>
        <div class="bg-decor" data-parallax-scroll="{&quot;x&quot;: 80, &quot;y&quot;: 80,  &quot;smoothness&quot;: 30}"><img src="{{ asset('/frontend/images/bg-decor-3.png')}}" alt=""/>
        </div>
        <div class="container">
          <h4 class="heading-decorated">Our Services</h4>
          <!-- Circle carousel -->
          <div class="carousel-wrapper">
            <div class="circle-carousel" data-speed="1000" data-autoplay="5000">
              <!-- slides -->
              <div class="slides">
                <div class="content-box">
                  <div class="content-box-inner">
                    <div class="content-box-img bg-overlay-dark" style="background-image: url({{ asset('/frontend/images/service-1.jpg')}});">
                      <div class="content-title-wrap">
                        <div class="content-title">
                          <h4><a href="single-service.html">HTML/CSS/JS</a></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content-box">
                  <div class="content-box-inner">
                    <div class="content-box-img" style="background-image: url({{ asset('/frontend/images/service-2.jpg')}});">
                      <div class="content-title-wrap">
                        <div class="content-title">
                          <h4><a href="single-service.html">React JS</a></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content-box">
                  <div class="content-box-inner">
                    <div class="content-box-img" style="background-image:url({{ asset('/frontend/images/service-3.jpg')}});">
                      <div class="content-title-wrap">
                        <div class="content-title">
                          <h4><a href="single-service.html">Responsive & Retina Ready</a></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content-box">
                  <div class="content-box-inner">
                    <div class="content-box-img bg-overlay-dark" style="background-image: url({{ asset('/frontend/images/service-4.jpg')}});">
                      <div class="content-title-wrap">
                        <div class="content-title">
                          <h4><a href="single-service.html">React Native Apps (Android and iOS)</a></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content-box">
                  <div class="content-box-inner">
                    <div class="content-box-img" style="background-image:url({{ asset('/frontend/images/service-5.jpg')}});">
                      <div class="content-title-wrap">
                        <div class="content-title">
                          <h4><a href="single-service.html">Custom ERP Systems</a></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content-box">
                  <div class="content-box-inner">
                    <div class="content-box-img bg-overlay-dark" style="background-image: url({{ asset('/frontend/images/service-6.jpg')}});">
                      <div class="content-title-wrap">
                        <div class="content-title">
                          <h4><a href="single-service.html">Clean and Crispy Design</a></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content-box">
                  <div class="content-box-inner">
                    <div class="content-box-img" style="background-image: url({{ asset('/frontend/images/service-7.jpg')}});">
                      <div class="content-title-wrap">
                        <div class="content-title">
                          <h4><a href="single-service.html">Wordpress (CUSTOM)</a></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content-box">
                  <div class="content-box-inner">
                    <div class="content-box-img" style="background-image: url({{asset('/frontend/images/service-8.jpg')}});">
                      <div class="content-title-wrap">
                        <div class="content-title">
                          <h4>
                            <a href="single-service.html">PHP</a>
                            <a href="single-service.html">Laravel</a>
                            <a href="single-service.html">Codeigniter</a>
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- pagination-->
              <div class="pagination">
                <div class="item">
                  <div class="dot"><i class="linear-icon-pencil-ruler"></i><span></span></div>
                </div>
                <div class="item">
                  <div class="dot"><i class="linear-icon-users"></i><span></span></div>
                </div>
                <div class="item">
                  <div class="dot"><i class="linear-icon-wall"></i><span></span></div>
                </div>
                <div class="item">
                  <div class="dot"><i class="linear-icon-apartment"></i><span></span></div>
                </div>
                <div class="item">
                  <div class="dot"><i class="linear-icon-home4"></i><span></span></div>
                </div>
                <div class="item">
                  <div class="dot"><i class="linear-icon-pencil-ruler2"></i><span></span></div>
                </div>
                <div class="item">
                  <div class="dot"><i class="linear-icon-magic-wand"></i><span></span></div>
                </div>
                <div class="item">
                  <div class="dot"><i class="linear-icon-menu3"></i><span></span></div>
                </div>
              </div>
              <div class="prev"><span>PREV</span></div>
              <div class="next"><span>NEXT</span></div>
            </div>
          </div>
        </div>
      </section>
      <!-- About us-->
      <section class="bg-gray-lighter object-wrap decor-text" data-content="About">
        <div class="bg-decor d-flex align-items-center justify-content-end" data-parallax-scroll="{&quot;y&quot;: 50,  &quot;smoothness&quot;: 30}"><img src="/projects/public/frontend/images/bg-decor-4.png" alt=""/>
        </div>
        <div class="section-lg">
          <div class="container">
            <div class="row justify-content-end">
              <div class="col-lg-6">
                <h4 class="heading-decorated">About us</h4>
                <p>We are a team of professional, energetic individuals with talented engineers and experienced managers available to guide our clients through the flawless and timely execution of any web project. Since day one, we have been delivering creative and unique work to our clients worldwide.</p>
                <div class="row row-30">
                  <div class="col-xl-6">
                    <!-- Blurb minimal-->
                    <article class="blurb blurb-minimal">
                      <div class="unit flex-row unit-spacing-md">
                        <div class="unit-left">
                          <div class="blurb-minimal__icon"><span class="icon linear-icon-menu3"></span></div>
                        </div>
                        <div class="unit-body">
                          <p class="blurb__title heading-6"><a href="single-service.html">Web Development</a></p>
                          <p>{{get_settings("company_name")}} provides web development services including websites, web systems, erp systems, wordpress websites, custom websites, customized wordpress websites, web api's and much more...</p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-xl-6">
                    <!-- Blurb minimal-->
                    <article class="blurb blurb-minimal">
                      <div class="unit flex-row unit-spacing-md">
                        <div class="unit-left">
                          <div class="blurb-minimal__icon"><span class="icon linear-icon-users2"></span></div>
                        </div>
                        <div class="unit-body">
                          <p class="blurb__title heading-6"><a href="single-service.html">Mobile App Development</a></p>
                          <p>{{get_settings("company_name")}} is using REACT NATIVE for delivering android and iOS apps which is widely used, and latest technology.</p>
                        </div>
                       
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
        <div class="object-wrap__body object-wrap__body-sizing-1 object-wrap__body-md-left bg-image" style="background-image: url(/projects/public/frontend/images/about.jpg)"></div>
      </section>
      <section class="section-md bg-default decor-text" data-content="Features">
        <div class="bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;x&quot;: -50,  &quot;smoothness&quot;: 30}"><img src="/projects/public/frontend/images/bg-decor-5.png" alt=""/>
        </div>


        <div class="container">
          <div class="row justify-content-md-center justify-content-lg-between row-50 align-items-center">
            <div class="col-md-8 col-lg-6">
              <h4 class="heading-decorated">What We Do</h4>
              <!-- Blurb minimal-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-rocket"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6">Built for Speed</p>
                    <p>Our Project was built for speed and performance. Get the best results at GTmetrix and Google PageSpeed.</p>
                  </div>
                </div>
              </article>
              <!-- Blurb minimal-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-equalizer"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6">Flexible and Multipurpose</p>
                    <p>{{get_settings("company_name")}} allows to create various websites for complex and scalable  projects.</p>
                  </div>
                </div>
              </article>
              <!-- Blurb minimal-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-arrow-down-square"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6">Robust and reliable</p>
                    <p>We build highly robust backend solutions, which go far beyond basic programming</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-7 col-lg-4">
              <figure class="image-sizing-1" data-parallax-scroll="{&quot;y&quot;: -50,  &quot;smoothness&quot;: 30}"><img src="/projects/public/frontend/images/home_business.png" alt="" width="1481" height="2068"/>
              </figure>
            </div>
          </div>
        </div>
      </section>
      <!-- Call to Action-->
      <section class="section section-sm context-dark bg-gray-darker section-cta">
        <div class="container">
          <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
            <div class="col-xl-8 text-xl-left">
              <h4><span class="text-transform-none heading-5">IG</span><span class="text-transform-none">TECH</span><br><span>Provides a flexible solution with a lots of advantages</span></h4>
              <p style="color: white;">Provides web development services including websites, web systems, erp systems.</p>
            </div>
            <div class="col-xl-2 text-xl-right"><a class="button button-primary" target="_blank" href="contacts.html">Contact</a></div>
          </div>
        </div>
      </section>
      <!-- portfolio-->
   <section class="section-md bg-default text-center">
   <div class="bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;y&quot;: 50,  &quot;smoothness&quot;: 30}"><img src="/projects/public/frontend/images/bg-decor-6.png" alt=""/>
   </div>
   <div class="container">
      <h4 class="heading-decorated">Portfolio</h4>
      <div class="isotope-wrap row row-70">
         <div class="col-sm-12">
            <ul class="list-nav isotope-filters isotope-filters-horizontal">
               <li><a class="active" data-isotope-filter="Category" data-isotope-group="gallery" href="#">All</a></li>
               @foreach($data['category'] as $key=>$value)
               <li><a data-isotope-filter="cat{{$value->id}}" data-isotope-group="gallery" href="#">{{$value->name}}</a></li>
               @endforeach
            </ul>
            <div class="isotope row" data-isotope-layout="fitRows" data-isotope-group="gallery">
               @foreach( $data['portfolio'] as $row1)
               <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category">
                  <a class="img-thumbnail-variant-3" href="/projects/public/frontend/images/portfolio1_full.png" data-lightgallery="item">
                     <img src="{{$row1->image}}" alt=""/><span class="label-custom label-white">Link</span>
                     <div class="caption"><span class="icon hover-top-element linear-icon-folder-picture"></span>
                     </div>
                  </a>
               </div>
               @endforeach 
               @foreach( $data['portfolio'] as $row)
               <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="cat{{$row->category->id}}">
                  <a class="img-thumbnail-variant-3" href="/projects/public/frontend/images/portfolio1_full.png" data-lightgallery="item">
                     <img src="{{$row->image}}" alt=""/><span class="label-custom label-white">Link</span>
                     <div class="caption"><span class="icon hover-top-element linear-icon-folder-picture"></span>      
                     </div>
                  </a>
               </div>
               @endforeach    
            </div>
         </div>
      </div>
   </div>
</section>
      <!-- counters-->
      <section class="section parallax-container context-dark" data-parallax-img="/projects/public/frontend/images/parallax-1.jpg">
        <div class="parallax-content">
          <div class="container section-md">
            <div class="row justify-content-md-center row-50">
              <div class="col-md-6 col-lg-3">
                <!-- Box counter-->
                <article class="box-counter">
                  <div class="box-counter__icon linear-icon-coffee-cup"></div>
                  <div class="box-counter__wrap">
                    <div class="counter">100</div>
                  </div>
                  <p class="box-counter__title">Projects Annually</p>
                </article>
              </div>
              <div class="col-md-6 col-lg-3">
                <!-- Box counter-->
                <article class="box-counter">
                  <div class="box-counter__icon linear-icon-cube"></div>
                  <div class="box-counter__wrap">
                    <div class="counter">20</div>
                  </div>
                  <p class="box-counter__title">Awards</p>
                </article>
              </div>
              <div class="col-md-6 col-lg-3">
                <!-- Box counter-->
                <article class="box-counter">
                  <div class="box-counter__icon linear-icon-chevrons-expand-horizontal"></div>
                  <div class="box-counter__wrap">
                    <div class="counter">98</div><span>%</span>
                  </div>
                  <p class="box-counter__title">Positive Reviews</p>
                </article>
              </div>
              <div class="col-md-6 col-lg-3">
                <!-- Box counter-->
                <article class="box-counter">
                  <div class="box-counter__icon linear-icon-mustache-glasses"></div>
                  <div class="box-counter__wrap">
                    <div class="counter">50</div>
                  </div>
                  <p class="box-counter__title">Happy Customers</p>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Meet Our Team-->
      <section class="section-md bg-gray-lighter text-center decor-text" data-content="Team">
        <div class="bg-decor d-flex align-items-start" data-parallax-scroll="{&quot;y&quot;: -50,  &quot;smoothness&quot;: 30}"><img src="/projects/public/frontend/images/bg-decor-7.png" alt=""/>
        </div>
        <div class="container">
          <h4 class="heading-decorated">Meet Our Team</h4>
          <div class="row row-50 offset-top-1">
          @foreach($data['results'] as $key=>$value) 
            <div class="col-md-6 col-lg-3">
              <!-- Thumb corporate-->
              <div class="thumb thumb-corporate firstdata">
                <div class="thumb-corporate__main"><img src="{{url('/')}}/{{$value->profile}}" width="265" height="199">
                  <div class="thumb-corporate__overlay">
                  </div>
                </div>
                <div class="thumb-corporate__caption">
                  <p class="thumb__title"><a href="#">{{$value->name}}</a></p>
                  <p class="thumb__subtitle">{{$value->designation}}</p>
                </div>
              </div>
            </div>
            @endforeach
        </div>
      </section>
    

      <!-- people say-->
     
      <section class="section parallax-container context-dark decor-text" data-parallax-img="/projects/public/frontend/images/c.jpg" data-content="Testimonials">
        <div class="parallax-content"> 
          <div class="container section-lg text-center">
            <h4 class="heading-decorated">WHAT PEOPLE SAY</h4>
            <!-- Owl Carousel-->
            <div class="owl-carousel" data-items="1" data-stage-padding="15" data-loop="true" data-margin="30" data-dots="true" data-nav="false" data-autoplay="true">
              <div class="item">
                <!-- Quote default-->
                <div class="quote-default">
                  <div class="quote-default__image"><img src="/projects/public/frontend/images/user5.jpg" alt="" width="120" height="120"/>
                  </div>
                  <div class="quote-default__text">
                    <p class="q">You are without a doubt the most responsive, fast, cost-effective and all round delightful business partner to deal with.
                    </p>
                  </div>
                  <p class="quote-default__cite">Stefan Campo</p>
                </div>
              </div>
              <div class="item">
                <!-- Quote default-->
                <div class="quote-default">
                  <div class="quote-default__image"><img src="/projects/public/frontend/images/user5.jpg" alt="" width="120" height="120"/>
                  </div>
                  <div class="quote-default__text">
                    <p class="q">I cannot recommend {{get_settings("company_name")}} Digital highly enough. They are without doubt the most professional, helpful website designers I have come across in my 25 years of running a business.Their response time is instantaneous, their knowledge extensive and their costs more than reasonable.</p>
                  </div>
                  <p class="quote-default__cite">Boris Grigoryan</p>
                </div>
              </div>
              <div class="item">
                <!-- Quote default-->
                <div class="quote-default">
                  <div class="quote-default__image"><img src="/projects/public/frontend/images/user5.jpg" alt="" width="120" height="120"/>
                  </div>
                  <div class="quote-default__text">
                    <p class="q">We've really enjoyed working with Michael and it has been a journey together to achieve the outcome we wanted on three different projects - a seamless online experience and an engaging visual presence.</p>
                  </div>
                  <p class="quote-default__cite">Trung Nguyen</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @endsection

      @section('js')  
      <script type="text/javascript">
      $(document).ready(function (){
      jQuery('.home').addClass('active');
      });
      </script>
     @endsection 
