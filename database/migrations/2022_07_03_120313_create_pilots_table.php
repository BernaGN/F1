<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilots', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->integer('number');
            $table->foreignId('nationality_id')->constrained();
            $table->integer('podium');
            $table->integer('point');
            $table->integer('grands_prix_entered');
            $table->integer('world_championship');
            $table->integer('highest_race_finish');
            $table->integer('count_highest_race_finish');
            $table->integer('highest_race_position');
            $table->string('date_of_birth');
            $table->string('place_of_birth');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pilots');
    }
};
