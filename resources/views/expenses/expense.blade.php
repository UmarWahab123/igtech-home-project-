@extends('../../layout.header')

@section('title',$data['page_title'])

@section('content')

<!-- BEGIN: Subheader -->

<form id="form-submit" action="{{ url('/saveexpense') }}" method="post">

   <div class="m-subheader ">

      <div class="d-flex align-items-center">

        <div class="mr-auto">

            <h1 class="m-subheader__title" id="onedfd">{{$data['page_title']}}</h2>

        </div>

         <div class="pull-right">

            <div class="form-group m-form__group">

               @php echo show_button(url('/expenses'),'Back'); @endphp

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

            <div class="col-lg-4">

               <div class="form-group m-form__group">

                  <label>Particulars</label>

                  <input type="text" name="particulars" class="form-control m-input m-input--square" value="{{(isset($data['results']->particulars) ? $data['results']->particulars : '')}}" required>

               </div>

            </div>

              <div class="col-lg-3">

               <div class="form-group m-form__group">

                  <label>Amount</label>

                  <input type="text" name="amount" class="form-control m-input m-input--square" value="{{(isset($data['results']->amount) ? $data['results']->amount : '')}}" required>

               </div>

            </div> 



              <div class="col-lg-2">

               <div class="form-group m-form__group">

                  <label for="employee">Type</label>

                  <select class="form-control" name="type" data-option-id="{{(isset($data['results']->type) ? $data['results']->type : '')}}" required>

                  <option value="">Select</option>

                     <option value="paid">Paid</option>

                     <option value="pending">Pending</option>

                     <option value="on hold">On hold</option>

                  </select>

               </div>

            </div>      

         </div>

         <div class="row">        

            <div class="col-lg-12">

               <div class="form-group m-form__group txt">

                  <label>Details</label>

                  <textarea type="text" name="details" class="form-control m-input m-input--square" required>{{(isset($data['results']->details) ? $data['results']->details : '')}}</textarea>

               </div>

            </div>

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

