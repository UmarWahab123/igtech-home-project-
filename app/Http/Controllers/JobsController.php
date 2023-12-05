<?php



namespace App\Http\Controllers;



use App\Models\Jobs;

use App\Models\Pages;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;



class JobsController extends Controller

{

    public function job(){

        $data['results'] = Jobs::where('status','active')->get();

        $data['banner'] = Pages::where('type','Jobs')->first();

        return view('frontend.jobs.job', compact('data'));



    }

   public function jobdetails($id=-1){



    $data['results'] = Jobs::where('id', $id)->first();    

    return view('frontend.jobs.details', compact('data'));



}

    public function jobs()

    {

        $data['page_title'] = "Jobs";

        $data['results'] = Jobs::get();

        return view('jobs.view', compact('data'));

    }



	public function addjobs($id = -1)

    {

        $data['page_title'] = "Add Jobs";

        if ($id != -1) {

            $data['page_title'] = "Update Jobs";

            $data['results'] = Jobs::where('id', $id)->first();

            // dd($data['results']);

            check_empty($data['results'], 'Jobs');

        }

        return view('jobs.save', compact('data'));

    }

    public function savejobs(Request $request)

    { 

        $id = $request->id;

        $modal = new Jobs;

        $data = $request->all();

        $action = "Added";

        $data['date'] = db_format_date($request->date);

        unset($data['files']);

        if ($id) {

            $action = "Updated";

            $modal = Jobs::find($id);

            $affected_rows = $modal->update($data);

        } else {

            $modal = $modal::create($data);

        }

        Session::put('message', set_message($modal, 'Jobs', $action));

        return Redirect('/jobs');

    }

    public function deletejobs($id)

    {

        $affected_rows = Jobs::find($id)->delete();

        Session::put('message', set_message($affected_rows, 'Jobs', 'Deleted'));

        return redirect()->back();



    }





}	

  