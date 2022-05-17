<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealmadridTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realmadrid', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemain');
            $table->string('nama_pelatih');
            $table->string('status_pemain');
            $table->string('asal pemain');
            $table->string('asal_wasit');
            $table->integer('umur_pemain');
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
        Schema::dropIfExists('realmadrid');
    }
}
