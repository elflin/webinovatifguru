<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_progress_histories");
            $table->unsignedBigInteger("id_pelatihan");
            $table->boolean("status")->default(false);
            $table->string("path_submission")->nullable();
            $table->timestamps();

            $table->foreign('id_progress_histories')
            ->references('id')->on('progress_histories')
            ->onUpdate('cascade')
            ->onDelete('cascade');

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
        Schema::dropIfExists('progress');
    }
}
