@extends('../../layout.header')
@section('title',$data['page_title'])
@section('content')
<!-- BEGIN: Subheader -->
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title ">{{$data['page_title']}}</h3>
            <button data-toggle="modal" data-target="#savemodal" type="button" class="btn btn-outline-success btn-add">Add Role</button>
        </div>

    </div>
</div>
<!-- END: Subheader -->

<div class="m-content">
  {{--<table class="table table-bordered">--}}
      <table class="table table-striped- table-bordered table-hover table-checkable dynamic-table">
    <thead class="theme-color">
        <th>Sr</th>
        <th>Title</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($data['results'] as $key=>$row)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$row->role_title}}</td>
            <td>
                @php echo delete_link(url('/deleterole/'.$row->role_id)); @endphp
                <a data-id="{{$row->role_id}}" data-title="{{$row->role_title}}" data-toggle="modal" data-target="#savemodal" href="#" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only m-btn--outline-1x m-btn--pill m-btn--air btn-edit"
                   data-skin="dark" data-tooltip="m-tooltip" data-placement="top" title="Edit">
                    <i class="fa fa-pencil-alt"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
<div class="modal fade" id="savemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
    <form id="form-submit" action="{{ url('/saverole') }}" method="post">
        {{ csrf_field() }}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Save Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <input type="hidden" name="id" value="">
                <input type="hidden" name="role_id" value="">
                <div class="modal-body">
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group">
                            <label>Role Title</label>
                            <input type="text" name="role_title" class="form-control m-input m-input--square" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href=""  class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
     $('.m-userroles').addClass('m-menu__item--open');
     $('.m-roles').addClass('m-menu__item--active');
     $('.btn-edit').on('click',function(){
        $('input[name=id]').val($(this).attr('data-id'));
        $('input[name=role_id]').val($(this).attr('data-id'));
        $('input[name=role_title]').val($(this).attr('data-title'));
    }); 
     $('.btn-add').on('click',function(){
        $('input[name=role_id]').val('');
        $('input[name=role_title]').val('');
    });
 }); 
</script>


@endsection