<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFplmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fplms', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('title')->nullable();
            $table->string('caption')->nullable();
            $table->string('captions')->nullable();
            $table->string('kategori')->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('description')->nullable();
            $table->string('mapservice');
            $table->string('foto')->nullable();
            $table->string('kontributor')->nullable();
            $table->timestamps();
        });
        Schema::table('fplms', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('fplms', function (Blueprint $table) {
            $table->foreignId('isu_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fplms');
    }
}
