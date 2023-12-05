@extends('../../layout.header')

@section('title',$data['page_title'])

@section('content')

{{ csrf_field() }}

<style>

   .first{

   margin-left: 20px;

   margin-top:10px;

   }

    #one{

   text-transform: uppercase;

   font-weight: bold;

}



</style>

<div class="m-subheader ">

   <div class="d-flex align-items-center">

      <div class="mr-auto">

      <h1 id="one">{{$data['results']->name}}&nbsp{{$data['page_title']}}</h1>

      </div>

   </div>

</div>

<div class="container first">

   <ul class="nav nav-pills">

      <li class="active"><a data-toggle="pill" href="#home">Basic information</a></li>

      <li><a data-toggle="pill" href="#menu1">Payments</a></li>

      <li><a data-toggle="pill" href="#menu2"> Project documents</a></li>

   </ul>

   <div class="tab-content">

      <div id="home" class="tab-pane fade active in show">

         <h4>Basic information</h4>

         <br>

         <div class="row">

            <div class="col-md-4">

               <h6>Name </h6>

                <input type="hidden" id="project_id" name="project_id" value="{{$data['results']->id}}">

               {{$data['results']->name}}

            </div>

            <div class="col-md-4">

               <h6>Start date  </h6>

               {{$data['results']->start_date}}

            </div>

            <div class="col-md-4">

               <h6>End Start </h6>

               {{$data['results']->end_date}}

            </div>

         </div>

         <br>

         <div class="row">

            <div class="col-md-4">

               <h6>Budget  </h6>

               {{$data['results']->budget}}

            </div>

            <div class="col-md-4">

               <h6>Type  </h6>

               {{$data['results']->type}}

            </div>

            <div class="col-md-4">

               <h6>Status  </h6>

               {{$data['results']->status}}

            </div>

            <div class="col-md-4">

               <br>

               <h6>Platform  </h6>

               {{$data['results']->platform}}

            </div>

            <div class="col-md-8">

               <br>

               <details>

                  <summary><b>Details</b></summary>

                  {{$data['results']->details}}

               </details>

            </div>

         </div>

      </div>

      <div id="menu1" class="tab-pane fade">

         <div class="col-md-12">

            <a href="#" class="btn btn-info btn-payment mb-3"  role="button">Add Payment</a>

 

            <div class="payment-div">

               <?php echo $data['payments']; ?>

            </div>

         </div>

      </div>



       <div id="menu2" class="tab-pane fade">

         <div class="col-md-12">

            <a href="#" class="btn btn-info btn-document mb-3"  role="button">Add Document</a>

            <div class="document-div">

               <?php echo $data['document']; ?>

            </div>

         </div>

      </div>

   </div>

@include('includes.save_lg_modal')



</div>



@include('includes.delete_modal')

<div class="container">

  <!-- Trigger the modal with a button -->

  <button type="button" class="btn btn-info btn-lg btnmodal d-none" data-toggle="modal" data-target="#savemodal">Open Modal</button>

</div>



@endsection

