<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class DocumentsController extends Controller
{

    public function documentmodal(Request $request)
    {
        $data['project_id'] = $request->project_id;
        $data['results'] = Document::where('id', $request->id)->first();

        $modal = view('documents.save', compact('data'))->render();
        $response = array('response' => $modal);
        // dd($response);
        return json_encode($response);
    }
     public function savedocument(Request $request)
    {
        $id = $request->id;
        $modal = new Document;
        $data = $request->all();

        $action = "Added";
        if($id) {
            $action = "Updated";
            $modal = Document::find($id);
            $affected_rows = $modal->update($data);
        } else {
            $affected_rows = $modal::create($data);         
        }
        $results = Document::where('project_id', $request->project_id)->get();
        $results = view('documents.view', compact('results'))->render();
        $response = array('response' => $results);
        return json_encode($response);
    }
     public function deletedocument($id)
    {
        $affected_rows = Document::find($id)->delete();
        Session::put('message', set_message($affected_rows, 'Document', 'deleted'));
        return redirect()->back();

    }
     public function uploadfile(Request $request){

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


