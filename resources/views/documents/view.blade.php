<div class="card">
<table class="table table-striped- table-bordered table-hover table-checkable table-responsive">
    <thead class="theme-color">
     <th>Sr</th>   
    <th>Title</th>
    <th>File</th>
    <th>Action</th>
    </thead>
    <tbody>
    @foreach($results as $key=>$row)
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$row->title}}</td>     
        <td>
            @if($row->file>=1)
            <a href="{{url('/')}}/{{$row->file}}" width="30" height="30">View file</a>
            @endif
        </td>
        <td>
            @php echo delete_link(url('/deletedocument/'.$row->id)); @endphp
            <a data-id="<?=$row->id?>" href="javascript:void(0)" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only m-btn--outline-1x m-btn--pill m-btn--air btn-edit btn-document" data-skin="dark" data-tooltip="m-tooltip" data-placement="top" title="" data-original-title="Edit" aria-describedby="tooltip756341">
                <i class="fa fa-pencil-alt"></i>
            </a>
        </td>
          
    </tr>
    @endforeach
    </tbody>
</table>
</div>
<script type="text/javascript">
    $(document).on('click','.btn-document',function(){
        var token = $('input[name=_token]').val();
        var project_id = $('input[name=project_id]').val(); 
        var id = $(this).attr('data-id');
        var type = $(this).attr('data-type');
        $.ajax(
                {
                    type:"post",
                    headers: {'X-CSRF-TOKEN': token},
                    url: "{{url('/documentmodal') }}",
                    dataType: "json",
                    data:{'id':id,'project_id':project_id},
                    success:function(data)
                    {
                        $('.modal-div').html(data.response);
                        $('.btnmodal').click();
                        $('#savemodal').modal('show');
                    }
                });

    });
    $(document).on('click','.savedocument',function(e){
        $(document).off('click','.savedocument');
        e.preventDefault();
        var token = $('input[name=_token]').val();
        var formdata=$('#notesforms').serialize();
        $.ajax(
                {
                    type:"post",
                    headers: {'X-CSRF-TOKEN': token},
                    url: "{{url('/savedocument') }}",
                    dataType: "json",
                    data:formdata,
                    success:function(data)
                    {
                        $('.document-div').html(data.response);
                        $('#savemodal').modal('hide');
                        $('.fade').removeClass('modal-backdrop');
                    }
                });
    });
</script>
 