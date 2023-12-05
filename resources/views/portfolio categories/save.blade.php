@extends('../../layout.header')

@section('title',$data['page_title'])

@section('content')

<!-- BEGIN: Subheader -->

<form id="form-submit" action="{{ url('/saveportfoliocat') }}" method="post">

  {{ csrf_field() }}

   <div class="m-subheader ">

      <div class="d-flex align-items-center">

          <div class="mr-auto">

            <h1 class="m-subheader__title ">{{$data['page_title']}}</h1>

         </div>

         <div class="pull-right">

            <div class="form-group m-form__group">

               @php echo show_button(url('/portfoliocateg'),'Back'); @endphp

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
      
            <div class="col-md-8">

               <div class="form-group m-form__group">

                  <label>Portfolio Category Name</label>

                  <input type="text" name="name" class="form-control m-input m-input--square" value="{{(isset($data['results']->name) ? $data['results']->name : '')}}" >

               </div>

            </div>

             <div class="col-lg-4">
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

      </div>

   </div>

</form>

   </div>

</div>

<script type="text/javascript">

   $(document).ready(function() {

    $('select[data-option-id]').each(function () {
    $(this).val($(this).data('option-id'));
    });
   });

</script>

@endsection

