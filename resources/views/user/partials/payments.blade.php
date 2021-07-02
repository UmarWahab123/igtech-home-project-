<br>
@php echo show_button(url('/payment'),'Add Payment'); @endphp
<br><br>
<table class="table table-striped- table-bordered table-hover table-checkable dynamic-table">
    <thead class="theme-color">
    <th>Sr</th>
    <th>Transaction#</th>
    <th>Date</th>
    <th>Payment Mode</th>
    <th>Account#</th>
    <th>Currency</th>
    <th>Paid Amount</th>
    <th>Action</th>
    </thead>
    <tbody>
    @foreach($data['payments'] as $key=>$row)


        <tr>
            <td>{{$key+1}}</td>
            <td>{{$row->transaction_no}}</td>
            <td>{{format_date($row->date)}}</td>
            <td>{{$row->payment_mode}}</td>
            <td>{{$row->account_no}}</td>
            <td>{{$row->currency}}</td>
            <td>{{$row->paid_amount}}</td>
            <td>
                @php echo delete_link(url('/deletepayment/'.$row->id)); @endphp
                @php echo edit_link(url('/payment/'.$row->id)); @endphp
            </td>
        </tr>
    @endforeach
    </tbody>
</table>