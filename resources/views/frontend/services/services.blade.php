@extends('../../../frontend.layouts.header')
@php
$page['title'] = get_settings("company_name");
@endphp
@section('title',$page['title'] ." | "."Services")
@section('content')
  <!-- Parallax header-->
      <section>
        <section class="section parallax-container context-dark" data-parallax-img="{{$data['banner']->banner_image}}">
          <div class="parallax-content parallax-header">
            <div class="parallax-header__inner context-dark">
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

      </section>
      <!-- Our Services-->
      <section class="section-md bg-default text-center decor-text" data-content="Services">
        <div class="container">
          <h4 class="heading-decorated">Our Services</h4>
          <div class="row row-50 justify-content-md-center justify-content-lg-start">
            <div class="col-md-6 col-xl-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-pencil-ruler"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6"><a href="single-service.html">Software Development</a></p>
                    <p>Create complex enterprise software, ensure reliable software integration, modernise your legacy system.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-users"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6"><a href="single-service.html">Mobile App Development</a></p>
                    <p>Create an impactful mobile app that fits your brand and industry within a shorter time frame.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-wall"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6"><a href="single-service.html">IT Consulting</a></p>
                    <p>Trust our top minds to eliminate workflow pain points, implement new tech, and consolidate app portfolios.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-apartment"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6"><a href="single-service.html"> Development Team</a></p>
                    <p>Hire a loyal software development team with niche skills and deep expertise.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-home4"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6"><a href="single-service.html">UX / UI Design</a></p>
                    <p>Build the product you need on time with an experienced team that uses a clear and effective design process.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <!-- Blurb circle -->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-pencil-ruler2"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6"><a href="single-service.html">QA & Testing</a></p>
                    <p>Turn to our experts to perform comprehensive, multi-stage testing and auditing of your software.</p>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <section class="rd-parallax text-center">
   <section class="section parallax-container context-dark" data-parallax-img="{{asset('/frontend/images/parallax-3.jpg')}}">
          <div class="parallax-content">
            <div class="section-lg text-center">
              <div class="container">
                <div class="row justify-content-sm-center row-60">
                  <div class="col-md-4 col-xl-3">
                    <!-- Circle Progress Bar-->
                    <div class="progress-bar-circle" data-value="0.90" data-gradient="#80deea, #1F2845" data-empty-fill="#fff" data-size="141" data-thickness="5"><span></span></div>
                    <div class="progress-bar-circle-title">Web</div>
                  </div>
                  <div class="col-md-4 col-xl-3">
                    <!-- Circle Progress Bar-->
                    <div class="progress-bar-circle" data-value="0.70" data-gradient="#80deea, #1F2845" data-empty-fill="#fff" data-size="141" data-thickness="5"><span></span></div>
                    <div class="progress-bar-circle-title">Mobile</div>
                  </div>
                  <div class="col-md-4 col-xl-3">
                    <!-- Circle Progress Bar-->
                    <div class="progress-bar-circle" data-value="0.80" data-gradient="#80deea, #1F2845" data-empty-fill="#fff" data-size="141" data-thickness="5"><span></span></div>
                    <div class="progress-bar-circle-title">Ecommerce</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      </section>
     @include('frontend.portfolios.portfolio')
      <!-- Call to Action-->
      <section class="section-sm bg-accent text-center">
        <div class="container">
          <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
            <div class="col-xl-9 text-xl-left">
              <h4 class="heading-decorated">If you can envision it, then we can design it. <br>Tell us more about your project!</h4>
            </div>
            <div class="col-xl-2 text-xl-right"><a class="button button-primary" href="{{ url('/contact-us')}}">Contact Us</a></div>
          </div>
        </div>
      </section>

      <section class="section-md bg-default"> 
        <div class="bg-decor d-flex align-items-center justify-content-end" data-parallax-scroll="{&quot;x&quot;: -100, &quot;y&quot;: -30, &quot;smoothness&quot;: 30}"><img src=" {{asset('/frontend/images/bg-decor-9.png')}}" alt=""/>
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
      @endsection
      @section('js')  
      <script type="text/javascript">
      $(document).ready(function (){
      jQuery('.service').addClass('active');
      });
      </script>
     @endsection 
