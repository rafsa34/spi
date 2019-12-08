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
                <h3 class="card-title">Data LHP</h3>


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
                    <form action="/lhp/create" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group{{$errors->has('nama_bagian') ? ' has-error' : ''}}">
                                <label for="exampleInputEmail1">Nama Bagian</label>
                                  <select name="bagian_id" type="text" class="form-control">
                                    <option>Pilih Kategori</option>
                                     @foreach ($data_bagian as $bagian)
                                     <option value="{{ $bagian->id }}">
                                      {{$bagian->nama_bagian}}
                                    </option>
                                @endforeach
                                  </select>
                                @if($errors->has('nama_bagian'))
                                  <span class="help-block">{{$errors->first('nama_bagian')}}</span>
                                @endif
                            </div>
                            <div class="form-group{{$errors->has('jenis_monitor') ? ' has-error' : ''}}">
                                <label for="exampleInputEmail1">Jenis Monitor</label>
                                  <select name="jenis_monitor" type="text" class="form-control">
                                    <option>Pilih Kategori</option>
                                     <option value="Rutin"> Rutin</option>
                                     <option value="Khusus"> Khusus</option>
                                     <option value="SPI Holding"> SPI Holding</option>
                                     <option value="BPKP"> BPKP</option>
                                     <option value="BPK"> BPK</option>
                                     <option value="KAP"> KAP</option>
                                  </select>
                                  <span class="help-block">{{$errors->first('jenis_monitor')}}</span>
                            </div>
                        </div>
                            <div class="form-group">
                              <div class="form-group{{$errors->has('no_lhp') ? ' has-error' : ''}}">
                                <label for="exampleInputEmail1">No LHP</label>
                                <input name="no_lhp" type="text" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{old('no_lhp')}}">
                                    @if($errors->has('no_lhp'))
                                      <span class="help-block">{{$errors->first('no_lhp')}}</span>
                                    @endif
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Tgl Pemeriksaan</label>
                              <input name="tgl_pemeriksaan" type="date" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian">
                            </div>
                            <div class="form-group">
                              <div class="form-group{{$errors->has('no_surat_direksi') ? ' has-error' : ''}}">
                                <label for="exampleInputEmail1">No Surat Direksi</label>
                                <input name="no_surat_direksi" type="text" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{old('no_surat_direksi')}}">
                                     @if($errors->has('no_surat_direksi'))
                                      <span class="help-block">{{$errors->first('no_surat_direksi')}}</span>
                                    @endif
                              </div>
                            </div>
                            <div class="form-group">
                          
                                <label for="exampleInputEmail1">Upload File</label>
                                <input name="filename" type="file" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian">
                          
                            </div>
                        <!--<div class="form-group">
                          <label for="exampleInputEmail1">Tgl Surat Direksi</label>
                          <input name="tgl_surat_direksi" type="date" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian">
                        </div>
                        <div class="form-group">
                          <div class="form-group{{$errors->has('no_surat_penegasan') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1">No Surat Penegasan</label>
                            <input name="no_surat_penegasan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{old('no_surat_penegasan')}}">
                                @if($errors->has('no_surat_penegasan'))
                                  <span class="help-block">{{$errors->first('no_surat_penegasan')}}</span>
                                @endif
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tgl Surat Penegasan</label>
                          <input name="tgl_surat_penegasan" type="date" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">No Tindak Lanjut</label>
                          <input name="no_tindak_lanjut" type="text" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tgl Tindak Lanjut</label>
                          <input name="tgl_tindak_lanjut" type="date" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian">
                        </div>-->
                  
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
                        <th>Jenis Monitor</th>
                        <th>No LHP</th>
                        <th>Tanggal Pemeriksaan</th>
                        <th>No Surat Direksi</th>
                        <!--<th>Tanggal Direksi</th>
                        <th>No Surat Penegasan</th>
                        <th>Tgl Penegasan</th>
                        <th>Tanggal Pemeriksaan</th>
                        <th>No Tindak Lanjut</th>
                        <th>Tgl Tindak Lanjut</th>-->
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 0;?>
                      @foreach($data_lhp as $lhp)
                      <?php $no++ ;?>
                      <tr>
                        <td>{{$no}}</td>
                        <td>{{$lhp->bagian->nama_bagian}}</td>
                        <td>{{$lhp->jenis_monitor}}</td>
                        <td><a href="/lhp/{{$lhp->id}}/no_lhp">{{$lhp->no_lhp}}</a></td>
                        <td>{{$lhp->tgl_pemeriksaan}}</td>
                        <td>{{$lhp->no_surat_direksi}}</td>
                        <!--<td>{{$lhp->tgl_surat_direksi}}</td>
                        <td>{{$lhp->no_surat_penegasan}}</td>
                        <td>{{$lhp->tgl_surat_penegasan}}</td>
                        <td>{{$lhp->tgl_pemeriksaan}}</td>
                        <td>{{$lhp->no_tindak_lanjut}}</td>
                        <td>{{$lhp->tgl_tindak_lanjut}}</td>-->
                        <td>
                          <a href="/lhp/{{$lhp->id}}/edit" class="btn btn-warning btn-sm">edit</a>
                          <a href="/lhp/{{$lhp->id}}/del" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin ingin menghapus?')">del</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
            	</div>

        <!-- /.card-body -->
              <div class="card-footer clearfi">
                <div class="box-tools float-left">
                  <form action="/lhp/cari" method="GET">
                    <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                      <input type="text" name="cari" class="form-control pull-right" placeholder="Search" value="{{ old('cari') }}">

                      <div class="input-group-btn">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </form>
                </div>

                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item">{{ $data_lhp->links() }}</li>
                </ul>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection