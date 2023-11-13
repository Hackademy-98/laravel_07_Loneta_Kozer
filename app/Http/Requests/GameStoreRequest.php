<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title" => "required|max:100|min:2",
            // "year" => "required|integer|min:4|max:4",
            "description" => "required",
            "price" => "required|max:999|decimal:0,2",
            "img" => "image"
        ];
    }
    public function messages(){
        return[
            "title.required" => "Campo obligatorio",
            "title.max" => "Titolo tropo lungo",
            "description.required" => "Campo obligatorio",
            "price.required" => "Campo obligatorio"
        ];
    }
}
