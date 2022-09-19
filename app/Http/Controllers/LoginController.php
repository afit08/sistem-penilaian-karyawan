<?php

namespace App\Http\Controllers;

use App\Divisi;
use App\Http\Requests\KaryawanRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function postlogin(LoginRequest $request){
        if (Auth::attempt($request->only('email','password'))) {
            return redirect('/');
        }
        return redirect('login')->with('danger','email dan password tidak cocok.');
    } 
 
    public function logout(Request $request){
        Auth::logout();
        return redirect('login');
    }

    public function registrasi(){
        $divisi = Divisi::all();
        return view('template.register', compact('divisi'));
    }

    public function simpanregistrasi(KaryawanRequest $request){
        // dd($request->all()); 
        User::create([
            'kode_karyawan' => $request->kode_karyawan,
            'nama_karyawan' => $request->nama_karyawan,
            'alamat' => $request->alamat,
            'tgl_lahir' => $request->tgl_lahir,
            'no_tlp' => $request->no_tlp,
            'jabatan' => $request->jabatan,
            'kepala_area' => $request->kepala_area,
            'divisi_id' => '1',
            'nip' => $request->nip,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return view('admin.login')->with('success','Regitrasi telah berhasil dibuat silahkan Login.');
    }
}
