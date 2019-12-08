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
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      
				<div class="card-body">
                <table class="table table-bordered table-hover">
					       <div class="form-group">
                    <form action="/jenis-temuan/{{$JenisTemuan->id}}/update" method="POST">
                      {{csrf_field()}}
                        <label for="exampleInputEmail1">Jenis Temuan</label>
                        <input name="jenis_temuan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Bagian" value="{{$JenisTemuan->jenis_temuan}}">

                  </div>
                      <div class="modal-footer justify-content-between">
                       <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                      </div>
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