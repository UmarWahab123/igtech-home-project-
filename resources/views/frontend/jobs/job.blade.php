@extends('../../../frontend.layouts.header')
@php
$page['title'] = get_settings("company_name");
@endphp
@section('title',$page['title'] ." | "."Jobs")
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
 @if(count($data['results'])>0)
@foreach($data['results'] as $row)
<div class="card bg-light p-4 ml-5 mr-5">
  <div class="row">
    <div class="col-md-1">
      <span class="date">{{date('N', strtotime($row->date)) }}</span><br>
      <span class="month">{{date('M', strtotime($row->date)) }}</span>
    </div>
  </div>
  <div class="row titlehead">
    <div class="col-md-11">
      <h5>{{$row->title}}</h5>
    </div>
  </div>
  <div class="row shortdesc">
    <div class="col-md-12">
      <p class="qodef-post-excerpt">{{$row->short_description}}<</p>   
     <a href="jobdetails/{{$row->id}}" target="_self"  class="btn btn-info styinfo"> <span class="qodef-btn-text">Read More</span> <span class="qodef-btn-text-icon"></span></a>       
    </div>
  </div>
</div>
@endforeach
@else
<h1 class="text-center">No Data Available</h1>
 @endif
</section>
@endsection
@section('js')  
<script type="text/javascript">
   $(document).ready(function (){
   jQuery('.job').addClass('active');
   });
</script>
@endsection