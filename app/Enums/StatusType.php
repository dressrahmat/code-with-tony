<?php
namespace App\Enums;

enum StatusType: string
{
    case STARTED = 'started';
    case IN_PROGRESS = 'in_progress';
    case DONE = 'done';

    public function color(): string
    {
        return match ($this) {
            self::STARTED => 'border-blue-900',
            self::IN_PROGRESS => 'border-red-900',
            self::DONE => 'border-green-900',
        };
    }
}