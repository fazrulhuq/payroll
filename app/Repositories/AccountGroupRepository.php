<?php

namespace App\Repositories;

use App\Models\AccountGroup;

class AccountGroupRepository
{
    public function all()
    {
        return AccountGroup::with('parent')->latest()->get();
    }

    public function create($data)
    {
        return AccountGroup::create($data);
    }

    public function find($id)
    {
        return AccountGroup::findOrFail($id);
    }

    public function update($id,$data)
    {
        $group = $this->find($id);
        $group->update($data);

        return $group;
    }

    public function delete($id)
    {
        return AccountGroup::destroy($id);
    }
}
