<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\pm_municipios;

class Createpm_municipiosRequest extends Request {

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
		return pm_municipios::$rules;
	}

}
