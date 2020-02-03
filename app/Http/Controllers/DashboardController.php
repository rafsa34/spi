<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Lhp;
use \App\Bagian;
use \App\Temuan;

class DashboardController extends Controller
{
    public function index()
    {
    	$lhprutin = Lhp::where('jenis_monitor','LIKE','rutin')->count();
    	$lhpkhusus = Lhp::where('jenis_monitor','LIKE','khusus')->count();
    	$lhpspi = Lhp::where('jenis_monitor','LIKE','spi')->count();
    	$lhpbpkp = Lhp::where('jenis_monitor','LIKE','bpkp')->count();
    	$lhpbpk = Lhp::where('jenis_monitor','LIKE','bpk')->count();
    	$lhpkap = Lhp::where('jenis_monitor','LIKE','kap')->count();
    	$lhpsemua = Lhp::count();
    	$bagian = Bagian::count();
    	$temuan = Temuan::count();
    	return view('dashboard.index')
    	->with([
    		'lhpsemua'	=> $lhpsemua,
    		'bagian'	=> $bagian,
    		'temuan'	=> $temuan,
    		'lhprutin'	=> $lhprutin,
    		'lhpkhusus' => $lhpkhusus,
    		'lhpspi'	=> $lhpspi,
    		'lhpbpkp'	=> $lhpbpkp,
    		'lhpbpk'	=> $lhpbpk,
    		'lhpkap'	=> $lhpkap

    	]);
    }
}
