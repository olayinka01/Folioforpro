<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
	{
		Schema::create('users', function($newtable)
		{
			$newtable->increments('uid');
			$newtable->string('pro_id');
			$newtable->integer('profession_id')->unsigned()->nullable();
			$newtable->string('firstname');
			$newtable->string('middlename');
			$newtable->string('lastname');
			$newtable->string('pro_name');
			$newtable->string('email');
			$newtable->string('admin_username');
			$newtable->string('password');
			$newtable->string('phone');
			$newtable->string('profession');
			$newtable->string('birth_date');
			$newtable->string('photo');
			$newtable->string('background_photo');
			$newtable->string('alt_phone');
		    $newtable->string('country');
			$newtable->string('state');
			$newtable->string('city');
			$newtable->string('address');
			$newtable->string('gender');
			$newtable->string('about_me');
			$newtable->string('skills');
			$newtable->string('account_type');
			$newtable->string('active');
			$newtable->rememberToken();
			$newtable->timestamps();
			
			
			$newtable->foreign('profession_id')->references('id')->on('professions');
		});
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		schema::drop('users');
	}
}
