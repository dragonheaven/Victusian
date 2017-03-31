<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid');
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
            $table->string('firstName');
            $table->string('lastName');
            $table->integer('gender');
            $table->date('dateofbirth');
            $table->integer('hobby');
            $table->integer('idliketo');
            $table->string('motto');
            $table->string('aboutme');
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
        Schema::dropIfExists('students');
    }
}
