<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpdbSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppdb_siswa', function (Blueprint $table) {
            $table->unsignedBigInteger('id_akun')->references('id')->on('akun')->onUpdate('cascade')->onDelete('cascade');
            $table->string('prodi');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('nisn');
            $table->string('nik');
            $table->string('kk');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('akta');
            $table->string('agama');
            $table->string('anak_ke');
            $table->string('asal_sekolah');
            $table->year('tahun_lulus');
            $table->softDeletes();
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
        Schema::dropIfExists('ppdb_siswa');
    }
}
