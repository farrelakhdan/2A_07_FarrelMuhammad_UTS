<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\HOME;

class HomeController extends Controller{
    public function index(Request $request){
        $kode = Session::get('ssKode');
        if ($kode != null) {
            $list_data = DB::select('SELECT * FROM admin WHERE ID = ? ', [$kode[0]->ID]);
            $data = DB::select('SELECT * FROM home');
            return view('admin.home',compact('list_data','data'));
        }else {
            $data = DB::select('SELECT * FROM home');
            return view('guest.Home',compact('data'));
        }
    }

    public function logout(){
        Session::forget('ssKode');
        return redirect()->route('/');
    }

    public function show($id)
    {
        $list_data = HOME::where('kode','=', $id)->get();
        return response()->json($list_data);
    }

    public function update(Request $request,$id)
    {
        if ($id == "new") {
            $data = $request->Uraian;
            DB::select("INSERT INTO home(paragraf) VALUE('$data')");
        }
        else {
            $lAda = HOME::where('kode',$id)->count();
            if ($lAda == 1)
            {
                $data = $request->Uraian;
                DB::select("UPDATE home SET paragraf='$data' WHERE kode=?", [$id]);
            } else
            {
                // 
            }
        }
    }

    public function destroy($fld)
    {
        HOME::where('kode',$fld)->delete();
    }
}