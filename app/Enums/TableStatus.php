<?php



namespace App\Enums;

enum TableStatus: string
{
    case Pending = 'pending';
    case Avalaiable = 'avalaiable';
    case Unavaliable = 'unavaliable';
}

