<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create('email_addresses', function($table){
	        $table->increments('id');
	        $table->string('email')->unique();
	        $table->string('ip_address', 46);
	        $table->string('first_name');
	        $table->string('last_name');
	        $table->string('school');
	        $table->timestamps();
	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('email_addresses');
	}

}
