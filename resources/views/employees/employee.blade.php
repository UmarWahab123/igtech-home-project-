@extends('../../layout.header')

@section('title',$data['page_title'])

@section('content')

<div class="mr-auto mb-3 mt-2">

<h1 class="m-subheader__title ml-4" id="onedfd">{{$data['page_title']}}</h1>       

</div>

  <a href="{{ url('/addemployee')}}" class="btn btn-info btn-payment ml-4 mb-1"  role="button">Add Employee</a>        

<div class="m-content" style="margin-top: -15px;">

  {{--<table class="table table-bordered">--}}

      <table class="table table-responsive table-striped-table-bordered table-hover table-checkable dynamic-table lead to-make-display">

    <thead class="theme-color lead">

        <th>Sr</th>

        <th>Name</th>

        <th>Email</th>

        <th>Age</th>

        <th>CNIC</th>

        <th>Joining Date</th>

        <th>Basic Salary</th>

        <th>Designation</th>

        <th>Contact Number</th>

        <th>Status</th>

        <th>Action</th>

    </thead>

    <tbody class="lead">

     @foreach($data['results'] as $key=>$value)

      <tr>

            <td>{{$key+1}}</td>

            <td><a href="{{url('/')}}/employeesdetails/{{$value->id}}">{{$value->name}}</a></td>

            <td>{{$value->email}}</td>

            <td>{{$value->age}}</td>

            <td>{{$value->cnic}}</td>

            <td>{{$value->joining_date}}</td>

            <td>{{$value->basic_salary}}</td>

            <td>{{$value->designation}}</td>

            <td>{{$value->contact_no}}</td>

            <td>{{$value->status}}</td>

            <td>

                <?php echo delete_link(url('/deleteemployee/' . $value->id)); ?> 

                <?php echo edit_link(url('/addemployee/' . $value->id)); ?>      

                <a href="{{url('/')}}/employeesdetails/{{$value->id}}">View</a>

            </td>

        </tr>

       @endforeach

    </tbody>

</table>

</div>

@include('includes.save_lg_modal')

@include('includes.delete_modal')
<script type="text/javascript">
   $(document).ready(function(){
        $('.employees').addClass('m-menu__item--open');
        $('.employe').addClass('m-menu__item--active');
        });
</script>
@endsection
