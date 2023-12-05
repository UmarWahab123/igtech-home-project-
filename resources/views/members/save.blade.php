@extends('../../layout.header')

@section('title',$data['page_title'])

@section('content')

<!-- BEGIN: Subheader -->

 <form id="form-submit" action="{{ url('/savemembers') }}" method="post">

   {{ csrf_field() }}

   <div class="m-subheader ">

      <div class="d-flex align-items-center">

         <div class="mr-auto">

            <h1 class="m-subheader__title ">{{$data['page_title']}}</h1>

         </div>

         <div class="pull-right">

            <div class="form-group m-form__group">

               @php echo show_button(url('/members'),'Back'); @endphp

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

            <div class="col-lg-3">

               <div class="form-group m-form__group">

                  <label>Name</label>

                  <input type="text" name="name" class="form-control m-input m-input--square" value="{{(isset($data['results']->name) ? $data['results']->name : '')}}" required>

               </div>

            </div>

               <div class="col-lg-3">

               <div class="form-group m-form__group">

                  <label>Designation</label>

                  <input type="text" name="designation" class="form-control m-input m-input--square" value="{{(isset($data['results']->designation) ? $data['results']->designation : '')}}" required>

               </div>

            </div>

            <div class="col-lg-3">

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
        <div class="col-lg-3">
         <div class="form-group m-form__group">
            <label for="portfolioo categories">Order By</label>
            <select class="form-control" name="order_by" data-option-id="{{(isset($data['results']->order_by) ? $data['results']->order_by : '')}}">
            <option value="">Select</option>
              @for($i=1;$i<=50;$i++)
               <option value="{{$i}}">{{$i}}</option>
              @endfor
            </select>
         </div>
      </div>

         </div>

         <div class="row">

                <div class="col-lg-12">

                            <div class="form-group m-form__group">

                                    <label>Upload</label>

                                    <div class="m-dropzone dropzone  m-dropzone--primary" action="<?=url('/').'/uploadfile?url=-public-uploads-membersprofile'?>" id="members">



                                        <div class="m-dropzone__msg dz-message needsclick">

                                            <h3 class="m-dropzone__msg-title">

                                                Drop files here or click to upload

                                            </h3>

                                        </div>

                                    </div>

                           </div>

                <input type="hidden" name="profile" class="form-control m-input m-input--square" value="{{(isset($data['results']->profile) ? $data['results']->profile : '')}}">

              </div> 

         </div> 

              <img src="{{url(isset($data['results']->profile) ? $data['results']->profile:'')}}" width="90" height="80">



         </div>

      </div>

   </div>

</div>

</form>

<script type="text/javascript">

    dropzonesinglefunc('#members',1,'.jpg,.png,.jpeg','profile','public/uploads/membersprofile/');

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

