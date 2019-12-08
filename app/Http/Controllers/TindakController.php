<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\JenisTemuan;
use \App\Tindak;

class TindakController extends Controller
{
    public function index()
    {
    	$jenis_temuan = JenisTemuan::all();
    	$data_tindak = Tindak::all();

    	return view('tindak.index',['data_tindak' => $data_tindak, 'jenis_temuan' => $jenis_temuan]);
    }

    public function create(Request $request)
    {
        //$this->validate($request,[
        //'lhp_id'        => 'required',
        //'isi_tindak'    => 'required',
        //]);
    	
        Tindak::create($request->all());
        return redirect('/tindak');
    }

    public function edit($id)
    {
    	$jenis_temuan = JenisTemuan::all();
    	$tindak = Tindak::find($id);

    	return view('tindak.edit',['jenis_temuan' => $jenis_temuan, 'tindak' => $tindak]);
    }

    public function update(Request $request,$id)
    {
    	$tindak = Tindak::find($id);
    	$tindak->update($request->all());

    	return redirect('/tindak');
    }

    public function del($id)
    {
    	$tindak = Tindak::find($id);
    	$tindak->delete($tindak);

    	return redirect('/tindak');
    }
}
