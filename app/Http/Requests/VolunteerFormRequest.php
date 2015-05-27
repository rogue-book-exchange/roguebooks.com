<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class VolunteerFormRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'first_name' => 'required',
      'last_name' => 'required',
      'email' => 'required',
      'primary_phone' => 'required',
//       'secondary_phone',
      'address' => 'required',
      'city' => 'required',
      'zip_code' => 'required',
      'emergency_name' => 'required',
      'emergency_phone' => 'required',
//       'program',
//       'program_name',
//       'program_phone',
      'start_date' => 'required',
//       'weekday_group',
//       'time_commitment',
//       'commitment_weeks',
//       'frequency',
//       'book_processing_group',
//       'research_analysis_group',
//       'front_desk_group',
//       'janitorial_group',
//       'special_projects_group',
//       'book_pickups_group',
//       'has_vehicle',
//       'personal_interests_group',
//       'computer_skills',
//       'experience'
		];
	}

}
