 @extends('../../../frontend.layouts.header')
 @php
$page['title'] = get_settings("company_name");
@endphp
@section('title',$page['title'] ." | "."About Us")
@section('content')
 
  <section class="section parallax-container context-dark" data-parallax-img="{{$data['banner']->banner_image}}">
        <div class="parallax-content parallax-header">
          <div class="parallax-header__inner context-dark text-center">
            <div class="parallax-header__content">
              <div class="container">
                <div class="row justify-content-sm-center">
                  <div class="col-md-10 col-xl-8">
                    <h2 class="heading-decorated">{{$data['banner']->main_heading}}</h2>
                    <p class="heading-6">{{$data['banner']->sub_heading}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>        
    </section>

      <!--features-->
      <!-- Our Features-->
      <section class="section-md bg-gray-lighter text-center decor-text" data-content="Services">
        <div class="container">
          <div class="row justify-content-lg-center"> 
            <div class="col-lg-10 col-xl-8">
              <h4 class="heading-decorated">Our Services</h4>
              <p>Our company offers flexible & reliable website project as well as extensive customer support so you don’t have to worry about hiring an expensive web design company. We build all types of web templates and all of them can be used as a basis for your website.</p>
            </div>
          </div>
          <div class="row row-50">
            <div class="col-md-6 col-lg-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-circle blurb-circle_centered">
                <div class="blurb-circle__icon"><span class="icon linear-icon-feather"></span></div>
                <p class="blurb__title">Software Development </p>
                <p>Create complex enterprise software, ensure reliable software integration, modernise your legacy system. </p>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-circle blurb-circle_centered">
                <div class="blurb-circle__icon"><span class="icon linear-icon-menu3"></span></div>
                <p class="blurb__title">Mobile App Development </p>
                <p>Create an impactful mobile app that fits your brand and industry within a shorter time frame. </p>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-circle blurb-circle_centered">
                <div class="blurb-circle__icon"><span class="icon linear-icon-bag2"></span></div>
                <p class="blurb__title">IT Consulting </p>
                <p>Trust our top minds to eliminate workflow pain points, implement new tech, and consolidate app portfolios. </p>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-circle blurb-circle_centered">
                <div class="blurb-circle__icon"><span class="icon linear-icon-rocket"></span></div>
                <p class="blurb__title">Development Team </p>
                <p>Hire a loyal software development team with niche skills and deep expertise. </p>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-circle blurb-circle_centered">
                <div class="blurb-circle__icon"><span class="icon linear-icon-equalizer"></span></div>
                <p class="blurb__title">UX / UI Design </p>
                <p>Build the product you need on time with an experienced team that uses a clear and effective design process. </p>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-circle blurb-circle_centered">
                <div class="blurb-circle__icon"><span class="icon linear-icon-file-search"></span></div>
                <p class="blurb__title">QA & Testing </p>
                <p>Turn to our experts to perform comprehensive, multi-stage testing and auditing of your software. </p>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- About us-->
      <section class="object-wrap decor-text" data-content="About">
        <div class="bg-decor d-flex align-items-center justify-content-center" data-parallax-scroll="{&quot;y&quot;: 70, &quot;x&quot;: 50, &quot;smoothness&quot;: 30}"><img src="{{asset('/frontend/images/bg-decor-10.png')}}" alt=""/>
        </div>
        <div class="section-lg">
          <div class="container">
            <div class="row">
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
                          <p class="blurb__title heading-6"><a href="single-service.html">Award-winning designs</a></p>
                          <p>We have received numerous awards for our designs, concepts, and ideas.</p>
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
                          <p class="blurb__title heading-6"><a href="single-service.html">Expert team</a></p>
                          <p>We are a team of dedicated web design and development professionals.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="row justify-content-md-center">
                  <div class="col-md-12">
                          <!-- Linear progress bar-->
                          <div class="progress-linear progress-linear-modern">
                            <div class="progress-header">
                              <p>Laravel</p><span class="progress-value">90</span>
                            </div>
                            <div class="progress-bar-linear-wrap">
                              <div class="progress-bar-linear"></div>
                            </div>
                          </div>
                          <!-- Linear progress bar-->
                          <div class="progress-linear progress-linear-modern">
                            <div class="progress-header">
                              <p>Codeigniter</p><span class="progress-value">86</span>
                            </div>
                            <div class="progress-bar-linear-wrap">
                              <div class="progress-bar-linear"></div>
                            </div>
                          </div>
                          <!-- Linear progress bar-->
                          <div class="progress-linear progress-linear-modern">
                            <div class="progress-header">
                              <p>PHP</p><span class="progress-value">86</span>
                            </div>
                            <div class="progress-bar-linear-wrap">
                              <div class="progress-bar-linear"></div>
                            </div>
                          </div>
                           <!-- Linear progress bar-->
                          <div class="progress-linear progress-linear-modern">
                            <div class="progress-header">
                              <p>Wordpress</p><span class="progress-value">86</span>
                            </div>
                            <div class="progress-bar-linear-wrap">
                              <div class="progress-bar-linear"></div>
                            </div>
                          </div>
                          <!-- Linear progress bar-->
                          <div class="progress-linear progress-linear-modern">
                            <div class="progress-header">
                              <p>Ecommerce</p><span class="progress-value">86</span>
                            </div>
                            <div class="progress-bar-linear-wrap">
                              <div class="progress-bar-linear"></div>
                            </div>
                          </div>
                           <!-- Linear progress bar-->
                          <div class="progress-linear progress-linear-modern">
                            <div class="progress-header">
                              <p>Vue js</p><span class="progress-value">85</span>
                            </div>
                            <div class="progress-bar-linear-wrap">
                              <div class="progress-bar-linear"></div>
                            </div>
                          </div>
                           <!-- Linear progress bar-->
                          <div class="progress-linear progress-linear-modern">
                            <div class="progress-header">
                              <p>React js</p><span class="progress-value">87</span>
                            </div>
                            <div class="progress-bar-linear-wrap">
                              <div class="progress-bar-linear"></div>
                            </div>
                          </div>
                           <!-- Linear progress bar-->
                          <div class="progress-linear progress-linear-modern">
                            <div class="progress-header">
                              <p>Blockchain</p><span class="progress-value">80</span>
                            </div>
                            <div class="progress-bar-linear-wrap">
                              <div class="progress-bar-linear"></div>
                            </div>
                          </div>
                          
                          

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="object-wrap__body object-wrap__body-sizing-1 object-wrap__body-md-right bg-image" style="background-image:  url({{asset('/frontend/images/about.jpg')}})"></div>
      </section>
      <!-- services-->
      <section class="section-md bg-default"> 
        <div class="bg-decor d-flex align-items-center justify-content-end" data-parallax-scroll="{&quot;x&quot;: -100, &quot;y&quot;: -30, &quot;smoothness&quot;: 30}"><img src="{{asset('/frontend/images/bg-decor-9.png')}}" alt=""/>
        </div>
        <div class="container">
          <div class="row justify-content-md-center justify-content-lg-between row-50 align-items-center">
            <div class="col-md-8 col-lg-6">
              <div id="accordion" role="tablist">
                      <!-- Bootstrap card-->
                      <div class="card card-custom">
                        <div class="card-custom-heading" id="accordionHeading1" role="tab">
                          <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse1" aria-controls="accordionCollapse1">
                          Analyse</a>
                          </h5>
                        </div>
                        <div class="card-custom-collapse collapse" id="accordionCollapse1" role="tabpanel" aria-labelledby="accordionHeading1">
                          <div class="card-custom-body">
                            <p>
                            Our {{get_settings("company_name")}} team performs an end-to-end analysis of your IT processes and software infrastructure to find every stumbling block that prevents the successаful execution of your software strategy.</p>
                          </div>
                        </div>
                      </div>
                      <!-- Bootstrap card-->
                      <div class="card card-custom">
                        <div class="card-custom-heading" id="accordionHeading2" role="tab">
                          <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse2" aria-controls="accordionCollapse2">
                          Choose a solution</a>
                          </h5>
                        </div>
                        <div class="card-custom-collapse collapse" id="accordionCollapse2" role="tabpanel" aria-labelledby="accordionHeading2">
                          <div class="card-custom-body">
                            <p>
                            We present possible {{get_settings("company_name")}} solutions to your IT issues, giving you the prospect on the team size, budget, and timeframe before the implementation of the solution.</p>
                          </div>
                        </div>
                      </div>
                      <!-- Bootstrap card-->
                      <div class="card card-custom">
                        <div class="card-custom-heading" id="accordionHeading3" role="tab">
                          <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse3" aria-controls="accordionCollapse3">
                            Execute</a>
                          </h5>
                        </div>
                        <div class="card-custom-collapse collapse" id="accordionCollapse3" role="tabpanel" aria-labelledby="accordionHeading3">
                          <div class="card-custom-body">
                            <p>
                            Our {{get_settings("company_name")}} engineers can tackle any problem related to your software infrastructure, set up a continuous delivery in line with your business objectives and corporate culture, organize a clear release management process, and more.</p>
                          </div>
                        </div>
                      </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-5">
              <figure class="button-shadow"><img src="{{asset('/frontend/images/home1.jpg')}}" alt="" width="555" height="800"/>
              </figure>
            </div>
          </div>
        </div>
      </section>

      <!-- Counters-->
     <section class="section parallax-container context-dark" data-parallax-img="{{asset('/frontend/images/parallax-1.jpg')}}">
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

      <!-- Testimonials-->
      <section class="section-md bg-default text-center decor-text" data-content="Testimonials">
        <div class="container">
          <h4 class="heading-decorated">WHAT PEOPLE SAY</h4>


          <div class="row row-50">
          @foreach($data['testimonials'] as $key=>$value)

            <div class="col-md-6">
              <!-- Quote default-->
              <div class="quote-default quote-default_left">
                <div class="quote-default__image"><img src="{{$value->image}}" alt="" width="120" height="120"/>
                </div>
                <svg class="quote-default__mark" version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40.234px" height="33.484px" viewbox="0 0 30.234 23.484" xml:space="preserve">
                  <g>
                    <path d="M12.129,0v1.723c-2.438,0.891-4.348,2.291-5.73,4.201c-1.383,1.911-2.074,3.897-2.074,5.959              c0,0.445,0.07,0.773,0.211,0.984c0.093,0.141,0.199,0.211,0.316,0.211c0.117,0,0.293-0.082,0.527-0.246              c0.75-0.539,1.699-0.809,2.848-0.809c1.336,0,2.519,0.545,3.551,1.635c1.031,1.09,1.547,2.385,1.547,3.885              c0,1.57-0.592,2.953-1.775,4.148c-1.184,1.195-2.619,1.793-4.307,1.793c-1.969,0-3.668-0.809-5.098-2.426              C0.715,19.441,0,17.274,0,14.555c0-3.164,0.972-6,2.918-8.508C4.863,3.539,7.933,1.524,12.129,0z M29.039,0v1.723              c-2.438,0.891-4.348,2.291-5.73,4.201c-1.383,1.911-2.074,3.897-2.074,5.959c0,0.445,0.07,0.773,0.211,0.984              c0.094,0.141,0.199,0.211,0.316,0.211s0.293-0.082,0.527-0.246c0.75-0.539,1.699-0.809,2.848-0.809c1.336,0,2.52,0.545,3.551,1.635              s1.547,2.385,1.547,3.885c0,1.57-0.592,2.953-1.775,4.148s-2.619,1.793-4.307,1.793c-1.969,0-3.668-0.809-5.098-2.426              s-2.145-3.785-2.145-6.504c0-3.164,0.973-6,2.918-8.508C21.773,3.539,24.844,1.524,29.039,0z"></path>
                  </g>
                </svg>
                <div class="quote-default__text">
                  <p class="q"> <?= (isset($value->content) ? $value->content : '') ?></p>
                </div>
                <p class="quote-default__cite">{{$value->name}}</p>
              </div>
            </div>
          @endforeach
            
          </div>


        </div>
      </section>
      @endsection
         
      @section('js')  
      <script type="text/javascript">
      $(document).ready(function (){
      jQuery('.about').addClass('active');
      });
      </script>
     @endsection 
   

         
