<?php

use Illuminate\Database\Migrations\Migration;

class AddNewsColAbstract extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('news', function( $table)
          {
               $table->string('abstract')->after('title');

          });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('news',function($table){
               $table->dropColumn('abstract');
          });
	}

}