<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekomendasi extends Model
{
    protected $table = 'rekomendasi';
    protected $fillable = [
    	'temuan_id',
    	'isi_rekomendasi',
    	'isi_temuan',
        'status',
    ];

    public function temuan()
    {
    	return $this->belongsTo('App\Temuan');
    }
}
