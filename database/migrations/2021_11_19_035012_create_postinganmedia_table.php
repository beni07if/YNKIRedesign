<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostinganmediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postinganmedia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_user');
            $table->string('judul');
            $table->string('title')->nullable();
            $table->string('caption')->nullable();
            $table->string('captions')->nullable();
            $table->string('kategori');
            $table->string('categories');
            $table->text('deskripsi')->nullable();
            $table->text('description')->nullable();
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('postinganmedia');
    }
}
