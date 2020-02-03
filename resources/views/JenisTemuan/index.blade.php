@extends('layouts.master')
@section('welcome')
<h4 class="mb-3 mb-md-0">
    Data {{ $welcome }}
</h4>
@endsection
@section('modal')
<!--buttonmodal-->
<button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0" data-toggle="modal" data-target="#Modal">
  <i class="btn-icon-prepend" data-feather="file-plus"></i>
  Tambah
</button>
<!--endbuttonmodal-->
<!--modal-->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $welcome }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/jenis-temuan/create" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <div class="form-group{{$errors->has('jenis_temuan') ? ' has-error' : ''}}">
              <label for="exampleInputEmail1">Jenis Temuan</label>
              <input name="jenis_temuan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Jenis temuan.." value="{{old('jenis_temuan')}}">
              @if($errors->has('jenis_temuan'))
              <span class="help-block">{{$errors->first('jenis_temuan')}}</span>
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
</div>
<!---endmodal---->
@endsection
@section('content2')
<table style="width: 100%;" id="datatable" class="table table-bordered table-hover">
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
      <a href="/jenis-temuan/{{$jenis_temuan->id}}/edit" class="btn btn-warning btn-sm fas fa-edit"></a>
      <a href="/jenis-temuan/{{$jenis_temuan->id}}/del" class="btn btn-danger btn-sm fas fa-trash-alt" onclick="return confirm('Apakah yakin ingin menghapus?')"></a>
    </td>
  </tr>
  @endforeach
</tbody>
</table>
@endsection