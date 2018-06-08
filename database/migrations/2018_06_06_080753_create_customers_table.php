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
            $table->string('alamat');
            $table->string('nomor_telepon');
            $table->string('fax');
            $table->string('email')->unique();
            $table->string('contact_person');
            $table->string('jabatan_cp');
            $table->string('kode_provinsi', 2);
            $table->string('kode_kabupaten', 4);
            $table->integer('jenis_irm_id');
            $table->integer('penyelenggara_id');
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
