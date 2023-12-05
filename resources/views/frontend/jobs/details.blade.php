@extends('../../../frontend.layouts.header')

@php

$page['title'] = get_settings("company_name");

@endphp

@section('title',$page['title'] ." | "."Jobs Details")

@section('content')

<!-- Parallax header-->

<section>

   <section class="section parallax-container context-dark" data-parallax-img="{{asset('/frontend/images/parallax-1.jpg')}}">

      <div class="parallax-content parallax-header">

         <div class="parallax-header__inner context-dark">

            <div class="parallax-header__content">

               <div class="container">

                  <div class="row justify-content-sm-center">

                     <div class="col-md-10 col-xl-8">

                        <h2 class="heading-decorated">Jobs Details</h2>

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

  <div class="row">

    <div class="col-md-1">

      <span class="date">{{date('N', strtotime($data['results']->date)) }}</span><br>

      <span class="month">{{date('M', strtotime($data['results']->date)) }}</span>

    </div>

  </div>

  <div class="row titlehead">

    <div class="col-md-11">

      <h5>{{(isset($data['results']->title) ? $data['results']->title : '')}}</h5>

    </div>

  </div>

  <div class="row">

   <div class="col-md-12">

      <?= (isset($data['results']->long_description) ? $data['results']->long_description : '') ?>

   </div>

    </div>

  </div>

</section>

@endsection

@section('js')  

<script type="text/javascript">

   $(document).ready(function (){

   jQuery('.job').addClass('active');

   });

</script>

@endsection