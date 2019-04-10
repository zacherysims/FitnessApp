<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExerciseMuscleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exercise_muscle', function(Blueprint $table)
		{
			$table->integer('exercise_muscle_id')->primary('exercise_muscle_pkey');
			$table->string('exercise_muscle_muscle', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('exercise_muscle');
	}

}
