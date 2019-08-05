<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Egov extends Model
{
    protected $table = "e-gov";
    protected $fillable= array("nama_opd", "nama_pic_opd","no_hp","tanggal_jam_problem","keluhan","tanggal_jam_troubleshoot","penanganan_permasalahan");
}
