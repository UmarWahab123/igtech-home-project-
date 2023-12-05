@extends('../../layout.header')

@section('title',$data['page_title'])

@section('content')

<!-- BEGIN: Subheader -->

<form id="form-submit" action="{{url('/savesettingsinfo')}}" method="post" enctype="multipart/form-data">

   {{ csrf_field() }}

   <div class="m-subheader ">

      <div class="d-flex align-items-center">

         <div class="mr-auto">

            <h3 class="m-subheader__title" id="onedfd">{{$data['page_title']}}</h3>

         </div>

         <div class="pull-right">

            <div class="form-group m-form__group">

               @php echo show_button(url('/projects'),'Back'); @endphp

               <button type="submit" class="btn btn-primary">Save</button>

            </div>

         </div>

      </div>

   </div>

   <!-- END: Subheader -->

   <div class="m-content">

      <div class="m-portlet__body">

          <input type="hidden" name="id" value="{{(isset($data['results']->id) ? $data['results']->id : '')}}">

         <div class="card p-5">

         <div class="card-body">

         <div class="row">

            <div class="col-md-4">

               <div class="form-group m-form__group">

                  <label>Company Name</label>

                  <input type="text" name="company_name" class="form-control m-input m-input--square" value="{{(isset($data['results']->company_name) ? $data['results']->company_name : '')}}" required>

               </div>

            </div>

             <div class="col-md-4">

               <div class="form-group m-form__group">

                  <label>Phone</label>

                  <input type="text" name="phone" class="form-control m-input m-input--square" value="{{(isset($data['results']->phone) ? $data['results']->phone : '')}}" required>

               </div>

            </div>

             <div class="col-md-4">

               <div class="form-group m-form__group">

                  <label>Email</label>

                  <input type="text" name="email" class="form-control m-input m-input--square" value="{{(isset($data['results']->email) ? $data['results']->email : '')}}" required>

               </div>

            </div>

         </div> 

         <div class="row">  

            <div class="col-md-12">

               <div class="form-group m-form__group">

                  <label>Address</label>

                  <textarea type="text" name="address" class="form-control m-input m-input--square" required>{{(isset($data['results']->address) ? $data['results']->address : '')}}</textarea>

               </div>

            </div>

            </div> 

             <div class="row">

                <div class="col-lg-12">

                            <div class="form-group m-form__group">

                                    <label>Upload Logo</label>

                                    <div class="m-dropzone dropzone  m-dropzone--primary" action="<?=url('/').'/uploadfile?url=-public-uploads-setting'?>" id="logo">



                                        <div class="m-dropzone__msg dz-message needsclick">

                                            <h3 class="m-dropzone__msg-title">

                                                Drop files here or click to upload

                                            </h3>

                                        </div>

                                    </div>

                           </div>

                <input type="hidden" name="logo" class="form-control m-input m-input--square" value="{{(isset($data['results']->logo) ? $data['results']->logo : '')}}">

              </div> 

             <img src="{{get_settings('logo')}}"  width="108" height="40">   

         </div>

         </div>

      </div>

   </div>

   </div>

   </div>



</form>





<script type="text/javascript">

    dropzonesinglefunc('#logo',1,'.jpg,.swg,.eps,.pdf,.png,.jpeg','logo','public/uploads/setting/');
  $(document).ready(function(){
     $('.settingsss').addClass('m-menu__item--active');
     
});
</script>
 
@endsection

