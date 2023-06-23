<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTojawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jawabans', function (Blueprint $table) {
            //
            $table->foreign('historyId')
            ->references('id')->on('histories')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('soalId')
            ->references('id')->on('soals')
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
        Schema::table('jawabans', function (Blueprint $table) {
            //
        });
    }
}
