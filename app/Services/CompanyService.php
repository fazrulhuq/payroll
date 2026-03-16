<?php

namespace App\Services;

use App\Repositories\CompanyRepository;

class CompanyService
{

    protected $repo;

    public function __construct(CompanyRepository $repo)
    {
        $this->repo = $repo;
    }

    public function listCompanies()
    {
        return $this->repo->all();
    }

    public function createCompany($data)
    {
        return $this->repo->create($data);
    }

    public function updateCompany($id,$data)
    {
        return $this->repo->update($id,$data);
    }

    public function deleteCompany($id)
    {
        return $this->repo->delete($id);
    }

    public function findCompany($id)
    {
        return $this->repo->find($id);
    }

}