<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Mutasi;
use App\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        $mutasi = Mutasi::all();
        $transaksi = Transaksi::all();
        return view('laporan.laporan-tahun', compact('transaksi','mutasi','kategori'));
    }

    public function filter(){
        $mutasi = DB::table('mutasi')
        ->join('users', 'mutasi.user_id', '=', 'users.id')
        ->join('tahun_penilaian', 'mutasi.tahun_penilaian_id', '=', 'tahun_penilaian.id')
        ->select('users.nip', 'users.nama_karyawan','users.kepala_area','tahun_penilaian.nama_tahun_penilaian')
        ->where('tahun_penilaian.nama_tahun_penilaian', '=', '2018')
        ->get();

        $transaksi = DB::table('transaksi')
            ->join('kategoris', 'transaksi.kategori_id', '=', 'kategoris.id')
            ->join('rating', 'transaksi.rating_id', '=', 'rating.id')
            ->join('mutasi', 'transaksi.mutasi_id', '=', 'mutasi.id')
            ->select(DB::raw('rating.nilai_rating*kategoris.bobot as score'))
            ->where('mutasi_id', '=', '1')
            ->get();
            return view('laporan.index', compact('transaksi','mutasi'));
    }
}
