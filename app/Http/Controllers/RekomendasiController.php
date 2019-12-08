<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\JenisTemuan;
use \App\Rekomendasi;

class RekomendasiController extends Controller
{
    public function index()
    {
    	$jenis_temuan = JenisTemuan::all();
      $data_rekomendasi = Rekomendasi::paginate(5);

      //dd($jenis_temuan);
      return view('rekomendasi.index',['data_rekomendasi' => $data_rekomendasi, 'jenis_temuan' => $jenis_temuan]);
    }

   public function create(Request $request)
   {
      //$this->validate($request,[
      //  'lhp_id'            => 'required',
      //  'isi_rekomendasi'   => 'required',
      //]);

    	Rekomendasi::create($request->all());
    	return redirect('/rekomendasi');
   }

   public function edit($id)
   {
    $jenis_temuan = JenisTemuan::all();
   	$rekomendasi = Rekomendasi::find($id);

   	return view('rekomendasi.edit',['rekomendasi' => $rekomendasi, 'jenis_temuan' => $jenis_temuan]);
   }

   public function update(Request $request,$id)
   {
   	$rekomendasi = Rekomendasi::find($id);
   	$rekomendasi->update($request->all());
   	return redirect('/rekomendasi');
   }

   public function del($id)
   {
   	$rekomendasi = Rekomendasi::find($id);
   	$rekomendasi->delete($rekomendasi);
   	return redirect('/rekomendasi');
   }

}
