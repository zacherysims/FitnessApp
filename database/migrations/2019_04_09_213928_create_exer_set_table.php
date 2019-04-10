<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExerSetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exer_set', function(Blueprint $table)
		{
			$table->integer('exer_set_id');
			$table->integer('exer_set_num_reps')->nullable();
			$table->string('exer_set_time')->nullable();
			$table->float('exer_set_distance', 10, 0)->nullable();
			$table->float('exer_set_weight', 10, 0)->nullable();
			$table->string('exer_set_type', 100)->nullable();
			$table->string('exer_set_comment')->nullable();
			$table->string('exer_username', 100);
			$table->primary(['exer_set_id','exer_username'], 'exer_set_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('exer_set');
	}

}
