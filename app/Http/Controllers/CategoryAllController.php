<?php

namespace App\Http\Controllers;
use App\Models\PortfolioCateg;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryAllController extends Controller
{
	public function allcategory(){
		$data['page_title'] = 'All Category';
	    $data['category'] = PortfolioCateg::get();
        $data['portfolio'] = Portfolio::with('category')->get();
        // dd($data['portfolio']);
		return view('allcategory.view',compact('data'));
	}

	public function allprotfolio($id){
		$data['portfolio']=Portfolio::where('category_id',$id)->get();

         $modal=view('allcategory.details',compact('data'))->render();

         $response=array('response'=>$modal);
         return json_encode($response);
	
         
	}

}