<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('comment');
            $table->integer('heartFeedback')->default(0);;
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('film_id');
            $table->timestamps();

        });
        Schema::table('comments', function (Blueprint $table) {

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropForeign('comment_id');
        Schema::dropIfExists('comments');
    }
}
