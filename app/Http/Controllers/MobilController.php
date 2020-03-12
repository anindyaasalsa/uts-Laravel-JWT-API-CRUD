<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mobil;
use Auth;
class MobilController extends Controller 
{
    public function index(){
        $mobil = Mobil::all();
        return response()->json($mobil, 200);
    }

    public function mobilAuth() {
        $mobil = "welcome " . Auth::user()->name;
        return response()->json($mobil, 200);
    }  
    //method Tambah mobil
    public function create(Request $request){
        $mobil=new Mobil();
        $mobil->nama=$request->nama;
        $mobil->merk=$request->merk;
        $mobil->bahan_bakar=$request->bahan_bakar;
        $mobil->plat_nomer=$request->plat_nomer;
        $mobil->warna=$request->warna;
        $mobil->jumlah=$request->jumlah;
        $mobil->save();
        return "Data Tersimpan";
    }
    //method UPDATE
    public function update(Request $request, $id){
        $mobil=Mobil::find($id);
        $mobil->nama=$request->nama;
        $mobil->merk=$request->merk;
        $mobil->bahan_bakar=$request->bahan_bakar;
        $mobil->plat_nomer=$request->plat_nomer;
        $mobil->warna=$request->warna;
        $mobil->jumlah=$request->jumlah;
        $mobil->save();
        return "Data Terubah";
    }
        public function delete($id){
        $mobil=Mobil::find($id);
        $mobil->delete();
        return "Data Terhapus";
    }
    //MEthod DETAIL
    public function detail($id){
        $mobil=Mobil::find($id);
        return $mobil;
    }
}
