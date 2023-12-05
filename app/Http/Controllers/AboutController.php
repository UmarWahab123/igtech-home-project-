<?php



namespace App\Http\Controllers;

use App\Models\Pages;

use Illuminate\Http\Request;

use App\Models\Testimonials;


use Illuminate\Support\Facades\Session;



class AboutController extends Controller

{

	public function about(){

	    $data['banner'] = Pages::where('type','About')->first();
		$data['testimonials'] = Testimonials::get();



		return view('frontend.abouts.about',compact('data'));

	}











}