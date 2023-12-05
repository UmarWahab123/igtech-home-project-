@extends('../../layout.header')

@section('title',$data['page_title'])

@section('content')

<div class="mr-auto mt-2">

            <h1 class="m-subheader__title ml-4" id="onedfd">{{$data['page_title']}}</h1>       

         <a href="{{url('/addsalaryies')}}" class="btn btn-info btn-payment ml-4 mt-lg-2 mb-auto" role="button">Add Salary</a>

       </div>

<div class="m-content">



      <table class="table table-striped- table-bordered table-hover table-checkable dynamic-table table-responsive">

    <thead class="theme-color">

        <th>Sr</th>

        <th>Date</th>

        <th>Salary Amount</th>

        <th>Bonus Amount</th>

        <th>Status</th>

        <th>Action</th>

    </thead>

    <tbody>

   @foreach($data['results'] as $key=>$value)

      <tr>

            <td>{{$key+1}}</td>

            <td>{{$value->date}}</td>

            <td>{{ number_format($value->salary_amount,2) }}</td>

            <td>{{ number_format($value->bonus_amount,2) }}</td>

            <td>{{$value->status}}</td>

            <td>

               <?php echo delete_link(url('/deletesalary/' . $value->id)); ?>

               <?php echo edit_link(url('/addsalaryies/' . $value->id)); ?>

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
     $('.salary').addClass('m-menu__item--active');
        });
</script>
@endsection
