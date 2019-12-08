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
                <div class="form-group">
                      <form action="/rekomendasi/{{$rekomendasi->id}}/update" method="POST">
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
                    <label>Rekomendasi</label>
                    <textarea name="isi_rekomendasi" type="text" class="form-control" placeholder="Enter ..."></textarea>
                    </div>
                     <button type="submit" class="btn btn-primary">Update</button>
                  </form>
                </div>
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