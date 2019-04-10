<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDietTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('diet', function(Blueprint $table)
		{
			$table->integer('diet_id', true);
			$table->integer('diet_rou_id');
			$table->string('diet_username', 100);
			$table->string('diet_difficulty', 100)->nullable();
			$table->string('diet_length')->nullable();
			$table->string('diet_goal', 100)->nullable();
			$table->string('diet_name', 100)->nullable();
			$table->primary(['diet_id','diet_rou_id','diet_username'], 'diet_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('diet');
	}

}
