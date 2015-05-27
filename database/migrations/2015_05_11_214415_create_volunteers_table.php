<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('volunteers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email')->unique();
			$table->string('primary_phone');
      $table->string('secondary_phone');
      $table->string('address');
      $table->string('city');
      $table->integer('zip_code');
      $table->string('emergency_name');
      $table->string('emergency_phone');
      $table->string('program');
      $table->string('program_name');
      $table->string('program_phone');
      $table->date('start_date');
      $table->string('weekday_group');
      $table->string('time_commitment');
      $table->string('commitment_weeks');
      $table->string('frequency');
      $table->string('book_processing_group');
      $table->string('research_analysis_group');
      $table->string('front_desk_group');
      $table->string('janitorial_group');
      $table->string('special_projects_group');
      $table->string('book_pickups_group');
      $table->string('has_vehicle');
      $table->string('personal_interests_group');
      $table->text('computer_skills');
      $table->text('experience');
      
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
		Schema::drop('volunteers');
	}

}
