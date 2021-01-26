<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketDetail extends Model
{
    // this is table TicketDetail

    protected $fillable=[
         'agent_comment'
        , 'customer_comment'
        , 'agent_image_path'
        , 'customer_image_path'
        , 'ticket_id'
        ,'agent_id'
        ,'customer_id'
        ,'img_path'
    ];
}
