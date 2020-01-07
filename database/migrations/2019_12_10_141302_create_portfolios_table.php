<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
	{
		Schema::create('portfolios', function($newtable)
		{
			$newtable->increments('pfid');
			$newtable->string('proj_id');
			$newtable->string('pro_id');
			$newtable->string('pro_name');
			$newtable->string('proj_name');
			$newtable->string('name');
			$newtable->string('image');
			$newtable->string('description');
			$newtable->rememberToken();
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
		schema::drop('portfolios');
	}
}
