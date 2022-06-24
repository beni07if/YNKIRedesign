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
            $table->unsigned('user_id')->notnull();
            $table->unsigned('isuesfplm_id')->notnull();
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

            // $table->foreign('user_id')->on('users')->references('id')
            //     ->onDelete('CASCADE')
            //     ->onUpdate('CASCADE');
            // $table->foreign('isuesfplm_id')->on('isuesfplms')->references('id')
            //     ->onDelete('CASCADE')
            //     ->onUpdate('CASCADE');
        });
        Schema::table('fplms', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('fplms', function (Blueprint $table) {
            $table->foreign('isuesfplm_id')->references('id')->on('isuesfplms');
        });

        // Schema::table('users', function (Blueprint $table) {
        //     $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        // });
        // Schema::table('fplms', function (Blueprint $table) {
        //     $table->foreignId('isuesfplm_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('fplms');
        // Schema::dropIfExists('users');
        // Schema::disableForeignKeyConstraints();
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('fplms');
        // Schema::drop('users');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        // DB::statement('drop table users cascade');
        // Schema::disableForeignKeyConstraints();
        // Schema::dropIfExists('users');
        // Schema::disableForeignKeyConstraints();
        // Schema::drop('users');
        // Schema::enableForeignKeyConstraints();
    }
}
