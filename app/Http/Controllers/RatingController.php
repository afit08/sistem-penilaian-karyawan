<?php

namespace App\Http\Controllers;

use App\Http\Requests\RatingRequest;
use App\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    public function index(){
        $rating = Rating::all();
        return view('rating.index', ['rating' => $rating]);
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rating.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RatingRequest $request)
    {
        // dd($request->all());
        Rating::create([
            'kode_rating' => $request->kode_rating,
            'nilai_rating' => $request->nilai_rating,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('rating')->with('success','Data Rating Berhasil Dibuat.');
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
        $rating = DB::table('rating')->where('id',$id)->get();
        return view('rating.edit',['rating' => $rating]);
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
        DB::table('rating')->where('id',$request->id)->update([
            'kode_rating' => $request->kode_rating,
            'nilai_rating' => $request->nilai_rating,
            'keterangan' => $request->keterangan,
		]);
        return redirect('rating')->with('success','Data Rating Berhasil Diedit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('rating')->where('id',$id)->delete();
        return redirect('/rating');
    }
}
