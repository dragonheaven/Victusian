<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid');
            $table->integer('legionid');
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
            $table->string('certificate_url');
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
        Schema::dropIfExists('masters');
    }
}
