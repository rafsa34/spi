@extends('layouts.master')
@section('welcome')
<h4 class="mb-3 mb-md-0">
  Dashboard
</h4>
@stop
@section('content2')

<div class="row">
  <div class="col-12 col-xl-12 stretch-card">
    <div class="row flex-grow">

      <div class="col-4 grid-margin stretch-card">
        <div class="card text-white bg-dark">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <div class="card-header col-12" style="text-align: center;">Sekretaris Perusahaan</div>
            </div>

            <br>
            <div class="row">
              <div class="col-md-12">
                <div class="alert alert-warning" role="alert">Belum Selesai <button type="button" class="btn btn-warning">{{$SPBelumSelesai}}</button> </div>
                <div class="alert alert-success" role="alert">Selesai <button type="button" class="btn btn-success">{{$SPSelesai}}</button></div>
                <div class="alert alert-secondary" role="alert">Belum Ditindaklanjuti <button type="button" class="btn btn-secondary">{{$SPBelumDitindaklanjuti}}</button></div>
                <div class="alert alert-danger" role="alert">Tidak Dapat Ditindaklanjuti <button type="button" class="btn btn-danger">{{$SPTidakDapatDitindaklanjuti}}</button></div>
                {{-- <h6>TD: {{$SPTidakDapatDitindaklanjuti}}</h6> --}}
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-4 grid-margin stretch-card">
        <div class="card text-white bg-dark">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <div class="card-header col-12" style="text-align: center;">Satuan Pengawasan Internal</div>

            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <div class="alert alert-warning" role="alert">Belum Selesai <button type="button" class="btn btn-warning">{{$SPIBelumSelesai}}</button></div>
                <div class="alert alert-success" role="alert">Selesai <button type="button" class="btn btn-success">{{$SPISelesai}}</button></div>
                <div class="alert alert-secondary" role="alert">Belum Ditindaklanjuti: <button type="button" class="btn btn-secondary">{{$SPIBelumDitindaklanjuti}}</button></div>
                <div class="alert alert-danger" role="alert">Tidak Dapat Ditindaklanjuti <button type="button" class="btn btn-danger">{{$SPITidakDapatDitindaklanjuti}}</button></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-4 grid-margin stretch-card">
        <div class="card text-white bg-dark">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <div class="card-header col-12" style="text-align: center;">Keuangan</div>

            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <div class="alert alert-warning" role="alert">Belum Selesai <button type="button" class="btn btn-warning">{{$KBelumSelesai}}</button></div>
                <div class="alert alert-success" role="alert">Selesai <button type="button" class="btn btn-success">{{$KSelesai}}</button></div>
                <div class="alert alert-secondary" role="alert">Belum Ditindaklanjuti <button type="button" class="btn btn-secondary">{{$KBelumDitindaklanjuti}}</button></div>
                <div class="alert alert-danger" role="alert">Tidak Dapat Ditindaklanjuti <button type="button" class="btn btn-danger">{{$KTidakDapatDitindaklanjuti}}</button></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-4 grid-margin stretch-card">
        <div class="card text-white bg-dark">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <div class="card-header col-12" style="text-align: center;">Komersil</div>

            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <div class="alert alert-warning" role="alert">Belum Selesai <button type="button" class="btn btn-warning">{{$KmBelumSelesai}}</button></div>
                <div class="alert alert-success" role="alert">Selesai <button type="button" class="btn btn-success">{{$KmSelesai}}</button></div>
                <div class="alert alert-secondary" role="alert">Belum Ditindaklanjuti <button type="button" class="btn btn-secondary">{{$KmBelumDitindaklanjuti}}</button></div>
                <div class="alert alert-danger" role="alert">Tidak Dapat Ditindaklanjuti <button type="button" class="btn btn-danger">{{$KmTidakDapatDitindaklanjuti}}</button></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-4 grid-margin stretch-card">
        <div class="card text-white bg-dark">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <div class="card-header col-12" style="text-align: center;">SDM & Umum</div>

            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <div class="alert alert-warning" role="alert">Belum Selesai <button type="button" class="btn btn-warning">{{$SDMBelumSelesai}}</button></div>
                <div class="alert alert-success" role="alert">Selesai <button type="button" class="btn btn-success">{{$SDMSelesai}}</button></div>
                <div class="alert alert-secondary" role="alert">Belum Ditindaklanjuti <button type="button" class="btn btn-secondary">{{$SDMBelumDitindaklanjuti}}</button></div>
                <div class="alert alert-danger" role="alert">Tidak Dapat Ditindaklanjuti <button type="button" class="btn btn-danger">{{$SDMTidakDapatDitindaklanjuti}}</button></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-4 grid-margin stretch-card">
        <div class="card text-white bg-dark">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <div class="card-header col-12" style="text-align: center;">Renbang</div>

            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <div class="alert alert-warning" role="alert">Belum Selesai <button type="button" class="btn btn-warning">{{$PPBelumSelesai}}</button></div>
                <div class="alert alert-success" role="alert">Selesai <button type="button" class="btn btn-success">{{$PPSelesai}}</button></div>
                <div class="alert alert-secondary" role="alert">Belum Ditindaklanjuti <button type="button" class="btn btn-secondary">{{$PPBelumDitindaklanjuti}}</button></div>
                <div class="alert alert-danger" role="alert">Tidak Dapat Ditindaklanjuti <button type="button" class="btn btn-danger">{{$PPTidakDapatDitindaklanjuti}}</button></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-4 grid-margin stretch-card">
        <div class="card text-white bg-dark">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <div class="card-header col-12" style="text-align: center;">Teknologi Informasi</div>

            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <div class="alert alert-warning" role="alert">Belum Selesai <button type="button" class="btn btn-warning">{{$TIBelumSelesai}}</button></div>
                <div class="alert alert-success" role="alert">Selesai <button type="button" class="btn btn-success">{{$TISelesai}}</button></div>
                <div class="alert alert-secondary" role="alert">Belum Ditindaklanjuti <button type="button" class="btn btn-secondary">{{$TIBelumDitindaklanjuti}}</button></div>
                <div class="alert alert-danger" role="alert">Tidak Dapat Ditindaklanjuti <button type="button" class="btn btn-danger">{{$TITidakDapatDitindaklanjuti}}</button></div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<hr class="col-xl-12">

<div id="chart"></div>
<script src="/js/highcharts.js"></script>

@stop