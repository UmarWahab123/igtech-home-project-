@extends('../../layout.header')

@section('title',$data['page_title'])

@section('content')

<div class="mr-auto mt-2">

            <h1 class="m-subheader__title ml-4 mt-2" id="onedfd">{{$data['page_title']}}</h1>       

         <a href="{{url('/addbannerimg')}}" class="btn btn-info btn-payment ml-4 mt-lg-2 mb-1" role="button">Add Banners</a>

       </div>

<div class="m-content">

  {{--<table class="table table-bordered">--}}

      <table class="table table-striped- table-bordered table-hover table-checkable dynamic-table table-responsive">

     <thead class="theme-color lead">

        <th>Sr</th>

        <th>Title</th>

        <th>Description</th>

        <th>Banner Image</th>

        <th>Action</th>

    </thead>

    <tbody class="lead">

   @foreach($data['results'] as $key=>$value)

      <tr>

            <td>{{$key+1}}</td>

            <td><a href="{{url('/')}}/addbannerimg/{{$value->id}}">{{$value->title}}</a></td>

            <td>{{$value->description}}</td>

            <td><img src="{{url('/')}}/{{$value->image}}" width="60" height="60"></td>

            <td>

               <?php echo delete_link(url('/deletebannerimg/' . $value->id)); ?>

               <?php echo edit_link(url('/addbannerimg/' . $value->id)); ?> 

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
     $('.bannersss').addClass('m-menu__item--active');
     
});

</script>



@endsection