@extends('../../layout.header')
@section('title',$data['page_title'])
@section('content')
<!-- BEGIN: Subheader -->
<form id="form-submit" action="{{ url('/saveTestimonials') }}" method="post">
 {{ csrf_field() }}
   <div class="m-subheader ">
      <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h2 class="m-subheader__title ">{{$data['page_title']}}</h2>
        </div>
         <div class="pull-right">
            <div class="form-group m-form__group">
               @php echo show_button(url('/testimonials'),'Back'); @endphp
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
            <div class="col-lg-4">
               <div class="form-group m-form__group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control m-input m-input--square" value="{{(isset($data['results']->name) ? $data['results']->name : '')}}">
               </div>
            </div>
            <div class="col-lg-4">
               <div class="form-group m-form__group">
                  <label>Date</label>
                  <div class='input-group'>
                     <input name="date" type='text' value="{{(isset($data['results']->date) ? format_date($data['results']->date) : '')}}" class="form-control m-input m_datepicker"/>
                     <div class="input-group-append">
                        <span class="input-group-text">
                        <i class="la la-calendar-check-o"></i>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
          <div class="col-lg-4">
         <div class="form-group m-form__group">
            <label for="portfolioo categories">Order By</label>
            <select class="form-control" name="order_by" data-option-id="{{(isset($data['results']->id) ? $data['results']->order_by : '')}}">
            <option value="">Select</option>
              @for($i=1;$i<=50;$i++)
               <option value="{{$i}}">{{$i}}</option>
              @endfor
            </select>
         </div>
      </div>
         </div>
              <div class="row">   
             <div class="col-md-12">
               <div class="form-group m-form__group">
                  <label>Content</label>
                  <textarea type="text" name="content" class="form-control m-input m-input--square summernote">{{(isset($data['results']->content) ? $data['results']->content : '')}}</textarea>
               </div>
            </div>      
         </div>  
          <div class="row">
          <div class="col-lg-12">
                      <div class="form-group m-form__group">
                          <label>Upload Image</label>
                          <div class="m-dropzone dropzone  m-dropzone--primary" action="<?=url('/').'/uploadfile?url=-public-uploads-testimonial'?>" id="testimoni">

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
      $(".summernote").summernote({height:200})
          $('select[data-option-id]').each(function () {
        $(this).val($(this).data('option-id'));
    });
     
 });
    dropzonesinglefunc('#testimoni',1,'.jpg,.swg,.eps,.pdf,.png,.jpeg','image','public/uploads/testimonial/');
</script>
@endsection
