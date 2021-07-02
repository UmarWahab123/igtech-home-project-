<form id="notesform" action="{{url('/savepayment')}}" method="post">
    {{ csrf_field() }}
    <div class="modal-body">

                    <input type="hidden" name="project_id" value="{{$data['project_id']}}">
                    <input type="hidden" name="id" value="{{(isset($data['results']->id) ? $data['results']->id : '')}}">
                    <div class="m-portlet__body">
                        <div class="row">
                            <div class="col-md-3">
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
                            <div class="col-md-3">
                            <div class="form-group m-form__group">
                                <label>Amount</label>
                                <input type="number"  min="1" step="any" name="amount" class="form-control m-input m-input--square" value="{{(isset($data['results']->amount) ? $data['results']->amount : '')}}" required>
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group m-form__group">
                                <label for="employee">Payment Method</label>
                                <select class="form-control" name="payment_method" data-option-id="{{(isset($data['results']->payment_method) ? $data['results']->payment_method : '')}}" required>
                                   <option value="">Select</option>
                                    <option>Credit Card</option>
                                    <option>Paypal</option>
                                    <option>Local Bank Transfer</option>
                                    <option>Payoneer</option>
                                </select>
                            </div>
                            </div>
                             <div class="col-md-3">
                                <div class="form-group m-form__group">
                                    <label for="employee">Status</label>
                                    <select class="form-control" name="status" data-option-id="{{(isset($data['results']->status) ? $data['results']->status : '')}}" required>
                                    <option value="">Select</option>
                                        <option>Pending..</option>
                                        <option>Paid</option>
                                    </select>
                                </div>
                                </div>
                                </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary savepayment">Save</button>
    </div>
</form>
<script>
    datepickerfun();
    selectoption();
</script>
