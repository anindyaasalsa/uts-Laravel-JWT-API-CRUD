<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Booking;
use App\Mobil;
class BookingController extends Controller
{
    public function hitung(Request $request, $id){
        $nota = new Booking();
        $nota->penyewa = $request->penyewa;
        $nota->hari_sewa = $request->hari_sewa;
        $nota->harga_sewa = $request->harga_sewa;
        $harga_sewa = $request->harga_sewa;
        $hari_sewa = $request->hari_sewa;
        $mobil = Mobil::find($id);
        $total_sewa = $harga_sewa * $hari_sewa;
        $nota->total_sewa = $total_sewa;
        $nota->save();
        return "Total Bayar Sewa : Rp." . ($total_sewa);
    }
}