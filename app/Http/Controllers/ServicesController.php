<?php



namespace App\Http\Controllers;

use App\Models\Portfolio;

use App\Models\Pages;

use App\Models\PortfolioCateg;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;



class ServicesController extends Controller

{

	public function services(){

        $data['category'] = PortfolioCateg::orderBy('order_by')->get();

        $data['banner'] = Pages::where('type','Services')->first();



        $data['portfolio'] = Portfolio::orderBy('order_by')->get();

		return view('frontend.services.services',compact('data'));

	}











}