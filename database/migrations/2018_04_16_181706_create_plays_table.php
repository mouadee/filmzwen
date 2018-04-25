<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plays', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Youtube_url');
            $table->string('Film_title');
            $table->string('Film_poster');
            $table->text('Film_Description');
            $table->string('Film_Actor');
            $table->string('Film_Hero');
            $table->string('Film_types');
            $table->string('Film_times');
            $table->integer('Film_feedback');
            $table->string('Film_quality');
            $table->string('Film_download');
            $table->string('Film_link');
            $table->integer('Film_season');
            $table->integer('Film_ring');
            $table->integer('Film_productionYears');
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
        Schema::dropIfExists('plays');
    }
}
