<?php
namespace App\Http\Controllers\Test;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use App\Models\Test\Payments;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

use Stripe;

class PaymentController extends Controller
{
	public function pay(){

		$data=(object)array(
        'name'=>isset($_GET['name']) ? $_GET['name'] : '',
        'email'=>isset($_GET['email']) ? $_GET['email'] : '',
        'amount'=>isset($_GET['amount']) ? $_GET['amount'] : '',
        'invoice_no'=>isset($_GET['invoice_no']) ? $_GET['invoice_no'] : '',
		);
      
		return view('pay.index',compact('data'));
	}

  public function createPaymentIntent(Request $request)
  {   

      $amount=$request->amount;
     Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
     $intent =Stripe\PaymentIntent::create([
                                    'amount' => $amount*100,
                                    'currency' => "DKK",
                                    ]);
     return $intent->client_secret;
  }

	public function all_payment (){
		 $data['page_title'] = "All Payments";
     // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
     // $data['payments']=Stripe\Charges::all(['limit' => 3]);


     $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
$data['payments']=$stripe->charges->all(['limit' => 3]);
foreach ($data['payments'] as $key => $value) {
    // dd($value);
}

     // dd($data);
		return view('payments.allpayments',compact('data'));
	}
     
     public function thanks()
     {
        return view('thank.view');
     }

      public function paymentlink( )
	{
       $data['page_title'] = "Payment Link";
        $data['results'] =  Payments::all();
		return view('payments.paymentlink',compact('data'));
	}

	
	 public function savepaymentlink(Request $request)
	{
       $id=$request->langid;
        $data=$request->all();
        $action="Added";
        //dd($data);
        if($id){
            $action="Updated";
            $affected_rows = Payments::where('id',$id)->update($data);
        }
        else{
        	// $template= view('pay.customeremail',compact('data'))->render();
         //    send_email_test($request->email,' Payment Link',"pay.customeremail",$data);
             $template= view('pay.customeremail',compact('data'))->render();
             $emails=array($request->email);
             myemail($emails,'Payment Link',$template);
            $affected_rows =  Payments::create($data);
        }
        Session::put('message', set_message($affected_rows,'Payment',$action));
        return redirect()->back();

	}
}