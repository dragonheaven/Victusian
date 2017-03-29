<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCertificateUrlToMasters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //insert new column "certificate_url" to "masters"
        Schema::table('masters', function($table) {
            $table->string('certificate_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //drop
        Schema::table('masters', function($table) {
            $table->dropColumn('certificate_url');
        });
    }
}
