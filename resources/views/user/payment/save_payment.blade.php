@extends('../../layout.header')
@section('title',$data['page_title'])
@section('content')
        <!-- BEGIN: Subheader -->
<form id="form-submit" action="{{ url('/savepayment') }}" method="post">

    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">{{$data['page_title']}}</h3>
            </div>
            <div class="pull-right">
                <div class="form-group m-form__group">
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
                        <div class="col-md-4">
                            <div class="form-group m-form__group">
                                <label>Transaction No</label>
                                <input type="text" name="transaction_no" class="form-control m-input m-input--square" readonly value="{{(isset($data['results']->transaction_no) ? $data['results']->transaction_no : '')}}" readonly="">
                            </div>
                            <div class="form-group m-form__group">
                                <label>Payment Date </label>
                                <div class='input-group'>
                                    <input type='text' autocomplete="off" value="{{(isset($data['results']->date) ? format_date($data['results']->date) : '')}}" class="form-control m-input m_datepicker" name="date" />
                                    <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar-check-o"></i>
                                            </span>
                                    </div>
                                </div>
                            </div>
                             <div class="form-group m-form__group">
                                <label>Account# </label>
                                <input type="text" name="account_no" class="form-control m-input m-input--square" value="{{(isset($data['results']->account_no) ? $data['results']->account_no : '')}}">
                            </div>
                            
                        
                        </div>
                        <div class="col-md-4">
                           <div class="form-group m-form__group">
                                <label>Currency </label>
                                 <select name="currency" class="form-control select2" data-option-id="{{(isset($data['results']->currency) ? $data['results']->currency : '')}}">
                                    <option value="">Select</option>
                                    <option>£</option>
                                    
                                </select>
                            </div>
                            <div class="form-group m-form__group">
                                <label>Total Amount </label>
                                <input type="number" name="total_amount" class="form-control m-input m-input--square" value="{{(isset($data['results']->total_amount) ? $data['results']->total_amount : '')}}">
                            </div>
                             <div class="form-group m-form__group">
                                <label>Paid By</label>
                                <select name="user_id" class="form-control select2" data-option-id="{{(isset($data['results']->user_id) ? $data['results']->user_id : '')}}">
                                    <option value="">Select</option>
                                     @foreach($data['users'] as $key=>$value)
                                        <option value="{{$value->id}}">{{$value->first_name}} {{$value->last_name}}</option>
                                    @endforeach 
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                             <div class="form-group m-form__group">
                                <label>Payment Mode</label>
                                <select name="payment_mode" class="form-control select2" data-option-id="{{(isset($data['results']->payment_mode) ? $data['results']->payment_mode : '')}}">
                                    <option value="">Select</option>
                                    <option>Cash</option>
                                    <option>Mortgaged</option>
                                    <option>Debit Card</option>
                                    <option>Credit Card</option>
                                    <option>BACS</option>
                                    <option>Cheque</option>
                                    <option>Cash & Card</option>
                                    <option>Cash & BACS</option>
                                    <option>Cash & Cheque</option>
                                    <option>Other</option>
                                   
                                   
                                </select>
                            </div>
                           
                            <div class="form-group m-form__group">
                                <label>Description </label>
                                <textarea class="form-control" name="description" rows="3">{{(isset($data['results']->desc) ? $data['results']->description : '')}}</textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                   <h3><b>Payment Detail</b></h3>
                   <br>
                    <div class="row">
                         <div class="col-md-4">
                            <div class="form-group m-form__group">
                                <label>Account Head</label>
                                <select name="payment_head" class="form-control select2" data-option-id="{{(isset($data['results']->payment_head) ? $data['results']->payment_head : '')}}">
                                    <option value="">Select</option>
                                    @foreach($data['paymentheads'] as $key=>$value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                             <div class="form-group m-form__group">
                                <label>Paid Amount </label>
                                <input type="number" name="paid_amount" class="form-control m-input m-input--square" value="{{(isset($data['results']->paid_amount) ? $data['results']->paid_amount : '')}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group m-form__group">
                                <label>Payment Status</label>
                                <select name="status" class="form-control select2" data-option-id="{{(isset($data['results']->status) ? $data['results']->status : '')}}">
                                    <option value="">Select</option>
                                    <option>Paid</option>
                                    <option>Unpaid</option>
                                   
                                </select>
                            </div>
                        </div>
                    </div>
                    

            </div>
        </div>
    </div>
</form>

<script type="text/javascript">
    $(document).ready(function() {
        $('.m-userroles').addClass('m-menu__item--open');
    $('.m-payments').addClass('m-menu__item--active');

        $("#form-submit").validate( {
            rules: {
                user_id: {
                    required: !0
                },
                date: {
                    required: !0
                },
                payment_mode: {
                    required: !0
                }
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