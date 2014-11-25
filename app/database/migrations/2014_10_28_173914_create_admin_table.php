<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('administration', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('lastName');
			$table->string('email')->unique();
			$table->string('password');
            $table->string('remember_token',100)->nullable();

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
		Schema::drop('administration');
	}

}
