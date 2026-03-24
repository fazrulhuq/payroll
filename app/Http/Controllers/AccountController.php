<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AccountService;
use App\Models\AccountGroup;

class AccountController extends Controller
{

    protected $service;

    public function __construct(AccountService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $accounts = $this->service->list();

        return view('accounts.index',compact('accounts'));
    }

    public function create()
    {
        $groups = AccountGroup::pluck('group_name','id');

        return view('accounts.create',compact('groups'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'account_name'=>'required',
            'group_id'=>'required'
        ]);

        $this->service->create($request->all());

        return redirect()->route('accounts.index')
        ->with('success','Ledger created');
    }

}
