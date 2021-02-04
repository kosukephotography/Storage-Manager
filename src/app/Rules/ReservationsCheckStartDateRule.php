<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ReservationsCheckStartDateRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($start_date, $end_date)
    {
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
        if ($this->_start_date > $this->_end_date) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '予約終了日は、予約開始日以上でなければいけません。';
    }
}
