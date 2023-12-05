
     {{--<table class="table table-bordered">--}}
      <table class="table table-striped- table-bordered table-hover table-checkable dynamic-table table-responsives">
     <thead class="theme-color">
        <th>Sr</th>
        <th>Name</th>
        <th>Category Name</th>
        <th>Short Description</th>
        <th>Long Description</th>
        <th>Image</th>
        <th>Action</th>
    </thead>
    <tbody>
  @foreach($data['portfolio'] as $key=>$row)
      <tr>
            <td>{{$key+1}}</td>
            <td><a href="{{url('/')}}/addportfolio/{{$value->id}}">{{$row->name}}</a></td>
            <td>{{$row->category->name}}</td>
            <td>{{$row->short_description}}</td>
            <td>{{$row->long_description}}</td>
            <td><img src="{{url('/')}}/{{$row->image}}" width="60" height="60"></td>
            <td>
               <?php echo delete_link(url('/deleteportfolio/' . $row->id)); ?>
               <?php echo edit_link(url('/addportfolio/' . $row->id)); ?> 
            </td>
        </tr>
       @endforeach
    </tbody>
</table>
