<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Mutasi;
use App\Rating;
use App\TahunPenilaian;
use App\User;
use App\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MutasiController extends Controller
{
    public function index(){
        $user = User::all();
        $tahun_penilaian = TahunPenilaian::all();
        $mutasi = Mutasi::all();
        return view('mutasi.index', compact('user','tahun_penilaian','mutasi'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Mutasi::Create([
            'user_id' => $request->user_id,
            'tahun_penilaian_id' => $request->tahun_penilaian_id,
        ]);

        return redirect()->route('mutasi')->with('success','Data Mutasi Berhasil Dibuat.');
    }
}
