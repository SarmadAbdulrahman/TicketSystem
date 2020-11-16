<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketType extends Model
{
    //
    protected $fillable=[
        'en_name', 'ar_name'
    ];
}
