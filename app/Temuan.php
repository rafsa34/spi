<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temuan extends Model
{
    protected $table = 'temuan';
    protected $fillable = [
    	'jenis_temuan_id',
    	'pic',
    	'tenggang_waktu',
    	'nilai_rupiah',
    	'status',
    	'isi_temuan',
        'jenis_temuan'
    ];

    public function JenisTemuan()
    {
    	return $this->belongsTo('App\JenisTemuan');
    }
}
