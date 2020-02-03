<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temuan extends Model
{
    protected $table = 'temuan';
    protected $fillable = [
    	'lhp_id',
    	'pic',
    	'tenggang_waktu',
    	'nilai_rupiah',
    	'isi_temuan',
        'no_lhp'
    ];

    public function lhp()
    {
    	return $this->belongsTo('App\Lhp');
    }
}
