<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
	public function awal()
	{
    return "Hello dari MahasiswaController";
}
public function tambah()
{
return $this->simpan();
}
public function simpan()
{
	$mahasiswa = new Mahasiswa();
	$mahasiswa->nama = 'Ingan';
	$mahasiswa->nim = '1515015173';
	$mahasiswa->save();
	return "data dengan username{$mahasiswa->username} telah disimpan";
}
}