<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChapters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('chapters', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->bigInteger('story_id');
            $table->bigInteger('last_chapter_id')->default(0);
            $table->bigInteger('member_id');
            $table->string('question');
            $table->text('content');
            $table->string('answer')->nullable();
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
        //
        Schema::dropIfExists('chapters');
    }
}
