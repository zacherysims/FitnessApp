<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('use', function(Blueprint $table)
		{
			$table->integer('use_exer_id');
			$table->string('use_equip_name', 100);
			$table->primary(['use_exer_id','use_equip_name'], 'use_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('use');
	}

}
