<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\LOGIN;

class LoginController extends Controller
{

    public function index(Request $request){
        $list_data = DB::select('SELECT ID FROM user_admin WHERE username=? and password=?', [$request->username,$request->password]);
        
        if ($list_data) {
            Session::put('ssKode',$list_data);
            return redirect()->route('home');
        }else {
            Session::flash('error', 'username atau password salah');
            return redirect()->route('login');
        }
    }

    public function show(){
        return view('admin.Login');
    }

}