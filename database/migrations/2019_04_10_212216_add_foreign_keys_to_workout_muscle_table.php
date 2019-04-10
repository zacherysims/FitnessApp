<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWorkoutMuscleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('workout_muscle', function(Blueprint $table)
		{
			$table->foreign('workout_wid', 'workout_wid_fkey')->references('workout_id')->on('workout')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('workout_muscle', function(Blueprint $table)
		{
			$table->dropForeign('workout_wid_fkey');
		});
	}

}
