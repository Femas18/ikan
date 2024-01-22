<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ikan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ikan', function(Blueprint $blueprint){
            $blueprint->id();
            $blueprint->string('nama_ikan');
            $blueprint->integer('stok_ikan');
            $blueprint->string('jenis_ikan');
            $blueprint->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ikan');
    }
}
