<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StorePinjamRequest extends FormRequest
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
            'jumlahpinjam' => [
                'integer',
            ],
            'status' => [
                'string',
            ],
            'cicil' => [
                'integer'
            ],
            'bunga' => [
                'integer',
            ],
        ];
    }

    public function authorize()
    {
        return Gate::allows('task_access');
    }
}
