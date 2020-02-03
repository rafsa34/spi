<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Temuan;
use \App\Tindak;

class TindakController extends Controller
{
    public function index()
    {
        $welcome = 'Tindak Lanjut';
    	$temuan = Temuan::all();
    	$data_tindak = Tindak::all();

    	return view('tindak.index',['data_tindak' => $data_tindak, 'temuan' => $temuan, 'welcome' => $welcome]);
    }

    public function create(Request $request)
    {
        $messages = [
        'required'  => ':attribute wajib diisi!',
        ];

        $this->validate($request,[
        'jenis_temuan'  => 'min:3',
        'isi_tindak'    => 'required',
        ],$messages);
    	
        Tindak::create($request->all());
        return redirect('/tindak')->with('sukses','Data berhasil di input');
    }

    public function edit($id)
    {
    	$temuan = Temuan::all();
    	$tindak = Tindak::find($id);

    	return view('tindak.edit',['temuan' => $temuan, 'tindak' => $tindak]);
    }

    public function update(Request $request,$id)
    {
    	$tindak = Tindak::find($id);
    	$tindak->update($request->all());

    	return redirect('/tindak')->with('sukses', 'Data berhasil diperbarui');
    }

    public function del($id)
    {
    	$tindak = Tindak::find($id);
    	$tindak->delete($tindak);

    	return redirect('/tindak')->with('sukses', 'Data berhasil dihapus');
    }
}
