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
  Add
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
        <form action="/bagian/create" method="POST">
          {{csrf_field()}}
          <div class="form-group">
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
   <th>Nama Bagian</th>
   <th>Kode Bagian</th>
   <th>Opsi</th>
 </tr>
</thead>
<tbody>
  @php $i=1 @endphp
  @foreach($data_bagian as $bagian)
  <tr>
   <td>{{$i++}}</td>
   <td>{{$bagian->nama_bagian}}</td>
   <td>{{$bagian->kode}}</td>
   <td>
    <a href="/bagian/{{$bagian->id}}/edit" class="btn btn-warning btn-sm fas fa-edit"></a>
    <a href="/bagian/{{$bagian->id}}/del" class="btn btn-danger btn-sm fas fa-trash-alt" onclick="return confirm('Apakah yakin ingin menghapus?')"></a>
  </td>
</tr>
@endforeach
</tbody>
</table>
@endsection