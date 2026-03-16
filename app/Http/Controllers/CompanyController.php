<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CompanyService;

class CompanyController extends Controller
{

    protected $service;

    public function __construct(CompanyService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $companies = $this->service->listCompanies();

        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([

            'company_name' => 'required|max:255',
            'gst_number' => 'nullable|max:15',
            'pan_number' => 'nullable|max:10',
            'state' => 'required',
            'financial_year_start' => 'required|date',
            'financial_year_end' => 'required|date'

        ]);

        $this->service->createCompany($validated);

        return redirect()->route('companies.index')
            ->with('success','Company created successfully');

    }

    public function show($id)
    {
        $company = $this->service->findCompany($id);

        return view('companies.show', compact('company'));
    }

    public function edit($id)
    {
        $company = $this->service->findCompany($id);

        return view('companies.edit', compact('company'));
    }

    public function update(Request $request,$id)
    {
        $validated = $request->validate([

            'company_name' => 'required|max:255',
            'gst_number' => 'nullable|max:15',
            'pan_number' => 'nullable|max:10',
            'state' => 'required'

        ]);

        $this->service->updateCompany($id,$validated);

        return redirect()->route('companies.index')
            ->with('success','Company updated successfully');

    }

    public function destroy($id)
    {

        $this->service->deleteCompany($id);

        return response()->json([
            'status'=>true,
            'message'=>'Company deleted successfully'
        ]);

    }
}