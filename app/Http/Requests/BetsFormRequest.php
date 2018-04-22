<?php

namespace WC2018\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use WC2018\Models\Match;

class BetsFormRequest extends FormRequest
{
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
        $rules = [];
        $matches = Match::all()->toArray();

        foreach ($matches as $match) {
            $rules['match.' . $match['id'] . '.bet_first_team_result'] = 'required_with:match.' . $match['id'] . '.bet_second_team_result|nullable|numeric';
            $rules['match.' . $match['id'] . '.bet_second_team_result'] = 'required_with:match.' . $match['id'] . '.bet_first_team_result|nullable|numeric';
            $rules['match.' . $match['id'] . 'bet_match_result.'] = 'nullable|regex:/[x01]{1}/i';
        }

        return $rules;

    }
}
