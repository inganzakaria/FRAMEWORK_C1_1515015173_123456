<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable=['username','password'];
    
   
    	public function mahasiswa()
    	{
    		return $this->hasOne(Mahasiswa::class,'pengguna_id'); //mengembalikan return this dimana nilai this didapat dari tabel mahasiswa dengan relasi one to one
    	}
    	public function dosen(){
    		return $this->hasOne(dosen::class,'pengguna_id'); //mengembalikan return this dimana nilai this didapat dari tabel dosen dengan relasi one to one
    	}
    
}