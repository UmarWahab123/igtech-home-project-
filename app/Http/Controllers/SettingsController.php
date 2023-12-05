<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{
		public function setting(){
		$data['page_title'] = "Settings";
		$data['results'] = Settings::first();
		
		return view ('settings.form',compact('data'));

	}
	 public function savesettingsinfo(Request $request)
    {
        $id = $request->id;
        $modal = new Settings;
        $data = $request->all();

        $action = "Added";
         if ($id) {
            $action = "Updated";
            $modal = Settings::find($id);
            $affected_rows = $modal->update($data);
        } else {
           $modal = $modal::create($data);
        }    
        Session::put('message', set_message($modal, 'Settings', $action));
        return Redirect()->back();
    }
   public function uploadlogo(Request $request){
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