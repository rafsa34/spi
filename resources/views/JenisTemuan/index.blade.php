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
                    <form action="/jenis-temuan/create" method="POST">
                      {{csrf_field()}}
                      <div class="form-group{{$errors->has('nama_depan') ? ' has-error' : ''}}">
                        <label for="exampleInputEmail1">Jenis Temuan</label>
                        <input name="jenis_temuan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Bagian" value="{{old('jenis_temuan')}}">
                         @if($errors->has('jenis_temuan'))
                           <span class="help-block">{{$errors->first('jenis_temuan')}}</span>
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
							<th>Jenis Temuan</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0;?>
						@foreach($data_jenis_temuan as $jenis_temuan)
						<?php $no++ ;?>
						<tr>
							<td>{{$no}}</td>
							<td>{{$jenis_temuan->jenis_temuan}}</td>
							<td>
								<a href="/jenis-temuan/{{$jenis_temuan->id}}/edit" class="btn btn-warning btn-sm">edit</a>
								<a href="/jenis-temuan/{{$jenis_temuan->id}}/del" class="btn btn-danger btn-sm">del</a>
							</td>
						</tr>
						@endforeach
					</tbody>
                </table>
        </div>

        <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item">#</li>
                </ul>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection