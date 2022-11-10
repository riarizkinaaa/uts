<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_m_s', function (Blueprint $table) {
            $table->id('id_profil');
            $table->string('nama');
            $table->integer('wa');
            $table->string('kebutuhan');
            $table->string('deskripsi');
            $table->string('foto');
            $table->string('urgensi');
            $table->string('kategori');
            $table->string('progres');
            $table->string('PIC');
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
        Schema::dropIfExists('profil_m_s');
    }
};
