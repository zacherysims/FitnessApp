<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonnelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personnel', function(Blueprint $table)
		{
			$table->string('username', 100)->primary('personnel_pkey');
			$table->string('password', 100);
			$table->float('weight', 10, 0)->nullable();
			$table->float('goal_weight', 10, 0)->nullable();
			$table->string('training_goal', 100)->nullable();
			$table->integer('height')->nullable();
			$table->integer('age')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personnel');
	}

}
