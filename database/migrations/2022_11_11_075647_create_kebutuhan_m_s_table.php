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
        Schema::create('kebutuhan_m_s', function (Blueprint $table) {
            $table->id('id_kebutuhan');
            $table->foreignId('id_profil');
            $table->foreignId('id_bagian');
            $table->string('kebutuhan');
            $table->timestamps();
            $table->foreign('id_profil')->references('id_profil')->on('profil_m_s')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_bagian')->references('id_bagian')->on('bagian_m_s')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kebutuhan_m_s');
    }
};
