<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            'judul' => 'required|max:255',
            'poster' => 'image|required',
            'pemeran' => 'required|max:255',
            'negara' => 'required|max:255',
            'sutradara' => 'required|max:255',
            'imdb' => 'required|max:255',
            'kualitas' => 'required|max:255',
            'rilis' => 'required|max:255',
            'durasi' => 'required|max:255',
            'url' => 'required',
            'sinopsis' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'judul.required' => 'harap diisi.',
            'poster.required' => 'harap diisi.',
            'pemeran.required' => 'harap diisi.',
            'negara.required' => 'harap diisi.',
            'sutradara.required' => 'harap diisi.',
            'imdb.required' => 'harap diisi.',
            'kualitas.required' => 'harap diisi.',
            'rilis.required' => 'harap diisi.',
            'durasi.required' => 'harap diisi.',
            'url.required' => 'harap diisi.',
            'sinopsis.required' => 'harap diisi.',
        ];
    }
}
