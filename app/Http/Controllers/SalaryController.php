<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SalaryController extends Controller
{
     
    public function salary(){
        $data['page_title'] = "Salary";
        $data['results'] = Salary::get();
        return view('salary.salary',compact('data'));
    }
     public function addsalaryies($id = -1)
    {
        $data['page_title'] = "Add Salary";
        if ($id != -1) {
            $data['page_title'] = "Update Salary";
            $data['results'] = Salary::where('id', $id)->first();
            check_empty($data['results'], 'Salary');
        }
    	$data['employees'] = Employee::get();

        return view('salary.save', compact('data'));
    }
    public function savesalary(Request $request)
    {
        $id = $request->id;
        $modal = new Salary;
        $data = $request->all();
        $action = "Added";
        $data['date'] = db_format_date($request->date);
        

        if ($id) {
            $action = "Updated";
            $modal = Salary::find($id);
            $affected_rows = $modal->update($data);
        } else {
            $modal = $modal::create($data);
         

        }
        Session::put('message', set_message($modal, 'Salary', $action));
        return Redirect('/salary');
    }
     public function deletesalary($id)
    {
        $affected_rows = Salary::find($id)->delete();
        Session::put('message', set_message($affected_rows, 'Salary', 'Deleted'));
        return redirect()->back();

    }
     public function salarymodal(Request $request)
    {
        $data['employees_id'] = $request->employees_id;
        $data['results'] = Salary::where('id', $request->id)->first();
        // dd($data);
        $modal = view('salary.add', compact('data'))->render();
        $response = array('response' => $modal);
        return json_encode($response);

    }
     public function savesalaryajax(Request $request)
    {
        $id = $request->id;
        $modal = new Salary;
        $data = $request->all();
        $data['date'] = db_format_date($request->date);

        $action = "Added";
        if ($id) {
            $action = "Updated";
            $modal = Salary::find($id);
//           dd($modal);
            $affected_rows = $modal->update($data);
        } else {
            $affected_rows = $modal::create($data);
        }
        $results = Salary::where('employees_id', $request->employees_id)->get();
        $results = view('salary.view', compact('results'))->render();
        $response = array('response' => $results);
        // dd($response);
        return json_encode($response);
    }
  
}
