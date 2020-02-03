@extends('layouts.master')
@section('content2')
<div class="col-md-12">

    <div class="card-body">
      <h6 class="card-title">Basic Form</h6>
      <form action="/temuan/{{$temuan->id}}/update" method="POST">
        {{csrf_field()}}

        <div class="row">
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">No LHP</label>
            <select name="lhp_id" class="form-control">
              @foreach ($lhp as $lhp)
              <option value="{{ $lhp->id }}" {{$lhp->id == $temuan->lhp_id ? 'selected="selected"' : '' }} >
                {{$lhp->no_lhp}}
              </option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">PIC</label>
            <input name="pic" type="text" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{ $temuan->pic }}">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Tenggang Waktu</label>
            <input name="tenggang_waktu" type="text" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{ $temuan->tenggang_waktu }}">
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Nilai Rupiah</label>
            <input name="nilai_rupiah" type="text" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{ $temuan->nilai_rupiah }}">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-6">

            <label>Isi Temuan</label>
            <textarea name="isi_temuan" type="text" class="form-control" rows="3" placeholder="Masukkan isi temuan...">{{$temuan->isi_temuan}}</textarea>

          </div>
        </div>

        <button type="submit" class="btn btn-primary mr-2">Update</button>
        <button type="reset" class="btn btn-light" value="Kembali" onclick="self.history.back()">Cancel</button>
      </form>
    </div>

</div>
@endsection