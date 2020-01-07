<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
	{
		Schema::create('professions', function($newtable)
		{
			$newtable->increments('id');
			$newtable->string('profession_name');
			$newtable->timestamps();
		});
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		schema::drop('professions');
	}
}
