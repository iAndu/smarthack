<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatusesTable extends Migration {

	public function up()
	{
		Schema::create('statuses', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 191);
			$table->string('display_name', 191);
			$table->integer('status_id')->unique()->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('statuses');
	}
}