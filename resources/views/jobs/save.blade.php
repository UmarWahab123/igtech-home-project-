@extends('../../layout.header')

@section('title',$data['page_title'])

@section('content')

<!-- BEGIN: Subheader -->

<form id="form-submit" action="{{ url('/savejobs') }}" method="post">

   <div class="m-subheader ">

      <div class="d-flex align-items-center">

        <div class="mr-auto">

            <h2 class="m-subheader__title ">{{$data['page_title']}}</h2>

        </div>

         <div class="pull-right">

            <div class="form-group m-form__group">

               @php echo show_button(url('/jobs'),'Back'); @endphp

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

            <div class="col-lg-3">

               <div class="form-group m-form__group">

                  <label>Title</label>

                  <input type="text" name="title" class="form-control m-input m-input--square" value="{{(isset($data['results']->title) ? $data['results']->title : '')}}" required>

               </div>

            </div>

             <div class="col-lg-3">

               <div class="form-group m-form__group">

                  <label>Advertised By</label>

                  <input type="text" name="advertised_by" class="form-control m-input m-input--square" value="{{(isset($data['results']->advertised_by) ? $data['results']->advertised_by : '')}}" required>

               </div>

            </div>   

         <div class="col-lg-3">
         <div class="form-group m-form__group">
            <label for="portfolioo categories">Order By</label>
            <select class="form-control" name="status" data-option-id="{{(isset($data['results']->status) ? $data['results']->status : '')}}">
            <option value="">Select</option>
               <option value="active">Active</option>
               <option value="inactive">Inactive</option>
            </select>
         </div>
      </div>

         </div>

         <div class="row">

           <div class="col-lg-12">

               <div class="form-group m-form__group">

               <label>Short Description</label>

               <textarea type="text" name="short_description" class="form-control m-input m-input--square" required>{{(isset($data['results']->short_description) ? $data['results']->short_description : '')}}</textarea>

               </div>

            </div> 

         </div>

         <div class="row">   

             <div class="col-md-12">

               <div class="form-group m-form__group">

                  <label>Long Description</label>

                  <textarea type="text" name="long_description" class="form-control m-input m-input--square summernote" required>{{(isset($data['results']->long_description) ? $data['results']->long_description : '')}}</textarea>

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
      $(".summernote").summernote({height:250})

       $("#form-submit").validate( {

           rules: {

               name: {

                   required: !0

               },

           }

   

       });

   });

</script>

@endsection

