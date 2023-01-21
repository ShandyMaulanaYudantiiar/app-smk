<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSekolahInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekolah_info', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_akun')->references('id')->on('akun')->onUpdate('cascade')->onDelete('cascade');
            $table->string('logo');
            $table->string('alamat');
            $table->longText('visi');
            $table->string('gmaps');
            $table->string('description');
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
        Schema::dropIfExists('sekolah_info');
    }
}
