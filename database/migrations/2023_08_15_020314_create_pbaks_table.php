<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePbaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pbaks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tahun_akademik_id');
            $table->string('pbak_nama', 200);
            $table->string('pbak_keterangan', 200);
            $table->timestamps();
            $table->foreign('tahun_akademik_id')->references('id')->on('tahun_akademiks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pbaks');
    }
}
