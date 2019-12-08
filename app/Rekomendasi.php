<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekomendasi extends Model
{
    protected $table = 'rekomendasi';
    protected $fillable = [
    	'jenis_temuan_id',
    	'isi_rekomendasi'
    ];

    public function JenisTemuan()
    {
    	return $this->belongsTo('App\JenisTemuan');
    }
}
