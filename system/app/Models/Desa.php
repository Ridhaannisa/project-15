<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
	protected $table = 'wilayah_desa';

	function kecamatan(){
		return $this->belongsTo(Kecamatan::class, 'kecamatan_id');
	}
}