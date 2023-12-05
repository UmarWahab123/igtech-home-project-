<?php
namespace App\Http\Controllers\Payment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use App\Models\Test\Settings;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use App\Models\Test\Language;
use App\Models\Test\LanguageTranslations;


class PaymentController extends Controller
{
	public function pay(){
		return view('pay.index');
	}
}