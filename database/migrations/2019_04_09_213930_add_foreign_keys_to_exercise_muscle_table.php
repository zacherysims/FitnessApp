<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToExerciseMuscleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('exercise_muscle', function(Blueprint $table)
		{
			$table->foreign('exercise_muscle_id', 'exercise_muscle_id_fkey')->references('exercise_id')->on('exercise')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('exercise_muscle', function(Blueprint $table)
		{
			$table->dropForeign('exercise_muscle_id_fkey');
		});
	}

}
