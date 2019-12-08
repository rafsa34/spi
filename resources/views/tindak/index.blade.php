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
                <h3 class="card-title">Data Tindak Lanjut</h3>


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
                      <form action="/tindak/create" method="POST">
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
                    <div class="form-group{{$errors->has('isi_tindak') ? ' has-error' : ''}}">
                      <label>Isi Tindak</label>
                      <textarea name="isi_tindak" type="text" class="form-control" rows="3" placeholder="Masukkan isi tindak lanjut..."></textarea>
                        @if($errors->has('isi_tindak'))
                          <span class="help-block">{{$errors->first('isi_tindak')}}</span>
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
                        <th>Isi Tindak</th>
                        <th>Opsi</th>
                      </tr>
                      <?php $no = 0;?>
                      @foreach ($data_tindak as $tindak)
                      <?php $no++ ;?>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$no}}</td>
                        <td>{{$tindak->jenistemuan->jenis_temuan}}</td>
                        <td>{{$tindak->isi_tindak}}</td>
                        <td>
                          <a href="/tindak/{{$tindak->id}}/edit" class="btn btn-warning btn-sm">edit</a>
                          <a href="/tindak/{{$tindak->id}}/del" class="btn btn-danger btn-sm">del</a>
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
                  <li class="page-item"></li>
                  
                </ul>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection