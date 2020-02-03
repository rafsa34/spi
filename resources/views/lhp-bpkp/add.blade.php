@extends('layouts.master')

@section('content2')
<form action="/lhp/create" method="POST">
  {{csrf_field()}}
  <div class="row">
    <div class="col-12 col-xl-12 stretch-card">
      <div class="row flex-grow">

        <div class="form-group col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">

              <div class="form-group">
                <label>No LHA</label>
                <input type="text" name="no_lhp" class="form-control" placeholder="No LHA">
              </div>

              <div class="form-group">
                <label>Tanggal LHA</label>
                <input type="text" name="tgl_pemeriksaan" id="range-tanggal" class="form-control" placeholder="dd/mm/yyyy - dd/mm/yyyy">
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

            </div>
          </div>
        </div>


        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">

              <div class="form-group">
                <label>No Surat Laporan Direksi</label>
                <input type="text" name="no_surat_direksi" class="form-control" placeholder="No Surat Laporan Direksi">
              </div>

              <div class="form-group">
                <label>Tanggal Surat Laporan Direksi</label>
                <input type="date" name="tgl_surat_direksi" class="form-control" placeholder="Tanggal Surat Laporan Direksi">
              </div>

              <div class="form-group">
                <input type="hidden" name="jenis_monitor" value="BPKP">
              </div>

            </div>
          </div>
        </div>

        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">

              <div class="form-group">
                <label>No Surat Penegasan</label>
                <input type="text" name="no_surat_penegasan" class="form-control" placeholder="No Surat Penegasan">
              </div>

              <div class="form-group">
                <label>Tanggal Surat Penegasan</label>
                <input type="date" name="tgl_surat_penegasan" class="form-control" placeholder="Tanggal Surat Penegasan">
              </div>

            </div>
          </div>
        </div>
        <div class="card-footer col-xl-12">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="self.history.back()">Back</button>
          <button type="submit" class="btn btn-primary">Save</button>
          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#temuan" aria-expanded="false" aria-controls="collapseExample">
            Temuan
          </button>
          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#rekomendasi" aria-expanded="false" aria-controls="collapseExample">
            Rekomendasi
          </button>
          <button type="button" class="pull-right collapse btn btn-primary" data-toggle="modal" data-target="#Modaltemuan" id="temuan">
            Add Temuan
          </button>
          <button type="button" class="pull-right collapse btn btn-primary" data-toggle="modal" data-target="#Modalrekomendasi" id="rekomendasi">
            Add Rekomendasi
          </button>
        </div>
        <div class="card-footer col-xl-12"></div>
      </div>
    </div>
  </div>
</form>

<!--temuan-->

<!--modal-->
<div class="modal fade" id="Modaltemuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!--  -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="/temuan/create" method="POST" id="Formtemuan">
        {{csrf_field()}}
        <div class="modal-body">
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


<div class="collapse" id="temuan">
  <div class="col-12">
    <table style="width: 100%;" id="datatable" class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>No LHA</th>
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
</div>
</div>
<div class="collapse card-footer col-xl-12" id="temuan"></div>

<!---end temuan-->

<!--rekomendasi-->
<!--modal-->
<div class="modal fade" id="Modalrekomendasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!--  -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/rekomendasi/create" method="POST" id="Formrekomendasi">
          {{csrf_field()}}

          <div class="form-group">
            <div class="form-group{{$errors->has('isi_temuan') ? ' has-error' : ''}}">
              <label>Isi Temuan</label><br>
              <select class="js-example-basic-single w-100" style="width: 100%;" name="temuan_id" >
                <option>Pilih Isi Temuan</option>
                @foreach ($data_temuan as $temuan)
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

<!--rekomendasi-->
<div class="collapse" id="rekomendasi">
  <div class="col-12">
    <table style="width: 100%;" id="datatable2" class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul Temuan</th>
          <th>Rekomenasi</th>
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
  </div>
</div>
<div class="collapse card-footer col-xl-12" id="rekomendasi"></div>

<script src="/js/jquery.min.js"></script>
<!--addtemuan-->
<script>
  $(document).ready(function () {
    $('#Formtemuan').on('submit', function(e){
      e.preventDefault();

      $.ajax({
        type: "POST",
        url: "/temuan/create",
        data: $('#Formtemuan').serialize(),
        success: function (response) {
          console.log(response)
          $('#Modaltemuan').modal('hide')
          alert("Data Saved");
          data: $('#Formtemuan').reload()
        },
        error:function(error){
          console.log(error)
          alert("Data Not Saved");
        },
      });
    });
  });
</script>

<!--add rekomendasi-->
<script>
  $(document).ready(function () {
    $('#Formrekomendasi').on('submit', function(e){
      e.preventDefault();

      $.ajax({
        type: "POST",
        url: "/rekomendasi/create",
        data: $('#Formrekomendasi').serialize(),
        success: function (response) {
          console.log(response)
          $('#Modalrekomendasi').modal('hide')
          alert("Data Saved");
          data: $('#Formrekomendasi').reload()
        },
        error:function(error){
          console.log(error)
          alert("Data Not Saved");
        },
      });
    });
  });
</script>
@endsection

