<?php

namespace App\Http\Controllers;
use App\Models\Document;
use App\Models\Payments;
use App\Models\Project;
use App\Models\Employee;
use App\Models\Salary;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProjectsController extends Controller
{
    public function project($id = -1)
    {
        $data['page_title'] = "Add Project";
        if ($id != -1) {
            $data['page_title'] = "Update Project";
            $data['results'] = Project::where('id', $id)->first();
            // dd($data['results']);
            check_empty($data['results'], 'Projects');
        }
        return view('projects.save', compact('data'));
    }
    public function saveproject(Request $request)
    {
        $id = $request->id;
        $modal = new Project;
        $data = $request->all();
        $action = "Added";
        $data['start_date'] = db_format_date($request->start_date);
        $data['end_date'] = db_format_date($request->end_date);
        if ($id) {
            $action = "Updated";
            $modal = Project::find($id);
            $affected_rows = $modal->update($data);
        } else {
            $modal = $modal::create($data);
        }
        Session::put('message', set_message($modal, 'Project', $action));
        return Redirect('/projects');
    }
    public function projects()
    {
        $data['page_title'] = "Projects";
        $data['results'] = Project::get();
        return view('projects.index', compact('data'));
    }
    public function deleteproject($id)
    {
        $affected_rows = Project::find($id)->delete();
        Session::put('message', set_message($affected_rows, 'Project', 'Deleted'));
        return redirect()->back();

    }
    public function detail($id)
    {
        $data['page_title'] = "Details";
        $data['results'] = Project::where('id', $id)->first();
        $results = Payments::where('project_id', $id)->get();
        $data['payments'] = view('payment.view', compact('results'))->render();
        $results = Document::where('project_id', $id)->get();
        $data['document'] = view('documents.view', compact('results'))->render();
        return view('projects.detail', compact('data'));

    }
    public function dashboard()
    {
        $data['page_title'] = "Dashboard";
        $data['results'] = Payments::sum('payments.amount');
        $data['expense'] = Expense::sum('expense.amount');
        $data['projects'] = Project::count();
        $data['employee'] = Employee::count();
        $salary = Salary::sum('salary.salary_amount');
        $bonus = Salary::sum('salary.bonus_amount');
        $data['salary'] = $salary + $bonus;


        return view('projects.dashboard', compact('data'));
    }

}
