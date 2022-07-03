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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('full_team_name');
            $table->foreignId('pilot_id')->constrained();
            $table->string('base');
            $table->string('team_chief');
            $table->string('technical_chief');
            $table->string('chasis');
            $table->string('power_unit');
            $table->date('first_team_entry');
            $table->integer('world_championship');
            $table->integer('highest_race_finish');
            $table->integer('count_highest_race_finish');
            $table->integer('pole_position');
            $table->integer('fastest_laps');
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
        Schema::dropIfExists('teams');
    }
};
