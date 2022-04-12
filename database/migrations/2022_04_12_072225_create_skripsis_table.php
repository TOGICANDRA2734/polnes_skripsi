<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkripsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skripsis', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('kode_prod');
            $table->string('nama_mahasiswa');
            $table->string('judul');
            $table->string('abstraksi');
            $table->string('dosen_pembimbing1');
            $table->string('dosen_pembimbing2');
            $table->string('thr_selesai');
            $table->string('jumlah_halaman');
            $table->string('tgl_upload');
            $table->string('nama_file');
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
        Schema::dropIfExists('skripsis');
    }
}
