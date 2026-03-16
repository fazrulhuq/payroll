<x-app-layout>

<x-slot name="header">
<h2 class="text-2xl font-bold">Edit Company</h2>
</x-slot>

<div class="p-6">

<form method="POST" action="{{ route('companies.update',$company->id) }}">

@csrf
@method('PUT')

<div class="grid grid-cols-2 gap-4">

<div>
<label>Company Name</label>
<input type="text"
name="company_name"
value="{{ $company->company_name }}"
class="border rounded p-2 w-full">
</div>

<div>
<label>GST Number</label>
<input type="text"
name="gst_number"
value="{{ $company->gst_number }}"
class="border rounded p-2 w-full">
</div>

<div>
<label>PAN Number</label>
<input type="text"
name="pan_number"
value="{{ $company->pan_number }}"
class="border rounded p-2 w-full">
</div>

<div>
<label>State</label>
<input type="text"
name="state"
value="{{ $company->state }}"
class="border rounded p-2 w-full">
</div>

</div>

<button class="mt-4 bg-blue-600 text-white px-6 py-2 rounded">
Update Company
</button>

</form>

</div>

</x-app-layout>