<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePekerjaansKarakteristiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pekerjaans_karakteristiks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pekerjaan_id');
            $table->integer('karakteristik_id');
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
        Schema::dropIfExists('pekerjaans_karakteristiks');
    }
}
