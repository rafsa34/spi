    <!DOCTYPE html>
    <html>
    <head>
      <title>Laporan Sistem Audit Internal</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
      <style type="text/css">
        table tr td,
        table tr th{
          font-size: 9pt;
        }
      </style>
      <center>
        <h5>Laporan Sistem Audit Internal</h5>
        <h6>LHP KAP</h6>
      </center>

      <table class='table table-bordered'>
        <thead>
          <tr>
            <th>No</th>
            <th>No LHP</th>
            <th>Tgl Pemeriksaan</th>
            <th>Nama Bagian </th>
            <th>S.Direksi</th>
            <th>S.Penegasan</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 0;?>
          @foreach($data_lhp as $lhp)
          <?php $no++ ;?>
          <tr>
            <td>{{$no}}</td>
            <td>{{$lhp->no_lhp}}</td>
            <td>{{$lhp->tgl_pemeriksaan}}</td>
            <td>{{$lhp->bagian->nama_bagian}}</td>
            <td>{{$lhp->no_surat_direksi}}</td>
            <td>{{$lhp->no_surat_penegasan}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </body>
    </html>