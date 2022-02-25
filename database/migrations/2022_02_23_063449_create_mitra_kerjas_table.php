<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitraKerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitra_kerjas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_mitra');
            $table->string('logo_mitra')->nullable();
            $table->date('waktu_mulai');
            $table->date('waktu_selesai');
            $table->string('email');
            $table->text('bidang_teknis');
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
        Schema::dropIfExists('mitra_kerjas');
    }
}
