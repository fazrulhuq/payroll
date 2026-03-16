<x-app-layout>

<x-slot name="header">
<h2 class="text-2xl font-bold text-gray-900">Add Company</h2>
</x-slot>

<div class="p-6">

<div class="bg-white shadow rounded-lg p-6">

{{-- Top Validation Box --}}
@if ($errors->any())
<div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
<strong class="font-bold">Whoops! Something went wrong.</strong>
<ul class="mt-2 list-disc list-inside text-sm">
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form method="POST" action="{{ route('companies.store') }}">

@csrf

<div class="grid grid-cols-2 gap-4">

{{-- Company Name --}}
<div>
<label class="block text-sm font-medium">Company Name *</label>

<input type="text"
name="company_name"
value="{{ old('company_name') }}"
class="mt-1 w-full border rounded-lg p-2 @error('company_name') border-red-500 @enderror">

@error('company_name')
<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
</div>


{{-- GST Number --}}
<div>
<label class="block text-sm font-medium">GST Number</label>

<input type="text"
name="gst_number"
value="{{ old('gst_number') }}"
class="mt-1 w-full border rounded-lg p-2 @error('gst_number') border-red-500 @enderror">

@error('gst_number')
<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
</div>


{{-- PAN Number --}}
<div>
<label class="block text-sm font-medium">PAN Number</label>

<input type="text"
name="pan_number"
value="{{ old('pan_number') }}"
class="mt-1 w-full border rounded-lg p-2 @error('pan_number') border-red-500 @enderror">

@error('pan_number')
<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
</div>


{{-- State --}}
<div>
<label class="block text-sm font-medium">State *</label>

<input type="text"
name="state"
value="{{ old('state') }}"
class="mt-1 w-full border rounded-lg p-2 @error('state') border-red-500 @enderror">

@error('state')
<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
</div>


{{-- Financial Year Start --}}
<div>
<label class="block text-sm font-medium">Financial Year Start *</label>

<input type="date"
name="financial_year_start"
value="{{ old('financial_year_start') }}"
class="mt-1 w-full border rounded-lg p-2 @error('financial_year_start') border-red-500 @enderror">

@error('financial_year_start')
<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
</div>


{{-- Financial Year End --}}
<div>
<label class="block text-sm font-medium">Financial Year End *</label>

<input type="date"
name="financial_year_end"
value="{{ old('financial_year_end') }}"
class="mt-1 w-full border rounded-lg p-2 @error('financial_year_end') border-red-500 @enderror">

@error('financial_year_end')
<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
</div>

</div>


<div class="mt-6">
<button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
Save Company
</button>
</div>

</form>

</div>

</div>

</x-app-layout>