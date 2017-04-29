<?php
/**
 * Created by PhpStorm.
 * User: nimesh
 * Date: 3/24/17
 * Time: 1:19 PM
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [
            'category_id' => 'required|string',
            'company_name' => 'required|string|min:5',
            'name' => 'required|string|min:2',
            'opening' => 'required|numeric|min:5',
            'short_description' => 'required|min:5',
            'total_description' => 'required|min:5',
            'requirement' => 'required|min:5',
            'salary' => 'required|min:3',
            'education' => 'required|min:5',
            'experience' => 'required|min:5',
            'job_location' => 'required',
            'working_hours' => 'required|string',
            'job_display_duration' => 'required|date',
            'job_status' => 'required',

        ];

    }
}