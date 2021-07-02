@extends('../../layout.header')
@section('title',$data['page_title'])
@section('content')

<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title ">{{$data['page_title']}}</h3>
            @php echo show_button(url('/payment'),'Add Payment'); @endphp
        </div>
    </div>
</div>
<div class="m-content">
    <table class="table table-striped- table-bordered table-hover table-checkable dynamic-table">
    <thead class="theme-color">
        <th>Sr</th>
        <th>Transaction#</th>
        <th>Date</th>
        <th>Payment Mode</th>
        <th>Account#</th>
        <th>Currency</th>
        <th>Paid Amount</th>
        <th>Paid By</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($data['results'] as $key=>$row)

           
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$row->transaction_no}}</td>
            <td>{{format_date($row->date)}}</td>
            <td>{{$row->payment_mode}}</td>
            <td>{{$row->account_no}}</td>
            <td>{{$row->currency}}</td>
            <td>{{$row->paid_amount}}</td>
            <td>{{isset($row->user->first_name) ? $row->user->first_name : ''}}</td>
            <td>
                @php echo delete_link(url('/deletepayment/'.$row->id)); @endphp
                @php echo edit_link(url('/payment/'.$row->id)); @endphp
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

@include('includes.delete_modal')


<script type="text/javascript">
  $(document).ready(function() {
      $(".summernote").val('asdfdsa');

      $('.m-userroles').addClass('m-menu__item--open');
    $('.m-payments').addClass('m-menu__item--active');

}); 
</script>




@endsection

