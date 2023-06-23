<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestJawabansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_jawabans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_progress");
            $table->unsignedBigInteger("id_test_soal");
            $table->string("jawaban");
            $table->timestamps();

            $table->foreign('id_progress')
            ->references('id')->on('progress')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('id_test_soal')
            ->references('id')->on('test_soals')
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
        Schema::dropIfExists('test_jawabans');
    }
}
