<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\JenisTemuan;
use \App\Temuan;

class TemuanController extends Controller
{
    public function index()
    {
    	$jenis_temuan = JenisTemuan::all();
    	$data_temuan = Temuan::paginate(5);

    	//dd($jenis_temuan);
    	return view('temuan.index',['data_temuan' => $data_temuan, 'jenis_temuan' => $jenis_temuan]);
    }

    public function create(Request $request)
    {
        //$this->validate($request,[
        //  'jenis_temuan'      => 'required',
        //  'pic'               => 'required',
        //  'tenggang_waktu'    => 'required|integer',
        //  'nilai_rupiah'      => 'required|integer',
        //]);

    	Temuan::create($request->all());
    	return redirect('/temuan');
    }

    public function edit($id)
    {
        $jenis_temuan = JenisTemuan::all();
    	$temuan = Temuan::find($id);

    	return view('temuan.edit',['temuan' => $temuan,'jenis_temuan' => $jenis_temuan]);
    }

    public function update(Request $request,$id)
    {
        $temuan = Temuan::find($id);
        $temuan->update($request->all());

        return redirect('/temuan');
    }

    public function del($id)
    {
    	$temuan = Temuan::find($id);
    	$temuan->delete($temuan);
    	return redirect('/temuan');
    }

}
