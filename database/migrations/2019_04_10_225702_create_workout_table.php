<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkoutTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('workout', function(Blueprint $table)
		{
			$table->integer('workout_id', true);
			$table->date('workout_date');
			$table->string('workout_difficulty', 100)->nullable();
			$table->string('workout_type', 100)->nullable();
			$table->integer('workout_num_ex')->nullable();
			$table->string('workout_length')->nullable();
			$table->integer('workout_rou_id');
			$table->string('workout_comment')->nullable();
			$table->string('workout_username', 100);
			$table->primary(['workout_id','workout_username','workout_rou_id'], 'workout_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('workout');
	}

}
