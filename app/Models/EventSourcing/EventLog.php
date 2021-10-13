<?php

namespace App\Models\EventSourcing;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventLog extends Model
{
    use HasFactory, HasUuid;

    protected $fillable = [
        'log',
        'event'
    ];

    protected $hidden = [
        'id'
    ];
}
