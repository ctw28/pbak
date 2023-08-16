<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelompoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelompoks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pbak_id');
            $table->string('kelompok_nama', 100);
            $table->string('ketua', 100)->nullable();
            $table->string('keterangan', 100)->nullable();

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
        Schema::dropIfExists('kelompoks');
    }
}
