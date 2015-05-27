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
      $table->boolean('wednesday');
      $table->boolean('thursday');
      $table->boolean('friday');
      $table->boolean('saturday');
      $table->string('duration');
      $table->string('number_weeks');
      $table->string('frequency');
      $table->boolean('straigten_shelves');
      $table->boolean('sort_books');
      $table->boolean('shelve_books');
      $table->boolean('scanning');
      $table->boolean('listing_online');
      $table->boolean('customer_service');
      $table->boolean('answer_phone');
      $table->boolean('dust_vacuum');
      $table->boolean('clean_bathroom');
      $table->boolean('recycling');
      $table->boolean('funraising');
      $table->boolean('offsite_booth');
      $table->boolean('committees');
      $table->boolean('medford');
      $table->boolean('central_point');
      $table->boolean('eagle_point');
      $table->boolean('shady_cove');
      $table->boolean('ashland');
      $table->boolean('talent_phoenix');
      $table->boolean('jacksonville_applegate_ruch');
      $table->string('has_vehicle');
      $table->boolean('non_fiction');
      $table->boolean('general_fiction');
      $table->boolean('mystery');
      $table->boolean('romance');
      $table->boolean('westerns');
      $table->boolean('science_fiction');
      $table->boolean('religous');
      $table->boolean('teens');
      $table->boolean('childrens');
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
