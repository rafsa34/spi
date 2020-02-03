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
        <form action="/tindak/create" method="POST">
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
            <div class="form-group{{$errors->has('status') ? ' has-error' : ''}}">
              <label for="exampleInputEmail1">Status</label>
              <select name="status" type="text" class="form-control">
                <option>Pilih Status</option>
                <option value="Selesai"> Selesai</option>
                <option value="Belum Selesai"> Belum Selesai</option>
                <option value="Belum Ditindaklanjuti"> Belum Ditindaklanjuti</option>
                <option value="Tidak Dapat Ditindaklanjuti"> Tidak Dapat Ditindaklanjuti</option>
              </select>
              @if($errors->has('status'))
              <span class="help-block">{{$errors->first('status')}}</span>
              @endif
            </div> 
          </div>

          <div class="form-group">
            <div class="form-group{{$errors->has('isi_tindak') ? ' has-error' : ''}}">
              <label>Isi Tindak</label>
              <textarea name="isi_tindak" type="text" class="form-control" rows="3" placeholder="Masukkan isi tindak..."></textarea>
              @if($errors->has('isi_tindak'))
              <span class="help-block">{{$errors->first('isi_tindak')}}</span>
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
      <th>Isi Temuan</th>
      <th>Status</th>
      <th>Isi Tindak</th>
      <th>Opsi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 0;?>
    @foreach ($data_tindak as $tindak)
    <?php $no++ ;?>
    <tr>
      <td>{{$no}}</td>
      <td><textarea class="form-control" rows="3" placeholder="Enter ..." disabled>{{$tindak->temuan->isi_temuan}}</textarea></td>
      <td>{{$tindak->status}}</td>
      <td><textarea class="form-control" rows="3" placeholder="Enter ..." disabled>{{$tindak->isi_tindak}}</textarea></td>
      <td>
        <a href="/tindak/{{$tindak->id}}/edit" class="btn btn-warning btn-sm fas fa-edit"></a>
        <a href="/tindak/{{$tindak->id}}/del" class="btn btn-danger btn-sm fas fa-trash-alt" onclick="return confirm('Apakah yakin ingin menghapus?')"></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection