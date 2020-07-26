<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Setting;
use DB;

class HomeController extends Controller
{
  public function __construct()
  {
      //$this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */

  public function home()
  {
    return view('home');
  }

  public function index()
  {
    $products = Product::where('status', 1)->orderBy('name', 'asc')->get();
    $setting = Setting::where('status', 1)->first();
    return view('frontend.index', compact('products', 'setting'));
  }

  public function promo_offer()
  {
    return view('frontend.pages.promo-offer');
  }

  public function about_us()
  {
    return view('frontend.pages.about-us');
  }

  public function our_services()
  {
    return view('frontend.pages.our-services');
  }

  public function printing_service()
  {
    return view('frontend.pages.printing-service');
  }

  public function terms_and_condition()
  {
    return view('frontend.pages.terms-and-condition');
  }
  
  public function comming_soon()
  {
    return view('frontend.pages.comming-soon');
  }
  
  public function contact_us()
  {
    return view('frontend.pages.contact-us');
  }
  
  public function employee()
  {
    $employees = DB::table('employees')->where('status', 1)->get();
    return view('frontend.pages.employee', compact('employees'));
  }

  
}
