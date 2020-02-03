@extends('layouts.master')
@section('content2')
<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h6 class="card-title">Basic Form</h6>
      <form action="/jenis-temuan/{{$JenisTemuan->id}}/update" method="POST">
        <form class="forms-sample">  
          {{csrf_field()}}

          <div class="form-group">
            <label for="exampleInputEmail1">Jenis Temuan</label>
            <input name="jenis_temuan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Bagian" value="{{$JenisTemuan->jenis_temuan}}">
          </div>

          <button type="submit" class="btn btn-primary mr-2">Update</button>
          <button type="reset" class="btn btn-light" value="Kembali" onclick="self.history.back()">Cancel</button>
        </form>
      </div>
    </div>
  </div>
  @endsection