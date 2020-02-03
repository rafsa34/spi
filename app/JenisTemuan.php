<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisTemuan extends Model
{
    protected $table = 'jenistemuan';
    protected $fillable = ['jenis_temuan'];

    public function rekomendasi()
    {
    	return $this->belongsTo('App\Rekomendasi');
    }
}
