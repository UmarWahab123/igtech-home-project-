@extends('../../layout.header')
@section('title',$data['page_title'])
@section('content')
<!-- BEGIN: Subheader -->
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title ">{{$data['page_title']}}</h3>
        </div>
    </div>
</div>
<!-- END: Subheader -->
<div class="m-content">
     <form id="form-submit" action="{{ url('/saveuser') }}" method="post">
        {{ csrf_field() }}

         <div class="m-portlet__body">
            <div class="row">
                <div class="col-md-6">
                     <div class="form-group m-form__group">
                            <label>Name</label>
                            <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control m-input m-input--square" required>
                        </div>
                         <div class="form-group m-form__group">
                            <label>Email</label>
                            <input type="text" name="email" value="{{Auth::user()->email}}" class="form-control m-input m-input--square" required>
                        </div>
                         <div class="form-group m-form__group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control m-input m-input--square" required>
                        </div>  
             
                        <input type="hidden" name="id" value="{{Auth::user()->id}}">
                        <div class="form-group m-form__group">
                             <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                        </div>
                </div>
            </div>
                       
     </form>

</div>

<script type="text/javascript">
  $(document).ready(function() {
    
 }); 
</script>


@endsection