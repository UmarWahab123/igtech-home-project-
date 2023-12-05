@extends('../../layout.header')

@section('title',$data['page_title'])

@section('content')

<!-- BEGIN: Subheader -->

<form id="form-submit" action="{{ url('/savepages') }}" method="post">

 {{ csrf_field() }}

   <div class="m-subheader ">

      <div class="d-flex align-items-center">

        <div class="mr-auto">

            <h2 class="m-subheader__title ">{{$data['page_title']}}</h2>

        </div>

         <div class="pull-right">

            <div class="form-group m-form__group">

               @php echo show_button(url('/pages'),'Back'); @endphp

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



      <div class="col-lg-2">

               <div class="form-group m-form__group">

                  <label for="pages type">Type</label>

                  <select class="form-control" name="type" data-option-id="{{(isset($data['results']->type) ? $data['results']->type : '')}}">

                  <option value="">Select</option>

                     <option value="About">About</option>

                     <option value="Services">Services</option>

                     <option value="Portfolio">Portfolio</option>

                     <option value="Jobs">Jobs</option>

                     <option value="Our Team">Our Team</option>

                     <option value="Contacts">Contacts</option>

                  </select>

               </div>

            </div> 

            <div class="col-lg-4">

               <div class="form-group m-form__group">

                  <label>Main Heading</label>

                  <input type="text" name="main_heading" class="form-control m-input m-input--square" value="{{(isset($data['results']->main_heading) ? $data['results']->main_heading : '')}}">

               </div>

            </div>

            <div class="col-lg-6">

               <div class="form-group m-form__group">

                  <label>Sub Heading</label>

                  <input type="text" name="sub_heading" class="form-control m-input m-input--square" value="{{(isset($data['results']->sub_heading) ? $data['results']->sub_heading : '')}}">

               </div>

            </div>

          </div>

          <div class="row">

          <div class="col-lg-12">

          <div class="form-group m-form__group">

              <label>Upload Banner Image</label>

              <div class="m-dropzone dropzone  m-dropzone--primary" action="<?=url('/').'/uploadfile?url=-public-uploads-bannerimg'?>" id="banner-img">



                  <div class="m-dropzone__msg dz-message needsclick">

                      <h3 class="m-dropzone__msg-title">

                          Drop files here or click to upload

                      </h3>

                  </div>

              </div>

         </div>

          <input type="hidden" name="banner_image" class="form-control m-input m-input--square" value="{{(isset($data['results']->banner_image) ? $data['results']->banner_image : '')}}">

        </div> 

         </div>  

         <img src="{{url(isset($data['results']->banner_image) ? $data['results']->banner_image:'')}}" width="90" height="80">      

         </div>

      </div>

   </div>

</div>

</form>

<script type="text/javascript">

   $(document).ready(function() {

   

 });

    dropzonesinglefunc('#banner-img',1,'.jpg,.swg,.eps,.pdf,.png,.jpeg','banner_image','public/uploads/bannerimg/');

</script>

@endsection

