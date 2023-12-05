<form id="notesform" action="{{url('/savepayment')}}" method="post">

    {{ csrf_field() }}

         <div class="modal-body">

                    <input type="hidden" name="project_id" value="{{$data['project_id']}}">

                    <input type="hidden" name="id" value="{{(isset($data['results']->id) ? $data['results']->id : '')}}">

                    <div class="m-portlet__body">

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group m-form__group">

                                    <label>Date</label>

                                    <div class='input-group'>

                                        <input name="date" type='text' value="{{(isset($data['results']->date) ? format_date($data['results']->date) : date('d-m-Y'))}}" class="form-control m-input m_datepicker" required/>

                                        <div class="input-group-append">

                                        <span class="input-group-text">

                                            <i class="la la-calendar-check-o"></i>

                                        </span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        <div class="col-md-6">

                            <div class="form-group m-form__group">

                                <label>Amount</label>

                                <input type="number"  min="1" step="any" name="amount" class="form-control m-input m-input--square" value="{{(isset($data['results']->amount) ? $data['results']->amount : '')}}" required>

                            </div>

                            </div>

                        </div>

                            <div class="row">

                        <div class="col-md-4">

                            <div class="form-group m-form__group">

                                <label for="payments">Payment Method</label>

                                <select class="form-control" name="payment_method" data-option-id="{{(isset($data['results']->payment_method) ? $data['results']->payment_method : '')}}" required>

                                 <option value="">Select</option>

                                 <option value="credit card">Credit Card</option>

                                 <option value="paypal">Paypal</option>

                                 <option value="local bank transfer">Local Bank Transfer</option>

                                 <option value="payoneer">Payoneer</option>

                                </select>

                            </div>

                            </div>

                            <div class="col-md-4">

                            <div class="form-group m-form__group">

                                <label for="payments">Currency</label>

                                <select class="form-control" name="currency" data-option-id="{{(isset($data['results']->currency) ? $data['results']->currency : '')}}" required>

                                   <option value="">Select</option>

                                    <option value="USD">USD</option>

                                    <option value="PKR">PKR</option>

                                    <option value="EURO">EURO</option>

                                    <option value="AUD">AUD</option>

                                    <option value="GBP">GBP</option>



                                </select>

                            </div>

                            </div>

                             <div class="col-md-4">

                                <div class="form-group m-form__group">

                                    <label for="payments">Status</label>

                                    <select class="form-control" name="status" data-option-id="{{(isset($data['results']->status) ? $data['results']->status : '')}}" required>

                                    <option value="">Select</option>

                                        <option value="pending">Pending..</option>

                                        <option value="paid">Paid</option>

                                    </select>

                                </div>

                                </div>

                                </div>

                            </div>

                        </div>

                      

    <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        <button type="submit" class="btn btn-primary savepayment">Save</button>

    </div>

</form>

<script type="text/javascript">



      $(document).ready(function() {

       $('select[data-option-id]').each(function (){

        $(this).val($(this).data('option-id'));

      

      });

    }); 

    datepickerfun();

    selectoption();

</script>

