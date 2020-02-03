<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\JenisTemuan;

class JenisTemuanController extends Controller
{
    public function index()
    {
        $welcome = 'Jenis Temuan';
    	$data_jenis_temuan = JenisTemuan::all();
    	return view('JenisTemuan.index',['data_jenis_temuan' => $data_jenis_temuan, 'welcome' => $welcome]);
    }

    public function create(Request $request)
    {
        $messages = [
            'required'  => ':attribute wajib diisi!',
            'min'       => ':attribute harus diisi minimal :min karakter!',
            'max'       => ':attribute harus diisi maksimal :max karakter!',
        ];
        $this->validate($request,[
        'jenis_temuan'   => 'required|min:3',
        ],$messages);

    	JenisTemuan::create($request->all());
    	return redirect('/jenis-temuan')->with('sukses','Data berhasil di input');
    }

    public function edit($id)
    {
    	$JenisTemuan = JenisTemuan::find($id);
    	return view('JenisTemuan.edit',['JenisTemuan' => $JenisTemuan]);
    }

    public function update(Request $request, $id)
    {
    	$JenisTemuan = JenisTemuan::find($id);
   		$JenisTemuan->update($request->all());
   		return redirect('/jenis-temuan');
    }

    public function del($id)
    {
    	$JenisTemuan = JenisTemuan::find($id);
   		$JenisTemuan->delete($JenisTemuan);
   		return redirect('/jenis-temuan');
    }
}
