<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Company;
use App\Comment;
use App\Post;
use App\UserCompany;
use File;
use Validator;
use illuminate\support\collection;

class CommentController extends Controller
{
    public function addPost(Request $request)
    {
    	$empty_object = new \stdClass();

    	$validator = Validator::make($request->all(), [
           'userId'    => 'required',
        ]);

        // dd($request->all());

    	if ($validator->fails()) {

     		return response()->json(['error'=>$validator->errors()->first()],404);

	    }else{

            $post = new Post;
            
            $post->userId           = ($request->userId) ? $request->userId : 0;
            $post->post      		= ($request->post) ? $request->post : "";

            $file = \Request::file('postPhotoUrl');

            if(!$file == ""){
                $extension = $file->getClientOriginalExtension();
                $orginalFileName = $file->getFilename();
                $org_name = $orginalFileName.'.'.$extension;
                $file->move(public_path().'/images/post',$org_name);
                // dd($file);
                $post->postPhotoUrl =  url('public/images/post/'.$org_name);
            }else{
            	$post->postPhotoUrl     = "";
            }
            
            // $post->likesCount       = ($request->likesCount) ? $request->likesCount : 0;
            // $post->commentsCount 	= ($request->commentsCount) ? $request->commentsCount : 0;
            $post->save();

	    	return response()->json(['success' => 'Post created successfully'],200);
		}
	}

	public function getPost(Request $request)
    {
    	$empty_object = new \stdClass();

    	$posts = Post::orderBy('postId','Desc')->get();

    	return response()->json(['posts'=>$posts,'success' => 'Post created successfully'],200);
		
	}

	public function editPost(Request $request)
    {
    	$empty_object = new \stdClass();

    	$id = $request->id;

    	if($id != null)
    	{
    		$post = Post::where('postId',$id)->first();

    		return response()->json(['post'=>$post,'success' => 'Post edited successfully'],200);
    	}else{

    		return response()->json(['error' => 'Post not edited'],404);
    	}
    	
		
	}

	public function updatePost(Request $request){

        $empty_object = new \stdClass();

        $id = $request->id;
        // dd($request->all());
        $post = Post::find($id);

        if($post != null)
        {
            if(isset($request->userId))
            {
                $post->userId  =  $request->userId;
            }

            if(isset($request->post))
            {
                $post->post = $request->post;
            }

            if($post->postPhotoUrl != "")
            {
                $imageName = basename($post->postPhotoUrl);
                $image_path = public_path().'/images/post/'.$imageName;
                
                if (File::exists($image_path)) {
                    File::delete($image_path);
                    // unlink($image_path);
                }
            }
            
            $file = \Request::file('postPhotoUrl');

            if(!$file == ""){
                $extension = $file->getClientOriginalExtension();
                $orginalFileName = $file->getFilename();
                $org_name = $orginalFileName.'.'.$extension;
                $file->move(public_path().'/images/post',$org_name);
                // dd($file);
                $post->postPhotoUrl =  url('public/images/post/'.$org_name);
            }

            $post->save();
            
            return response()->json(['success' => 'Post updated successfully'],200);
        }else{

            return response()->json(['error' => 'Post not updated'],404);
        }
    }
}
