@extends('../../layout.header')
@section('title',$data['page_title'])
@section('content')
<style>
   .first{
   margin-left: 20px;
   margin-top:10px;
   }

</style>
<div class="m-subheader ">
   <div class="d-flex align-items-center">
      <div class="mr-auto">
      <h1 id="onedfd">{{$data['page_title']}}</h1>
      </div>
   </div>
</div>
<div class="container first">
   <ul class="nav nav-pills">
      @foreach($data['category'] as $key=>$value)
      <li><a class="getprotfolio cat{{$value->id}}" data-toggle="pill" data-id="{{$value->id}}" href="#cat{{$value->id}}" data-name="{{$value->name}}">{{$value->name}}</a></li>
      @endforeach
   </ul>
   <div class="tab-content tabname">
      @foreach($data['category'] as $key=>$value)
       <div id="cat{{$value->id}}" class="tab-pane fade">
            <div class="portfolio">
    
            </div>      
       </div>
      @endforeach


   </div>
   </div>


@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
   $(document).ready(function(){
    $('.portfolioos').addClass('m-menu__item--open');
     $('.alegories').addClass('m-menu__item--active');
     
      setTimeout(function(){ 
       $(".cat9").trigger("click"); 
       $("#cat9").addClass('active');
       $("#cat9").addClass('in');
       $("#cat9").addClass('show');
      }, 1000);

    $(document).on('click','.getprotfolio',function(){
     var id=$(this).attr('data-id');
     var name=$(this).attr('data-name');
     $.ajax({
      type:"get",
      url:"{{url('allprotfolio')}}/"+id,
      dataType:'json',
      success:function(data){
      $(".portfolio").html(data.response);
         // console.log(data.response);
      
      }
     });
    });

});

</script>