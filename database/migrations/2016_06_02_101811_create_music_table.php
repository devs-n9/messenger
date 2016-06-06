<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_music', function (Blueprint $table) {
            $table->increments('id');
            $table->string('artist');
            $table->string('album');
            $table->string('song');
            $table->mediumText('year');
            $table->mediumText('genre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
