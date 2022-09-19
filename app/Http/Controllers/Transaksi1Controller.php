<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TahunPenilaian;
use App\Karyawan;
use App\Kategori;
use App\Kompetensi;
use App\Mutasi;
use App\Rating;
use App\Transaksi;
use App\User;
use Illuminate\Support\Facades\DB;

class Transaksi1Controller extends Controller
{
    public function index(){
        $mutasi = Mutasi::with('User','TahunPenilaian')->where('user_id','=',3)->get();
        $transaksi = Transaksi::with('Kategori', 'Rating', 'Mutasi')->get();
        return view('transaksi.index', compact('transaksi','mutasi'));
    }

    public function tahun($tahun){
        $transaksi = Transaksi::with('Kategori', 'Rating', 'Mutasi')
        ->get()->where('mutasi_id',[$tahun]);
        return view('laporan.laporan-tahun', compact('transaksi'));
    }

    public function rekap($id)
    {
        $rating = Rating::all();
        $mutasi = Mutasi::with('User','TahunPenilaian','Kategori', 'Rating')->where('id',$id)->get();
        $kategoris = Kategori::all(); 
        $user = User::all();
        $tahun_penilaian = TahunPenilaian::all();
        $kompetensi = Kompetensi::all();
        $transaksi = Transaksi::with('Kategori', 'Rating', 'Mutasi')
        ->where('mutasi_id',$id)->get();
        return view('transaksi.rekap', compact('transaksi','mutasi','rating','kategoris','user','tahun_penilaian','kompetensi'),['kategoris' => $kategoris]);
    }

    public function rekapp($id)
    {
        $rating = Rating::all();
        $mutasi = Mutasi::with('User','TahunPenilaian','Kategori', 'Rating')->where('id',$id)->get();
        $kategoris = Kategori::all(); 
        $user = User::all();
        $tahun_penilaian = TahunPenilaian::all();
        $kompetensi = Kompetensi::all();
        $transaksi = Transaksi::with('Kategori', 'Rating', 'Mutasi')
        ->where('mutasi_id',$id)->get();
        return view('transaksi.rekapp', compact('transaksi','mutasi','rating','kategoris','user','tahun_penilaian','kompetensi'),['kategoris' => $kategoris]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $data = [];
        // $error = 1;
        // for($x=0; $x < count($request->get('nilai1')); $x++) {
        //     $noId = 0;
        //     if(!empty($request->get('id')[$x]) && !$request->get('id')[$x] == 0) {
        //         $noId = $request->get('id')[$x]; 
        //     }
        //     $data[] = [
        //         'id' => $noId,
        //         'mutasi_id' => $request->get('mutasi_id')[$x],
        //         'kompetensi_id' => $request->get('kompetensi_id')[$x],
        //         'nilai1' => $request->get('nilai1')[$x],
        //         'nilai2' => $request->get('nilai2')[$x],
        //         'nilai3' => $request->get('nilai3')[$x],
        //         'nilai4' => $request->get('nilai4')[$x],
        //     ];
        // }

        // if(count($data) > 0) {
        //     $error = '';
        // }
        // Transaksi::upsert($data, ['id','mutasi_id','kompetensi_id','nilai1','nilai2','nilai3','nilai4']);

        // return redirect()->back()->with('success','Data Mutasi Berhasil Dibuat.');
        $data = [];
        $error = 1;
        for ($x=0; $x < count($request->get('kompetensi_id')); $x++) {
            $noId = 0;
            $mutasi_id = 0;
            $kompetensi_id = 0;
            if(!empty($request->get('id')[$x])) {
                $noId = $request->get('id')[$x];
            }
            if(!empty($request->get('mutasi_id')[$x])) {
                $mutasi_id = $request->get('mutasi_id')[$x];
            }
            if(!empty($request->get('kompetensi_id')[$x])) {
                $kompetensi_id = $request->get('kompetensi_id')[$x];
            }

            $data[] = [
                'id' => $noId,
                'mutasi_id' => $mutasi_id,
                'kompetensi_id' => $kompetensi_id,
                'nilai1' => $request->get('n1')[$x],
                'nilai2' => $request->get('n2')[$x],
                'nilai3' => $request->get('n3')[$x],
                'nilai4' => $request->get('n4')[$x]
            ];
        }

        if(count($data) > 0 ) {
            $error = '';
        }

        Transaksi::upsert($data, ['id', 'mutasi_id', 'kompetensi_id', 'nilai1','nilai2','nilai3','nilai4']);
        return redirect()->back()->with('error', $error);
    }

    public function create()
    {
        $mutasi = Mutasi::all();
        return view('transaksi.create', compact('mutasi'));
    }

    public function stored(Request $request)
    {
        // dd($request->all());
        Transaksi::create([
            'mutasi_id' => $request->mutasi_id,
        ]);

        return redirect('transaksi')->with('success','Data Transaksi Berhasil Dibuat.');
    }

    public function updateStatus($mutasi_id, $status_code){
        try {
            $update_mutasi = Mutasi::whereId($mutasi_id)->update([
                'status' => $status_code
            ]);
            if ($update_mutasi) {
                return redirect('transaksi')->with('success', 'Data Rekapitulasi berhasil di kunci.');
            }
            return redirect('transaksi')->with('success', 'Fail to Updated User Status.');

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
