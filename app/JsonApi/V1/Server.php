<?php

namespace App\JsonApi\V1;

use App\JsonApi\V1\Appointments\AppointmentSchema;
use App\JsonApi\V1\Schedules\ScheduleSchema;
use App\JsonApi\V1\Services\ServiceSchema;
use App\JsonApi\V1\Users\UserSchema;
use App\JsonApi\V1\Workers\WorkerSchema;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use LaravelJsonApi\Core\Server\Server as BaseServer;

class Server extends BaseServer
{

    /**
     * The base URI namespace for this server.
     *
     * @var string
     */
    protected string $baseUri = '/api/v1';

    /**
     * Bootstrap the server when it is handling an HTTP request.
     *
     * @return void
     */
    public function serving(): void
    {
        Auth::shouldUse('sanctum');

        // Schedule::creating(static function (Schedule $schedule): void {
        //         $schedule->manager()->associate(Auth::user());
        //     });
    }

    /**
     * Get the server's list of schemas.
     *
     * @return array
     */
    protected function allSchemas(): array
    {
        return [
            UserSchema::class,
            ScheduleSchema::class,
            AppointmentSchema::class,
            ServiceSchema::class,
            WorkerSchema::class,
        ];
    }
}
