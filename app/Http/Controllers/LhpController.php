<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Bagian;
use App\Monitor;
use App\Lhp;

class LhpController extends Controller
{
    public function index()
    {
        $data_bagian = Bagian::all();
        $data_monitor = Monitor::all();
    	$data_lhp = Lhp::paginate(5);
       // dd($data_lhp);

    	return view('lhp.index',['data_lhp' => $data_lhp, 'data_bagian'=>$data_bagian]);
    }
    
    public function create(Request $request)
    {
        //$this->validate($request,[
        //'bagian_id'              => 'required',
        //'jenis_monitor'          => 'required',
        //'no_lhp'                 => 'required',
        //'tgl_pemeriksaan'        => 'required',
        //'no_surat_direksi'       => 'required',
        //'tgl_surat_direksi'      => 'required',
        //'no_surat_penegasan'     => 'required',
        //'tgl_surat_penegasan'    => 'required',
        //'no_tindak_lanjut'       => 'required',
        //'tgl_tindak_lanjut'      => 'required',
        //]);

        //$upload = "N";
        //if ($request->hasFile('file'))
        //{
        //    $destination = "upload";
        //    $file = $request->file('file');
        //    $file->move($destination, $file->getClientOriginalName());
        //    $upload = "Y";
        //}

        //if ($upload =="Y") {
        //    $upload = new upload;
        //    $upload->file = $request->file;
        //    $upload->save();
        //}

    	\App\Lhp::create($request->all());
        return redirect('/lhp');
    }
    
    public function edit($id)
    {
        $data_bagian = Bagian::all();

        $lhp = Lhp::find($id);
        return view('lhp.edit',['lhp' => $lhp, 'data_bagian'=>$data_bagian]);
    }

    public function update(Request $request,$id)
    {
        $lhp = \App\Lhp::find($id);
        $lhp->update($request->all());
        return redirect('/lhp');
    }

    public function del($id)
    {
    	$lhp = Lhp::find($id);
		$lhp->delete($lhp);
        return redirect('/lhp');
    }

    public function no_lhp()
    {
        $data_lhp = Lhp::all();
        return view('lhp.no_lhp',['data_lhp' => $data_lhp]);
    }

    public function upload()
    {
        $file = Lhp::get();
        return view('upload',['file' => $file]);
    }

    public function proses_upload(Request $request)
    {
        $this->validate($request,['file' => 'required']);

        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'upload';
        $file->move($tujuan_upload,$nama_file);

        Lhp::create(['file => $nama_file']);

        return redirect()->back();
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $data_bagian = Bagian::all();
        $data_monitor = Monitor::all();
        $data_lhp = Lhp::all()->where('jenis_monitor',"%".$cari."%");

        //return view('lhp.index',['lhp' => $lhp]);
        return view('lhp.index',['data_lhp' => $data_lhp, 'data_bagian'=>$data_bagian]);
    }

}
