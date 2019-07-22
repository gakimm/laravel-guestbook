<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHumasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_tamu');
            $table->string('jk');
            $table->string('alamat');
            $table->string('status');
            $table->string('jaminan');
            $table->string('keterangan');

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
        Schema::dropIfExists('humas');
    }
}
