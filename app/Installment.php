<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    protected $fillable = [

  'installment_end_date',
'installment_start_date',
'installment_unit',
'invoice',
'per_unit_repayment',
'quotation',
'select_company_name',
'services',
'total_amount','installment_duration'
  ];
    public function Chart_list()
    {
        return $this->hasMany('App\Installmentmonth', 'installment_id', 'id');
    }
}
