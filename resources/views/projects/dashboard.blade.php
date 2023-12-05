@extends('../../layout.header')

@section('title',$data['page_title'])

@section('content')

<style>

.container{

    margin-top: 15px;

    margin-left: 10px;

}

#one{

  text-align: center;

}

#two{

text-align: center;

}



</style>



  <div class="container">

    <div class="row">

      <div class="col-lg-3">

      <div class="card p-5">

      <h4>Total Projects</h4>

      <h2 id="two">{{$data['projects']}}</h2>



      </div>

      </div>



      <div class="col-lg-3">

      <div class="card p-5">

      <h4>Total Payments</h4>

      <h2 id="one">{{ number_format($data['results']) }}</h2>

      </div>

      </div>



      <div class="col-lg-3">

      <div class="card p-5">

      <h4>Total Employees</h4>

      <h2 id="one">{{$data['employee']}}</h2>

      </div>

      </div>



       <div class="col-lg-3">

      <div class="card p-5">

      <h4>Total Salaries</h4>

      <h2 id="one">Rs: {{number_format($data['salary'])}}</h2>

      </div>

      </div>

    </div>

    <br>

    <div class="row">

       <div class="col-lg-3">

      <div class="card p-5">

      <h4>Total Expenses</h4>

      <h2 id="one">Rs: {{number_format($data['expense'])}}</h2>

      </div>

      </div>

    </div>

  </div>



<script type="text/javascript">
   $(document).ready(function(){
     $('.testimonialsss').addClass('m-menu__item--active');
     
});

</script>
@endsection

