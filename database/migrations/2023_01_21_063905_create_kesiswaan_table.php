<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKesiswaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesiswaan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_akun')->references('id')->on('akun')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title');
            $table->string('slug');
            $table->longText('content');
            $table->string('image');
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
       Schema::dropIfExists('kesiswaan');
    }
}
