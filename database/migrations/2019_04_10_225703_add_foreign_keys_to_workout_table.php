<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWorkoutTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('workout', function(Blueprint $table)
		{
			$table->foreign('workout_rou_id', 'workout_rou_id_fkey')->references('rou_id')->on('rou')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('workout_username', 'workout_username_fkey')->references('username')->on('personnel')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('workout', function(Blueprint $table)
		{
			$table->dropForeign('workout_rou_id_fkey');
			$table->dropForeign('workout_username_fkey');
		});
	}

}
