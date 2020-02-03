<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Bagian;

class BagianController extends Controller
{
    public function index()
    {
        $welcome = 'Bagian';
    	$data_bagian = Bagian::all();
//        dd($data_bagian);
    	return view('bagian/index',['data_bagian' => $data_bagian, 'welcome' => $welcome]);
    }
    
    public function create(Request $request) 	
    {
        $messages = [
            'required'  => ':attribute wajib diisi!',
            'min'       => ':attribute harus diisi minimal :min karakter!',
            'max'       => ':attribute harus diisi maksimal :max karakter!',
        ];
        $this->validate($request,[
        'nama_bagian'   => 'required|min:3',
        'kode'          => 'required|min:3',
        ],$messages);

    	Bagian::create($request->all());
    	return redirect('/bagian')->with('sukses', 'Data berhasil di input');
    }

    public function edit($id)					
    {
        $welcome = 'Bagian';
    	$bagian = Bagian::find($id);
    	return view('bagian.edit',['bagian' => $bagian, 'welcome' => $welcome]);
    }

    public function update(Request $request,$id)
    {
    	$bagian = Bagian::find($id);
        $bagian->update($request->all());
        return redirect('/bagian')->with('sukses', 'Data berhasil diperbarui')->with('sukses', 'Data berhasil diperbarui');
    }

	public function del($id)					
    {
    	$bagian = Bagian::find($id);
    	$bagian->delete($bagian);
    	return redirect('/bagian')->with('sukses', 'Data berhasil dihapus');
    }

    public function content2()
    {
        return view('content2');
    }

}
