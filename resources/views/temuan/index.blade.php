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
        <form action="/temuan/create" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <div class="form-group{{$errors->has('no_lhp') ? ' has-error' : ''}}">
              <label for="exampleInputEmail1">No LHP</label>
              <select name="lhp_id" class="form-control">
                <option>Pilih No LHP</option>
                @foreach ($lhp as $lhp)
                <option value="{{ $lhp->id }}">
                  {{$lhp->no_lhp}}
                </option>
                @endforeach
              </select>
              @if($errors->has('no_lhp'))
              <span class="help-block">{{$errors->first('no_lhp')}}</span>
              @endif
            </div>
          </div>

          <div class="form-group">
            <div class="form-group{{$errors->has('pic') ? ' has-error' : ''}}">
              <label for="exampleInputEmail1">PIC</label>
              <input name="pic" type="text" class="form-control" id="exampleInputEmail1" placeholder="PIC">
              @if($errors->has('pic'))
              <span class="help-block">{{$errors->first('pic')}}</span>
              @endif
            </div> 
          </div>

          <div class="form-group">
            <div class="form-group{{$errors->has('tenggang_waktu') ? ' has-error' : ''}}">
              <label for="exampleInputEmail1">Tenggang Waktu (Minggu)</label>
              <input name="tenggang_waktu" type="text" class="form-control" id="exampleInputEmail1" placeholder="Tenggang Waktu">
              @if($errors->has('tenggang_waktu'))
              <span class="help-block">{{$errors->first('tenggang_waktu')}}</span>
              @endif
            </div> 
          </div>

          <div class="form-group">
            <div class="form-group{{$errors->has('nilai_rupiah') ? ' has-error' : ''}}">
              <label for="exampleInputEmail1">Nilai Rupiah</label>
              <input name="nilai_rupiah" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nilai Rupiah">
              @if($errors->has('nilai_rupiah'))
              <span class="help-block">{{$errors->first('nilai_rupiah')}}</span>
              @endif
            </div> 
          </div>

          <div class="form-group">
            <div class="form-group{{$errors->has('isi_temuan') ? ' has-error' : ''}}">
              <label>Isi Temuan</label>
              <textarea name="isi_temuan" type="text" class="form-control" rows="3" placeholder="Masukkan isi temuan..."></textarea>
              @if($errors->has('isi_temuan'))
              <span class="help-block">{{$errors->first('isi_temuan')}}</span>
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
    <th>No LHP</th>
    <th>PIC</th>
    <th>Tenggang Waktu</th>
    <th>Nilai Rupiah</th>
    <th>Isi Temuan</th>
    <th>Opsi</th>
  </tr>
</thead>
<tbody>
  <?php $no = 0;?>
  @foreach ($data_temuan as $temuan)
  <?php $no++ ;?>
  <tr>
    <td>{{$no}}</td>
    <td>{{$temuan->lhp->no_lhp}}</td>
    <td>{{$temuan->pic}}</td>
    <td>{{$temuan->tenggang_waktu}}</td>
    <td>{{$temuan->nilai_rupiah}}</td>
    <td><textarea class="form-control" rows="3" placeholder="Enter ..." disabled>{{$temuan->isi_temuan}}</textarea></td>
    <td>
      <a href="/temuan/{{$temuan->id}}/edit" class="btn btn-warning btn-sm fas fa-edit"></a>
      <a href="/temuan/{{$temuan->id}}/del" class="btn btn-danger btn-sm fas fa-trash-alt" onclick="return confirm('Apakah yakin ingin menghapus?')"></a>
    </td>
  </tr>
</head>
@endforeach
</tbody>
</table>
@endsection