@extends('layouts.master')
@section('content2')
<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h6 class="card-title">Basic Form</h6>
      <form action="/rekomendasi/{{$rekomendasi->id}}/update" method="POST">
        <form class="forms-sample">  
          {{csrf_field()}}

          <div class="form-group">
            <div class="form-group{{$errors->has('isi_temuan') ? ' has-error' : ''}}">
              <label>Isi Temuan</label><br>
              <select class="js-example-basic-single w-100" style="width: 100%;" name="temuan_id" >
                @foreach ($temuan as $temuan)
                <option value="{{ $temuan->id }}" {{$temuan->id == $rekomendasi->temuan_id ? 'selected = "selected"' : '' }}>
                  {{$temuan->isi_temuan}}
                </option>
                @endforeach
              </select>
              @if($errors->has('isi_temuan'))
              <span class="help-block">{{$errors->first('isi_temuan')}}</span>
              @endif
            </div>
          </div>

          <div class="form-group">
            <label>Rekomendasi</label>
            <textarea name="isi_rekomendasi" type="text" class="form-control" placeholder="Enter ...">{{$rekomendasi->isi_rekomendasi}}</textarea>
          </div>

          <div class="form-group">
            <div class="form-group{{$errors->has('status') ? ' has-error' : ''}}">
              <label for="exampleInputEmail1">Status</label>
              <select name="status" type="text" class="form-control">
                <option>{{$rekomendasi->status}}</option>
                <option value="Selesai"> Selesai</option>
                <option value="Belum Selesai"> Belum Selesai</option>
                <option value="Belum Ditindaklanjuti"> Belum Ditindaklanjuti</option>
                <option value="Tidak Dapat Ditindaklanjuti"> Tidak Dapat Ditindaklanjuti</option>
              </select>
              @if($errors->has('status'))
              <span class="help-block">{{$errors->first('status')}}</span>
              @endif
            </div> 
          </div>

          <button type="submit" class="btn btn-primary mr-2">Update</button>
          <button type="reset" class="btn btn-light" value="Kembali" onclick="self.history.back()">Cancel</button>
        </form>
      </div>
    </div>
  </div>
  @endsection