<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penyewaan;
use Auth;

class PenyewaanController extends Controller
{
    //

    public function index(){

        $penyewaan=Penyewaan::all();

        return $penyewaan;
    }

    public function create(Request $request){

        $penyewaan=new Penyewaan();
        $penyewaan->nama_mobil=$request->nama_mobil;
        $penyewaan->plat_nomor=$request->plat_nomor;
        $penyewaan->bahanbakar=$request->bahanbakar;
        $penyewaan->merk=$request->merk;
        $penyewaan->hari=$request->hari;
        $penyewaan->jumlah=$request->jumlah;
        $penyewaan->save();

        return "Data Tersimpan!";
    }

    public function update(Request $request, $id){

        $penyewaan=Penyewaan::find($id);
        $penyewaan->nama_mobil=$request->nama_mobil;
        $penyewaan->plat_nomor=$request->plat_nomor;
        $penyewaan->bahanbakar=$request->bahanbakar;
        $penyewaan->merk=$request->merk;
        $penyewaan->hari=$request->hari;
        $penyewaan->jumlah=$request->jumlah;
        $penyewaan->save();

        return "Data Telah Diubah!";
    }

    public function delete($id){

        $penyewaan=Penyewaan::find($id);
        $penyewaan->delete();

        return "Data Terhapus!";
    }

    public function detail($id){

        $penyewaan=Penyewaan::find($id);

        return $penyewaan;
    }
}
