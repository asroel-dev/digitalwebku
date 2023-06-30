<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHalamanStatisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halaman', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug');
            $table->text('isi_halaman');
            $table->date('tgl_posting');
            $table->string('gambar');
            $table->string('ext');
            $table->string('username');
            $table->integer('dibaca');
            $table->time('jam');
            $table->string('hari');
            $table->string('menu')->nulabble();
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
        Schema::dropIfExists('halaman');
    }
}
