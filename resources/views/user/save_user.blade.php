@extends('../../layout.header')
@section('title',$data['page_title'])
@section('content')
<div class="row">
    <div class="col-xs-12">
        <h3 class="header smaller lighter blue">{{$data['page_title']}}</h3>
        <div class="col-lg-4">
            <form id="form_submit" action="{{ url('/admin/saveuserinfo') }}" method="post">
            {{ csrf_field() }}
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{(isset($data['results']->name) ? $data['results']->name : '')}}">
                </div> 
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="{{(isset($data['results']->email) ? $data['results']->email : '')}}">
                </div> 
                    <input type="hidden" name="id" class="form-control" value="{{(isset($data['results']->id) ? $data['results']->id : '')}}">
                <input type="submit" value="{{$data['page_title']}}" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.menu-item-4').addClass('active');
        $('#form_submit')
            .formValidation({
                framework: 'bootstrap',
                icon: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: 'This field is required'
                            }
                        }
                    },  email: {
                        validators: {
                            notEmpty: {
                                message: 'This field is required'
                            }
                        }
                    },
                }
            })
            .on('err.validator.fv', function(e, data) {
                data.element
                    .data('fv.messages')
                    .find('.help-block[data-fv-for="' + data.field + '"]').hide()
                    .filter('[data-fv-validator="' + data.validator + '"]').show();
            });
    });
</script>
@endsection