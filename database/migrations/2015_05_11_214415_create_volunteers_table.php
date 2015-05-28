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
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('email')->unique()->nullable();
			$table->string('primary_phone')->nullable();
      $table->string('secondary_phone')->nullable();
      $table->string('address')->nullable();
      $table->string('city')->nullable();
      $table->integer('zip_code')->nullable();
      $table->string('emergency_name')->nullable();
      $table->string('emergency_phone')->nullable();
      $table->string('program')->nullable();
      $table->string('program_name')->nullable();
      $table->string('program_phone')->nullable();
      $table->date('start_date')->nullable();
      $table->string('weekday_group')->nullable();
      $table->string('time_commitment')->nullable();
      $table->string('commitment_weeks')->nullable();
      $table->string('frequency')->nullable();
      $table->string('book_processing_group')->nullable();
      $table->string('research_analysis_group')->nullable();
      $table->string('front_desk_group')->nullable();
      $table->string('janitorial_group')->nullable();
      $table->string('special_projects_group')->nullable();
      $table->string('book_pickups_group')->nullable();
      $table->string('has_vehicle')->nullable();
      $table->string('personal_interests_group')->nullable();
      $table->text('computer_skills')->nullable();
      $table->text('experience')->nullable();
      
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
