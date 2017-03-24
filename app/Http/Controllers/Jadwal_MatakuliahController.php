<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jadwal_Matakuliah;

class Jadwal_MatakuliahController extends Controller
{
	public function awal()
	{
    return "Hello dari Jadwal_MatakuliahController";
}
public function tambah()
{
return $this->simpan();
}
public function simpan()
{
	$jadwal_matakuliah = new Jadwal_Matakuliah();
	$jadwal_matakuliah->mahasiswa_id = 'N0001';
	$jadwal_matakuliah->ruangan_id = '4001';
	$jadwal_matakuliah->dosen_matakuliah_id = 'D0001';
	$jadwal_matakuliah->save();
	return "data dengan username{$jadwal_matakuliah->username} telah disimpan";
}
}