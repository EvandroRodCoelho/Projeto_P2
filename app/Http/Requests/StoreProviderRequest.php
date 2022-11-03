<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreProviderRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nome' => [
                'required', 'string',
            ],
            'cnpj' => [
                'required', 'string',
            ],
            'telefone' => [
                'required', 'string',
            ]
        ];
    }

    public function authorize()
    {
        return Gate::allows('admin_access');
    }
}
