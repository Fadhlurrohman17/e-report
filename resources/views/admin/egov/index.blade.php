@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
        </div>
      </div>
        {{-- <div class="col-md-4">
            <form method="POST" action="{{route('home.cari')}}" class="form-inline md-form mr-auto mb-4">
              @method('post')
              @csrf
              <input class="form-control" type="search" name="cari" placeholder="Search" aria-label="Search">
              <span class="input-group-prepand">
                <button class="btn btn-primary" type="submit">Search</button>
              </span>
              
            </div>
            </form> --}}
            <form method="POST" action="{{route('cetak_opd')}}" class="form-inline md-form mr-auto mb-4">
              @method('post')
              @csrf
              <input class="form-control" type="search" name="cari_cetak" placeholder="Search" aria-label="Search_cetak">
              <span class="input-group-prepand">
                    <button class="btn btn-primary" type="submit">Cari Dan Cetak</button>
              </span>
              
            </div>
            </form>
            <form class="form-group" method="POST" action="{{route("buat")}}">
                @method("POST")
                @csrf
                
                <div class="box-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="namaopd">Nama OPD</label>
                          <select name="nama_opd" class="form-control select2" style="width: 100%;">
                            <option selected="selected">BADAN KEPEGAWAIAN DAN PENGEMBANGAN SDMD KAB. BANGKA</option>
                            <option>BADAN PENGELOLAAN KEUANGAN DAN ASET DAERAH KAB. BANGKA</option>
                            <option>BADAN PENGELOLAAN PAJAK DAN RETRIBUSI DAERAH KAB. BANGKA</option>
                            <option>BADAN PERENCANAAN PEMBANGUNAN DAERAH KAB. BANGKA</option>
                            <option>BAGIAN KEPROTOKOLAN SETDA KAB. BANGKA</option>
                            <option>BAGIAN ADM. KESRA & KEMASYARAKATAN SETDA KAB. BANGKA</option>
                            <option>BAGIAN ADM. PELAYANAN PENGADAAN BARANG DAN JASA SETDA KAB. BANGKA</option>
                            <option>BAGIAN ADM. PEMBANGUNAN SETDA KAB. BANGKA</option>
                            <option>BAGIAN ADM. PEMERINTAHAN UMUM SETDA KAB. BANGKA</option>
                            <option>BAGIAN ADM. PEREKONOMIAN DAN ESDM SETDA KAB. BANGKA</option>
                            <option>BAGIAN HUKUM & HAM SETDA KAB. BANGKA</option>
                            <option>BAGIAN KEUANGAN DAN ASET SETDA KAB. BANGKA</option>
                            <option>BAGIAN ORGANISASI SETDA KAB. BANGKA</option>
                            <option>BAGIAN UMUM DAN RUMAH TANGGGA SETDA KAB. BANGKA</option>
                            <option>BNN</option>
                            <option>DINAS KEARSIPAN DAN PERPUSTAKAAN KAB. BANGKA</option>
                            <option>DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL KAB. BANGKA</option>
                            <option>DINAS KESEHATAN KAB. BANGKA</option>
                            <option>DINAS KOMUNIKASI INFORMATIKA DAN STATISTIK KAB. BANGKA</option>
                            <option>DINAS LINGKUNGAN HIDUP KAB. BANGKA</option>
                            <option>DINAS PANGAN KAB. BANGKA</option>
                            <option>DINAS PARIWISATA, KEPEMUDAAN DAN OLAHRAGA KAB. BANGKA</option>
                            <option>DINAS PENANAMAN MODAL, PELAYANAN PERIZINAN TERPADU SATU PINTU, KOPERASI, USAHA KECIL DAN MENENGAH KAB. BANGKA</option>
                            <option>DINAS PENDIDIKAN DAN KEBUDAYAAN KAB. BANGKA</option>
                            <option>DINAS PENGENDALIAN PENDUDUK, KB, PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK KAB. BANGKA</option>
                            <option>DINAS PERIKANAN KAB. BANGKA</option>
                            <option>DINAS PERTANIAN KAB. BANGKA</option>
                            <option>DINAS PERUMAHAN, KAWASAN PERMUKIMAN DAN PERTANAHAN KAB. BANGKA</option>
                            <option>DINAS PU, PENATAAN RUANG DAN PERHUBUNGAN KAB. BANGKA</option>
                            <option>DINAS SOSIAL, PEMBERDAYAAN MASYARAKAT DAN DESA KAB. BANGKA</option>
                            <option>DINAS TENAGA KERJA, PERINDUSTRIAN DAN PERDAGANGAN KAB. BANGKA</option>
                            <option>GURU SDN 6 Belinyu</option>
                            <option>GURU SMPN 1 Pemali</option>
                            <option>GURU SMPN 1 Sungailiat</option>
                            <option>INSPEKTORAT KAB. BANGKA</option>
                            <option>KANTOR KECAMATAN BAKAM KAB. BANGKA</option>
                            <option>KANTOR KECAMATAN BELINYU KAB. BANGKA</option>
                            <option>KANTOR KECAMATAN MENDOBARAT KAB. BANGKA</option>
                            <option>KANTOR KECAMATAN MERAWANG KAB. BANGKA</option>
                            <option>KANTOR KECAMATAN PEMALI KAB. BANGKA</option>
                            <option>KANTOR KECAMATAN PUDING BESAR KAB. BANGKA</option>
                            <option>KANTOR KECAMATAN RIAU SILIP KAB. BANGKA</option>
                            <option>KANTOR KECAMATAN SUNGAILIAT KAB. BANGKA</option>
                            <option>KANTOR KELURAHAN AIR ASAM KEC. BELINYU KAB. BANGKA</option>
                            <option>KANTOR KELURAHAN AIR JUKUNG KEC. BELINYU KAB. BANGKA</option>
                            <option>KANTOR KELURAHAN BELINYU KEC. BELINYU KAB. BANGKA</option>
                            <option>KANTOR KELURAHAN BUKIT BETUNG KEC. SUNGAILIAT KAB. BANGKA</option>
                            <option>KANTOR KELURAHAN BUKIT KETOK KEC. BELINYU KAB. BANGKA</option>
                            <option>KANTOR KELURAHAN JELITIK KEC. SUNGAILIAT KAB. BANGKA</option>
                            <option>KANTOR KELURAHAN KENANGA KEC. SUNGAILIAT KAB. BANGKA</option>
                            <option>KANTOR KELURAHAN KUDAY KEC. SUNGAILIAT KAB. BANGKA</option>
                            <option>KANTOR KELURAHAN KUTO PANJI KEC. BELINYU KAB. BANGKA</option>
                            <option>KANTOR KELURAHAN LUBUK KELIK KEC. SUNGAILIAT KAB. BANGKA</option>
                            <option>KANTOR KELURAHAN MANTUNG KEC. BELINYU KAB. BANGKA</option>
                            <option>KANTOR KELURAHAN MATRAS KEC. SUNGAILIAT KAB. BANGKA</option>
                            <option>KANTOR KELURAHAN PARIT PADANG KEC. SUNGAILIAT KAB. BANGKA</option>
                            <option>KANTOR KELURAHAN REMODONG KEC. BELINYU KAB. BANGKA</option>
                            <option>KANTOR KELURAHAN SINAR BARU KEC. SUNGAILIAT KAB. BANGKA</option>
                            <option>KANTOR KELURAHAN SINAR JAYA JELUTUNG KEC. SUNGAILIAT KAB. BANGKA</option>
                            <option>KANTOR KELURAHAN SRIMENANTI KEC. SUNGAILIAT KAB. BANGKA</option>
                            <option>KANTOR KELURAHAN SUNGAILIAT KEC. SUNGAILIAT KAB. BANGKA</option>
                            <option>KANTOR KELURAHAN SURYA TIMUR KEC. SUNGAILIAT KAB. BANGKA</option>
                            <option>KANTOR KESATUAN BANGSA & POLITIK</option>
                            <option>PENGAWAS DINAS PENDIDIKAN</option>
                            <option>PENGAWAS SD</option>
                            <option>PENGAWAS TK</option>
                            <option>PENILIK PENDIDIKAN</option>
                            <option>RSUD DEPATI BAHRIN KAB. BANGKA</option>
                            <option>SATUAN POLISI PAMONG PRAJA KAB. BANGKA</option>
                            <option>SDN 1 Bakam</option>
                            <option>SDN 1 Belinyu</option>
                            <option>SDN 1 Mendo Barat</option>
                            <option>SDN 1 Merawang</option>
                            <option>SDN 1 Pemali	</option>
                            <option>SDN 1 Puding Besar</option>
                            <option>SDN 1 Riau Silip</option>
                            <option>SDN 1 Sungailiat</option>
                            <option>SDN 10 Bakam</option>
                            <option>SDN 10 Belinyu</option>
                            <option>SDN 10 Mendo Barat</option>
                            <option>SDN 10 Merawang</option>
                            <option>SDN 10 Pemali	</option>
                            <option>SDN 10 Puding Besar</option>
                            <option>SDN 10 Riau Silip</option>
                            <option>SDN 10 Sungailiat</option>
                            <option>SDN 11 Bakam</option>
                            <option>SDN 11 Belinyu</option>
                            <option>SDN 11 Mendo Barat</option>
                            <option>SDN 11 Merawang</option>
                            <option>SDN 11 Pemali</option>
                            <option>SDN 11 Riau Silip</option>
                          </select>
                        </div>
          
              <div class="form-group">
                <label for="namapicopd">Nama PIC OPD </label>
                <input name="nama_pic_opd" type="text" class="form-control">
              </div>
          
              <div class="form-group">
                <label for="nohp">No HP </label>
                <input name="no_hp" type="text" class="form-control">
              </div>

              <div class="form-group">
                  <label>Tanggal/Jam Problem:</label>
  
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input name="tanggal_jamproblem" type="text" class="form-control pull-right" id="tanggal/jamproblem" placeholder="YY-MM-DD/00.00.00" name="tanggal/jamproblem">
                  </div>
                  <!-- /.input group -->
                </div>
          
                <div class="form-group">
                  <label>Keluhan</label>
                  <textarea name="keluhan" class="form-control" rows="3" placeholder="1."></textarea>
                </div>
          
              <div class="form-group">
                  <label>Tanggal/Jam Troubleshoot:</label>
  
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input name="tanggal_jamtroubleshoot" type="text" class="form-control pull-right" id="tanggal/jamtroubleshoot" placeholder="YY-MM-DD/00.00.00" name="tanggal/jamtroubleshoot">
                  </div>
                  <!-- /.input group -->
                </div>
          
                <div class="form-group">
                  <label>Penanganan Permasalahan</label>
                  <textarea name="penanganan_permasalahan" class="form-control" rows="3" placeholder="1."></textarea>
                </div>

              </div>
              <div class="col-3">
                <div class="form-group">
                  <button type="submit" class= "btn btn-md btn-primary">Tambahkan Data</button>
                </div>
              </div>
              
              
                  {{-- <div class="col-3">
                    <a href="{{route('tampil')}}" class="btn btn-md btn-primary">Tampil Data</a>
                  </div> --}}
              </form>
</div>
  
            
@endsection
