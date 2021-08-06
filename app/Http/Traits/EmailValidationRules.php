<?php

namespace App\Http\Traits;


use Illuminate\Validation\Rule;

trait EmailValidationRules
{

    protected $emailsNotAllowed = ['email@hack.net'];

    /**
     * Get the validation rules used to validate email.
     *
     * @return array
     */
    protected function emailRules()
    {
        return ['required', 'string', 'email', 'max:255', 'unique:users',Rule::notIn($this->emailsNotAllowed)];
    }
}
