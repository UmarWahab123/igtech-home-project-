<?php



namespace App\Http\Controllers;

use App\Models\Portfolio;

use App\Models\Pages;

use App\Models\PortfolioCateg;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;



class PortfolioController extends Controller

{

	public function portfolio(){

        $data['category'] = PortfolioCateg::orderBy('order_by')->get();

        // dd($data['results']);

        $data['portfolio'] = Portfolio::orderBy('order_by')->with('category')->get();

        $data['banner'] = Pages::where('type','Portfolio')->first();





		return view('frontend.portfolios.index',compact('data'));

	}

   

public function portfolioo(){

		$data['page_title'] = "Portfolio";

		$data['results'] = Portfolio::orderBy('order_by')->with('category')->get();



		return view('portfolio.view',compact('data'));

	}

    public function deleteportfolio($id)

    {

        $affected_rows = Portfolio::find($id)->delete();

        Session::put('message', set_message($affected_rows, 'Portfolio', 'Deleted'));

        return redirect()->back();



    }

     public function addportfolio($id = -1)

    {    	

        $data['page_title'] = "Add Portfolio";   

        $data['category_id'] = PortfolioCateg::get();

        if ($id != -1) {

            $data['page_title'] = "Update Portfolio";

            $data['results'] = Portfolio::where('id', $id)->first();

            check_empty($data['results'], 'Portfolio');

        }

        return view('portfolio.save', compact('data'));

    }

    public function saveportfolio(Request $request)

    {  

        $id = $request->id;

        $modal = new Portfolio;

        $data = $request->all();
        $action = "Added";

        

        if ($id) {

            $action = "Updated";

            $modal = Portfolio::find($id);

            $affected_rows = $modal->update($data);

        } else {

            $modal = $modal::create($data);

        }

        Session::put('message', set_message($modal, 'Portfolio', $action));

        return Redirect('/portfolioo');

    }

      public function uploadimage(Request $request){

        $path=$_GET['url'];

        $path = str_replace('-', '/', $path);

        if ( !empty( $_FILES ) ) {

            $date = new \DateTime();

            $current_dir=str_replace('uploads','',getcwd());

            $tempPath = $_FILES[ 'file' ][ 'tmp_name' ];

            $name=str_replace(' ', '', $_FILES['file']['name']);

            $uploadPath = $current_dir.$path. DIRECTORY_SEPARATOR .$date->getTimestamp().'-'. $name;

            move_uploaded_file( $tempPath, $uploadPath );

            $answer = array( 'answer' => 'File transfer completed' );

            $json = json_encode( $answer );

            $newFileName = $date->getTimestamp().'-'. $name;

            echo $newFileName;



        } else {

            echo 'No files';

        }

 }





}

