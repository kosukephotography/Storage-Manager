<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ReservationsRule;
use App\Rules\ReservationsCheckStartDateRule;

class ReservationsStoreRequest extends FormRequest
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
            'storage_id' => ['required', 'exists:storages,id'],
            'end_date' => ['required', 'date',
                new ReservationsCheckStartDateRule(
                    $this->start_date,
                    $this->end_date,
                )
            ],
            'start_date' => ['required', 'date',
                new ReservationsRule(
                    $this->storage_id,
                    $this->start_date,
                    $this->end_date,
                )
            ],
        ];
    }
}
