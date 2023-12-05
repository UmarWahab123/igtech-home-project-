<?php

namespace App\Http\Controllers;
use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
   
   public function pages(){
		$data['page_title'] = "Pages";
		$data['results'] = Pages::get();

		return view('pages.view',compact('data'));
	}
    public function deletepages($id)
    {
        $affected_rows = Pages::find($id)->delete();
        Session::put('message', set_message($affected_rows, 'Pages', 'Deleted'));
        return redirect()->back();

    }
     public function addpages($id = -1)
    {    	
        $data['page_title'] = "Add Pages";   
        $data['results'] = Pages::get();
        if ($id != -1) {
            $data['page_title'] = "Update Pages";
            $data['results'] = Pages::where('id', $id)->first();
            check_empty($data['results'], 'Portfolio');
        }
        return view('pages.save', compact('data'));
    }
    public function savepages(Request $request)
    {  
        $id = $request->id;
        $modal = new Pages;
        $data = $request->all();
        $action = "Added";
        
        if ($id) {
            $action = "Updated";
            $modal = Pages::find($id);
            $affected_rows = $modal->update($data);
        } else {
            $modal = $modal::create($data);
        }
        Session::put('message', set_message($modal, 'Pages', $action));
        return Redirect('/pages');
    }
      public function bannerimage(Request $request){
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
