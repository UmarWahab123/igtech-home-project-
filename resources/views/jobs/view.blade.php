@extends('../../layout.header')

@section('title',$data['page_title'])

@section('content')

<div class="mr-auto mt-2">

            <h1 class="m-subheader__title ml-4 mt-2" id="onedfd">{{$data['page_title']}}</h1>       

         <a href="{{url('/addjobs')}}" class="btn btn-info btn-payment ml-4 mt-lg-2 mb-1" role="button">Add Jobs</a>

       </div>

<div class="m-content">

  {{--<table class="table table-bordered">--}}

      <table class="table table-striped- table-bordered table-hover table-checkable dynamic-table table-responsive">

     <thead class="theme-color lead">

        <th>Sr</th>

        <th>Date</th>

        <th>Title</th>

        <th>Short Description</th>

        <th>Advertised By</th>

        <th>Status</th>


        <th>Action</th>

    </thead>

    <tbody class="lead">

   @foreach($data['results'] as $key=>$value)

      <tr>

            <td>{{$key+1}}</td>

            <td>{{$value->date}}</td>

            <td><a href="{{url('/')}}/addjobs/{{$value->id}}">{{$value->title}}</a></td>

            <td>{{$value->short_description}}</td>

            <td>{{$value->advertised_by}}</td>
            <td>{{$value->status}}</td>

            <td>

               <?php echo delete_link(url('/deletejobs/' . $value->id)); ?>

               <?php echo edit_link(url('/addjobs/' . $value->id)); ?> 

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
     $('.jobsss').addClass('m-menu__item--active');
     
});
</script>


@endsection