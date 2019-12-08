<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\JenisTemuan;

class JenisTemuanController extends Controller
{
    public function index()
    {
    	$data_jenis_temuan = JenisTemuan::all();
    	return view('JenisTemuan.index',['data_jenis_temuan' => $data_jenis_temuan]);
    }

    public function create(Request $request)
    {
    	JenisTemuan::create($request->all());
    	return redirect('/jenis-temuan');
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
