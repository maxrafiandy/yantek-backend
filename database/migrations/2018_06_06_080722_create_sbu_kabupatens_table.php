<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSbuKabupatensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sbu_kabupaten', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode', 4)->unique();
            $table->string('nama');
            $table->integer('wilayah_kerja');
            $table->double('transport');
            $table->double('penginapan');
            $table->double('uang_saku');
            $table->string('kode_provinsi', 2);
            $table->timestamps();
            $table->index('kode_provinsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sbu_kabupaten');
    }
}
