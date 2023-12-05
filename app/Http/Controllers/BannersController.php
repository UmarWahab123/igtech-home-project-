<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BannersController extends Controller
{
    public function bannerimg(){
		$data['page_title'] = "Banner Image";
		$data['results'] = Banner::get();

		return view('banners.view',compact('data'));
	}
    public function deletebannerimg($id)
    {
        $affected_rows = Banner::find($id)->delete();
        Session::put('message', set_message($affected_rows, 'Banner Image', 'Deleted'));
        return redirect()->back();

    }
     public function addbannerimg($id = -1)
    {    	
        $data['page_title'] = "Add Banner Image";   
        if ($id != -1) {
            $data['page_title'] = "Update Banner Image";
            $data['results'] = Banner::where('id', $id)->first();
            check_empty($data['results'], 'Banner');
        }
        return view('banners.save', compact('data'));
    }
    public function savebannerimg(Request $request)
    {  
        $id = $request->id;
        $modal = new Banner;
        $data = $request->all();
        $action = "Added";
        
        if ($id) {
            $action = "Updated";
            $modal = Banner::find($id);
            $affected_rows = $modal->update($data);
        } else {
            $modal = $modal::create($data);
        }
        Session::put('message', set_message($modal, 'Banner Image', $action));
        return Redirect('/bannerimg');
    }
      public function uploadbannerimg(Request $request){
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
