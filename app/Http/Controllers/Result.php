<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use DB;

class Result extends Controller
{
    public function index()
    {
        $dtdevice = DB::select(DB::raw("
        select DISTINCT device_name from tbl_master
	    "));
        $dttsname = DB::select(DB::raw("
        select DISTINCT ts_name from tbl_master WHERE ts_name != ''
	    "));
        return view('index', compact('dttsname', 'dtdevice'));
    }

    public function resultscenario(Request $request)
    {
        $tanggal = date('Ymd');
        $selector1 = $request->input('selector1');
        $selector2 = $request->input('selector2');
        $selector3 = $request->input('selector3');
        $dtdevice = DB::select(DB::raw("
        select ts_name, id, device_name from tbl_master
	    "));
        $dttsname = DB::select(DB::raw("
        select DISTINCT ts_name from tbl_master
	    "));
        return view('resultscenario', compact('tanggal', 'dtdevice', 'dttsname', 'selector1', 'selector2', 'selector3'));
    }

    public function dtresultscenario(Request $request)
    {
        $expected = $request->input('selector1');
        $result = $request->input('selector2');
        $appname = $request->input('selector3');

        $data = DB::select(DB::raw("
       SELECT DISTINCT tc_scenario
       FROM tbl_master
        WHERE device_name = '$result' and ts_name = '$appname'
        group by tc_scenario, tc_name
	    "));

        return Datatables::of($data)
            ->addColumn('tc_scenario', function ($data) {
                return $data->tc_scenario;
            })
            ->make(true);
    }

    public function resreport(Request $request)
    {
        $id = $request->input('editID');
        $status = $request->input('statusResult');
        $tanggal = date('Ymd');
        $selector1 = $_GET['selector1'];
        $selector2 = $_GET['selector2'];
        $selector3 = $_GET['selector3'];
        $selector4 = $_GET['selector4'];
        $data = DB::select(DB::raw("
        select img_dir from tbl_master
	    "));
            $data3 = DB::update("update tbl_master set ref_dev = '$selector1' where id = '$id'");
          $data2 = DB::update("update tbl_master set status = '$status' where id = '$id'");
         //return view('details', compact('tanggal','data','data2','data3','selector1','selector2','selector3','selector4'));
        return view('detailsreport', compact('tanggal', 'data', 'data2', 'data3', 'selector1', 'selector2', 'selector3', 'selector4'));
    }

    public function dtresreport(Request $request)
    {
        $expected = $request->input('selector1');
        $result = $request->input('selector2');
        $appname = $request->input('selector3');
        $usecase = $request->input('selector4');

        $artists = DB::select(DB::raw("
        SELECT DISTINCT
        a.id as idExpected,
        a.tc_name as tcExpected,
        a.tc_scenario as tcScenarioExpected,
        a.img_dir as imgExpected,
        a.status as statusExpected,
        a.device_name as deviceExpected,
        c.id as idResult,
        c.tc_name as tcResult,
        c.tc_scenario as tcScenarioResult,
        c.img_dir as imgResult,
        c.status as statusResult,
        c.device_name as deviceResult
        FROM tbl_master,
        (SELECT a.id, a.tc_name, a.tc_scenario, a.img_dir, a.status, a.device_name, a.tanggal FROM tbl_master as a WHERE a.device_name = '$expected' and a.tc_scenario = '$usecase' and a.ts_name = '$appname') a,
        (SELECT c.id, c.tc_name, c.tc_scenario, c.img_dir, c.status, c.device_name, c.tanggal  FROM tbl_master as c WHERE c.device_name = '$result' and c.tc_scenario = '$usecase' and c.ts_name = '$appname') c
        WHERE a.tc_scenario = c.tc_scenario and
        a.tc_name = c.tc_name
        ORDER BY a.tanggal ASC
	    "));
        $artists = collect($artists);
        return Datatables::of($artists)

            ->addColumn('tcScenarioResult', function ($artists) {
                return $artists->tcScenarioResult;
            })
            ->addColumn('tcResult', function ($artists) {
                return $artists->tcResult;
            })
            ->addColumn('imgExpected', function ($artists) {
                return $artists->imgExpected;
            })
            ->addColumn('imgResult', function ($artists) {
                return $artists->imgResult;
            })
            ->addColumn('statusResult', function ($artists) {
                return $artists->statusResult;
            })
            ->addColumn('idResult', function ($artists) {
                return $artists->idResult;
            })
            ->make(true);
    }

    public function returnreport(Request $request)
    {
        $id = $request->input('editID');
        $status = $request->input('statusResult');
        $selector1 = $_GET['selector1'];
        $selector2 = $_GET['selector2'];
        $selector3 = $_GET['selector3'];
        $selector4 = $_GET['selector4'];
        $data = DB::select(DB::raw("
        select img_dir from tbl_master
	    "));
        $data3 = DB::update("update tbl_master set ref_dev = '$selector1' where id = '$id'");
        $data2 = DB::update("update tbl_master set status = '$status' where id = '$id'");
        return view('detailsreport', compact('data','data2','data3','selector1','selector2','selector3','selector4'));
    }

    public function getDevice(Request $request){

        $appName =  $_POST['appname'];
        $dtdevice = DB::select(DB::raw("
        SELECT DISTINCT device_name FROM tbl_master WHERE ts_name = '".$appName."'
	    "));

        echo json_encode($dtdevice);

        //return json_encode($dtdevice);
        //print ("Hey, its work.!");
    }
}



