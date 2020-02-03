<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    protected $table = 'monitor';
    protected $fillable = [
    'jenis_model',
    ];

    public function Lhp()
    {
    	return $this->belongsTo('\App\Lhp');
    }
}
