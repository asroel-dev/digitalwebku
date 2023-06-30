<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_website');
            $table->string('email');
            $table->string('url');
            $table->text('youtube');
            $table->text('facebook');
            $table->text('twitter');
            $table->text('instagram');
            $table->string('no_telp');
            $table->text('meta_deskripsi');
            $table->text('meta_keyword');
            $table->string('favicon');
            $table->text('maps');
            $table->text('keterangan');
            $table->string('nama_kepala')->nullable();
            $table->string('foto_kepala')->nullable();
            $table->string('jabatan_kepala')->nullable();
            $table->text('sambutan')->nullable();
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
        Schema::dropIfExists('identitas');
    }
}
