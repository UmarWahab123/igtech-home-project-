 <header class="page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-stick-up-clone="false" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-md-stick-up-offset="115px" data-lg-stick-up-offset="35px">
            <!-- RD Navbar Top Panel-->
            <div class="rd-navbar-top-panel rd-navbar-top-panel-dark">
              <div class="rd-navbar-top-panel__main">
                <div class="rd-navbar-top-panel__toggle rd-navbar-fixed__element-1 rd-navbar-static--hidden" data-rd-navbar-toggle=".rd-navbar-top-panel__main"><span></span></div>
                <div class="rd-navbar-top-panel__content"> 
                  <div class="rd-navbar-top-panel__left">
                    <ul class="rd-navbar-items-list">
                      <li> 
                        <div class="unit flex-row align-items-center unit-spacing-xs">
                          <div class="unit__left"><span class="icon icon-sm icon-primary linear-icon-map-marker"></span></div>
                          <div class="unit__body">
                            <p><a href="#">Address: {{get_settings("address")}}</a></p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="unit flex-row align-items-center unit-spacing-xs">
                          <div class="unit__left"><span class="icon icon-sm icon-primary linear-icon-telephone"></span></div>
                          <div class="unit__body">
                            <ul class="list-semicolon">
                          <li><a href="tel:#">{{get_settings("phone")}}</a></li>

                            </ul>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!--<div class="rd-navbar-top-panel__right">-->
                    <!--<ul class="list-inline-xxs">-->
                      <!--<li><a class="icon icon-xxs icon-gray-darker fa fa-facebook" href="#"></a></li>-->
                      <!--<li><a class="icon icon-xxs icon-gray-darker fa fa-twitter" href="#"></a></li>-->
                      <!--<li><a class="icon icon-xxs icon-gray-darker fa fa-google-plus" href="#"></a></li>-->
                      <!--<li><a class="icon icon-xxs icon-gray-darker fa fa-vimeo" href="#"></a></li>-->
                      <!--<li><a class="icon icon-xxs icon-gray-darker fa fa-youtube" href="#"></a></li>-->
                      <!--<li><a class="icon icon-xxs icon-gray-darker fa fa-pinterest-p" href="#"></a></li>-->
                    <!--</ul>-->
                  <!--</div>-->
                </div>
              </div>
            </div>
            <div class="rd-navbar-inner rd-navbar-search-wrap">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel rd-navbar-search-lg_collapsable">
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand-name" href="{{url('/')}}"><img src="{{url('/')}}/{{get_settings('logo')}}" alt="" width="108" height="40" srcset="{{url('/')}}/{{get_settings('logo')}}"/></a></div>
              </div>
              <!-- RD Navbar Nav-->
              <div class="rd-navbar-nav-wrap rd-navbar-search_not-collapsable">
                <!-- RD Navbar Nav-->

                <!-- RD Search-->
                <div class="rd-navbar-search_collapsable">
                  <ul class="rd-navbar-nav">
                    <li class="home"><a href="{{ url('/')}}">Home</a></li>
                    <li class="about"><a href="{{ url('/about-us')}}">About</a>
                    </li>
                    <li class="service"><a href="{{ url('/services')}}">Services</a>
                    </li>
                    <li class="portfolio"><a href="{{ url('/portfolio')}}">Portfolio</a>
                    </li>
                   <li class="our_team"><a href="{{ url('/our-team')}}">Our Team</a></li>
                   <li class="job"><a href="{{ url('/job')}}">Jobs</a></li>
                    <li class="contact"><a href="{{ url('/contact-us')}}">Contacts</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>