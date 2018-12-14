<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
  'company_name','customer_name','contact','email','domain','cpanel_link','cpanel_id',
  'cpanel_password','website_link','website_id','website_password','services_type',
  'email_hosting_month','hosting_start_date','hosting_end_date','seo_month','seo_start_date','seo_end_date','files'
  ];
}
