<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSbuProvinsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sbu_provinsi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode', 2)->unique();
            $table->string('nama');
            $table->integer('wilayah_kerja');
            $table->double('transport');
            $table->double('penginapan');
            $table->double('uang_saku');
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
        Schema::dropIfExists('sbu_provinsi');
    }
}
