<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
	protected $table = 'wilayah_kabupaten';

	function kecamatan(){
		return $this->hasMany(Kecamatan::class, 'kabupaten_id');
	}

	function provinsi(){
		return $this->belongsTo(Provinsi::class, 'provinsi_id');
	}
}