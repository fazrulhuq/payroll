<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'company_id',
        'account_name',
        'group_id',
        'opening_balance',
        'balance_type'
    ];

    public function group()
    {
        return $this->belongsTo(AccountGroup::class,'group_id');
    }
}
