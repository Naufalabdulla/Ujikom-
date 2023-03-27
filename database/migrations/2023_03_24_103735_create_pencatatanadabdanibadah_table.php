<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePencatatanadabdanibadahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pencatatanadabdanibadah', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggalpencatatan');
            $table->enum('sholatlimawaktu',['Iya','Tidak']);
            $table->enum('kualitas',['Hadir','Tidak Hadir','Terlambat']);
            $table->string('catatan');
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
        Schema::dropIfExists('pencatatanadabdanibadah');
    }
}
