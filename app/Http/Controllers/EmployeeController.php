<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
	public function employee(){
		$data['page_title'] = "Employees";
		$data['results'] = Employee::get();
		return view('employees.employee',compact('data'));
	}
    public function deleteemployee($id)
    {
        $affected_rows = Employee::find($id)->delete();
        Session::put('message', set_message($affected_rows, 'Employee', 'Deleted'));
        return redirect()->back();

    }
     public function addemployee($id = -1)
    {
        $data['page_title'] = "Add Employee";
        if ($id != -1) {
            $data['page_title'] = "Update Employee";
            $data['results'] = Employee::where('id', $id)->first();
            // dd($data['results']);
            check_empty($data['results'], 'Employee');
        }
        return view('employees.save', compact('data'));
    }
    public function saveemployee(Request $request)
    {
        $id = $request->id;
        $modal = new Employee;
        $data = $request->all();
        $action = "Added";
        $data['joining_date'] = db_format_date($request->joining_date);
        

        if ($id) {
            $action = "Updated";
            $modal = Employee::find($id);
            $affected_rows = $modal->update($data);
        } else {
            $modal = $modal::create($data);
        }
        Session::put('message', set_message($modal, 'Employee', $action));
        return Redirect('/employee');
    }
     public function employeesdetails($id)
    {
        $data['page_title'] = "Details";
        $data['results'] = Employee::where('id', $id)->first();

        $results = Salary::where('employees_id', $id)->get();
        $data['salary'] = view('salary.view', compact('results'))->render();
        return view('employees.details', compact('data'));
    }

}