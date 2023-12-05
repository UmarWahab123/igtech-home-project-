@extends('../../layout.header')
@section('title',$data['page_title'])
@section('content')
{{ csrf_field() }}
<style>
   .first{
   margin-left: 20px;
   margin-top:-20px;
   }
   .btn-payment{
      margin-bottom: 10px;
   }
    #one{
   text-transform: uppercase;
   font-weight: bold;
}
.btn-salary{
   margin-left: 30px;
   margin-top: -15px;
}
.salary-div{
   margin-top: -20px;
}

</style>
<div class="m-subheader ">
   <div class="d-flex align-items-center">
      <div class="mr-auto">
      <h1 id="one">{{$data['results']->name}}&nbsp{{$data['page_title']}}</h1>
      </div>
   </div>
</div>
<div class="card p-5">
<div class="card-body">
<div class="container first">
   <ul class="nav nav-pills">
      <li class="active"><a data-toggle="pill" href="#home">Employee information</a></li>
      <li><a data-toggle="pill" href="#salary">Salary</a></li>
   </ul>
   <div class="tab-content">
      <div id="home" class="tab-pane fade active in show">
         <div class="row">
            <div class="col-md-4">
               <input type="hidden" id="employees_id" name="employees_id" value="{{$data['results']->id}}">
             
               <h6>Name </h6>
               {{$data['results']->name}}
            </div>
             <div class="col-md-4">
               <h6>Email </h6>
               {{$data['results']->email}}
            </div>
             <div class="col-md-4">
               <h6>Age</h6>
               {{$data['results']->age}}
            </div>
         </div>
          <br>
            <div class="row">
            <div class="col-md-4">
               <h6>CNIC</h6>
               {{$data['results']->cnic}}
            </div>
            <div class="col-md-4">
               <h6>Joining Date</h6>
               {{$data['results']->joining_date}}
            </div>
             <div class="col-md-4">
               <h6>Basic Salary</h6>
               {{$data['results']->basic_salary}}
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-md-4">
               <h6>Designation </h6>
               {{$data['results']->designation}}
            </div>
            <div class="col-md-4">
               <h6>Contact Number</h6>
               {{$data['results']->contact_no}}
            </div>
            <div class="col-md-4">
               <h6>Status </h6>
               {{$data['results']->status}}
            </div>
         </div>
         <div class="row">
            <div class="col-md-8">
               <br>
               <details>
                  <summary><b>Address</b></summary>
                  {{$data['results']->address}}
               </details>
            </div>
            </div>
         </div>
      <div id="salary" class="tab-pane fade">
         <div class="col-md-12">
            <a href="#" class="btn btn-info btn-salary"  role="button">Add Salary</a>
            <div class="salary-div">
               <?php echo $data['salary']; ?>
            </div>
         </div>
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
