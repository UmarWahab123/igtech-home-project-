<div class="card mt-5">

<div class="m-content">

  {{--<table class="table table-bordered">--}}

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

   @foreach($results as $key=>$value)

      <tr>

            <td>{{$key}}</td>

            <td>{{$value->date}}</td>

            <td>{{ number_format($value->salary_amount,2) }}</td>

            <td>{{ number_format($value->bonus_amount,2) }}</td>

            <td>{{$value->status}}</td>

            <td>

                @php echo delete_link(url('/deletesalary/'.$value->id)); @endphp

                @php echo edit_link(url('/addsalaryies/' . $value->id)); @endphp

            </a>

            </td>

        </tr>

       @endforeach

    </tbody>

</table>

</div>

</div>

<script>

    $(document).on('click','.btn-salary',function(){

        var token = $('input[name=_token]').val();

        var employees_id = $('input[name=employees_id]').val();

        var id = $(this).attr('data-id');

        var type = $(this).attr('data-type');

        $.ajax(

                {

                    type:"post",

                    headers: {'X-CSRF-TOKEN': token},

                    url: "{{ url('/salarymodal') }}",

                    dataType: "json",

                    data:{'id':id,'employees_id':employees_id},

                    success:function(data)

                    {

                        $('.modal-div').html(data.response);

                        $('.btnmodal').click()

                        // $('#savemodal').modal('show');

                    }

                });



    });

    $(document).on('click','.savesalary',function(e){

        $(document).off('click','.savesalary');

        e.preventDefault();

        var token = $('input[name=_token]').val();

        var formdata=$('#notesform').serialize();

        $.ajax(

                {

                    type:"post",

                    headers: {'X-CSRF-TOKEN': token},

                    url: "{{url('/savesalaryajax') }}",

                    dataType: "json",

                    data:formdata,

                    success:function(data)

                    {

                        $('.salary-div').html(data.response);

                        $('#savemodal').modal('hide');

                    }

                });

    });

</script>



