@extends('layouts.master')

@section('content')

<div class="container">
    <div class="col-md-6">
        <div class='jumbotron'>
            <div class="pull-left">
                <h2>Form E-GOV Report</h2>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
        </div>
        @endif
    
        <form class="form-group" method="POST" action="/buat">
          @method("POST")
          @csrf
        <div class="form-group">
          <label for="namaopd">Nama OPD </label>
          <input name="nama_opd" type="text" class="form-control">
        </div>
    
        <div class="form-group">
          <label for="namapicopd">Nama PIC OPD </label>
          <input name="nama_opd" type="text" class="form-control">
        </div>
    
        <div class="form-group">
          <label for="nohp">No HP </label>
          <input name="nama_opd" type="text" class="form-control">
        </div>
    
        <div class="form-group col-3">
          <label for="tanggal/jamproblem">Tanggal/Jam Problem:</label>
          <i class="fa fa-calender"></i>
          <input name="tanggal_jamproblem" type="text" class="form-control pull-right" id="tanggal/jamproblem" placeholder="Tanggal/ Jam Problem" name="tanggal/jamproblem">
        </div>
    
        <div class="form-group">
          <label for="keluhan">Keluhan:</label>
          <input name="nama_opd" type="text" class="form-control">
        </div>
    
        <div class="form-group">
          <label for="tanggal/jamtroubleshoot">Tanggal/Jam Troubleshoot:</label>
          <i class="fa fa-calender"></i>
          <input name="tanggal_jamtroubleshoot" type="text" class="form-control pull-right" id="tanggal/jamtroubleshoot" placeholder="Tanggal/ Jam Troubleshoot" name="tanggal/jamtroubleshoot">
        </div>
    
        <div class="form-group">
          <label for="penangananpermasalahan">Penanganan Permasalahan:</label>
          <input name="nama_opd" type="text" class="form-control">
        </div>
    
        </div>
    
        <div class="form-group">
          <button type="submit" class= "btn btn-md">Tambahkan Data</button>
        </div>
        <div class="col-3">
          <a href="{{route('tampil')}}" class="btn btn-md btn-primary">Tampil Data</a>
        </div>
        
        </form>
    
        <form method="POST" action="{{route('home.cari')}}" class="form-inline md-form mr-auto mb-4">
          @method('post')
          @csrf
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-warning btn-rounded btn-sm my-0" type="submit">Search</button>
        </form>
      </div>
    </div>
</div>  
@endsection
