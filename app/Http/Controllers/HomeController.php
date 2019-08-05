<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Egov;
use PDF;
use Illuminate\Support\Facades\DB;
use Propaganistas\LaravelPhone\PhoneNumber;
use Validator;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data= Egov::all();

        return view('dashboard',compact("data"));
    }
    public function buat(Request $request)
    {
        
        if ($request->nama_opd !==null  && $request->nama_pic_opd !==null && $request->no_hp !==null && $request->tanggal_jamproblem !==null && $request->keluhan !==null && $request->tanggal_jamtroubleshoot !==null && $request->penanganan_permasalahan !==null) {
            $isoCode = $request->iso_code;
        $no_hp = $request->no_hp;
        $validasi_no= PhoneNumber::make($no_hp, $isoCode);
        $data=new Egov([
            "nama_opd"=>$request->input("nama_opd"), 
            "nama_pic_opd"=>$request->input("nama_pic_opd"),
            'no_hp' => $validasi_no,
            "tanggal_jam_problem"=>$request->input("tanggal_jamproblem"),
            "keluhan"=>$request->input("keluhan"),
            "tanggal_jam_troubleshoot"=>$request->input("tanggal_jamtroubleshoot"),
            "penanganan_permasalahan"=>$request->input("penanganan_permasalahan")
        ]);
        $rules = [
            'iso_code' => 'required',
            'phone' => 'required|phone:'.$isoCode
        ];
        
        $data->save();
        return redirect('/home');
        } else {
            return redirect()->back();
        }
        
        
    }
    
    public function delete($id)
    {
        $data= Egov::find($id);
        $data->delete();
        return redirect("/tampil");
    }
    public function insert(Request $request,$id)
    {
        $data= Egov::find($id);
        $data->nama_opd=$request->input('nama_opd');
        $data->nama_pic_opd=$request->input('nama_pic_opd');
        $data->no_hp=$request->input('no_hp');
        $data->tanggal_jam_problem=$request->input('tanggal_jam_problem');
        $data->keluhan=$request->input('keluhan');
        $data->tanggal_jam_troubleshoot=$request->input('tanggal_jam_troubleshoot');
        $data->penanganan_permasalahan=$request->input('penanganan_permasalahan');
        $data->save();
        return redirect("/tampil");
    }
    public function tampil()
    {
       return view('admin.egov.index');
    }
    public function edit($id)
    {
        $data= Egov::find($id);
        return view('edit',compact('data'));
    }
    public function calender()
    {
        return view('calender');
    }
    public function cari(Request $request)
    {
        $data_cari=DB::table('e-gov')->where("nama_opd","like","%".$request->input("cari")."%")->orWhere("nama_pic_opd","=",$request->input("cari"))->first();
        // $split_pic_opd=explode(" ",$request->input("cari"),2);
        // $nama_depan=$split_pic_opd;
        // $pic_opd=DB::table('e-gov')->where("nama_pic_opd","=",$nama_depan)->get();
        return view('cari',compact('data_cari',"nama_depan"));
    }
    public function cetak_pdf($id)
    {
    	$data = Egov::find($id);
 
    	$pdf = PDF::loadview('cetak',['data'=>$data]);
    	return $pdf->download('laporan-data.pdf');
    }

    public function cari_cetak(Request $request)
    {
        $data_cari=DB::table('e-gov')->where("nama_opd","like","%".$request->input("cari_cetak")."%")->orWhere("nama_pic_opd","=",$request->input("cari_cetak"))->get();
        $pdf = PDF::loadview('cetak',['data'=>$data_cari]);
    	return $pdf->stream('laporan-data.pdf');
    }
}
