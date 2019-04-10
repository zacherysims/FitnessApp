<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToExerciseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('exercise', function(Blueprint $table)
		{
			$table->foreign('exercise_creator_username', 'exercise_creator_username_fkey')->references('username')->on('personnel')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('exercise_user_username', 'exercise_exercise_user_username_fkey')->references('username')->on('personnel')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('exercise_workout_id', 'exercise_exercise_workout_id_fkey')->references('workout_id')->on('workout')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('exercise', function(Blueprint $table)
		{
			$table->dropForeign('exercise_creator_username_fkey');
			$table->dropForeign('exercise_exercise_user_username_fkey');
			$table->dropForeign('exercise_exercise_workout_id_fkey');
		});
	}

}
