 @extends('../../../frontend.layouts.header')
 @php
$page['title'] = get_settings("company_name");
@endphp
 @section('title',$page['title'] ." | "."Contact Us")
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
      <section class="section-md bg-default decor-text" data-content="Contact">
        <div class="container">
          <div class="row row-50">
            <div class="col-md-5 col-lg-4">
              <h4 class="heading-decorated">Contact Details</h4>
              <ul class="list-sm contact-info">
                <li>
                  <dl class="list-terms-inline">
                    <dt>Address</dt>
                    <dd>{{get_settings("address")}}</dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-inline">
                    <dt>Phones</dt>
                    <dd>
                      <ul class="list-semicolon">
                        <li><a href="tel:#">{{get_settings("phone")}}</a></li>
                      </ul>
                    </dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-inline">
                    <dt>We are open</dt>
                    <dd>Mn-Fr: 9 am-6 pm</dd>
                  </dl>
                </li>
              </ul>
            </div>
            <div class="col-md-7 col-lg-8">
              <h4 class="heading-decorated">Get in Touch</h4>


              <!-- RD Mailform-->
              @if(count($errors)>0)
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <ul>
                  @foreach($errors->all() as $error)
                     <li>{{$error}}</li>
                  @endforeach
                </ul>

              </div>

              @endif
             @if(Session::has('message'))
                  <?php $message = Session::get('message');
                  Session::forget('message');
                 $msg= $message['text'];
                  ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                    </button>
                     <p class="sdhgsdh">{{ $msg }}</p>                           
                  </div>
                  @endif
             <form method="post" action="{{url('/contactus')}}">
               {{ csrf_field() }}
                <div class="form-wrap form-wrap_icon linear-icon-man">
                  <input class="form-input" id="contact-name" type="name" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-name">Your name</label>
                </div>
                <div class="form-wrap form-wrap_icon linear-icon-envelope">
                  <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email">Your e-mail</label>
                </div>
                <div class="form-wrap form-wrap_icon linear-icon-feather">
                  <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                  <label class="form-label" for="contact-message">Your message</label>
                </div>
                <button class="button button-primary" type="submit">Send</button>
              </form>
            </div>
          </div>
        </div>
      </section>
      @endsection
      @section('js')  
      <script type="text/javascript">
      $(document).ready(function (){ 
      jQuery('.contact').addClass('active');
      });
      </script>
     @endsection 

