<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nomor_irm')->unique();
            $table->string('instansi');
            $table->string('alamat');
            $table->string('nomor_telepon')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->unique();
            $table->string('contact_person')->nullable();
            $table->string('jabatan_cp')->nullable();
            $table->string('kode_provinsi', 2);
            $table->string('kode_kabupaten', 4);
            $table->integer('fasyankes_id');
            $table->integer('penyelenggara_id');
            $table->integer('kelas_rs_id')->nullable();
            $table->integer('jenis_pejabat_id');
            $table->integer('wilayah_kerja_id');
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('customer');
    }
}
