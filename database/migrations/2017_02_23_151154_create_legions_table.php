<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid');
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
            $table->string('firstname');
            $table->string('lastname');
            $table->integer('gender');
            $table->date('dateofbirth');
            $table->string('phonenum');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('postalcode');
            $table->date('teachsince');
            $table->integer('currency');
            $table->string('teachcategory');
            $table->integer('portfolioid');
            $table->string('motto', 255);
            $table->string('aboutme', 255);
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
        Schema::dropIfExists('legions');
    }
}
