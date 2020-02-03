<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Temuan;
use \App\Rekomendasi;

class RekomendasiController extends Controller
{
    public function index()
    {
      // return view('rekomendasi.index');
      $welcome = 'Rekomendasi';
    	$temuan = Temuan::all();
      $data_rekomendasi = Rekomendasi::all();

      //dd($jenis_temuan);
      return view('rekomendasi.index',['data_rekomendasi' => $data_rekomendasi, 'temuan' => $temuan, 'welcome' => $welcome]);
    }

   public function create(Request $request)
   {

      // if ($request->has('q')) {
      //       $cari = $request->q;
      //       $data = DB::table('users')->select('id', 'email')->where('email', 'LIKE', '%$cari%')->get();
      //       return response()->json($data);
      //   }

      $messages = [ 
        'required'  => ':attribute wajib diisi!',
      ];

      $this->validate($request,[
       'jenis_temuan'      => 'min:3',
       'isi_rekomendasi'   => 'required',
      ],$messages);
      
    	Rekomendasi::create($request->all());
    	return redirect('/lhp-rutin/add')->with('sukses','Data berhasil di input');
   }

   public function edit($id)
   {
    $temuan = Temuan::all();
   	$rekomendasi = Rekomendasi::find($id);

   	return view('rekomendasi.edit',['rekomendasi' => $rekomendasi, 'temuan' => $temuan]);
   }

   public function update(Request $request,$id)
   {
   	$rekomendasi = Rekomendasi::find($id);
   	$rekomendasi->update($request->all());
   	return redirect('/rekomendasi')->with('sukses', 'Data berhasil diperbarui');
   }

   public function del($id)
   {
   	$rekomendasi = Rekomendasi::find($id);
   	$rekomendasi->delete($rekomendasi);
   	return redirect('/rekomendasi')->with('sukses', 'Data berhasil dihapus');
   }

}
