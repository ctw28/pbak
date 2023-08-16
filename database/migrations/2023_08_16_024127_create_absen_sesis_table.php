<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenSesisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen_sesis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kelompok_id');
            $table->unsignedBigInteger('rundown_id');
            $table->string('sesi_nama');

            $table->boolean('is_open')->default(false);
            $table->boolean('is_selesai')->default(false);

            $table->timestamps();
            $table->foreign('kelompok_id')->references('id')->on('kelompoks')->onDelete('cascade');
            $table->foreign('rundown_id')->references('id')->on('rundowns')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absen_sesis');
    }
}
