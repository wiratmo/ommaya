<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('akun_id')->unsigned();
            $table->date('tanggal');
            $table->integer('debet')->nullable();
            $table->integer('kredit')->nullable();
            $table->string('keterangan')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('akun_id')->references('id')->on('akuns');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('transaksis');
    }
}
