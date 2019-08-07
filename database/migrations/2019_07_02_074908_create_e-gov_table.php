<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEGovTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e-gov', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_opd');
            $table->string('nama_pic_opd');
            $table->string('no_hp');
            $table->dateTime('tanggal_jam_problem');
            $table->text('keluhan');
            $table->dateTime('tanggal_jam_troubleshoot');
            $table->text('penanganan_permasalahan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('e-gov');
    }
}
