<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Schedule extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'manager_id' => 'integer',
        'date' => 'date',
    ];

    public function workers(): BelongsToMany
    {
        return $this->belongsToMany(Worker::class);
    }

    public function manager(): BelongsTo
    {
        return $this->belongsTo(Worker::class);
    }
}
