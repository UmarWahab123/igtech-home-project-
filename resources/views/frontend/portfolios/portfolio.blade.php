<section class="section-md bg-default text-center">
   <div class="bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;y&quot;: 50,  &quot;smoothness&quot;: 30}"><img src="{{asset('/frontend/images/bg-decor-6.png ')}}" alt=""/>
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