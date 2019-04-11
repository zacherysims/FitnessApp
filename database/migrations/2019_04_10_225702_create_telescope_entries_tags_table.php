<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTelescopeEntriesTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('telescope_entries_tags', function(Blueprint $table)
		{
			$table->guid('entry_uuid');
			$table->string('tag')->index();
			$table->index(['entry_uuid','tag']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('telescope_entries_tags');
	}

}
