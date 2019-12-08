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
                  <h3 class="card-title">EDIT Data Bagian</h3>
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
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

				<div class="card-body">
                <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <form action="/bagian/{{$bagian->id}}/update" method="POST">
                      {{csrf_field()}}
                    <label for="exampleInputEmail1">Nama Bagian</label>
                    <input name="nama_bagian" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Bagian" value="{{$bagian->nama_bagian}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Bagian</label>
                    <input name="kode" type="text" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{$bagian->kode}}">
                  </div>
                   <button type="submit" class="btn btn-primary">Update</button>
              </form>
                </div>

                <!-- /.card-body -->
            	</div>

        <!-- /.card-body -->
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection