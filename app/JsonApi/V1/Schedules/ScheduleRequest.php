<?php

namespace App\JsonApi\V1\Schedules;

use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;
use LaravelJsonApi\Validation\Rule as JsonApiRule;

class ScheduleRequest extends ResourceRequest
{

    /**
     * Get the validation rules for the resource.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'date' => ['required'],
            // 'manager_id' => JsonApiRule::toMany(),
        ];
    }

}
