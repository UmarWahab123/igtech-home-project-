@extends('../../layout.header')
@section('title',$data['page_title'])
@section('content')
<!-- BEGIN: Subheader -->
<form id="form-submit" action="{{ url('/savesalary') }}" method="post">
   <div class="m-subheader ">
      <div class="d-flex align-items-center">
      <div class="mr-auto">
            <h3 class="m-subheader__title ">{{$data['page_title']}}</h3>
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
   <div class="card p-5">
   <div class="card-body">
         <div class="row">
            <div class="col-lg-3">
               <div class="form-group m-form__group">
                  <label for="employee">Employee Id</label>
                  <select class="form-control" name="employees_id" data-option-id="{{(isset($data['result']->employees_id) ? $data['result']->employees_id : '')}}" required>
                  <option value="">Select</option>
                    @foreach($data['employees'] as $key=>$value)
                     <option value="{{$value->id}}">{{$value->name}}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="form-group m-form__group">
                  <label>Date</label>
                  <div class='input-group'>
                     <input name="date" type='text' value="{{(isset($data['results']->date) ? format_date($data['results']->date) : '')}}" class="form-control m-input m_datepicker" required/>
                     <div class="input-group-append">
                        <span class="input-group-text">
                        <i class="la la-calendar-check-o"></i>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="form-group m-form__group">
                  <label>Salary Amount</label>
                  <input type="text" name="salary_amount" class="form-control m-input m-input--square" value="{{(isset($data['results']->salary_amount) ? $data['results']->salary_amount : '')}}" required>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="form-group m-form__group">
                  <label>Bonus Amount</label>
                  <input type="text" name="bonus_amount" class="form-control m-input m-input--square" value="{{(isset($data['results']->bonus_amount) ? $data['results']->salary_amount : '')}}" required>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="form-group m-form__group">
                  <label for="employee">Status</label>
                  <select class="form-control" name="status" data-option-id="{{(isset($data['results']->status) ? $data['results']->status : '')}}" required>
                  <option value="">Select</option>
                     <option>paid</option>
                     <option>pending</option>
                     <option>on hold</option>
                  </select>
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
