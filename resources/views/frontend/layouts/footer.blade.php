  <!-- Page Footer -->
      <section class="pre-footer-corporate bg-image-7 bg-overlay-darkest">
        <div class="container">
          <div class="row justify-content-sm-center justify-content-lg-start row-30 row-md-60">
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
              <h6>About</h6>
              <p>We are a team of professional, energetic individuals with talented engineers and experienced managers available to guide our clients through the flawless and timely execution of any web project. Since day one, we have been delivering creative and unique work to our clients worldwide.</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
              <h6>Navigation</h6>
              <ul class="list-xxs">
                <li><a href="{{ url('/')}}">Home</a></li>
                  <li><a href="{{ url('/about-us')}}">About</a>
                  </li>
                  <li><a href="{{ url('/services')}}">Services</a>
                  </li>
                  <li><a href="{{ url('/portfolio')}}">Portfolio</a>
                  </li>
                  <li><a href="{{ url('/our-team')}}">Our Team</a></li>
                  </li>
                   <li><a href="{{ url('/job')}}">Jobs</a></li>
                  <li><a href="{{ url('/contact-us')}}">Contacts</a>
                  </li>
              </ul>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
              <h6>Contacts</h6>
              <ul class="list-xs">
                <li>
                  <dl class="list-terms-minimal">
                    <dt>Address</dt>
                    <dd>{{get_settings("address")}}
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-minimal">
                    <dt>Phones </dt>
                    <dd>
                      <ul class="list-semicolon">
                        <li><a href="tel:#">{{get_settings("phone")}}</a></li>
                      </ul>
                    </dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-minimal">
                    <dt>E-mail</dt>
                    <dd><a href="mailto:#">{{get_settings("email")}}</a></dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-minimal">
                    <dt>We are open</dt>
                    <dd>Mn-Fr: 9 am-6 pm</dd>
                  </dl>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <footer class="footer-corporate bg-gray-darkest">
        <div class="container">
          <div class="footer-corporate__inner">
            <p class="rights"><span>{{get_settings("company_name")}}</span><span>&nbsp;</span><span class="copyright-year"></span>. All Rights Reserved.<a href="privacy-policy.html">Terms of Use and Privacy Policy</a></p>
            <ul class="list-inline-xxs" style="display: none">
              <li><a class="icon icon-xxs icon-primary fa fa-facebook" href="#"></a></li>
              <li><a class="icon icon-xxs icon-primary fa fa-twitter" href="#"></a></li>
              <li><a class="icon icon-xxs icon-primary fa fa-google-plus" href="#"></a></li>
              <li><a class="icon icon-xxs icon-primary fa fa-vimeo" href="#"></a></li>
              <li><a class="icon icon-xxs icon-primary fa fa-youtube" href="#"></a></li>
              <li><a class="icon icon-xxs icon-primary fa fa-pinterest" href="#"></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
   
    