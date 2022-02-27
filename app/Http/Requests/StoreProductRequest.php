<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\PseudoTypes\True_;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name'=>'required',
            'slug'=>'required',
            'small_description'=>'required',
            'description'=>'required',
            'original_price'=>'required',
            'selling_price'=>'required',
            'qty'=>'required',
            'tax'=>'required',
            'meta_tittle'=>'required',
            'meta_description'=>'required',
            'meta_keywords'=>'required',
        ];
    }
}
