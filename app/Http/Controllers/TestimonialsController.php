<?php

namespace App\Http\Controllers;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestimonialsController extends Controller
{
    public function testimonials(){
		$data['page_title'] = "Testimonials ";
		$data['results'] = Testimonials::orderBy('order_by')->get();

		return view('testimonials.view',compact('data'));
	}
    public function deleteTestimonials($id)
    {
        $affected_rows = Testimonials::find($id)->delete();
        Session::put('message', set_message($affected_rows, 'Testimonials', 'Deleted'));
        return redirect()->back();

    }
     public function addTestimonials($id = -1)
    {    	
        $data['page_title'] = "Add Testimonials";   
        if ($id != -1) {
            $data['page_title'] = "Update Testimonials";
            $data['results'] = Testimonials::where('id', $id)->first();
            check_empty($data['results'], 'Testimonials');
        }
        return view('testimonials.save', compact('data'));
    }
    public function saveTestimonials(Request $request)
    {  
        $id = $request->id;
        $modal = new Testimonials;
        $data = $request->all();
        $action = "Added";
        unset($data['files']);
        $data['date'] = db_format_date($request->date);
        
        if ($id) {
            $action = "Updated";
            $modal = Testimonials::find($id);
            $affected_rows = $modal->update($data);
        } else {
            $modal = $modal::create($data);
        }
        Session::put('message', set_message($modal, 'Testimonials', $action));
        return Redirect('/testimonials');
    }
      public function uploadTestiImage(Request $request){
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
