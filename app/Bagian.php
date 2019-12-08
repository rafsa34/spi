<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bagian extends Model
{
    protected $table = 'bagian';
    protected $fillable = ['nama_bagian','kode'];

    public function lhp()
    {
    	return $this->belongsTo('App\Lhp');
    }
}
