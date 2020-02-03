@extends('layouts.master')

@section('welcome')
<h4 class="mb-3 mb-md-0">
  Data {{ $welcome }}
</h4>
@endsection

@section('ekspor')
<button type="button" class="btn btn-outline-info btn-icon-text mr-2 d-none d-md-block">
  <i class="btn-icon-prepend" data-feather="download"></i>
  <a href="/lhp-rutin/cetak">Export</a>
</button>
@endsection

@section('modal')
<!--buttonmodal-->
<a href="/lhp-rutin/add" type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
  <i class="btn-icon-prepend" data-feather="file-plus"></i>
  Add
</a>
<!--endbuttonmodal-->
<!--modal-->
<!-- <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $welcome }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/lhp/create" method="POST">
          {{csrf_field()}}

          <label for="exampleInputEmail1">Jenis Monitor</label>
          <select name="jenis_monitor" type="text" class="form-control">
            <option value="Rutin"> Rutin</option>
          </select>

          <div class="form-group">
            <div class="form-group{{$errors->has('no_lhp') ? ' has-error' : ''}}">
              <label for="exampleInputEmail1">No LHP</label>
              <input name="no_lhp" type="text" class="form-control" id="exampleInputEmail1" placeholder="No LHP" value="{{old('no_lhp')}}">
              @if($errors->has('no_lhp'))
              <span class="help-block">{{$errors->first('no_lhp')}}</span>
              @endif
            </div>
          </div>

          <div class="form-group">
            <div class="form-group{{$errors->has('tgl_pemeriksaan') ? ' has-error' : ''}}">
              <label for="exampleInputEmail1">Tgl Pemeriksaan</label>
              <input name="tgl_pemeriksaan" type="date" class="form-control" id="exampleInputEmail1" placeholder="Tanggal Pemeriksaan" value="{{old('tgl_pemeriksaan')}}">
              @if($errors->has('tgl_pemeriksaan'))
              <span class="help-block">{{$errors->first('tgl_pemeriksaan')}}</span>
              @endif
            </div>
          </div>

          <div class="form-group">
            <div class="form-group{{$errors->has('nama_bagian') ? ' has-error' : ''}}">
              <label for="exampleInputEmail1">Nama Bagian</label>
              <select name="bagian_id" class="form-control">
                <option value="">Pilih Bagian</option>
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
          </div>

          <hr>

          <div class="form-group">
            <div class="form-group{{$errors->has('no_surat_direksi') ? ' has-error' : ''}}">
              <label for="exampleInputEmail1">No Surat Direksi</label>
              <input name="no_surat_direksi" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nomor Surat Direksi" value="{{old('no_surat_direksi')}}">
              @if($errors->has('no_surat_direksi'))
              <span class="help-block">{{$errors->first('no_surat_direksi')}}</span>
              @endif
            </div>
          </div>

          <div class="form-group">
            <div class="form-group{{$errors->has('tgl_surat_direksi') ? ' has-error' : ''}}">
              <label for="exampleInputEmail1">Tgl Surat Direksi</label>
              <input name="tgl_surat_direksi" type="date" class="form-control" id="exampleInputEmail1" placeholder="Tgl Surat Direksi" value="{{old('tgl_surat_direksi')}}">
              @if($errors->has('tgl_surat_direksi'))
              <span class="help-block">{{$errors->first('tgl_surat_direksi')}}</span>
              @endif
            </div>
          </div>

          <hr>

          <div class="form-group">
            <div class="form-group{{$errors->has('no_surat_penegasan') ? ' has-error' : ''}}">
              <label for="exampleInputEmail1">No Surat Penegasan</label>
              <input name="no_surat_penegasan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nomor Surat Penegasan" value="{{old('no_surat_penegasan')}}">
              @if($errors->has('no_surat_penegasan'))
              <span class="help-block">{{$errors->first('no_surat_penegasan')}}</span>
              @endif
            </div>
          </div>

          <div class="form-group">
            <div class="form-group{{$errors->has('tgl_surat_penegasan') ? ' has-error' : ''}}">
              <label for="exampleInputEmail1">Tgl Surat Penegasan</label>
              <input name="tgl_surat_penegasan" type="date" class="form-control" id="exampleInputEmail1" placeholder="tgl_pemeriksaan Surat Penegasan" value="{{old('no_surat_penegasan')}}">
              @if($errors->has('tgl_surat_penegasan'))
              <span class="help-block">{{$errors->first('tgl_surat_penegasan')}}</span>
              @endif
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>
  </div>
</div> -->
<!---endmodal---->

@endsection
@section('content2')
<table style="width: 100%;" id="datatable" class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>No</th>
      <th>No LHP</th>
      <th>Tgl Pemeriksaan</th>
      <th>Nama Bagian </th>
      <th>S.Direksi</th>
      <th>S.Penegasan</th>
      <th>File</th>
      <th>Opsi</th>
    </tr>
  </thead>
  <tbody>
    @php $i = 1 @endphp
    @foreach($data_lhp as $lhp)
    <tr>
      <td>{{$i++}}</td>
      <td>{{$lhp->no_lhp}}</td>
      <td>{{$lhp->tgl_pemeriksaan}}</td>
      <td>{{$lhp->bagian->nama_bagian}}</td>
      <td>
        @if($lhp->no_surat_direksi == '')
        <button type='button' class='btn btn-danger btn-xs'><i class='fa fa-times'></i></button>
        @else
        {{$lhp->no_surat_direksi}}
        @endif
      </td>
      <td>
        @if($lhp->no_surat_penegasan == '')
        <button type='button' class='btn btn-danger btn-xs'><i class='fa fa-times'></i></button>
        @else
        {{$lhp->no_surat_penegasan}}
        @endif
      </td>
      <td>
        @if($lhp->file == '')
        <button type='button' class='btn btn-danger btn-xs'><i class='fa fa-times'></i></button>
        @else
        <button type='button' class='btn btn-success btn-xs'><i class='fa fa-check'></i></button>
        @endif
      </td>
      <td>
        <a href="/lhp-rutin/{{$lhp->id}}/edit" class="btn btn-warning btn-sm fas fa-edit"></a>
        <a href="/lhp/{{$lhp->id}}/del" class="btn btn-danger btn-sm fas fa-trash-alt" onclick="return confirm('Apakah yakin ingin menghapus?')"></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
