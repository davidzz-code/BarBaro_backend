<?php

namespace App\JsonApi\V1\Appointments;

use Illuminate\Validation\Rule;
use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;
use LaravelJsonApi\Validation\Rule as JsonApiRule;

class AppointmentRequest extends ResourceRequest
{

    /**
     * Get the validation rules for the resource.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'status' => ['required', Rule::in(['pending', 'confirmed', 'cancelled'])],
            'date' => ['required', 'date_format:d/m/Y'],
            'startTime' => ['required', 'date_format:"H:i"'],
            'worker' => JsonApiRule::toOne('workers'),
            'services' => JsonApiRule::toMany(),
        ];
    }

}
