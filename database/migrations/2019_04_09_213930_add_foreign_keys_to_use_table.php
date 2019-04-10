<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('use', function(Blueprint $table)
		{
			$table->foreign('use_equip_name', 'use_equip_name_fkey')->references('equip_name')->on('equipment')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('use_exer_id', 'use_exer_id_fkey')->references('exercise_id')->on('exercise')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('use', function(Blueprint $table)
		{
			$table->dropForeign('use_equip_name_fkey');
			$table->dropForeign('use_exer_id_fkey');
		});
	}

}
