@extends('../../../frontend.layouts.header')
@php
$page['title'] = get_settings("company_name");
@endphp
@section('title',$page['title'] ." | "."Portfolio")
@section('content')
<!-- Parallax header-->
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
<!-- portfolio -->
@include('frontend.portfolios.portfolio')

@endsection
@section('js')  
<script type="text/javascript">
   $(document).ready(function (){
   jQuery('.portfolio').addClass('active');
   });
</script>
@endsection