@extends('../../layout.header')

@section('title',$data['page_title'])

@section('content')

<div class="mr-auto mt-2 mb-3">

            <h1 class="m-subheader__title ml-4 mt-2" id="onedfd">{{$data['page_title']}}</h1>       

        </div>

<div class="m-content">

  {{--<table class="table table-bordered">--}}

      <table class="table table-striped- table-bordered table-hover table-checkable dynamic-table table-responsive">

    <thead class="theme-color lead">

        <th>Sr</th>

        <th>Name</th>

        <th>Email</th>

        <th>Message</th>

    </thead>

    <tbody class="lead">

     @foreach($data['results'] as $key=>$value)

      <tr>

            <td>{{$key+1}}</td>

            <td>{{$value->name}}</td>

            <td>{{$value->email}}</td>

            <td>{{$value->message}}</td>

     </tr>

       @endforeach

      



    </tbody>

</table>

</div>

@include('includes.save_lg_modal')

@include('includes.delete_modal')


<script type="text/javascript">
   $(document).ready(function(){
     $('.contactuss').addClass('m-menu__item--active');
     
});
</script>


@endsection