<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExerciseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exercise', function(Blueprint $table)
		{
			$table->integer('exercise_id', true);
			$table->string('exercise_name', 100);
			$table->string('exercise_type', 100);
			$table->integer('exercise_num_sets')->nullable();
			$table->integer('exercise_workout_id')->nullable();
			$table->string('exercise_comment')->nullable();
			$table->string('exercise_creator_username', 100);
			$table->string('exercise_user_username', 100)->nullable();
			$table->primary(['exercise_id','exercise_creator_username'], 'exercise_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('exercise');
	}

}
