<div class="card">

    <table class="table table-striped- table-bordered table-hover table-checkable table-responsive">

    <thead class="theme-color">

     <th>Sr</th>   

    <th class="w100">Date</th>

    <th>Amount</th>

    <th>Payment Method</th>

    <th>Currency</th>

    <th>Status</th>

    <th class="w100">Action</th>

    </thead>

    <tbody>

    @foreach($results as $key=>$row)

    <tr>

        <td>{{$key+1}}</td>

        <td><div >{{format_date($row->date)}}</div> </td>

        <td>{{number_format($row->amount,2)}}</td>

        <td>{{$row->payment_method}}</td>

        <td>{{$row->currency}}</td>

        <td>{{$row->status}}</td>

        <td>

            @php echo delete_link(url('/deletepayment/'.$row->id)); @endphp

            <a data-id="<?=$row->id?>" href="javascript:void(0)" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only m-btn--outline-1x m-btn--pill m-btn--air btn-edit btn-payment" data-skin="dark" data-tooltip="m-tooltip" data-placement="top" title="" data-original-title="Edit" aria-describedby="tooltip756341">

                <i class="fa fa-pencil-alt"></i>

            </a>

        </td>

    </tr>

    @endforeach

    </tbody>

</table>

</div>

<script type="text/javascript">

    $(document).on('click','.btn-payment',function(){

        var token = $('input[name=_token]').val();

        var project_id = $('input[name=project_id]').val();

        var id = $(this).attr('data-id');

        var type = $(this).attr('data-type');

        $.ajax(

                {

                    type:"post",

                    headers: {'X-CSRF-TOKEN': token},

                    url: "{{url('/paymentmodal') }}",

                    dataType: "json",

                    data:{'id':id,'project_id':project_id},

                    success:function(data)

                    {

                        $('.modal-div').html(data.response);

                        $('.btnmodal').click()

                        // $('#savemodal').modal('show');

                    }

                });



    });

    $(document).on('click','.savepayment',function(e){

        $(document).off('click','.savepayment');

        e.preventDefault();

        var token = $('input[name=_token]').val();

        var formdata=$('#notesform').serialize();

        $.ajax(

                {

                    type:"post",

                    headers: {'X-CSRF-TOKEN': token},

                    url: "{{url('/savepayment') }}",

                    dataType: "json",

                    data:formdata,

                    success:function(data)

                    {

                        $('.payment-div').html(data.response);

                        $('#savemodal').modal('hide');

                        $('.fade').removeClass('modal-backdrop');

                    }

                });

    });

</script>

