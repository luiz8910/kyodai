<?php

namespace admin\Http\Requests;

use admin\Http\Requests\Request;

class QuemSomosRequest extends Request
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
            "imagem" => "required|image"
        ];
    }
}
