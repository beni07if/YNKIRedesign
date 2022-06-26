<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentisusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contentisus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('issuesfplpm_id');
            $table->foreign('issuesfplpm_id')->references('id')->on('issuesfplpms');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('judul');
            $table->string('title');
            $table->string('caption')->nullable();
            $table->string('captions')->nullable();
            $table->string('kategori');
            $table->text('deskripsi');
            $table->text('description')->nullable();
            $table->text('mapservice');
            $table->text('fotoservice');
            $table->text('grafikservice');
            $table->string('kontributor')->nullable();
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
        Schema::dropIfExists('contentisus');
    }
}
