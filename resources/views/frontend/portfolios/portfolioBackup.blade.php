@extends('../../../frontend.layouts.header')
@section('title','IG TECH SERVICES | Portfolio')
@section('content')
  <!-- Parallax header-->
      <section class="section parallax-container context-dark" data-parallax-img="/projects/public/frontend/images/portfolio_banner.jpg">
        <div class="parallax-content parallax-header">
          <div class="parallax-header__inner context-dark">
            <div class="parallax-header__content">
              <div class="container">
                <div class="row justify-content-sm-center">
                  <div class="col-md-10 col-xl-8">
                    <h2 class="heading-decorated">Our Portfolio</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- portfolio -->
      <section class="section-md bg-default text-center">
        <div class="bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;y&quot;: 50,  &quot;smoothness&quot;: 30}"><img src="/projects/public/frontend/images/bg-decor-6.png" alt=""/>
        </div>
        <div class="container">
          <h4 class="heading-decorated">Portfolio</h4>
          <div class="isotope-wrap row row-70">
            <div class="col-sm-12">
              <ul class="list-nav isotope-filters isotope-filters-horizontal">
                <li><a class="active" data-isotope-filter="*" data-isotope-group="gallery" href="#">All</a></li>
                <li><a data-isotope-filter="Category 1" data-isotope-group="gallery" href="#">Web Development</a></li>
                <li><a data-isotope-filter="Category 2" data-isotope-group="gallery" href="#">Ecommmerce Development</a></li>
                <li><a data-isotope-filter="Category 3" data-isotope-group="gallery" href="#">Mobile Apps Development</a></li>
                <li><a data-isotope-filter="Category 4" data-isotope-group="gallery" href="#">ERP Systems</a></li>
              </ul>
               
              <div class="isotope row" data-isotope-layout="fitRows" data-isotope-group="gallery">
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category"><a class="img-thumbnail-variant-3" href="/projects/public/frontend/images/portfolio1_full.png" data-lightgallery="item"><img src="/projects/public/frontend/images/portfolio1.jpg" alt="" width="418" height="315"/><span class="label-custom label-white">Link</span>
                          <div class="caption"><span class="icon hover-top-element linear-icon-folder-picture"></span>
                            
                          </div></a>
                </div>
              

                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 1"><a class="img-thumbnail-variant-3" href="/projects/public/frontend/images/portfolio2_full.png" data-lightgallery="item">
                          <figure><img src="/projects/public/frontend/images/portfolio2.jpg" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            
              
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category"><a class="img-thumbnail-variant-3" href="/projects/public/frontend/images/portfolio3_full.png" data-lightgallery="item">
                          <figure><img src="/projects/public/frontend/images/portfolio3.jpg" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 1"><a class="img-thumbnail-variant-3" href="/projects/public/frontend/images/portfolio4_full.png" data-lightgallery="item">
                          <figure><img src="/projects/public/frontend/images/portfolio4.jpg" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 1"><a class="img-thumbnail-variant-3" href="/projects/public/frontend/images/portfolio5_full.png" data-lightgallery="item"><img src="/projects/public/frontend/images/portfolio5.jpg" alt="" width="418" height="315"/><span class="label-custom label-white">Link</span>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                           
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category"><a class="img-thumbnail-variant-3" href="/projects/public/frontend/images/portfolio6_full.png" data-lightgallery="item">
                          <figure><img src="/projects/public/frontend/images/portfolio6.jpg" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 2"><a class="img-thumbnail-variant-3" href="/projects/public/frontend/images/bazar_full.png" data-lightgallery="item">
                          <figure><img src="/projects/public/frontend/images/bazar.jpg" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 2"><a class="img-thumbnail-variant-3" href="/projects/public/frontend/images/tala_full.png" data-lightgallery="item">
                          <figure><img src="/projects/public/frontend/images/tala.jpg" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            
                          </div></a>
                </div>
                 <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 4"><a class="img-thumbnail-variant-3" href="/projects/public/frontend/images/mobile_full.png" data-lightgallery="item"><img src="/projects/public/frontend/images/mobile.jpg" alt="" width="418" height="315"/><span class="label-custom label-white">Link</span>
                          <div class="caption"><span class="icon hover-top-element linear-icon-folder-picture"></span>
                           
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 4"><a class="img-thumbnail-variant-3" href="/projects/public/frontend/images/mobile_erp.jpg" data-lightgallery="item"><img src="/projects/public/frontend/images/mobile_erp.jpg" alt="" width="418" height="315"/><span class="label-custom label-white">Link</span>
                          <div class="caption"><span class="icon hover-top-element linear-icon-folder-picture"></span>
                            
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 4"><a class="img-thumbnail-variant-3" href="/projects/public/frontend/images/strikemt_full.png" data-lightgallery="item"><img src="/projects/public/frontend/images/strikemt.jpg" alt="" width="418" height="315"/>
                          <div class="caption"><span class="icon hover-top-element linear-icon-folder-picture"></span>
                           
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 1"><a class="img-thumbnail-variant-3" href="/projects/public/frontend/images/valley_full.png" data-lightgallery="item"><img src="/projects/public/frontend/images/valley.jpg" alt="" width="418" height="315"/>
                          <div class="caption"><span class="icon hover-top-element linear-icon-folder-picture"></span>
                            
                          </div></a>
                </div>
                 <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 1"><a class="img-thumbnail-variant-3" href="/projects/public/frontend/images/siipak_full.png" data-lightgallery="item"><img src="/projects/public/frontend/images/siipak.jpg" alt="" width="418" height="315"/>
                          <div class="caption"><span class="icon hover-top-element linear-icon-folder-picture"></span>
                            
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 1"><a class="img-thumbnail-variant-3" href="/projects/public/frontend/images/pl_full.png" data-lightgallery="item"><img src="/projects/public/frontend/images/pl.jpg" alt="" width="418" height="315"/><span class="label-custom label-white">Link</span>
                          <div class="caption"><span class="icon hover-top-element linear-icon-folder-picture"></span>
                            
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 3"><a class="img-thumbnail-variant-3" href="/projects/public/frontend/images/iphone_full.png" data-lightgallery="item"><img src="/projects/public/frontend/images/iphone.jpg" alt="" width="418" height="315"/>
                          <div class="caption"><span class="icon hover-top-element linear-icon-folder-picture"></span>
                            
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 3"><a class="img-thumbnail-variant-3" href="/projects/public/frontend/images/play_store_full.png" data-lightgallery="item"><img src="/projects/public/frontend/images/play_store.jpg" alt="" width="418" height="315"/>
                          <div class="caption"><span class="icon hover-top-element linear-icon-folder-picture"></span>
                            
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 3"><a class="img-thumbnail-variant-3" href="/projects/public/frontend/images/app_mobile_full.png" data-lightgallery="item"><img src="/projects/public/frontend/images/app_mobile.jpg" alt="" width="418" height="315"/>
                          <div class="caption"><span class="icon hover-top-element linear-icon-folder-picture"></span>
                        
                          </div></a>
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
      jQuery('.portfolio').addClass('active');
      });
      </script>
     @endsection 
