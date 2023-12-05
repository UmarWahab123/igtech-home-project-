@extends('../../layout.header')

@section('title',$data['page_title'])

@section('content')

<div class="mr-auto mt-2">

      <h1 class="m-subheader__title ml-4" id="onedfd">{{$data['page_title']}}</h1>       

         <a href="{{url('/project')}}" class="btn btn-info btn-payment ml-4 mt-lg-2 mb-1" role="button">Add Projects</a>

    

</div>

<div class="m-content">



  {{--<table class="table table-bordered">--}}

      <table class="table table-striped- table-bordered table-hover table-checkable dynamic-table table-responsive">

    <thead class="theme-color lead">

        <th>Sr</th>

        <th>Name</th>

        <th>Start Date</th>

        <th>End Date</th>

        <th>Budget</th>

        <th>Type</th>

        <th>Status</th>

        <th>Platform</th>

        <th>Action</th>



    </thead>

    <tbody class="lead">

         @foreach($data['results'] as $key=>$value)

        <tr>

            <td>{{$key+1}}</td>

            <td><a href="{{url('/')}}/project/{{$value->id}}">{{$value->name}}</a></td>

            <td>{{$value->start_date}}</td>

            <td>{{$value->end_date}}</td>

            <td>{{ number_format($value->budget,2) }}</td>

            <td>{{$value->type}}</td>

            <td>{{$value->status}}</td>

            <td>{{$value->platform}}</td>

            <td>

                <?php echo delete_link(url('/deleteproject/' . $value->id)); ?>

                <?php echo edit_link(url('/project/' . $value->id)); ?>

                <a href="{{url('/')}}/projectsdetails/{{$value->id}}">View</a>

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
     $('.projectsss').addClass('m-menu__item--active');
     
});

</script>
@endsection

