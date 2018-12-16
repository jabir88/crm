<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Installmentmonth extends Model
{
    protected $fillable = [
  'installment_id', 'seleted_month_name', 'amount', 'status', 'balance'];
}
