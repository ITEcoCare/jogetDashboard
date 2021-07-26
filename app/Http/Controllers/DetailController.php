<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Yajra\DataTables\DataTables as DataTablesDataTables;
use Illuminate\Support\Facades\DB;
// use PhpOffice\PhpSpreadsheet\Settings;
use Illuminate\Support\Facades\View;
use TestTrait;

class DetailController extends Controller
{
            protected $y;
    // var $a = 1;
    // var $dataTable = DB::select("SELECT * FROM app_fd_pengirimancabang_pd WHERE c_status!='Completed' AND c_status!='Approved'");
    // protected $dataTable;

    // protected $site_settings;

    // public function __construct() 
    // {
    //     // Fetch the Site Settings object
    //     $this->site_settings = Setting::all();
    //     View::share('site_settings', $this->site_settings);
    // }
    // public function __construct($whatever)
    // {
    //     $this->dataTable = DB::select("SELECT * FROM app_fd_pengirimancabang_pd WHERE c_status!='Completed' AND c_status!='Approved'"); //REJECTED;;
    // }

    // use TestTrait;
      // public function testC()
    // {
    //     // You can retrieve it as a variable: $my_var
    //     echo '__________________0000'.TestTrait::$my_var;
    // }

    public function index()
    {
        
        $applications = DB::select("SELECT * FROM app_fd_pengirimancabang_pd");
    
        if (isset($_GET['appId'])) {
            # code...
            $ambilAppId = $_GET['appId'];
            // echo 'DARI CONTROLLER index >>> >>>'.$ambilAppId;
            $namaTabel = DB::select("SELECT * from app_form");
            $app_name = DB::table('app_app')->get();
            // $this->y = 'ini y di index';
            $y = 'ini y IF index';

            return view('/layouts/appDetail', ['applications' => $applications, 'app_name' => $app_name, 'namaTabel' => $namaTabel ]);
        
        } else {
            $namaTabel = DB::select("SELECT * from app_form");
            // $namaTabel = "SELECT * FROM app_fd_{$ambilAppId}_pd";
            // $namaTabel = DB::select("SELECT * from app_form WHERE appid='{$ambilAppId}'");
            $app_name = DB::table('app_app')->get();
            $data = DB::select("SELECT * FROM app_fd_pengirimancabang_pd WHERE c_status!='Completed' AND c_status!='Approved'"); //REJECTED

            $y = 'ini y Else index';

            return view('/layouts/appDetail', [ 'applications' => $applications, 'app_name' => $app_name, 'namaTabel' => $namaTabel ]);
        }

        // getDetails($namaTabel);
        
    }

    

    public function getDetails(Request $request)
    {
        // $ambilAppId = $_GET['appId'];
        // $namaTabel = "SELECT * FROM app_fd_{$ambilAppId}_pd";
        // $namaTabel = DB::select("SELECT * from app_form");

        $namaTabel = 'advance_finance';
        // global $y;
        // $ntabel = $namaTabel->tableName;
        // $appId = $request->appId;
        // echo "DARI CONTROLLER >>>> ".$appId;
        
        // echo TestTrait::$my_var;

        // $this->dataTable;

        // $this->dataTable = DB::select("SELECT * FROM app_fd_pengirimancabang_pd WHERE c_status!='Completed' AND c_status!='Approved'"); //REJECTED;

        // echo '<br><br>========'.$this->y;
        if ($request->ajax()) {
            
            $dataTable = DB::select("SELECT * FROM app_fd_{$namaTabel} WHERE c_status!='Completed' AND c_status!='Approved' AND c_status!='Rejected'");
            // $dataTable = DB::select("SELECT * FROM app_fd_{$namaTabel} ");
        // return '<br><br> HAHAHAHAH ========== '.$y;
            
            // $tableName = DB::select("SELECT * FROM app_fd_advance_finance WHERE c_status!='Completed' AND c_status!='Rejected'");
            // echo "--->>>".$tableName;
            // $str = "SELECT * from 'app_fd_{$tableName}' <hr>";
            // echo "--->>>".$str;

            // $data = DB::select("SELECT * FROM app_fd_pengirimancabang_pd WHERE c_status!='Completed' AND c_status!='Rejected'");//ON GOING
            // $data = DB::select("SELECT * FROM app_fd_pengirimancabang_pd WHERE c_status!='Approved' AND c_status!='Rejected'"); //COMPLETED
            // $data = DB::select("SELECT * FROM app_fd_pengiriman_cabang"); //REJECTED
            // $data = DB::select("SELECT * FROM app_fd_pengirimancabang_pd WHERE c_status!='Completed' AND c_status!='Approved'"); //REJECTED
            
            // $dataTable = $GLOBALS['dataTable'];
            // DB::select("SELECT * FROM app_fd_pengirimancabang_pd WHERE c_status!='Completed' AND c_status!='Approved'"); //REJECTED;

            // $data = DB::select("SELECT distinct(appid),tablename from app_form WHERE appid='pengirimancabang'");

            // ->where('published', '=', '1');
            //  $data = DB::table('app_app')->select('link');
            //  $data = DB::select("select *, '' as 'url' FROM app_app WHERE appId LIKE '%bpjs%'");
            //  <a href="https://ecosystem.ecocare.co.id/jw/web/userview/bpjs_kesehatan/v/_/welcome" class="edit btn btn-success btn-sm">ENTER</a>

            // return
            return DataTablesDataTables::of($dataTable)
            ->addIndexColumn()
            ->rawColumns(['action'])
            // ->addColumn('action', function($row){
            //     // $ambilLink = DB::table('app_app')->select('link');
            //     $actionBtn = '<a href="https://ecosystem.ecocare.co.id/jw/web/userview/bpjs_kesehatan/v/_/welcome" class="edit btn btn-success btn-sm">ENTER</a>';
            //     // $actionBtn = '<a href="$ambilLink" class="edit btn btn-success btn-sm">ENTER</a>';
            //     // $actionBtn =  "<a href={{$ambilLink}} " + " class="+ "edit btn btn-success btn-sm"+ ">ENTER</a>";
            //     return $actionBtn;
            // })
            ->make(true);
        }
        
        
    }
}
