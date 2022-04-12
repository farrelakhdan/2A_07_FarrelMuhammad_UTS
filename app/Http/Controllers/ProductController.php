<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\HOME;
use App\Models\PRODUCT_DETAIL;

class ProductController extends Controller{
    public function index(Request $request){
        $kode = Session::get('ssKode');
        if ($kode != null) {
            $data = DB::select('SELECT a.nama, a.link, b.id, b.paragraf FROM product a
                                    INNER JOIN product_detail b ON a.id = b.ID_PRODUCT ');
            return view('admin.Product',compact('data'));
        }else {
            $data = DB::select('SELECT a.nama, a.link, a.gambar, b.id, b.paragraf FROM product a
                                    INNER JOIN product_detail b ON a.id = b.ID_PRODUCT ');
            return view('guest.Product',compact('data'));
        }
    }

    public function show($id)
    {
        $list_data = DB::select('SELECT a.nama, a.link, b.id, b.paragraf, b.ID_PRODUCT FROM product a
                                    INNER JOIN product_detail b ON a.id = b.ID_PRODUCT 
                                    WHERE b.id=?', [$id]);
        return response()->json($list_data);
    }

    public function update(Request $request,$id)
    {
        if ($id == "new") {
            $uraian = $request->Paragraf;
            $id_product = $request->ID_PRODUCT;
            $nama = $request->Nama;
            $link = $request->Link;
            if ($id_product != null) {
                DB::select("INSERT INTO product(nama,link) VALUE('$nama','$link')");
                DB::select("INSERT INTO product_detail(ID_PRODUCT, paragraf) VALUE('$id_product','$uraian')");
            }
            
        }
        else {
            $lAda = PRODUCT_DETAIL::where('ID',$id)->count();
            if ($lAda == 1)
            {
                $uraian = $request->Paragraf;
                $id_product = $request->ID_PRODUCT;
                $nama = $request->Nama;
                $link = $request->Link;
                DB::select("UPDATE product_detail SET paragraf='$uraian' WHERE ID=?", [$id]);
                DB::select("UPDATE product SET link='$link' WHERE ID=?", [$id_product]);
            } else
            {
                // 
            }
        }
    }

    public function destroy($fld)
    {
        PRODUCT_DETAIL::where('ID',$fld)->delete();
    }
}