<x-app-layout>

<x-slot name="header">
<div class="flex justify-between items-center">
<h2 class="text-2xl font-bold text-gray-900">Companies</h2>

<a href="{{ route('companies.create') }}"
class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
Add Company
</a>
</div>
</x-slot>

<div class="p-6">
@if(session('success'))
<div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
{{ session('success') }}
</div>
@endif
<div class="bg-white shadow rounded-lg">

<div class="px-6 py-4 border-b">
<h3 class="text-lg font-semibold">Company List</h3>
</div>

<div class="overflow-x-auto">

<table class="min-w-full text-sm">

<thead class="bg-gray-50 border-b">

<tr>
<th class="px-6 py-3 text-left font-semibold">Company Name</th>
<th class="px-6 py-3 text-left font-semibold">GST Number</th>
<th class="px-6 py-3 text-left font-semibold">PAN Number</th>
<th class="px-6 py-3 text-left font-semibold">State</th>
<th class="px-6 py-3 text-left font-semibold">Actions</th>
</tr>

</thead>

<tbody class="divide-y">

@foreach($companies as $company)

<tr class="hover:bg-gray-50">

<td class="px-6 py-4 font-medium text-gray-900">
{{ $company->company_name }}
</td>

<td class="px-6 py-4">
{{ $company->gst_number }}
</td>

<td class="px-6 py-4">
{{ $company->pan_number }}
</td>

<td class="px-6 py-4">
{{ $company->state }}
</td>

<td class="px-6 py-4 flex space-x-2">

<a href="{{ route('companies.edit',$company->id) }}"
class="bg-yellow-500 text-white px-3 py-1 rounded text-xs">
Edit
</a>
<button
onclick="deleteCompany({{ $company->id }})"
class="bg-red-600 text-white px-3 py-1 rounded text-xs">

Delete

</button>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

<div class="px-6 py-3">
{{ $companies->links() }}
</div>

</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

function deleteCompany(id)
{

Swal.fire({
title: 'Delete Company?',
text: 'Are you sure you want to delete this company? This action cannot be undone.',
icon: 'warning',
showCancelButton: true,
confirmButtonText: 'Yes Delete'
}).then((result) => {

if(result.isConfirmed)
{

fetch('/companies/' + id, {

method: 'DELETE',

headers: {
'X-CSRF-TOKEN': '{{ csrf_token() }}',
'Accept': 'application/json'
}

})
.then(response => response.json())
.then(data => {

Swal.fire(
'Deleted!',
'Company removed successfully',
'success'
).then(() => location.reload());

});

}

});

}

</script>
</x-app-layout>
