<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Payments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PaymentsController extends Controller
{

    public function paymentmodal(Request $request)
    {
        $data['project_id'] = $request->project_id;
        $data['results'] = Payments::where('id', $request->id)->first();

        // dd($data['results']);
        $modal = view('payment.save', compact('data'))->render();
        $response = array('response' => $modal);
        return json_encode($response);
    }
    public function savepayment(Request $request)
    {
        $id = $request->id;
        $modal = new Payments;
        $data = $request->all();
        $data['date'] = db_format_date($request->date);

        $action = "Added";
        if ($id) {
            $action = "Updated";
            $modal = Payments::find($id);
//           dd($modal);
            $affected_rows = $modal->update($data);
        } else {
            $affected_rows = $modal::create($data);
        }
        $results = Payments::where('project_id', $request->project_id)->get();
        $results = view('payment.view', compact('results'))->render();
        $response = array('response' => $results);
        // dd($response);
        return json_encode($response);
    }
    public function deletepayment($id)
    {
        $affected_rows = Payments::find($id)->delete();
        Session::put('message', set_message($affected_rows, 'Payments', 'deleted'));
        return redirect()->back();

    }

}
