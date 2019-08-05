@extends('layouts.master')
@section('content')



<div class="container">
    <div class="row mx-2">
        <div class="form-group">
          <label for="namaopd">Nama OPD </label>
          
          <input value="{{$data_cari == null ? " " :$data_cari->nama_opd}}" type="text" class="form-control">
        </div>
    
        <div class="form-group">
          <label for="namapicopd">Nama PIC OPD </label>
          <input value="{{$data_cari == null ? " " :$data_cari->nama_pic_opd}}" type="text" class="form-control">
        </div>
    
        <div class="form-group">
          <label for="nohp">No HP </label>
          <input value="{{$data_cari == null ? " " :$data_cari->no_hp}}" type="text" class="form-control">
        </div>
    
        <div class="form-group col-3">
          <label for="tanggal/jamproblem">Tanggal/Jam Problem:</label>
          <input value="{{$data_cari == null ? " " :$data_cari->tanggal_jam_problem}}" name="tanggal_jamproblem" type="dateTime" class="form-control" id="tanggal/jamproblem" placeholder="Tanggal/ Jam Problem" name="tanggal/jamproblem">
        </div>
    
        <div class="form-group">
          <label for="keluhan">Keluhan:</label>
          <input value="{{$data_cari == null ? " " :$data_cari->keluhan}}" type="text" class="form-control">
        </div>
    
        <div class="form-group">
          <label for="tanggal/jamtroubleshoot">Tanggal/Jam Troubleshoot:</label>
          <input value="{{$data_cari == null ? " " :$data_cari->tanggal_jam_troubleshoot}}" name="tanggal_jamtroubleshoot" type="dateTime" class="form-control" id="tanggal/jamtroubleshoot" placeholder="Tanggal/ Jam Troubleshoot" name="tanggal/jamtroubleshoot">
        </div>
    
        <div class="form-group">
          <label for="penangananpermasalahan">Penanganan Permasalahan:</label>
          <input value="{{$data_cari == null ? " " :$data_cari->penanganan_permasalahan}}" type="text" class="form-control">
        </div>
    
        </div>
        <tbody>
          <td>
            <a class="btn btn-primary" href="{{route('cetak_opd',$data_cari->nama_opd)}}">Cetak</a>
          </td>
        </tbody>
    </div>

@endsection