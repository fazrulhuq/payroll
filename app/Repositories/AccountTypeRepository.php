<?php

namespace App\Repositories;

use App\Models\AccountType;

class AccountTypeRepository
{
    public function all()
    {
        return AccountType::latest()->get();
    }

    public function create($data)
    {
        return AccountType::create($data);
    }

    public function find($id)
    {
        return AccountType::findOrFail($id);
    }

    public function update($id,$data)
    {
        $type = $this->find($id);
        $type->update($data);

        return $type;
    }

    public function delete($id)
    {
        return AccountType::destroy($id);
    }
}
