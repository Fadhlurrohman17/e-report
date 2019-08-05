@extends('layouts.master')
@section('content')

<div>
        <table class="table table-striped">
                <form method="POST" action="{{route('cetak_opd')}}" class="form-inline md-form mr-auto mb-4">
                        @method('post')
                        @csrf
                        <input class="form-control" type="search" name="cari_cetak" placeholder="Search" aria-label="Search_cetak">
                        <span class="input-group-prepand">
                              <button class="btn btn-primary" type="submit">Cari Dan Cetak</button>
                        </span>
                        
                      </div>
                      </form>
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
                      {{-- <td>
                        <a class="btn btn-primary" href="{{route('home.cetak',$tampil->id)}}">Cetak</a>
                      </td> --}}
                  </tr>
              @endforeach
            </tbody>
          </table>
</div>


@endsection