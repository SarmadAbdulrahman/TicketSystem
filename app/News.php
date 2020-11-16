<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $fillable=[
        'department_id'
        , 'user_id'
       ,'descrption'
       ,'doucment_name'
       ,'doucment_type'
  ];
}
