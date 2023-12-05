@extends('../../layout.header')
@section('title',$data['page_title'])
@section('content')
<!-- BEGIN: Subheader -->
<form id="form-submit" action="{{ url('/saveportfolio') }}" method="post">
 {{ csrf_field() }}
   <div class="m-subheader ">
      <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h2 class="m-subheader__title ">{{$data['page_title']}}</h2>
        </div>
         <div class="pull-right">
            <div class="form-group m-form__group">
               @php echo show_button(url('/portfolioo'),'Back'); @endphp
               <button type="submit" class="btn btn-primary">Save</button>
            </div>
         </div>
      </div>
   </div>
   <!-- END: Subheader -->
   <div class="m-content">
      <div class="m-portlet__body">
         <input type="hidden" name="category_id" value="{{$data['category_id']}}">
         <input type="hidden" name="id" value="{{(isset($data['results']->id) ? $data['results']->id : '')}}">
          <div class="card p-5">
          <div class="card-body">
         <div class="row">
             <div class="col-lg-4">
               <div class="form-group m-form__group">
                  <label for="portfolioo categories">Portfolio Category</label>
                  <select class="form-control" name="category_id" data-option-id="{{(isset($data['results']->category_id) ? $data['results']->category_id : '')}}" required>
                  <option value="">Select</option>
                    @foreach($data['category_id'] as $key=>$value)
                     <option value="{{$value->id}}">{{$value->name}}</option>
                     @endforeach
                  </select>
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
            <div class="col-lg-4">
               <div class="form-group m-form__group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control m-input m-input--square" value="{{(isset($data['results']->name) ? $data['results']->name : '')}}">
               </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-12">
            <div class="form-group m-form__group">
               <label>Short Description</label>
                <textarea type="text" name="short_description" class="form-control m-input m-input--square">{{(isset($data['results']->short_description) ? $data['results']->short_description : '')}}</textarea>
            </div>
         </div>
         </div>
        <div class="row">
             <div class="col-md-12">
               <div class="form-group m-form__group">
                  <label>Long Description</label>
                  <textarea type="text" name="long_description" class="form-control m-input m-input--square">{{(isset($data['results']->long_description) ? $data['results']->long_description : '')}}</textarea>
               </div>
            </div>
         </div>  
          <div class="row">
          <div class="col-lg-12">
                      <div class="form-group m-form__group">
                          <label>Upload Image</label>
                          <div class="m-dropzone dropzone  m-dropzone--primary" action="<?=url('/').'/uploadfile?url=-public-uploads-portfolio'?>" id="img">

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
        $('select[data-option-id]').each(function () {
        $(this).val($(this).data('option-id'));
    });
      
 });
    dropzonesinglefunc('#img',1,'.jpg,.swg,.eps,.pdf,.png,.jpeg','image','public/uploads/portfolio/');
</script>
@endsection
