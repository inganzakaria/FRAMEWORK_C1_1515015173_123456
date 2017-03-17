<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matakuliah;

class MatakuliahController extends Controller
{
	public function awal()
	{
    return "Hello dari MatakuliahController";
}
public function tambah()
{
return $this->simpan();
}
public function simpan()
{
	$matakuliah = new Matakuliah();
	$matakuliah->title = 'FrameWork';
	$matakuliah->keterangan = 'Praktikum';
	$pengguna->save();
	return "data dengan username{$matakuliah->username} telah disimpan";
}
}