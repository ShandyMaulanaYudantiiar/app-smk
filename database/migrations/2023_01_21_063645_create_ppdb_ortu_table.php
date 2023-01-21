<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpdbOrtuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppdb_ortu', function (Blueprint $table) {
            $table->unsignedBigInteger('id_akun')->references('id')->on('akun')->onUpdate('cascade')->onDelete('cascade');
            $table->string('ortu_role');
            $table->string('nama');
            $table->year('tahun_lahir');
            $table->string('pekerjaan');
            $table->string('pendidikan');
            $table->integer('penghasilan');
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
       Schema::dropIfExists('ppdb_ortu');
    }
}
