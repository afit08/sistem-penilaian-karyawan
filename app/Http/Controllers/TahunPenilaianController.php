<?php

namespace App\Http\Controllers;

use App\TahunPenilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TahunRequest;

class TahunPenilaianController extends Controller
{
    public function index(){
        $tahun_penilaian = TahunPenilaian::all();
        return view('tahun_penilaian.index', ['tahun_penilaian' => $tahun_penilaian]);
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tahun_penilaian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TahunRequest $request)
    {
        // dd($request->all());
        TahunPenilaian::create([
            'kode_tahun_penilaian' => $request->kode_tahun_penilaian,
            'nama_tahun_penilaian' => $request->nama_tahun_penilaian,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('tahun-penilaian')->with('success','Data Tahun Penilaian Berhasil Dibuat.');
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tahun_penilaian = DB::table('tahun_penilaian')->where('id',$id)->get();
        return view('tahun_penilaian.edit',['tahun_penilaian' => $tahun_penilaian]);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('tahun_penilaian')->where('id',$request->id)->update([
            'kode_tahun_penilaian' => $request->kode_tahun_penilaian,
            'nama_tahun_penilaian' => $request->nama_tahun_penilaian,
            'keterangan' => $request->keterangan,
		]);
        return redirect('tahun-penilaian')->with('success','Data Tahun Penilaian Berhasil Diedit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tahun_penilaian')->where('id',$id)->delete();
        return redirect('/tahun-penilaian');
    }
}
