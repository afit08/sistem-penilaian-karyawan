<?php

namespace App\Http\Controllers;

use App\Http\Requests\KompetensiRequest;
use App\Kategori;
use App\Kompetensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KompetensiController extends Controller
{
    public function index(){
        $kompetensis = Kompetensi::with('Kategori')->get();
        return view('kompetensi.index', compact('kompetensis'));
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('kompetensi.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KompetensiRequest $request)
    {
        // dd($request->all());
        Kompetensi::create([
            'kode_kompetensi' => $request->kode_kompetensi,
            'nama_kompetensi' => $request->nama_kompetensi,
            'kategori_id' => $request->kategori_id,
        ]);

        return redirect('kompetensi')->with('success','Data Kompetensi Berhasil Dibuat.');
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
        $kompetensis = DB::table('kompetensis')->where('id',$id)->get();
        $kategoris = Kategori::all();
        return view('kompetensi.edit',['kompetensis' => $kompetensis], compact('kategoris'));
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
        DB::table('kompetensis')->where('id',$request->id)->update([
            'kode_kompetensi' => $request->kode_kompetensi,
            'nama_kompetensi' => $request->nama_kompetensi,
            'kategori_id' => $request->kategori_id,
		]);
        return redirect('kompetensi')->with('success','Data Kompetensi Berhasil Diedit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('kompetensis')->where('id',$id)->delete();
        return redirect('/kompetensi');
    }
}
