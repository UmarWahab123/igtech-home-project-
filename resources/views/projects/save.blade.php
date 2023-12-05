@extends('../../layout.header')
@section('title',$data['page_title'])
@section('content')
<!-- BEGIN: Subheader -->
<form id="form-submit" action="{{ url('/saveproject') }}" method="post">
   <div class="m-subheader ">
      <div class="d-flex align-items-center">
         <div class="mr-auto">
            <h3 class="m-subheader__title ">{{$data['page_title']}}</h3>
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
      {{ csrf_field() }}
      <div class="m-portlet__body">
         <input type="hidden" name="id" value="{{(isset($data['results']->id) ? $data['results']->id : '')}}">
   <div class="card p-5">
   <div class="card-body">
         <div class="row">
            <div class="col-md-4">
               <div class="form-group m-form__group">
                  <label>Project Name</label>
                  <input type="text" name="name" class="form-control m-input m-input--square" value="{{(isset($data['results']->name) ? $data['results']->name : '')}}" required>
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group m-form__group">
                  <label>Start date</label>
                  <div class='input-group'>
                     <input name="start_date" type='text' value="{{(isset($data['results']->start_date) ? format_date($data['results']->start_date) : '')}}" class="form-control m-input m_datepicker" required/>
                     <div class="input-group-append">
                        <span class="input-group-text">
                        <i class="la la-calendar-check-o"></i>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group m-form__group">
                  <label>End date</label>
                  <div class='input-group'>
                     <input name="end_date" type='text' value="{{(isset($data['results']->end_date) ? format_date($data['results']->end_date) : '')}}" class="form-control m-input m_datepicker" required/>
                     <div class="input-group-append">
                        <span class="input-group-text">
                        <i class="la la-calendar-check-o"></i>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group m-form__group">
                  <label>Budget</label>
                  <input type="number" name="budget" class="form-control m-input m-input--square" value="{{(isset($data['results']->budget) ? $data['results']->budget : '')}}" required>
               </div>
            </div>
            <div class="col-md-3">
               <div class="form-group m-form__group">
                  <label for="employee">Type</label>
                  <select class="form-control" name="type" data-option-id="{{(isset($data['results']->type) ? $data['results']->type : '')}}" required>
                     <option value="">Select</option>
                     <option>Fixed Price</option>
                     <option>Hourly</option>
                     <option>Weekly </option>
                     <option>Monthly</option>
                  </select>
               </div>
            </div>
            <div class="col-md-3">
               <div class="form-group m-form__group">
                  <label for="employee">Platform</label>
                  <select class="form-control" name="platform" data-option-id="{{(isset($data['results']->platform) ? $data['results']->platform : '')}}" required>
                  <option value="">Select</option>
                     <option>Upwork</option>
                     <option>Facebook</option>
                     <option>Local Market</option>
                  </select>
               </div>
            </div>
            <div class="col-md-2">
               <div class="form-group m-form__group">
                  <label for="employee">Status</label>
                  <select class="form-control" name="status" data-option-id="{{(isset($data['results']->status) ? $data['results']->status : '')}}" required>
                  <option value="">Select</option>
                     <option>Pending</option>
                     <option>On Hold</option>
                     <option>Cancelled</option>
                     <option>Completed</option>
                  </select>
               </div>
            </div>
            <div class="col-md-12">
               <div class="form-group m-form__group">
                  <label>Details</label>
                  <textarea type="text" name="details" class="form-control m-input m-input--square" required>{{(isset($data['results']->details) ? $data['results']->details : '')}}</textarea>
               </div>
            </div>
         </div>
      </div>
   </div>
</form>
   </div>
</div>
<script type="text/javascript">
   $(document).ready(function() {
      $('.m-admin').addClass('m-menu__item--open');
    $('.m-detaches').addClass('m-menu__item--active');

       $("#form-submit").validate( {
           rules: {
               name: {
                   required: !0
               },
           }
           , invalidHandler:function(e, r) {
               mUtil.scrollTo("m_form_2", -200), swal( {
                           title:"", text:"There are some errors in your submission. Please correct them.", type:"error", confirmButtonClass:"btn btn-secondary m-btn m-btn--wide", onClose:function(e) {
                           }
                       }
               ), e.preventDefault()
           }
           , submitHandler:function(e) {
               return true;
           }
       });
   });
</script>
@endsection
