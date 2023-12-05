@extends('../../layout.header')
@section('title',$data['page_title'])
@section('content')
<!-- BEGIN: Subheader -->
<form id="form-submit" action="{{ url('/savebannerimg') }}" method="post">
 {{ csrf_field() }}
   <div class="m-subheader ">
      <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h2 class="m-subheader__title ">{{$data['page_title']}}</h2>
        </div>
         <div class="pull-right">
            <div class="form-group m-form__group">
               @php echo show_button(url('/bannerimg'),'Back'); @endphp
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
            <div class="col-lg-3">
               <div class="form-group m-form__group">
                  <label>title</label>
                  <input type="text" name="title" class="form-control m-input m-input--square" value="{{(isset($data['results']->title) ? $data['results']->title : '')}}" required>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="form-group m-form__group">
                  <label>Circle cx</label>
                  <input type="text" name="circle_cx" class="form-control m-input m-input--square" value="{{(isset($data['results']->circle_cx) ? $data['results']->circle_cx : '')}}" required>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="form-group m-form__group">
                  <label>Circle cy</label>
                  <input type="text" name="circle_cy" class="form-control m-input m-input--square" value="{{(isset($data['results']->circle_cy) ? $data['results']->circle_cy : '')}}" required>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="form-group m-form__group">
                  <label>Circle r</label>
                  <input type="text" name="circle_r" class="form-control m-input m-input--square" value="{{(isset($data['results']->circle_r) ? $data['results']->circle_r : '')}}" required>
               </div>
            </div>
        </div>
        <div class="row">
             <div class="col-md-12">
               <div class="form-group m-form__group">
                  <label>Description</label>
                  <textarea type="text" name="description" class="form-control m-input m-input--square" required>{{(isset($data['results']->description) ? $data['results']->description : '')}}</textarea>
               </div>
            </div>
         </div>  
          <div class="row">
          <div class="col-lg-12">
                      <div class="form-group m-form__group">
                          <label>Upload Banner Image</label>
                          <div class="m-dropzone dropzone  m-dropzone--primary" action="<?=url('/').'/uploadfile?url=-public-uploads-banners'?>" id="banner">

                              <div class="m-dropzone__msg dz-message needsclick">
                                  <h3 class="m-dropzone__msg-title">
                                      Drop files here or click to upload
                                  </h3>
                              </div>
                          </div>
                     </div>
          <input type="hidden" name="image" class="form-control m-input m-input--square" value="{{(isset($data['results']->image) ? $data['results']->image : '')}}">
        </div> 
         </div>  
         <img src="{{url(isset($data['results']->image) ? $data['results']->image:'')}}" width="90" height="80">      
         </div>
      </div>
   </div>
</div>
</form>
<script type="text/javascript">
   $(document).ready(function() {
       $("#form-submit").validate( {
           rules: {
               name: {
                   required: !0
               },
           }
   });
 });
    dropzonesinglefunc('#banner',1,'.jpg,.swg,.eps,.pdf,.png,.jpeg','image','public/uploads/banners/');
</script>
@endsection
