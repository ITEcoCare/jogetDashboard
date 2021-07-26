<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
// use DataTables;
use Yajra\DataTables\DataTables as DataTablesDataTables;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Cloner\Data;

class EcocareController extends Controller
{
    //
    public function index()
    {
        // // return DataTablesDataTables/
        // // return view('welcome');
        // $applications = DB::table('app_app')->get();
        // return view('ecoview', ['applications' => $applications]);
        $applications = DB::table('app_app')->get();
        // $z = DB::table("app_app")->get();
        
        // $applications = DB::table('app_fd_purchase_request')->get();
        $request = DB::table('tbl_customer')->get();
        // var_dump($request);
        return view('/layouts/master', [
            'applications' => $applications, 
            'request' => $request,
            // EcocareController::class, 'index'
            ]);
    }
    
    public function getApps(Request $request)
    {
        

        if ($request->ajax()) {
            // $data = Student::latest()->get();
            // return DataTablesDataTables::of($data)
            // $data = DB::latest('app_app')->get();
            // ->get();
            // $data = DB::table('app_app')
            $data = DB::select("select * FROM app_app WHERE appId != 'appcenter' AND published = 1");
            //  $data = DB::select("select * FROM app_app WHERE appId LIKE '%bpjs%'");
            // $data = DB::select("select * FROM app_app WHERE appId != 'appcenter'");
            // ->where('published', '=', '1');
            //  $data = DB::table('app_app')->select('link');
            //  $data = DB::select("select *, '' as 'url' FROM app_app WHERE appId LIKE '%bpjs%'");
            //  <a href="https://ecosystem.ecocare.co.id/jw/web/userview/bpjs_kesehatan/v/_/welcome" class="edit btn btn-success btn-sm">ENTER</a>
            
            return DataTablesDataTables::of($data)
            ->addIndexColumn()
            // BELOW NOT NESSCESARRY ---
            ->addColumn('action', function($row){
                // $ambilLink = DB::table('app_app')->select('link');
                // var_dump($ambilLink);
                    // $ambilLink = DB::table('app_app')->value('link');
                    $actionBtn = '<a href="https://ecosystem.ecocare.co.id/jw/web/userview/bpjs_kesehatan/v/_/welcome" class="edit btn btn-success btn-sm">ENTER</a>';
                    // $actionBtn = '<a href="$ambilLink" class="edit btn btn-success btn-sm">ENTER</a>';
                    // $actionBtn =  "<a href={{$ambilLink}} " + " class="+ "edit btn btn-success btn-sm"+ ">ENTER</a>";
                    return $actionBtn;
                })
                // ->addColumn('action', "Hi .$x!.")
                
                // ->addColumn('action', 'Hi!!!')
                // ->toJson()
                
                // ->parameters([
                    //     'buttons' => ['export'],
                    // ])
            ->rawColumns(['action'])
            ->make(true);
        }

        // $country_name = DB::table('app_app')
        // ->select('name')
        // ->groupBy('name')
        // ->orderBy('name', 'ASC')
        // ->get();

        // return view('layouts/main-content', ['country_name' => $country_name]);
        // return view('/layouts/appDetail', ['country_name' => $country_name]);

        // if (request()->ajax()) {
        //     if (!empty($request->filter_gender)) {
        //         $data = DB::table('tbl_customer')
        //         ->select('CustomerName', 'Gender', 'Address', 'City', 'PostalCode', 'Country')
        //         ->where('Gender', $request->filter_gender)
        //             ->where('Country', $request->filter_country)
        //             ->get();
        //     } else {
        //         $data = DB::table('tbl_customer')
        //         ->select('CustomerName', 'Gender', 'Address', 'City', 'PostalCode', 'Country')
        //         ->get();
        //     }
        //     return datatables()->of($data)->make(true);
        // }
        
        
    }
}

