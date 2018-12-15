<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    //

    protected $fillable = [

      'select_company_name',
      'quotation',
      'invoice',
      'services',
      'total_amount',
      'paid',
      'balance',
      'remark',
  ];
}
