<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lhp extends Model
{
    protected $table = 'lhp';
    protected $fillable = [
    	'bagian_id',
    	'jenis_monitor',
    	'no_lhp',
    	'tgl_pemeriksaan',
    	'no_surat_direksi',
    	'tgl_surat_direksi',
    	'no_surat_penegasan',
    	'tgl_surat_penegasan',
    	'no_tindak_lanjut',
    	'tgl_tindak_lanjut',
        'file'
    ];
 

    public function bagian()
    {
    	return $this->belongsTo('App\Bagian');
    }

    public function monitor()
    {
    	return $this->belongsTo('\App\Monitor');
    }
}
