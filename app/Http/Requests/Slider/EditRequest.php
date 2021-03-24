<?php

namespace App\Http\Requests\Slider;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
        $id = $this->route('slider');
        return [
            'title'=>'required|unique:sliders,title,' . $id . ',id',
            //'subtitle'=>'required',
            'image'=>'image',
            //'url'=>'required',
            //'button_text'=>'required',
        ];
    }
}
