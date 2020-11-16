<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TbiTicket extends Model
{
    //
    protected $fillable=[
       
'UserSp_ID',
'UserRp_ID',
'Date',
'TypePr',
'Details',
'SolveProb',
'ITM_ScID',
'HeDs_ScID',
'SectionID',
'UserBR',
'CloDate',
'Details_So',
'IsActive',
'CaseType',
'Valuation',
'PhoneNo',
'IPAddress'
  ];
}
