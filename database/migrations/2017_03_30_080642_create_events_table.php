<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('tagline');
            $table->string('category');
            $table->integer('type');
            $table->integer('level_required');
            $table->string('venue');
            $table->integer('trialable');
            $table->integer('createdby');
            $table->foreign('createdby')->references('id')->on('users')->onDelete('cascade');
            $table->integer('price');
            $table->integer('visited')->default(0);
            $table->integer('reviewed')->default(0);
            $table->integer('rate')->default(0);
            $table->date('createdate');
            $table->date('startdate');
            $table->date('expiredate');
            $table->integer('state')->default(0);
            $table->string('img_url');
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
        Schema::dropIfExists('events');
    }
}
