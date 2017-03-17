<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen_Matakuliah;

class Dosen_MatakuliahController extends Controller
{
	public function awal()
	{
    return "Hello dari Dosen_MatakuliahController";
}
public function tambah()
{
return $this->simpan();
}
public function simpan()
{
	$dosen_matakuliah = new Dosen_Matakuliah();
	$dosen_matakuliah->dosen_id= '12345';
	$dosen_matakuliah->matakuliah_id = 'Mk0001';
	$pengguna->save();
	return "data dengan username{$dosen_matakuliah->username} telah disimpan";
}
}