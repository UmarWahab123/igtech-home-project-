@extends('../../layout.header')

@section('title',$data['page_title'])

@section('content')

<div class="mr-auto mt-2">

            <h1 class="m-subheader__title ml-4" id="onedfd">{{$data['page_title']}}</h1>       

        </div>

         <a href="{{ url('/addmembers')}}" class="btn btn-info btn-payment ml-4 mt-1 mb-1"  role="button">Add Member</a>

<div class="m-content">

  {{--<table class="table table-bordered">--}}

      <table class="table table-striped- table-bordered table-hover table-checkable dynamic-table table-responsive">

    <thead class="theme-color lead">

        <th>Sr</th>

        <th>Name</th>

        <th>Designation</th>

        <th>Joining Date</th>

        <th>Order By</th>

        <th>Profile Picture</th>

        <th>Action</th>

    </thead>

    <tbody class="lead">

     @foreach($data['results'] as $key=>$value) 

          <tr>

            <td>{{$key+1}}</td>

            <td><a href="{{url('/')}}/addmembers/{{$value->id}}">{{$value->name}}</td>

            <td>{{$value->designation}}</td>

            <td>{{$value->joining_date}}</td>

            <td>{{$value->order_by}}</td>


            <td><img src="{{url('/')}}/{{$value->profile}}" width="60" height="60"></td>

            <td> 

                <?php echo delete_link(url('/deletemember/' . $value->id)); ?>

                <?php echo edit_link(url('/addmembers/' . $value->id)); ?>

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
     $('.memberrr').addClass('m-menu__item--active');
     
});
</script>


@endsection