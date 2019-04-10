<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDietTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('diet', function(Blueprint $table)
		{
			$table->foreign('diet_username', 'username_fkey')->references('username')->on('personnel')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('diet_rou_id', 'rou_id_fkey')->references('rou_id')->on('rou')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('diet', function(Blueprint $table)
		{
			$table->dropForeign('username_fkey');
			$table->dropForeign('rou_id_fkey');
		});
	}

}
