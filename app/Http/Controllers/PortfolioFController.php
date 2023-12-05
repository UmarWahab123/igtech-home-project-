<?php



namespace App\Http\Controllers;



use App\Models\PortfolioCateg;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;



class PortfolioFController extends Controller

{

	public function portfoliocateg(){

		$data['page_title'] = "Portfolio Categories";

		$data['results'] = PortfolioCateg::orderBy('order_by')->get();

		return view('portfolio categories.view',compact('data'));

	}

    public function deleteportfoliocat($id)

    {

        $affected_rows = PortfolioCateg::find($id)->delete();

        Session::put('message', set_message($affected_rows, 'Portfolio Category', 'Deleted'));

        return redirect()->back();



    }

     public function addportfoliocat($id = -1)

    {

        $data['page_title'] = "Add Portfolio Categories";

        if ($id != -1) {

            $data['page_title'] = "Update Portfolio Categories";

            $data['results'] = PortfolioCateg::where('id', $id)->first();

            // dd($data['results']);

            check_empty($data['results'], 'PortfolioCateg');

        }

        return view('portfolio categories.save', compact('data'));

    }

    public function saveportfoliocat(Request $request)

    {

        $id = $request->id;

        $modal = new PortfolioCateg;

        $data = $request->all();

        $action = "Added";

        

        if ($id) {

            $action = "Updated";

            $modal = PortfolioCateg::find($id);

            $affected_rows = $modal->update($data);

        } else {

            $modal = $modal::create($data);

        }

        Session::put('message', set_message($modal, 'Portfolio Category', $action));

        return Redirect('/portfoliocateg');

    }



}