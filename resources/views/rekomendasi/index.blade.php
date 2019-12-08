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
                <h3 class="card-title">Data Rekomendasi</h3>


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
                      <form action="/rekomendasi/create" method="POST">
                        {{csrf_field()}}
                      <label for="exampleInputEmail1">Jenis Temuan</label>
                      <select name="jenis_temuan_id" type="text" class="form-control">
                      <option>Pilih Kategori</option>
                      @foreach ($jenis_temuan as $jenis_temuan)
                      <option value="{{ $jenis_temuan->id }}">
                        {{$jenis_temuan->jenis_temuan}}
                      </option>
                      @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                    <div class="form-group{{$errors->has('isi_rekomendasi') ? ' has-error' : ''}}">
                      <label>Rekomendasi</label>
                      <textarea name="isi_rekomendasi" type="text" class="form-control" rows="3" placeholder="Masukkan isi rekomendasi..."></textarea>
                      @if($errors->has('isi_rekomendasi'))
                        <span class="help-block">{{$errors->first('isi_rekomendasi')}}</span>
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
                        <th>Rekomenasi</th>
                        <th>Opsi</th>
                      </tr>
                      <?php $no = 0;?>
                      @foreach ($data_rekomendasi as $rekomendasi)
                      <?php $no++ ;?>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$no}}</td>
                        <td>{{$rekomendasi->jenistemuan->jenis_temuan}}</td>
                        <td>{{$rekomendasi->isi_rekomendasi}}</td>
                        <td>
                          <a href="/rekomendasi/{{$rekomendasi->id}}/edit" class="btn btn-warning btn-sm">edit</a>
                          <a href="/rekomendasi/{{$rekomendasi->id}}/del" class="btn btn-danger btn-sm">del</a>
                        </td>
                      </tr>
                    </thead>
                    @endforeach
                    <tbody>
                    </tbody>
                </table>
            	</div>

        <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection