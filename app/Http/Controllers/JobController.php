<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\HOME;
use App\Models\JOB_DETAIL;

class JobController extends Controller{
    public function show_wp(Request $request){
        $kode = Session::get('ssKode');
        if ($kode != null) {
            $data = DB::select('SELECT * FROM job_detail WHERE ID_JOB="1"');
            $data1 = DB::select('SELECT * FROM job_software WHERE ID_JOB="1"');
            $data2 = DB::select('SELECT * FROM job WHERE ID_JOB="1"');
            return view('admin.Job',compact('data','data1','data2'));
        }else {
            $data = DB::select('SELECT * FROM job_detail WHERE ID_JOB="1"');
            $data1 = DB::select('SELECT * FROM job_software WHERE ID_JOB="1"');
            $data2 = DB::select('SELECT * FROM job WHERE ID_JOB="1"');
            return view('guest.Job',compact('data','data1','data2'));
        }
    }

    public function show_mp(Request $request){
        $kode = Session::get('ssKode');
        if ($kode != null) {
            $data = DB::select('SELECT * FROM job_detail WHERE ID_JOB="2"');
            $data1 = DB::select('SELECT * FROM job_software WHERE ID_JOB="2"');
            $data2 = DB::select('SELECT * FROM job WHERE ID_JOB="2"');
            return view('admin.Job',compact('data','data1','data2'));
        }else {
            $data = DB::select('SELECT * FROM job_detail WHERE ID_JOB="2"');
            $data1 = DB::select('SELECT * FROM job_software WHERE ID_JOB="2"');
            $data2 = DB::select('SELECT * FROM job WHERE ID_JOB="2"');
            return view('guest.Job',compact('data','data1','data2'));
        }
    }

    public function show_wd(Request $request){
        $kode = Session::get('ssKode');
        if ($kode != null) {
            $data = DB::select('SELECT * FROM job_detail WHERE ID_JOB="3"');
            $data1 = DB::select('SELECT * FROM job_software WHERE ID_JOB="3"');
            $data2 = DB::select('SELECT * FROM job WHERE ID_JOB="3"');
            return view('admin.Job',compact('data','data1','data2'));
        }else {
            $data = DB::select('SELECT * FROM job_detail WHERE ID_JOB="3"');
            $data1 = DB::select('SELECT * FROM job_software WHERE ID_JOB="3"');
            $data2 = DB::select('SELECT * FROM job WHERE ID_JOB="3"');
            return view('guest.Job',compact('data','data1','data2'));
        }
    }

    public function show($id)
    {
        $list_data = JOB_DETAIL::where('ID','=', $id)->get();
        return response()->json($list_data);
    }

    public function update(Request $request,$id)
    {
        if ($id == "new") {
            $data = $request->Uraian;
            $id_job = $request->ID_JOB;
            $nama = $request->Nama;
            DB::select("INSERT INTO job_detail(ID_JOB,nama,paragraf) VALUE('$id_job','$nama','$data')");
        }
        else {
            $lAda = JOB_DETAIL::where('ID',$id)->count();
            if ($lAda == 1)
            {
                $data = $request->Uraian;
                DB::select("UPDATE job_detail SET paragraf='$data' WHERE ID=?", [$id]);
            } else
            {
                // 
            }
        }
    }

    public function destroy($fld)
    {
        JOB_DETAIL::where('ID',$fld)->delete();
    }
}