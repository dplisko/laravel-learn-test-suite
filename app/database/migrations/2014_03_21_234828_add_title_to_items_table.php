<?php

use Illuminate\Database\Migrations\Migration;

class AddTitleToItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('items', function($table){
               $table->string('title')->nullable();
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('items', function($table){
                $table->dropColumn('title');
            });
	}

}