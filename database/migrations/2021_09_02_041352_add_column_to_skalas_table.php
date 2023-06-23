<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToSkalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('skalas', function (Blueprint $table) {
            //
            $table->String('jenjang_mengajar');
            $table->String('variabel');
            $table->float('sangat_rendah', 3, 1); //< 20,3
            $table->float('rendah', 3, 1); //< 26,6
            $table->float('cukup', 3, 1); //< 32,9
            $table->float('tinggi', 3, 1); //< 39,2
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('skalas', function (Blueprint $table) {
            //
        });
    }
}
