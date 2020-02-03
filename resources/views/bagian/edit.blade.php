@extends('layouts.master')
@section('welcome')
<h4 class="mb-3 mb-md-0">
  Data {{ $welcome }}
</h4>
@endsection
@section('content2')
<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h6 class="card-title">Basic Form</h6>
      <form action="/bagian/{{$bagian->id}}/update" method="POST">
      <form class="forms-sample">  
          {{csrf_field()}}

          <div class="form-group">
            <label for="exampleInputUsername1">Nama Bagian</label>
            <input name="nama_bagian" type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Nama Bagian" value="{{$bagian->nama_bagian}}">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Kode Bagian</label>
            <input name="kode" type="text" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{$bagian->kode}}">
          </div>

          <button type="submit" class="btn btn-primary mr-2">Update</button>
          <button type="reset" class="btn btn-light" onclick="self.history.back()">Cancel</button>
        </form>
      </div>
    </div>
  </div>
  @endsection