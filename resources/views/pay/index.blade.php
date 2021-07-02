<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <style type="text/css">
    #card-element {
    border: 1px solid #ccc;
    width: 100%;
    padding: 11px;
    }
  </style>
</head>
<body>

    <div class="container col-6">
        <h1 class="text-center">Customer Payment</h1>
        <form action="/charge" method="post" id="payment-form">
     {{ csrf_field() }}
        <div class="card">
  <h5 class="card-header">Customer Information</h5>
  <div class="card-body">
   <div class="row">
        <div class="col-12">
       <div class="form-group">
           <label><b>Name:</b> {{$data->name}}</label>
       </div>
         <div class="form-group">
           <label><b>Email:</b> {{$data->email}}</label>
       </div>
        <div class="form-group">
           <label><b>Amount:</b> {{$data->amount}}</label>
       </div>
       <div class="form-group">
           <label><b>Invoice Number:</b> {{$data->invoice_no}}</label>
       </div>
         <div class="form-row">
    <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display Element errors. -->
    <div id="card-errors" role="alert"></div>
  </div>



        </div>

   </div>

  </div>
<button type="submit" class="btn btn-primary pay " >Pay</button>
</div>

</form>
    </div>
<script src="https://js.stripe.com/v3/"></script>
    <script>
    $(document).ready(function () {

    var stripe = Stripe('{{env('STRIPE_KEY')}}');
var elements = stripe.elements();
 var style = {
        base: {
            color: '#32325d',
            lineHeight: '18px',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };
var card = elements.create('card', {style: style});
card.mount('#card-element')

    var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the customer that there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      //stripeTokenHandler(result.token);
    }
  });
});
  $(document).on('click','.pay',function (){
      $('.pay').prop('disabled',true);

     var token = $('input[name=_token]').val();
     var name='{{$data->name}}';
     var email='{{$data->email}}';
     var amount='{{$data->amount}}';
     var invoice_no='{{$data->invoice_no}}';
      var formdata={'name':name,'email':email,'amount':amount,"invoice_no":invoice_no ,"_token":token}


     $.ajax({
        url: '{{ url('/createPaymentIntent') }}',
        type: "POST",
        data:formdata,
        header:{'X-CSRF-TOKEN':token},
        success: function( data ) {
          handlepayment(data);
        }
      });


    });

    function handlepayment(clientSecret){
      console.log(clientSecret);
    var customer='{{$data->name}}';
      stripe.confirmCardPayment(clientSecret, {
      payment_method: {
      card: card,
      billing_details: {
        name: customer
      }
    },
    setup_future_usage: 'off_session'
  }).then(function(result) {
    if (result.error) {
      console.log(result.error.message);
      $('#card-errors').html(result.error.message);
      $('.pay').prop('disabled',false);
    } else {
      if(result.paymentIntent.status === 'succeeded') {
      window.location.href="{{ url('/thanks') }}" ;
      }
    }
  });
}


});

    </script>
</body>
</html>
