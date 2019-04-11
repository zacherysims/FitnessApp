<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRouTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rou', function(Blueprint $table)
		{
			$table->integer('rou_id', true);
			$table->string('rou_difficulty', 50)->nullable();
			$table->string('rou_name', 100);
			$table->string('rou_goal', 100)->nullable();
			$table->string('rou_length')->nullable();
			$table->string('rou_split')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rou');
	}

}
