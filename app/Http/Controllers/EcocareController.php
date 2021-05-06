<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
// use DataTables;
use Yajra\DataTables\DataTables as DataTablesDataTables;
use Illuminate\Support\Facades\DB;

class EcocareController extends Controller
{
    //
    public function index()
    {
        // return DataTablesDataTables/
        // return view('welcome');
        $applications = DB::table('app_app')->get();
        //  var_dump($applications);
        return view('ecoview', ['applications' => $applications]);
    }
    
    public function getApps(Request $request)
    {
        

        if ($request->ajax()) {
            // $data = Student::latest()->get();
            // return DataTablesDataTables::of($data)
            // $data = DB::latest('app_app')->get();
            $data = DB::table('app_app')
                ->where('published', '=', '1')
                // ->where('link', '=', null)
                // ->where('appId', '=', 'advanceFinance')
                ->get();

            return DataTablesDataTables::of($data)
                // ->where('appId', '=', 'advanceFinance')
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                // ->parameters([
                //     'buttons' => ['export'],
                // ])
                ->make(true);
        }
        
    }
}

