<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;
// use App\Http\Controllers\Controller;
// use DB;

class CustomSearchController extends Controller
{
  
  function index(Request $request) {

      // $request= DB::table('tbl_customer')->get();
      // var_dump($request);
      
   if(request()->ajax())
   {
    if(!empty($request->filter_gender))
    {
     $data = DB::table('tbl_customer')
       ->select('CustomerName', 'Gender', 'Address', 'City', 'PostalCode', 'Country')
       ->where('Gender', $request->filter_gender)
       ->where('Country', $request->filter_country)
       ->get();
    }
    else
    {
     $data = DB::table('tbl_customer')
       ->select('CustomerName', 'Gender', 'Address', 'City', 'PostalCode', 'Country')
       ->get();
    }
    return datatables()->of($data)->make(true);
   }
   $country_name = DB::table('tbl_customer')
        ->select('Country')
        ->groupBy('Country')
        ->orderBy('Country', 'ASC')
        ->get();
  //  return view('home', compact('country_name'));
   return view('/layouts/master', compact('country_name'));
  //  return view('home', ['country_name'=> $country_name]);
  //  return view('/layouts/master', ['applications' => $applications]);
  //  return view('/layouts/master', ['country_name' => $country_name]);
  }
}


