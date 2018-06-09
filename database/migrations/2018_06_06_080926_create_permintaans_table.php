<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermintaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor_kup', 4);
            $table->date('tanggal');
            $table->date('jadwal_rekalibrasi')->nullable();
            $table->date('tanggal_terima');
            $table->date('perihal');
            $table->string('keterangan')->nullable();
            $table->date('customer_id');
            $table->integer('jabatan_id');
            $table->integer('penanggung_jawab_id');
            $table->integer('permintaan_id')->nullable(); // if current row has been revised
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
        Schema::dropIfExists('permintaan');
    }
}
