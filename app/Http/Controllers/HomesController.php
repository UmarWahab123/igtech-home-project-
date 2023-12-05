<?php



namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\Testimonials;

use App\Models\PortfolioCateg;

use App\Models\Portfolio;

use App\Models\Banner;





use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;



class HomesController extends Controller

{

	public function home(){

		$data['category'] = PortfolioCateg::orderBy('order_by')->get();

        $data['portfolio'] = Portfolio::orderBy('order_by')->with('category')->get();

		$data['results'] = Members::orderBy('order_by')->get();

		$data['banners'] = Banner::get();
		
		$data['testimonials'] = Testimonials::get();


		return view('frontend.homes.home',compact('data'));

	}











}