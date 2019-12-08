<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Bagian;

class BagianController extends Controller
{
    public function index()
    {
    	$data_bagian = Bagian::paginate(5);
//        dd($data_bagian);
    	return view('bagian/index',['data_bagian' => $data_bagian]);
    }
    
    public function create(Request $request) 		// C R E A T E //
    {
        $this->validate($request,[
        'nama_bagian'   => 'required|min:3',
        'kode'          => 'required',
        ]);

    	\App\Bagian::create($request->all());
    	return redirect('/bagian');
    }

    public function edit($id)						// E D I T //
    {
    	$bagian = \App\Bagian::find($id);
    	return view('bagian.edit',['bagian' => $bagian]);
    }

    public function update(Request $request,$id)	// U P D A T E //
    {
    	$bagian = \App\Bagian::find($id);
        $bagian->update($request->all());
        return redirect('/bagian');
    }

	public function del($id)						// D E L E T E //
    {
    	$bagian = \App\Bagian::find($id);
    	$bagian->delete($bagian);
    	return redirect('/bagian');
    }

}
