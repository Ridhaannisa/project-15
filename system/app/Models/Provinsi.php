<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
	protected $table = 'wilayah_provinsi';

	function kabupaten(){
		return $this->hasMany(Kabupaten::class, 'provinsi_id');
	}
}