<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ExpenseController extends Controller
{

	public function expense($id = -1)
    {
        $data['page_title'] = "Add Expense";
        if ($id != -1) {
            $data['page_title'] = "Update Expense";
            $data['results'] = Expense::where('id', $id)->first();
            // dd($data['results']);
            check_empty($data['results'], 'Expense');
        }
        return view('expenses.expense', compact('data'));
    }
    public function saveexpense(Request $request)
    {
        $id = $request->id;
        $modal = new Expense;
        $data = $request->all();
        $action = "Added";
        $data['date'] = db_format_date($request->date);

        if ($id) {
            $action = "Updated";
            $modal = Expense::find($id);
            $affected_rows = $modal->update($data);
        } else {
            $modal = $modal::create($data);
        }
        Session::put('message', set_message($modal, 'Expenses', $action));
        return Redirect('/expenses');
    }
     public function expenses()
    {
        $data['page_title'] = "Expenses";
        $data['results'] = Expense::get();
        return view('expenses.view', compact('data'));
    }
    public function deleteexpense($id)
    {
        $affected_rows = Expense::find($id)->delete();
        Session::put('message', set_message($affected_rows, 'Expense', 'Deleted'));
        return redirect()->back();

    }



























}	
  