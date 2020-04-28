<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Lhp;
use \App\Bagian;
use \App\Temuan;
use \App\Rekomendasi;
use DB;

class DashboardController extends Controller
{
    public function index()
    {

        // $rekomendasiBelumSelesai = Rekomendasi::where('status','LIKE','Belum Selesai')->count();
        // $rekomendasiSelesai = Rekomendasi::where('status','LIKE','Selesai')->count();
        // $rekomendasiBelumDitindaklanjuti = Rekomendasi::where('status','LIKE','Belum Ditindaklanjuti')->count();
        // $rekomendasiTidakDapatDitindaklanjuti = Rekomendasi::where('status','LIKE','Tidak Dapat Ditindaklanjuti')->count();

        $query = "SELECT count(*) as total FROM `bagian` join lhp on lhp.bagian_id = bagian.id join rekomendasi on rekomendasi.lhp_id = lhp.id where nama_bagian = ? and rekomendasi.status = ?";
        
        //Sekretaris Perusahaan
        //Belum Selesai
        $SPBelumSelesai = DB::select($query, ['Sekretaris Perusahaan', 'Belum Selesai']);
        $SPBelumSelesai = $SPBelumSelesai[0]->total;
        //Selesai
        $SPSelesai = DB::select($query, ['Sekretaris Perusahaan', 'Selesai']);
        $SPSelesai = $SPSelesai[0]->total;
        //Belum Ditindaklanjuti
        $SPBelumDitindaklanjuti = DB::select($query, ['Sekretaris Perusahaan', 'Belum Ditindaklanjuti']);
        $SPBelumDitindaklanjuti = $SPBelumDitindaklanjuti[0]->total;
        //Tidak Dapat Ditindaklanjuti
        $SPTidakDapatDitindaklanjuti = DB::select($query, ['Sekretaris Perusahaan', 'Tidak Dapat Ditindaklanjuti']);
        $SPTidakDapatDitindaklanjuti = $SPTidakDapatDitindaklanjuti[0]->total;

        //Satuan Pengawaasan Internal
        //Belum Selesai
        $SPIBelumSelesai = DB::select($query, ['Satuan Pengawasan Internal', 'Belum Selesai']);
        $SPIBelumSelesai = $SPIBelumSelesai[0]->total;
        //Selesai
        $SPISelesai = DB::select($query, ['Satuan Pengawasan Internal', 'Selesai']);
        $SPISelesai = $SPISelesai[0]->total;
        //Belum Ditindaklanjuti
        $SPIBelumDitindaklanjuti = DB::select($query, ['Satuan Pengawasan Internal', 'Belum Ditindaklanjuti']);
        $SPIBelumDitindaklanjuti = $SPIBelumDitindaklanjuti[0]->total;
        //Tidak Dapat Ditindaklanjuti
        $SPITidakDapatDitindaklanjuti = DB::select($query, ['Satuan Pengawasan Internal', 'Tidak Dapat Ditindaklanjuti']);
        $SPITidakDapatDitindaklanjuti = $SPITidakDapatDitindaklanjuti[0]->total;

        //Keuangan
        //Belum Selesai
        $KBelumSelesai = DB::select($query, ['Keuangan', 'Belum Selesai']);
        $KBelumSelesai = $KBelumSelesai[0]->total;
        //Selesai
        $KSelesai = DB::select($query, ['Keuangan', 'Selesai']);
        $KSelesai = $KSelesai[0]->total;
        //Belum Ditindaklanjuti
        $KBelumDitindaklanjuti = DB::select($query, ['Keuangan', 'Belum Ditindaklanjuti']);
        $KBelumDitindaklanjuti = $KBelumDitindaklanjuti[0]->total;
        //Tidak Dapat Ditindaklanjuti
        $KTidakDapatDitindaklanjuti = DB::select($query, ['Keuangan', 'Tidak Dapat Ditindaklanjuti']);
        $KTidakDapatDitindaklanjuti = $KTidakDapatDitindaklanjuti[0]->total;

        //Komersil
        //Belum Selesai
        $KmBelumSelesai = DB::select($query, ['Komersil', 'Belum Selesai']);
        $KmBelumSelesai = $KmBelumSelesai[0]->total;
        //Selesai
        $KmSelesai = DB::select($query, ['Komersil', 'Selesai']);
        $KmSelesai = $KmSelesai[0]->total;
        //Belum Ditindaklanjuti
        $KmBelumDitindaklanjuti = DB::select($query, ['Komersil', 'Belum Ditindaklanjuti']);
        $KmBelumDitindaklanjuti = $KmBelumDitindaklanjuti[0]->total;
        //Tidak Dapat Ditindaklanjuti
        $KmTidakDapatDitindaklanjuti = DB::select($query, ['Komersil', 'Tidak Dapat Ditindaklanjuti']);
        $KmTidakDapatDitindaklanjuti = $KmTidakDapatDitindaklanjuti[0]->total;

        //SDM dan Umum
        //Belum Selesai
        $SDMBelumSelesai = DB::select($query, ['SDM dan Umum', 'Belum Selesai']);
        $SDMBelumSelesai = $SDMBelumSelesai[0]->total;
        //Selesai
        $SDMSelesai = DB::select($query, ['SDM dan Umum', 'Selesai']);
        $SDMSelesai = $SDMSelesai[0]->total;
        //Belum Ditindaklanjuti
        $SDMBelumDitindaklanjuti = DB::select($query, ['SDM dan Umum', 'Belum Ditindaklanjuti']);
        $SDMBelumDitindaklanjuti = $SDMBelumDitindaklanjuti[0]->total;
        //Tidak Dapat Ditindaklanjuti
        $SDMTidakDapatDitindaklanjuti = DB::select($query, ['SDM dan Umum', 'Tidak Dapat Ditindaklanjuti']);
        $SDMTidakDapatDitindaklanjuti = $SDMTidakDapatDitindaklanjuti[0]->total;

        //Perencanaan dan Pengembangan
        //Belum Selesai
        $PPBelumSelesai = DB::select($query, ['Perencanaan dan Pengembangan', 'Belum Selesai']);
        $PPBelumSelesai = $PPBelumSelesai[0]->total;
        //Selesai
        $PPSelesai = DB::select($query, ['Perencanaan dan Pengembangan', 'Selesai']);
        $PPSelesai = $PPSelesai[0]->total;
        //Belum Ditindaklanjuti
        $PPBelumDitindaklanjuti = DB::select($query, ['Perencanaan dan Pengembangan', 'Belum Ditindaklanjuti']);
        $PPBelumDitindaklanjuti = $PPBelumDitindaklanjuti[0]->total;
        //Tidak Dapat Ditindaklanjuti
        $PPTidakDapatDitindaklanjuti = DB::select($query, ['Perencanaan dan Pengembangan', 'Tidak Dapat Ditindaklanjuti']);
        $PPTidakDapatDitindaklanjuti = $PPTidakDapatDitindaklanjuti[0]->total;

        //Teknologi Informasi dan Sistem Manajemen
        //Belum Selesai
        $TIBelumSelesai = DB::select($query, ['Teknologi Informasi dan Sistem Manajemen', 'Belum Selesai']);
        $TIBelumSelesai = $TIBelumSelesai[0]->total;
        //Selesai
        $TISelesai = DB::select($query, ['Teknologi Informasi dan Sistem Manajemen', 'Selesai']);
        $TISelesai = $TISelesai[0]->total;
        //Belum Ditindaklanjuti
        $TIBelumDitindaklanjuti = DB::select($query, ['Teknologi Informasi dan Sistem Manajemen', 'Belum Ditindaklanjuti']);
        $TIBelumDitindaklanjuti = $TIBelumDitindaklanjuti[0]->total;
        //Tidak Dapat Ditindaklanjuti
        $TITidakDapatDitindaklanjuti = DB::select($query, ['Teknologi Informasi dan Sistem Manajemen', 'Tidak Dapat Ditindaklanjuti']);
        $TITidakDapatDitindaklanjuti = $TITidakDapatDitindaklanjuti[0]->total;



    	$lhpsemua = Lhp::count();
    	$bagian = Bagian::count();
    	// $temuan = Temuan::all();
     //    $data_temuan = Temuan::all();

    	return view('dashboard.index')
    	->with([
    		// 'lhpsemua'	=> $lhpsemua,
    		// 'bagian'	=> $bagian,
    		// 'temuan'	=> $temuan,
      //       'rekomendasiBelumSelesai' => $rekomendasiBelumSelesai,
      //       'rekomendasiSelesai' => $rekomendasiSelesai,
      //       'rekomendasiBelumDitindaklanjuti' => $rekomendasiBelumDitindaklanjuti,
      //       'rekomendasiTidakDapatDitindaklanjuti' => $rekomendasiTidakDapatDitindaklanjuti,
      //       'data_temuan' => $data_temuan,
            //SP
            'SPBelumSelesai'=>$SPBelumSelesai,
            'SPSelesai' => $SPSelesai,
            'SPBelumDitindaklanjuti' => $SPBelumDitindaklanjuti,
            'SPTidakDapatDitindaklanjuti' => $SPTidakDapatDitindaklanjuti,
            //SPI
            'SPIBelumSelesai' => $SPIBelumSelesai,
            'SPISelesai' => $SPISelesai,
            'SPIBelumDitindaklanjuti' => $SPIBelumDitindaklanjuti,
            'SPITidakDapatDitindaklanjuti' => $SPITidakDapatDitindaklanjuti,
            //Keungan
            'KBelumSelesai' => $KBelumSelesai,
            'KSelesai' => $KSelesai,
            'KBelumDitindaklanjuti' => $KBelumDitindaklanjuti,
            'KTidakDapatDitindaklanjuti' => $KTidakDapatDitindaklanjuti,
            //Komersil
            'KmBelumSelesai' => $KmBelumSelesai,
            'KmSelesai' => $KmSelesai,
            'KmBelumDitindaklanjuti' => $KmBelumDitindaklanjuti,
            'KmTidakDapatDitindaklanjuti' => $KmTidakDapatDitindaklanjuti,
            //SDM dan umum
            'SDMBelumSelesai' => $SDMBelumSelesai,
            'SDMSelesai'      => $SDMSelesai,
            'SDMBelumDitindaklanjuti' => $SDMBelumDitindaklanjuti,
            'SDMTidakDapatDitindaklanjuti' => $SDMTidakDapatDitindaklanjuti,
            //Perencanaan dan Pengembangan
            'PPBelumSelesai' => $PPBelumSelesai,
            'PPSelesai' => $PPSelesai,
            'PPBelumDitindaklanjuti' => $PPBelumDitindaklanjuti,
            'PPTidakDapatDitindaklanjuti' => $PPTidakDapatDitindaklanjuti,
            //Teknologi Informasi dan Sistem Manajemen
            'TIBelumSelesai' => $TIBelumSelesai,
            'TISelesai' => $TISelesai,
            'TIBelumDitindaklanjuti' => $TIBelumDitindaklanjuti,
            'TITidakDapatDitindaklanjuti' => $TITidakDapatDitindaklanjuti,

    	]);

    }
}
