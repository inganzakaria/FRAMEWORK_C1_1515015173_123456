<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;
class DosenController extends Controller
{
    public function awal()
	{
    return "About DosenController";
}
public function tambah()
{
return $this->simpan();
}
public function simpan()
{
	$dosen = new Dosen();
	$dosen->nama = 'Ingan Zakaria';
	$dosen->nip = '12345';
	$dosen->alamat = 'Jalan Candrawasih No 1';
	$dosen->save();
	return 'data dengan username{$dosen->username} telah disimpan';
	
}
}

