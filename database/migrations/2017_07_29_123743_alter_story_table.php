<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterStoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Add column cover_image to table 'storys'
        Schema::table('storys', function (Blueprint $table) {
            $table->string('cover_image',800);
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
         Schema::table('storys', function (Blueprint $table) {
            $table->dropColumn('cover_image');
        });
    }
}
