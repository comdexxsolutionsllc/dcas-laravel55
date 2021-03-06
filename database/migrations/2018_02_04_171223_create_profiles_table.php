<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('website_id')->unsigned()->nullable();
			$table->string('avatar')->nullable();
			$table->longText('biography')->nullable();
			$table->string('address_1')->nullable();
			$table->string('address_2')->nullable();
			$table->string('city')->nullable();
			$table->char('state', 2)->nullable();
			$table->char('country', 2)->nullable();
			$table->bigInteger('postal_code')->unsigned()->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('profiles');
	}
}
