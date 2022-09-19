<?php

namespace App\Http\Controllers;

use App\Divisi;
use App\Http\Requests\DivisiRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DivisiController extends Controller
{
    public function index(){
        $divisi = Divisi::all();
        return view('divisi.index', ['divisi' => $divisi]);
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('divisi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DivisiRequest $request)
    {
        // dd($request->all());
        Divisi::create([
            'divisi' => $request->divisi,
        ]);

        return redirect('divisi')->with('success','Data Divisi Berhasil Dibuat.');
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
        $divisi = DB::table('divisi')->where('id',$id)->get();
        return view('divisi.edit',['divisi' => $divisi]);
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
        DB::table('divisi')->where('id',$request->id)->update([
            'divisi' => $request->divisi,
		]);
        return redirect('divisi')->with('success','Data Divisi Berhasil Diedit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('divisi')->where('id',$id)->delete();
        return redirect('/divisi');
    }
}
