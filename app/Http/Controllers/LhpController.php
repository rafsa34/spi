<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Bagian;
use App\Monitor;
use App\Lhp;
use App\Temuan;
use App\Rekomendasi;
use File;
use PDF;

class LhpController extends Controller
{

    public function index(Request $request)
    {
        $welcome = 'Semua LHP';
        $data_lhp = Lhp::orderBy('created_at', 'desc')->get();
        // if($request->has('lhp'))
        // {
        //     $data_lhp = Lhp::where('jenis_monitor','LIKE','%'.$request->lhp.'%')->all();
        // }
        
        // else

        // {
    	   // $data_lhp = Lhp::all();
        // }

        $data_bagian = Bagian::all();
        $data_monitor = Monitor::all();
       // dd($data_lhp);

        return view('lhp.index',$kosong = ['data_lhp' => $data_lhp,'data_bagian'=> $data_bagian, 'welcome' => $welcome]);
    }
    
    public function create(Request $request)
    {
        $messages = [
            'required'  => ':attribute wajib diisi!',
            'min'       => ':attribute harus diisi minimal :min karakter!',
        ];  

        $this->validate($request,[
            'bagian_id'            => 'required',
            'no_lhp'               => 'required',
            'tgl_pemeriksaan'      => 'required',

        ],$messages);

        Lhp::create($request->all());
        // dd($request);
        return redirect('/lhp-rutin/add')->with('sukses','Data berhasil di input');
    }
    
    public function edit($id)
    {
        $welcome = 'LHP';
        $data_bagian = Bagian::all();

        $lhp = Lhp::find($id);
        return view('lhp.edit',['lhp' => $lhp, 'data_bagian'=>$data_bagian, 'welcome' => $welcome]);
    }

    public function update(Request $request,$id)
    {   
        $messages = [
            'required'  => ':attribute wajib diisi!',
            'mimes'     => ':attribute harus berformat pdf',
        ];

        $this->validate($request,[
            'file'        => 'mimes:pdf|max:1024',
        ],$messages);

        $lhp = Lhp::find($id);
        $lhp->update($request->all());
        //Upload File
        if($request->hasFile('file'))
        {
            $request->file('file')->move('upload/',$request->file('file')->getClientOriginalName());
            $lhp->file = $request->file('file')->getClientOriginalName();
            $lhp->save();
        }

        // //Upload file no LHP
        // if($request->hasFile('no_lhp'))
        // {
        //     $request->file('no_lhp')->move('upload/',$request->file('no_lhp')->getClientOriginalName());
        //     $lhp->no_lhp = $request->file('no_lhp')->getClientOriginalName();
        //     $lhp->save();
        // }
        // //Upload file no surat direksi
        // if($request->hasFile('no_surat_direksi'))
        // {
        //     $request->file('no_surat_direksi')->move('upload/',$request->file('no_surat_direksi')->getClientOriginalName());
        //     $lhp->no_surat_direksi = $request->file('no_surat_direksi')->getClientOriginalName();
        //     $lhp->save();
        // }
        // //Upload file no surat penegasan
        // if($request->hasFile('no_surat_penegasan'))
        // {
        //     $request->file('no_surat_penegasan')->move('upload/',$request->file('no_surat_penegasan')->getClientOriginalName());
        //     $lhp->no_surat_penegasan = $request->file('no_surat_penegasan')->getClientOriginalName();
        //     $lhp->save();
        // }

        return redirect('/lhp')->with('sukses', 'Data berhasil diperbarui');
    }

    public function del($id)
    {
    	$lhp = Lhp::find($id);
        $lhp = Lhp::where('id',$id)->first();
        File::delete('upload/'.$lhp->file);
        // File::delete('upload/'.$lhp->no_lhp);
        // File::delete('upload/'.$lhp->no_surat_direksi);
        // File::delete('upload/'.$lhp->no_surat_penegasan);
        $lhp->delete($lhp);
        return redirect('/lhp')->with('sukses', 'Data berhasil dihapus');
    }

    public function indexrutin(Request $request)
    {
        $welcome = 'LHP Rutin';
        $data_lhp = Lhp::where('jenis_monitor','LIKE','rutin')->get();

        $data_bagian = Bagian::all();
        $data_monitor = Monitor::all();
       // dd($data_lhp);

        return view('lhp-rutin.index',['data_lhp' => $data_lhp,'data_bagian' => $data_bagian, 'welcome' => $welcome]);
    }

    public function addrutin()
    {
        $data_temuan = Temuan::all();
        $data_rekomendasi = Rekomendasi::all();
        $data_bagian = Bagian::all();
        $lhp = Lhp::all();

        return view('lhp-rutin.add',['lhp' => $lhp, 'data_rekomendasi' => $data_rekomendasi, 'data_temuan' => $data_temuan, 'data_bagian' => $data_bagian]);
    }

    public function indexkhusus(Request $request)
    {
        $welcome = 'LHP Khusus';
        $data_lhp = Lhp::where('jenis_monitor','LIKE','khusus')->get();

        $data_bagian = Bagian::all();
        $data_monitor = Monitor::all();
       // dd($data_lhp);

        return view('lhp-khusus.index',['data_lhp' => $data_lhp,'data_bagian' => $data_bagian, 'welcome' => $welcome]);
    }

    public function addkhusus()
    {
        $data_temuan = Temuan::all();
        $data_rekomendasi = Rekomendasi::all();
        $data_bagian = Bagian::all();
        $lhp = Lhp::all();

        return view('lhp-khusus.add',['lhp' => $lhp, 'data_rekomendasi' => $data_rekomendasi, 'data_temuan' => $data_temuan, 'data_bagian' => $data_bagian]);
    }

    // public function indexspi(Request $request)
    // {
    //     $welcome = 'LHP SPI';
    //     $data_lhp = Lhp::where('jenis_monitor','LIKE','spi')->get();

    //     $data_bagian = Bagian::all();
    //     $data_monitor = Monitor::all();
    //    // dd($data_lhp);

    //     return view('lhp-spi.index',['data_lhp' => $data_lhp,'data_bagian' => $data_bagian, 'welcome' => $welcome]);
    // }

    public function indexbpkp(Request $request)
    {
        $welcome = 'LHP BPKP';
        $data_lhp = Lhp::where('jenis_monitor','LIKE','bpkp')->get();

        $data_bagian = Bagian::all();
        $data_monitor = Monitor::all();
       // dd($data_lhp);

        return view('lhp-bpkp.index',['data_lhp' => $data_lhp,'data_bagian' => $data_bagian, 'welcome' => $welcome]);
    }

    public function addbpkp()
    {
        $data_temuan = Temuan::all();
        $data_rekomendasi = Rekomendasi::all();
        $data_bagian = Bagian::all();
        $lhp = Lhp::all();

        return view('lhp-bpkp.add',['lhp' => $lhp, 'data_rekomendasi' => $data_rekomendasi, 'data_temuan' => $data_temuan, 'data_bagian' => $data_bagian]);
    }

    public function indexbpk(Request $request)
    {
        $welcome = 'LHP BPK';
        $data_lhp = Lhp::where('jenis_monitor','LIKE','bpk')->get();

        $data_bagian = Bagian::all();
        $data_monitor = Monitor::all();
       // dd($data_lhp);

        return view('lhp-bpk.index',['data_lhp' => $data_lhp,'data_bagian' => $data_bagian, 'welcome' => $welcome]);
    }

    public function addbpk()
    {
        $data_temuan = Temuan::all();
        $data_rekomendasi = Rekomendasi::all();
        $data_bagian = Bagian::all();
        $lhp = Lhp::all();

        return view('lhp-bpk.add',['lhp' => $lhp, 'data_rekomendasi' => $data_rekomendasi, 'data_temuan' => $data_temuan, 'data_bagian' => $data_bagian]);
    }

    public function indexkap(Request $request)
    {
        $welcome = 'LHP KAP';
        $data_lhp = Lhp::where('jenis_monitor','LIKE','kap')->get();

        $data_bagian = Bagian::all();
        $data_monitor = Monitor::all();
       // dd($data_lhp);

        return view('lhp-kap.index',['data_lhp' => $data_lhp,'data_bagian' => $data_bagian, 'welcome' => $welcome]);
    }

    public function addkap()
    {
        $data_temuan = Temuan::all();
        $data_rekomendasi = Rekomendasi::all();
        $data_bagian = Bagian::all();
        $lhp = Lhp::all();

        return view('lhp-kap.add',['lhp' => $lhp, 'data_rekomendasi' => $data_rekomendasi, 'data_temuan' => $data_temuan, 'data_bagian' => $data_bagian]);
    }

    // public function download()
    // {
    //     try {
    //         return Storage::disk('local')->download('/public/upload/1.png');
    //     } catch (\Exception $e) {
    //         return $e->getMessage();
    //     }
    // }

    // public function delfile()
    // {
    //     try {
    //         Storage::disk('local')->delete('public/upload/Screenshot_2019-11-30_19-27-05.png');
    //         return 'Deleted';
    //     } catch ('\Exception $e') {
    //         return $e->getMessage();
    //     }
    // }

    public function cetak()
    {
        $data_lhp = Lhp::where('jenis_monitor','LIKE','rutin')->get();

        $data_bagian = Bagian::all();
        $data_monitor = Monitor::all();

        $pdf = PDF::loadview('lhp-rutin.lhp-rutin-cetak',['data_lhp' => $data_lhp, 'data_bagian' => $data_bagian, 'data_monitor' => $data_monitor]);
        return $pdf->download('laporan-rutin-pdf');
    }

}
