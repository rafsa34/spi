@extends('layouts.master')

@section('content')

<!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg">
            <div class="card">
              <div class="card-body">

                <div class="card-header">
                <h3 class="card-title">Data Bagian</h3>


                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-default">
                  Tambah Data
                </button>

                </div>

 <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <form action="/bagian/create" method="POST">
                      {{csrf_field()}}
                      <div class="form-group{{$errors->has('nama_depan') ? ' has-error' : ''}}">
                        <label for="exampleInputEmail1">Nama Bagian</label>
                        <input name="nama_bagian" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Bagian" value="{{old('nama_bagian')}}">
                         @if($errors->has('nama_bagian'))
                           <span class="help-block">{{$errors->first('nama_bagian')}}</span>
                         @endif
                      </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group{{$errors->has('kode') ? ' has-error' : ''}}">
                      <label for="exampleInputEmail1">Kode Bagian</label>
                      <input name="kode" type="text" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{old('kode')}}">
                        @if($errors->has('kode'))
                           <span class="help-block">{{$errors->first('kode')}}</span>
                        @endif
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      
				<div class="card-body">
                <table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Bagian</th>
							<th>Kode Bagian</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0;?>
						@foreach($data_bagian as $bagian)
						<?php $no++ ;?>
						<tr>
							<td>{{$no}}</td>
							<td>{{$bagian->nama_bagian}}</td>
							<td>{{$bagian->kode}}</td>
							<td>
								<a href="/bagian/{{$bagian->id}}/edit" class="btn btn-warning btn-sm">edit</a>
								<a href="/bagian/{{$bagian->id}}/del" class="btn btn-danger btn-sm">del</a>
							</td>
						</tr>
						@endforeach
					</tbody>
                </table>
        </div>

        <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item">{{ $data_bagian->links() }}</li>
                </ul>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection