<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AccountGroupService;
use App\Models\AccountType;

class AccountGroupController extends Controller
{
    protected $service;

    public function __construct(AccountGroupService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $groups = $this->service->list();

        return view('account_groups.index',compact('groups'));
    }

    public function create()
    {
        $types = AccountType::pluck('name','id');
        $groups = \App\Models\AccountGroup::pluck('group_name','id');

        return view('account_groups.create',compact('types','groups'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'group_name'=>'required',
            'account_type_id'=>'required'
        ]);

        $this->service->create($request->all());

        return redirect()->route('account-groups.index')
        ->with('success','Group created');
    }
}
