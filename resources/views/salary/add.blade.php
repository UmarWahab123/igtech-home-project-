<form id="notesform" action="#" method="post">
 {{ csrf_field() }}  
<div class="modal-body">
      <input type="hidden" name="employees_id" value="{{$data['employees_id']}}">
         <input type="hidden" name="id" value="{{(isset($data['results']->id) ? $data['results']->id : '')}}">

      <div class="m-portlet__body">
         <div class="row">
           
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
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary savesalary">Save</button>
    </div>
</form>
<script>
    datepickerfun();
    selectoption();
</script>
