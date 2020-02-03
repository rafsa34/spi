@extends('layouts.master')
@section('welcome')
<h4 class="mb-3 mb-md-0">
  Data {{ $welcome }}
</h4>
@endsection
@section('content2')
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h6 class="card-title">Basic Form</h6>
      <form action="/lhp/{{$lhp->id}}/update" method="POST" enctype="multipart/form-data">
        <form class="forms-sample">  
          {{csrf_field()}}

          <div class="row">
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Nama Bagian</label>
              {{-- @if ($lhp->bagian_id === $bagian->id) --}}
              <select name="bagian_id" type="text" class="form-control">
                <!-- <option>Pilih Kategori</option> -->
                @foreach ($data_bagian as $bagian)
                <option value="{{ $bagian->id }}" {{ $bagian->id == $lhp->bagian_id ? 'selected="selected"' : '' }} >
                  {{$bagian->nama_bagian}}
                </option>
                @endforeach
              </select>
              {{-- @endif --}}
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">No LHP</label>
              <input name="no_lhp" type="text" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{ $lhp->no_lhp }}">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">No Surat Direksi</label>
              <input name="no_surat_direksi" type="text" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{ $lhp->no_surat_direksi }}">
            </div>
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">No Surat Penegasan</label>
              <input name="no_surat_penegasan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{ $lhp->no_surat_penegasan }}">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Tgl Pemeriksaan</label>
              <input name="tgl_pemeriksaan" type="date" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{ $lhp->tgl_pemeriksaan }}">
            </div>
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Tgl Surat Direksi</label>
              <input name="tgl_surat_direksi" type="date" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{ $lhp->tgl_surat_direksi }}">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Tgl Surat Penegasan</label>
              <input name="tgl_surat_penegasan" type="date" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{ $lhp->tgl_surat_penegasan }}">
            </div>
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">No Tindak Lanjut</label>
              <input name="no_tindak_lanjut" type="text" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{ $lhp->no_tindak_lanjut }}">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Tgl Tindak Lanjut</label>
              <input name="tgl_tindak_lanjut" type="date" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{ $lhp->tgl_tindak_lanjut }}">
            </div>
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">File (File .pdf)</label>
              <input name="file" type="file" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagia">
              <label>
                @if($lhp->file == '')
                Belum ada file
                @else
                Sudah ada file
                @endif
              </label>
            </div>
          </div>

          <button type="submit" class="btn btn-primary mr-2">Update</button>
          <button type="reset" class="btn btn-light" value="Kembali" onclick="self.history.back()">Cancel</button>
        </form>
      </div>
    </div>
  </div>
  @endsection