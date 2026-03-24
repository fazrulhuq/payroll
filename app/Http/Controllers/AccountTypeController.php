<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AccountTypeService;

class AccountTypeController extends Controller
{
    protected $service;

    public function __construct(AccountTypeService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $types = $this->service->list();
        return view('account_types.index',compact('types'));
    }

    public function create()
    {
        return view('account_types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'nature'=>'required'
        ]);

        $this->service->create($request->all());

        return redirect()->route('account-types.index')
        ->with('success','Account Type created');
    }
}