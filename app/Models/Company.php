<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [

        'company_name',
        'gst_number',
        'pan_number',
        'state',
        'address',
        'financial_year_start',
        'financial_year_end'
    ];
}
