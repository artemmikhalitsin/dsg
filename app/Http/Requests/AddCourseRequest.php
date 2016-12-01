<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddCourseRequest extends Request
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
        return [
            'semester_id' => 'required|numeric|exists:semesters',
            'course_id' => 'required|numeric|exists:courses',
            'lecture_id' => 'required|numeric|exists:lectures'
        ];
    }
}