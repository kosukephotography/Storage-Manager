<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Reservation;

class ReservationsRule implements Rule
{

    private $_storage_id, $_start_date, $_end_date;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($storage_id, $start_date, $end_date)
    {
        $this->_storage_id = $storage_id;
        $this->_start_date = $start_date;
        $this->_end_date = $end_date;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return Reservation::where('storage_id', $this->_storage_id)
        ->whereHasReservation($this->_start_date, $this->_end_date)
        ->doesntExist();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '他の予約が入っています。';
    }
}
