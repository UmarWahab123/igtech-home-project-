<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TeamController extends Controller
{
	public function team(){
	   $data['results'] = Members::get();
        $data['banner'] = Pages::where('type','Our Team')->first();
		return view('frontend.ourteam.our-team',compact('data'));
	}





}