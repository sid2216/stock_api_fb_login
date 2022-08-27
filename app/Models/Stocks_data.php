<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stocks_data extends Model
{
    use HasFactory;

    protected $table = 'stocks_data';
    protected $fillable = [
        'symbol',
        'open',
        'high',
        'low',
        'price',
        'volume',
        'latest_trading_day',
        'previous_close',
        'change',
        'change_percent',

    ];
}
