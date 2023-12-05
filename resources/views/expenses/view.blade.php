@extends('../../layout.header')

@section('title',$data['page_title'])

@section('content')

<div class="mr-auto mt-2">

            <h1 class="m-subheader__title ml-4" id="onedfd">{{$data['page_title']}}</h1>       

         <a href="{{url('/expense')}}" class="btn btn-info btn-payment ml-4 mt-lg-2 mb-1" role="button">Add Expense</a>

       </div>

<div class="m-content">

  {{--<table class="table table-bordered">--}}

      <table class="table table-striped- table-bordered table-hover table-checkable dynamic-table table-responsive">

    <thead class="theme-color lead">

        <th>Sr</th>

        <th>Date</th>

        <th>Particulars</th>

        <th>Type</th>

        <th>Amount</th>

        <th>Action</th>

    </thead>

    <tbody class="lead">

   @foreach($data['results'] as $key=>$value)

      <tr>

            <td>{{$key+1}}</td>

            <td>{{$value->date}}</td>

            <td>{{$value->particulars}}</td>

            <td>{{$value->type}}</td>

            <td>{{ number_format($value->amount,2) }}</td>

            <td>

                <?php echo delete_link(url('/deleteexpense/' . $value->id)); ?>

               <?php echo edit_link(url('/expense/' . $value->id)); ?>

                

             

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
     $('.expenssss').addClass('m-menu__item--active');
     
});

</script>

@endsection