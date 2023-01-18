<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreTaskRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nama' => [
                'string',
            ],
            'jenis' => [
                'string',
            ],
            'tanggal' => [
                'date',
            ],
            'jumlahtransaksi' => [
                'integer',
            ],
            'keterangan' => [
                'string',
            ],
        ];
    }

    public function authorize()
    {
        return Gate::allows('task_access');
    }
}
