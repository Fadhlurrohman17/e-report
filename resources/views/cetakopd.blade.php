<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
    <style type="text/css">
      table tr td,
      table tr th {
        font-size: 9pt;
      }
    </style>
        <table class='table table-bordered'>
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Opd</th>
                <th>Nama Pic Opd</th>
                <th>No Hp</th>
                <th>Tanggal/ Jam Problem</th>
                <th>Keluhan</th>
                <th>Tanggal/ Jam Troubleshoot</th>
                <th>Penanganan Permasalahan</th>
              </tr>
            </thead>

            <tbody>

                
                <tr>
                  <td>1</td>
                  <td>{{$data->nama_opd}}</td>
                  <td>{{$data->nama_pic_opd}}</td>
                  <td>{{$data->no_hp}}</td>
                  <td>{{$data->tanggal_jam_problem}}</td>
                  <td>{{$data->keluhan}}</td>
                  <td>{{$data->tanggal_jam_troubleshoot}}</td>
                  <td>{{$data->penanganan_permasalahan}}</td>
                </tr>
              </tbody>
        </table>
</body>
</html>