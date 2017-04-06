<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengguna;

class PenggunaController extends Controller
{
    public function awal()
    {
    	return view('pengguna.awal', ['data'=> pengguna::all()]);
    }

    public function tambah()
    {
    	return view('pengguna.tambah');
    }

    public function simpan()
    {
    	$pengguna =new pengguna();
    	$pengguna->username = $input->username;
    	$pengguna->password = $input->password;
    	$informasi = $pengguna->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    	return redirect('pengguna') -> with(['informasi'=>$informasi]);
    }
    
}
