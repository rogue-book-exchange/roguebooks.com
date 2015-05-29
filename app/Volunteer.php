<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model {

  protected $table = 'volunteers';

  public $timestamps = false;

  protected $fillable = [
    'first_name',
    'last_name',
    'email',
    'primary_phone',
    'secondary_phone',
    'address',
    'city',
    'zip_code',
    'emergency_name',
    'emergency_phone',
    'program',
    'program_name',
    'program_phone',
    'start_date',
    'weekday_group',
    'time_commitment',
    'commitment_weeks',
    'frequency',
    'book_processing_group',
    'research_analysis_group',
    'front_desk_group',
    'janitorial_group',
    'special_projects_group',
    'book_pickups_group',
    'has_vehicle',
    'personal_interests_group',
    'computer_skills',
    'experience'
  ];

}
