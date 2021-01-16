<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\ClientProduk;
use Illuminate\Http\Request;

class AlamatResource extends Controller
{
	function getKabupaten($provinsi_id){
		return Kabupaten::where("provinsi_id", $provinsi_id)->get();
	}

	function getKecamatan($kabupaten_id){
		return Kecamatan::where("kabupaten_id", $kabupaten_id)->get();
	}

	function getdesa($kecamatan_id){
		return Desa::where("kecamatan_id", $kecamatan_id)->get();
	}
	
} 