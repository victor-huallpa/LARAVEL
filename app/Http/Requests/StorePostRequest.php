<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => ['required', 'min:5', 'max:255'],
            'slug' => 'required|unique:posts',
            'category' => 'required',
            'content' => 'required',
        ];
    }

    //configuracion de mensajes y atributos de los errorse que se muestren
    // public function messages(){
    //     return [
    //         'title.required' => 'El :attribute es requerido',
    //         // 'slug.required' => 'El slug es requerido',
    //         // 'category.required' => 'La categoria es requerida',
    //         // 'content.required' => 'El contenido es requerido',
    //     ];
    // }

    // public function attributes(){
    //     return [
    //         'title' => 'Titulo',
    //         'slug' => 'Slug',
    //         'category' => 'Categoria',
    //         'content' => 'Contenido',
    //     ];
    // }
}
