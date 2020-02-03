<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Lhp;
use \App\Temuan;

class TemuanController extends Controller
{
    public function index()
    {
        $welcome = 'Temuan Pemeriksaan';
    	$lhp = Lhp::all();
    	$data_temuan = Temuan::all();

    	//dd($jenis_temuan);
    	return view('temuan.index',['data_temuan' => $data_temuan, 'lhp' => $lhp, 'welcome' => $welcome]);
    }

    public function create(Request $request)
    {
        // $messages = [
        //     'required'  => ':attribute wajib diisi!',
        //     'min'       => ':attribute harus diisi minimal :min karakter!',
        //     'max'       => ':attribute harus diisi maksimal :max karakter!',
        //     'integer'   => ':attribute harus diisi dengan angka',
        // ];
        // $this->validate($request,[
        //   'lhp_id'    => 'required',
        //   'pic'               => 'required',
        //   'tenggang_waktu'    => 'required|integer',
        //   'nilai_rupiah'      => 'required|integer',
        //   // 'status'            => 'required',
        //   'isi_temuan'        => 'required',
        // ],$messages);

        $temuan = new Temuan;

        $temuan->lhp_id = $request->input('lhp_id');
        $temuan->pic = $request->input('pic');
        $temuan->tenggang_waktu = $request->input('tenggang_waktu');
        $temuan->nilai_rupiah = $request->input('nilai_rupiah');
        $temuan->isi_temuan = $request->input('isi_temuan');  
        
        $temuan->save();
    	// Temuan::create($request->all());
    	// return redirect('/lhp-rutin/add')->with('sukses', 'Data berhasil di input');
    }

    public function edit($id)
    {
        $lhp = Lhp::all();
    	$temuan = Temuan::find($id);

    	return view('temuan.edit',['temuan' => $temuan,'lhp' => $lhp]);
    }

    public function update(Request $request,$id)
    {
        $temuan = Temuan::find($id);
        $temuan->update($request->all());

        return redirect('/temuan')->with('sukses', 'Data berhasil diperbarui');
    }

    public function del($id)
    {
    	$temuan = Temuan::find($id);
    	$temuan->delete($temuan);
    	return redirect('/temuan')->with('sukses', 'Data berhasil dihapus');
    }

}
