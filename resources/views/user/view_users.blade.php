@extends('../../layout.header')
@section('title',$data['page_title'])
@section('content')

<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title ">{{$data['page_title']}}</h3>
            <button data-toggle="modal" data-target="#savemodal" type="button" class="btn btn-outline-success btn-add">Add User</button>
        </div>
    </div>
</div>
<div class="m-content">
    <table class="table table-striped- table-bordered table-hover table-checkable dynamic-table">
    <thead class="theme-color">
        <th>Sr</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($data['results'] as $key=>$row)

            @php
            if(isset($row->role->role_title) && $row->role->role_title=="SuperUser"){continue;}
            @endphp
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td>{{isset($row->role->role_title) ? $row->role->role_title : ''}}</td>
            <td>
                @php echo delete_link(url('/deleteuser/'.$row->id)); @endphp

                <a data-id="{{$row->id}}" data-role="{{$row->role_id}}" data-name="{{$row->name}}" data-email="{{$row->email}}" data-toggle="modal" data-target="#savemodal" href="#" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only m-btn--outline-1x m-btn--pill m-btn--air btn-edit"
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
    <form id="form-submit" action="{{ url('/saveuser') }}" method="post">
        {{ csrf_field() }}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Save User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <input type="hidden" name="id" value="">
                <div class="modal-body">
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control m-input m-input--square" required>
                        </div> 
                        <div class="form-group m-form__group">
                            <label>Role</label>
                           <select name="role_id" class="form-control">
                               <option value="">Select</option>
                               @foreach($data['roles'] as $row)
                               <option value="{{$row->role_id}}">{{$row->role_title}}</option>
                               @endforeach
                           </select>
                        </div>
                        <div class="form-group m-form__group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control m-input m-input--square" required>
                        </div>
                        <div class="form-group m-form__group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control m-input m-input--square" required>
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
      $(".summernote").val('asdfdsa');

      $('.m-userroles').addClass('m-menu__item--open');
    $('.m-users').addClass('m-menu__item--active');
//      $(".summernote").summernote({height:150});

      $(document).on('click','.btn-edit',function(){
        $('input[name=id]').val($(this).attr('data-id'));
        $('input[name=user_id]').val($(this).attr('data-id'));
        $('select[name=role_id]').val($(this).attr('data-role'));
        $('input[name=name]').val($(this).attr('data-name'));
        $('input[name=email]').val($(this).attr('data-email'));
//        $('.summernote').summernote('code', $(this).attr('data-name'));


    });
      $(document).on('click','.btn-add',function(){
        $('input[name=user_id]').val('');
        $('input[name=name]').val('');
        $('input[name=email]').val('');
    });
}); 
</script>




@endsection

