<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToExerSetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('exer_set', function(Blueprint $table)
		{
			$table->foreign('exer_username', 'exer_username_fkey')->references('username')->on('personnel')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('exer_set', function(Blueprint $table)
		{
			$table->dropForeign('exer_username_fkey');
		});
	}

}
