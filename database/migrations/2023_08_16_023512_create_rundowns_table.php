<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRundownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rundowns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pbak_id');

            $table->string('kegiatan_nama');
            $table->date('tanggal');
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->string('pemateri');
            $table->string('moderator');
            $table->string('pic');
            $table->string('keterangan', 100);
            $table->timestamps();
            $table->foreign('pbak_id')->references('id')->on('pbaks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rundowns');
    }
}
