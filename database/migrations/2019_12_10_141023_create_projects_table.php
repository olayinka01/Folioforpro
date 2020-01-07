<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
	{
		Schema::create('projects', function($newtable)
		{
			$newtable->increments('pid');
			$newtable->string('pro_id');
			$newtable->string('proj_name');
			$newtable->string('project_url');
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
		schema::drop('projects');
	}
}
