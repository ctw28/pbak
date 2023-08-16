<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('peserta_id');
            $table->unsignedBigInteger('absen_sesi_id');
            $table->boolean('absen_by_self')->default(true); //ini kalau dia absen sendiri nilainya true, tapi kalau diabsen kan pembina nya jadi false
            $table->unsignedBigInteger('absen_oleh')->nullable(); //ini kalau misalnya diabsenkan sama pembina nya, kalau dia absen sendiri isinya jadi null

            // $table->date('tanggal');

            $table->timestamps();
            $table->foreign('peserta_id')->references('id')->on('pesertas')->onDelete('cascade');
            $table->foreign('absen_sesi_id')->references('id')->on('absen_sesis')->onDelete('cascade');
            $table->foreign('absen_oleh')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensis');
    }
}
