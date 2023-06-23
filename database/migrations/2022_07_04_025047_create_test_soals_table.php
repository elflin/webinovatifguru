<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_soals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_pelatihan");
            $table->string("soal");
            $table->string("jawabanA");
            $table->string("jawabanB");
            $table->string("jawabanC");
            $table->string("jawabanD");
            $table->string("jawabanE");
            $table->string("kunci");
            $table->timestamps();

            $table->foreign('id_pelatihan')
            ->references('id')->on('pelatihans')
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
        Schema::dropIfExists('test_soals');
    }
}
