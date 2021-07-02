@extends('../../layout.header')
@section('title',$data['page_title'])
@section('content')

<div class="m-content">

  {{--<table class="table table-bordered">--}}
      <table class="table table-striped- table-bordered table-hover table-checkable dynamic-table">
    <thead class="theme-color">
        <th>Sr</th>
        <th>Name</th>
        <th>Start_date</th>
        <th>End_date</th>
        <th>Budget</th>
        <th>Type</th>
        <th>Status</th>
        <th>Platform</th>
        <th>Action</th>

    </thead>
    <tbody>
         @foreach($data['results'] as $key=>$value)
        <tr>
            <td>{{$key}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->start_date}}</td>
            <td>{{$value->end_date}}</td>
            <td>{{$value->budget}}</td>
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

@endsection
