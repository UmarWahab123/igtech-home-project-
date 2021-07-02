 <!DOCTYPE html>
    <html>
    <head>
      <title></title>
    </head>
    <body>
    <h3>Hello {{$data['name']}},</h3>
<p>
We hereby send a link to where you can make an online payment of your invoice number <b>{{$data['invoice_no']}}</b>. Once you have made the payment, the future invoice will automatically be paid via the card. Amount to paid is 
<b>{{$data['amount']}}</b>
</p>

<p>
You can go on this link to pay <a href="{{url('/pay')}}?amount={{$data['amount']}}&&name={{$data['name']}}&&email={{$data['email']}}&&invoice_no={{$data['invoice_no']}}">Go to Payment Page</a>
</p>

    </body>
    </html>