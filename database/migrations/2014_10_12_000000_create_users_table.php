<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('usia')->nullable();
            $table->char('jenis_kelamin')->nullable();
            $table->string('status_pernikahan')->nullable();
            $table->integer('jumlah_anak')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->integer('lama_mengajar')->nullable();
            $table->String('jenjang_mengajar')->nullable();
            $table->text('mata_pelajaran')->nullable();
            $table->string('pendidikan')->nullable();
            $table->boolean('isIlmuPendidikan')->nullable();
            $table->boolean('isAdmin')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
