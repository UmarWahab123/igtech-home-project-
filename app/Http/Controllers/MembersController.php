<?php



namespace App\Http\Controllers;



use App\Models\Members;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;



class MembersController extends Controller

{

	public function members(){

		$data['page_title'] = "Team Members";

		$data['results'] = Members::orderBy('order_by')->get();

		return view('members.member',compact('data'));

	}

	  public function addmembers($id = -1)

    {

        $data['page_title'] = "Add Member";

        if ($id != -1) {

            $data['page_title'] = "Update Member";

            $data['results'] = Members::where('id', $id)->first();

            

            check_empty($data['results'], 'Members');

        }

        return view('members.save', compact('data'));

    }

     public function savemembers(Request $request)

    {

        $id = $request->id;

        $modal = new Members;

        $data = $request->all();
        

        $action = "Added";

        $data['joining_date'] = db_format_date($request->joining_date);

        



        if ($id) {

            $action = "Updated";

            $modal = Members::find($id);

            $affected_rows = $modal->update($data);

        } else {

            $modal = $modal::create($data);

        }

        Session::put('message', set_message($modal, 'Members', $action));

        return Redirect('/members');

    }

     public function uploadprofile(Request $request){

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

     public function deletemember($id)

    {

        $affected_rows = Members::find($id)->delete();

        Session::put('message', set_message($affected_rows, 'Members', 'Deleted'));

        return redirect()->back();



    }

 

























}