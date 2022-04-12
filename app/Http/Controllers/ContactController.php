<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\CONTACT;

class ContactController extends Controller
{
    public function index(Request $request){
        $kode = Session::get('ssKode');
        if ($kode != null) {
            $data = DB::select('SELECT * FROM user_contact');
            return view('admin.Contact', compact('data'));
        }else {
            $list_data = DB::select('SELECT * FROM user_contact');
            return view('guest.Contact', compact('list_data'));
        }
    }

    public function show($id)
    {
        $list_data = CONTACT::where('kode','=', $id)->get();
        return response()->json($list_data);
    }

    public function update(Request $request,$id)
    {
        if ($id == "new") {
            $whatsapp = $request->Whatsapp;
            $facebook = $request->Facebook;
            $instagram = $request->Instagram;
            $twitter = $request->twitter;
            DB::select("INSERT INTO user_contact(whatsapp, facebook, instagram, twitter) VALUE('$whatsapp','$facebook','$instagram', '$twitter')");
        }
        else {
            $lAda = CONTACT::where('kode',$id)->count();
            if ($lAda == 1)
            {
                $whatsapp = $request->Whatsapp;
                $facebook = $request->Facebook;
                $instagram = $request->Instagram;
                $twitter = $request->Twitter;
                DB::select("UPDATE user_contact SET whatsapp='$whatsapp', facebook='$facebook', instagram='$instagram', twitter='$twitter' WHERE kode=?", [$id]);
            } else
            {
                // 
            }
        }
    }

    public function destroy($fld)
    {
        CONTACT::where('kode',$fld)->delete();
    }
}