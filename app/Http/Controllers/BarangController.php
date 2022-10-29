<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\jenis_barang;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    function DaftarBarang()
    {
        $barang = Barang::all();
        return view('home', ['barang'=> $barang]);
    }

    function Barang($id)
    {
        $barang = Barang::find($id);
        return view('barang', ['barang' => $barang]);
    }
}
