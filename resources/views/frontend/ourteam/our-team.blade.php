@extends('../../../frontend.layouts.header')
@php
$page['title'] = get_settings("company_name");
@endphp
@section('title',$page['title'] ." | "."Our Team")
@section('content')
<!-- Parallax header-->
      <section>
        <section class="section parallax-container context-dark" data-parallax-img="{{$data['banner']->banner_image}}">
          <div class="parallax-content parallax-header">
            <div class="parallax-header__inner context-dark">
              <div class="parallax-header__content">
                <div class="container">
                  <div class="row justify-content-sm-center">
                    <div class="col-xl-10">
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

      <!-- Meet Our Team-->
      <section class="section-lg bg-default text-center decor-text" data-content="Team">
        <div class="bg-decor d-flex align-items-center justify-content-end" data-parallax-scroll="{&quot;y&quot;: 50,  &quot;smoothness&quot;: 30}"><img src="{{asset('/frontend/images/bg-decor-6.png')}}" alt=""/>
        </div>
        <div class="container">
          <div class="row justify-content-xl-center row-50">
            <div class="col-xl-9">
              <h4 class="heading-decorated">Represent Your Staff</h4>
              <p>We are a team of professional, energetic individuals with talented engineers and experienced managers available to guide our clients through the flawless and timely execution of any web project. Since day one, we have been delivering creative and unique work to our clients worldwide.</p>
            </div>
          </div>
          <div class="row row-50">
           @foreach($data['results'] as $key=>$value) 
            <div class="col-md-6 col-lg-3">
              <!-- Thumb corporate-->
             <div class="thumb thumb-corporate firstdata">
                <div class="thumb-corporate__main">
                  <img src="{{url('/')}}/{{$value->profile}}" alt width="265" height="199"/>
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
        </div>
      </section>
@endsection
    @section('js')  
      <script type="text/javascript">
      $(document).ready(function (){
      jQuery('.our_team').addClass('active');
      });
      </script>
     @endsection 
