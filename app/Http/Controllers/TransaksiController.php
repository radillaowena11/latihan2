<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\User;

class TransaksiController extends Controller
{
    //

    public function index(){
        $transaksi=Transaksi::all();
        $data=['transaksi'=>$transaksi];
        return $transaksi;
    }

    public function create(Request $request){
      $transaksi = new Transaksi();
      $transaksi->username = $request->username;
      $transaksi->jenis=$request->jenis;
      $transaksi->nama_transaksi=$request->nama_transaksi;
      $transaksi->jumlah=$request->jumlah;
      $transaksi->save();

      return "Data Tersimpan";
    }
}
