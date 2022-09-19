<?php

namespace App\Http\Controllers;

use App\Mutasi;
use App\TahunPenilaian;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MutasiTestController extends Controller
{
    public function index(){
        $user = User::all();
        $tahun_penilaian = TahunPenilaian::all();
        return view('mutasi-test.index', compact('user','tahun_penilaian'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        DB::table('mutasi')->insert([
            'user_id' => $request->user_id,
            'tahun_penilaian_id' => $request->tahun_penilaian_id,
        ]);

        return redirect('mutasi-test')->with('success','Data Mutasi Berhasil Dibuat.');
    }
}
