<?php

namespace App\Http\Controllers;

use App\Divisi;
use App\Exports\KaryawanExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\KaryawanRequest;
use App\Imports\KaryawanImport;
use App\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
class Divisi10Controller extends Controller
{
    public function index(){
        $user = User::with('Divisi')->where('divisi_id','=','11')->get();
        return view('divisi10.index', compact('user'));
    }

    public function detail($id){
        $user = User::with('Divisi')->get()->where('id',$id);
        return view('divisi10.detail', compact('user'));
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisi = Divisi::all();
        return view('divisi10.create', compact('divisi'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KaryawanRequest $request)
    {
        // dd($request->all());
        User::create([
            'nama_karyawan' => $request->nama_karyawan,
            'alamat' => $request->alamat,
            'tgl_lahir' => $request->tgl_lahir,
            'no_tlp' => $request->no_tlp,
            'jabatan' => $request->jabatan,
            'kepala_area' => $request->kepala_area,
            'divisi_id' => $request->divisi_id,
            'nip' => $request->nip,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect('karyawan-regional-jakarta1')->with('success','Data Karyawan Berhasil Dibuat.');
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
        $user = DB::table('users')->where('id',$id)->get();
        $divisi = Divisi::all();
        return view('divisi10.edit',['user' => $user], compact('divisi'));
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
        DB::table('users')->where('id',$request->id)->update([
            'nama_karyawan' => $request->nama_karyawan,
            'alamat' => $request->alamat,
            'tgl_lahir' => $request->tgl_lahir,
            'no_tlp' => $request->no_tlp,
            'jabatan' => $request->jabatan,
            'kepala_area' => $request->kepala_area,
            'divisi_id' => $request->divisi_id,
            'nip' => $request->nip,
            'email' => $request->email,
		]);
        return redirect('karyawan-regional-jakarta1')->with('success','Data Karyawan Berhasil Diedit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect('/karyawan-regional-jakarta1');
    }

    public function import_excel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_karyawan di dalam folder public
		$file->move('file_karyawan',$nama_file);
 
		// import data
		Excel::import(new KaryawanImport, public_path('/file_karyawan/'.$nama_file));
 
		// alihkan halaman kembali
		return redirect('/karyawan-regional-jakarta1');
	}

    public function export_excel()
	{
		return Excel::download(new KaryawanExport, 'karyawan.xlsx');
	}
}
