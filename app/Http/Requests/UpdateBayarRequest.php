<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateBayarRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nama' => [
                'string',
            ],
            'alamat' => [
                'string',
            ],
            'tanggal' => [
                'date',
            ],
            'jumlahbayar' => [
                'integer',
            ],
            'status' => [
                'string',
            ],
        ];
    }

    public function authorize()
    {
        return Gate::allows('task_access');
    }
}
