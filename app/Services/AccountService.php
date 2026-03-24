<?php

namespace App\Services;

use App\Repositories\AccountRepository;

class AccountService
{

    protected $repo;

    public function __construct(AccountRepository $repo)
    {
        $this->repo = $repo;
    }

    public function list()
    {
        return $this->repo->all();
    }

    public function create($data)
    {
        return $this->repo->create($data);
    }

    public function find($id)
    {
        return $this->repo->find($id);
    }

    public function update($id,$data)
    {
        return $this->repo->update($id,$data);
    }

    public function delete($id)
    {
        return $this->repo->delete($id);
    }

}