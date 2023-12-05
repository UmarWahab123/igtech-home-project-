@extends('../../layout.header')
@section('title',$data['page_title'])
@section('content')
<!-- BEGIN: Subheader -->
<form id="form-submit" action="{{ url('/addemployee') }}" method="post">
   <div class="m-subheader ">
      <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h2 class="m-subheader__title ">{{$data['page_title']}}</h2>
        </div>
         <div class="pull-right">
            <div class="form-group m-form__group">
               @php echo show_button(url('/employee'),'Back'); @endphp
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
         <div class="row">
            <div class="col-lg-4">
               <div class="form-group m-form__group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control m-input m-input--square" value="{{(isset($data['results']->name) ? $data['results']->name : '')}}" required>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="form-group m-form__group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control m-input m-input--square" value="{{(isset($data['results']->email) ? $data['results']->email : '')}}" required>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="form-group m-form__group">
                  <label>Age</label>
                  <input type="number" name="age" class="form-control m-input m-input--square" value="{{(isset($data['results']->age) ? $data['results']->age : '')}}" required>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-4">
               <div class="form-group m-form__group">
                  <label>CNIC</label>
                  <input type="text" name="cnic" class="form-control m-input m-input--square" value="{{(isset($data['results']->cnic) ? $data['results']->cnic : '')}}" required>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="form-group m-form__group">
                  <label>Joining Date</label>
                  <div class='input-group'>
                     <input name="joining_date" type='text' value="{{(isset($data['results']->joining_date) ? format_date($data['results']->joining_date) : '')}}" class="form-control m-input m_datepicker" required/>
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
                  <label>Basic Salary</label>
                  <input type="text" name="basic_salary" class="form-control m-input m-input--square" value="{{(isset($data['results']->basic_salary) ? $data['results']->basic_salary : '')}}" required>
               </div>
            </div>
         </div>
              <div class="row">
            <div class="col-lg-4">
               <div class="form-group m-form__group">
                  <label>Designation</label>
                  <input type="text" name="designation" class="form-control m-input m-input--square" value="{{(isset($data['results']->designation) ? $data['results']->designation : '')}}" required>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="form-group m-form__group">
                  <label>Contact Number</label>
                  <input type="number" name="contact_no" class="form-control m-input m-input--square" value="{{(isset($data['results']->contact_no) ? $data['results']->contact_no : '')}}" required>
               </div>
            </div>
             <div class="col-lg-2">
               <div class="form-group m-form__group">
                  <label for="employee">Status</label>
                  <select class="form-control" name="status" data-option-id="{{(isset($data['results']->status) ? $data['results']->status : '')}}" required>
                  <option value="">Select</option>
                     <option value="active">Active</option>
                     <option value="inactive">Inactive</option>
                  </select>
               </div>
            </div>
         </div>
            <div class="row">
               <div class="col-lg-12">
               <div class="form-group m-form__group txt">
                  <label>Details</label>
                  <textarea type="text" name="address" class="form-control m-input m-input--square" required>{{(isset($data['results']->address) ? $data['results']->address : '')}}</textarea>
               </div>
            </div>
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
