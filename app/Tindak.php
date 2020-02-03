<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tindak extends Model
{
    protected $table = 'tindak_lanjut';
    protected $fillable = [
    'temuan_id',
    'status',
    'isi_tindak',
    'isi_temuan'
];

    public function temuan()
    {
    	return $this->belongsTo('App\Temuan');
    }
}
