<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategoriArtikel extends Model
{
	protected $table='kategori_artikel';

	protected $filable= [
	'nama', 'users_id',
	];
    //
}
