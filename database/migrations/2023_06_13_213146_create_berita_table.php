<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->integer('kategori_id');
            $table->string('username');
            $table->string('judul');
            $table->string('sub_judul')->nullable();
            $table->string('slug');
            $table->enum('headline', ['Y', 'N'])->nullable();
            $table->enum('aktif', ['Y', 'N'])->nullable();
            $table->enum('utama', ['Y', 'N'])->nullable();
            $table->text('isi_berita');
            $table->date('tanggal');
            $table->time('jam');
            $table->string('hari');
            $table->string('gambar');
            $table->string('ext');
            $table->string('dibaca');
            $table->text('tag')->nullable();
            $table->enum('status', ['Y', 'N']);
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
        Schema::dropIfExists('berita');
    }
}
