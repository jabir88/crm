<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Installmentstatus extends Model
{
    protected $fillable = [

  'total_months',
'per_month_amount',
'total_months_remaining',
];
}
