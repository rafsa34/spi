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
        <form action="/rekomendasi/create" method="POST">
          {{csrf_field()}}

          <div class="form-group">
            <div class="form-group{{$errors->has('isi_temuan') ? ' has-error' : ''}}">
              <label>Isi Temuan</label><br>
              <select class="js-example-basic-single w-100" style="width: 100%;" name="temuan_id" >
                <option>Pilih Isi Temuan</option>
                @foreach ($temuan as $temuan)
                <option value="{{ $temuan->id }}">
                  {{$temuan->isi_temuan}}
                </option>
                @endforeach
              </select>
              @if($errors->has('isi_temuan'))
              <span class="help-block">{{$errors->first('isi_temuan')}}</span>
              @endif
            </div>
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
      <th style="width:30%;height:10px;">Isi Temuan</th>
      <th style="width:50%;height:10px;">Rekomenasi</th>
      <th>Opsi</th>
    </tr>
    <?php $no = 0;?>
    @foreach ($data_rekomendasi as $rekomendasi)
    <?php $no++ ;?>
  </thead>
  <tbody>
    <tr>
      <td>{{$no}}</td>
      <td><textarea class="form-control" rows="3" placeholder="Enter ..." disabled>{{$rekomendasi->temuan->isi_temuan}}</textarea></td>
      <td><textarea class="form-control" rows="3" placeholder="Enter ..." disabled>{{$rekomendasi->isi_rekomendasi}}</textarea></td>
      <td>
        <a href="/rekomendasi/{{$rekomendasi->id}}/edit" class="btn btn-warning btn-sm fas fa-edit"></a>
        <a href="/rekomendasi/{{$rekomendasi->id}}/del" class="btn btn-danger btn-sm fas fa-trash-alt" onclick="return confirm('Apakah yakin ingin menghapus?')"></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection