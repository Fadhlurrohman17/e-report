@extends('layouts.master')
@section('content')

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama OPD</th>
        <th scope="col">Nama PIC OPD</th>
        <th scope="col">No HP</th>
        <th scope="col">Tanggal Jam Problem</th>
        <th scope="col">Keluhan</th>
        <th scope="col">Tanggal Jam Troubleshoot</th>
        <th scope="col">Penanganan Permasalahan</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $tampil)
          <tr>
              <td>
                  {{$loop->iteration}}
              </td>
              <td>
                  {{$tampil->nama_opd}}
              </td>
              <td>
                  {{$tampil->nama_pic_opd}}
              </td>
              <td>
                  {{$tampil->no_hp}}
              </td>
              <td>
                  {{$tampil->tanggal_jam_problem}}
              </td>
              <td>
                  {{$tampil->keluhan}}
              </td>
              <td>
                  {{$tampil->tanggal_jam_troubleshoot}}
              </td>
              <td>
                  {{$tampil->penanganan_permasalahan}}
              </td>
              <td>
                    <form method="POST" action="{{route("home.delete",$tampil->id)}}">
                    
                        @csrf 
                        @method("delete")
                        <button type="submit" class="btn btn-md btn-primary">Delete</button>
                    </form>
              </td>
              <td>
                    <a class="btn btn-md btn-warning" href="{{route('home.edit',$tampil->id)}}">Edit</a>
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection