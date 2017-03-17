<?php
use App\Pengguna;
use App\Dosen;
use App\Mahasiswa;
use App\Matakuliah;
use App\Dosen_Matakuliah;
use App\Jadwal_Matakuliah;
use App\Ruangan;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requesjed.
|
*/
Route::get('dosen','DosenController@awal');
Route::get('mahasiswa','MahasiswaController@awal');
Route::get('matakuliah','MatakuliahController@awal');
Route::get('dosen_matakuliah','Dosen_MatakuliahController@awal');
Route::get('jadwal_matakuliah','Jadwal_MatakuliahController@awal');
Route::get('ruangan','RuanganController@awal');
Route::get('dosen/tambah','DosenController@tambah');
Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah',function(){
	$pengguna = new Pengguna();
	$pengguna->username = 'jon doe';
	$pengguna->password = 'doe jon';
	$pengguna->save();
	return "data dengan username{$pengguna->username} telah disimpan";

});