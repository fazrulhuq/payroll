<?php

namespace App\Repositories;

use App\Models\Account;

class AccountRepository
{

    public function all()
    {
        return Account::with('group')->latest()->paginate(10);
    }

    public function create($data)
    {
        return Account::create($data);
    }

    public function find($id)
    {
        return Account::findOrFail($id);
    }

    public function update($id,$data)
    {
        $account = $this->find($id);
        $account->update($data);

        return $account;
    }

    public function delete($id)
    {
        return Account::destroy($id);
    }

}
