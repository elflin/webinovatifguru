<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluasiJawabansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluasi_jawabans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_progress");
            $table->string("jawaban1");
            $table->string("jawaban2");
            $table->string("jawaban3");
            $table->string("jawaban4");
            $table->string("jawaban5");
            $table->string("jawaban6");
            $table->string("jawaban7");
            $table->text("pesan_kesan");
            $table->timestamps();

            $table->foreign('id_progress')
            ->references('id')->on('progress')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluasi_jawabans');
    }
}
