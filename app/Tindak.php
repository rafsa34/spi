<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tindak extends Model
{
    protected $table = 'tindak_lanjut';
    protected $fillable = [
    'jenis_temuan_id',
    'isi_tindak',
];

    public function JenisTemuan()
    {
    	return $this->belongsTo('App\JenisTemuan');
    }
}
