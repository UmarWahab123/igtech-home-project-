<?php



namespace App\Http\Controllers;



use App\Models\Contact;

use App\Models\Pages;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Mail;

use App\Mail\TestMail;



class ContactController extends Controller

{

	public function contact(){

        $data['banner'] = Pages::where('type','Contacts')->first();

		return view('frontend.contact.contacts',compact('data'));

	}

	public function contactus(Request $request)

    {

        $contact = new Contact;

        $data = $request->all();

        $action = "Send";

        $contact = $contact::create($data);

     

        $this->validate($request,[

            'name'    => 'required',

            'email'   => 'required|email',

            'message' => 'required'

        ]);

       $this->send_email_test($request->email,'Sanga ye','emails.mail',$data);
        
       Session::put('message', set_message($contact,'Contact' , 'Sent'));


        return Redirect('/contact-us');

    }

     

   function send_email_test($email,$subject,$template,$data)

    {

        Mail::send($template, ['data'=>$data], function($message) use ($subject, $email) {

                $message->to('genesis@igtechservices.com',$subject)->subject($subject);

                $message->from($email,$subject);

                 });



    }





     public function contacts()

    {

        $data['page_title'] = "Contacts";

        $data['results'] = Contact::get();

        return view('contacts.contact-us', compact('data'));

    }



}

  



