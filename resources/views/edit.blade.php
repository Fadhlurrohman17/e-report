@extends('layouts.master')
@section('content')

<div class="container">

</div>
<form method="POST" action="{{route("home.insert",$data->id)}}">
    @method("patch")
    @csrf
  <div class="row mx-2">

  
  <div class="form-group">
    <label for="namaopd">Nama OPD </label>
  <input value="{{$data->nama_opd}}" name="nama_opd" type="text" class="form-control" id="namaopd" placeholder="Nama OPD" name="namaopd">
  </div>

  <div class="form-group">
    <label for="namapicopd">Nama PIC OPD </label>
    <input value="{{$data->nama_pic_opd}}" name="nama_pic_opd" type="text" class="form-control" id="namapicopd" placeholder="Nama PIC OPD" name="namapicopd">
  </div>

  <div class="form-group">
    <label for="nohp">No HP </label>
    <input value="{{$data->no_hp}}" name="no_hp" type="text" class="form-control" id="nohp" placeholder="No Hp" name="nohp">
  </div>

  <div class="form-group">
    <label for="tanggal/jamproblem">Tanggal/Jam Problem:</label>
    <input value="{{$data->tanggal_jam_problem}}" name="tanggal_jam_problem" type="dateTime" class="form-control" id="tanggal/jamproblem" placeholder="Tanggal/ Jam Problem" name="tanggal/jamproblem">
  </div>

  <div class="form-group">
    <label for="keluhan">Keluhan:</label>
    <textarea value="{{$data->keluhan}}"name="keluhan" type="text" class="form-control" id="keluhan" placeholder="Keluhan" name="keluhan"></textarea>
  </div>

  <div class="form-group">
    <label for="tanggal/jamtroubleshoot">Tanggal/Jam Troubleshoot:</label>
    <input value="{{$data->tanggal_jam_troubleshoot}}" name="tanggal_jam_troubleshoot" type="dateTime" class="form-control" id="tanggal/jamtroubleshoot" placeholder="Tanggal/ Jam Troubleshoot" name="tanggal/jamtroubleshoot">
  </div>

  <div class="form-group">
    <label for="penangananpermasalahan">Penanganan Permasalahan:</label>
    <textarea value="{{$data->penanganan_permasalahan}}" name="penanganan_permasalahan" type="text" class="form-control" id="penangananpermasalahan" placeholder="Penanganan Permasalahan" name="penangananpermasalahan"></textarea>
  </div>

  </div>
    <button type="submit" class="btn btn-md btn-primary">Ubah</button>
  </form>
</div>
</div>
@endsection