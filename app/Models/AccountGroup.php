<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountGroup extends Model
{
    protected $fillable = [
        'company_id',
        'group_name',
        'account_type_id',
        'parent_group_id'
    ];

    public function type()
    {
        return $this->belongsTo(AccountType::class,'account_type_id');
    }

    public function parent()
    {
        return $this->belongsTo(AccountGroup::class,'parent_group_id');
    }

    public function children()
    {
        return $this->hasMany(AccountGroup::class,'parent_group_id');
    }
}
