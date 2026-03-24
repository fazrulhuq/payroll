<x-app-layout>

<x-slot name="header">
<div class="flex justify-between">
<h2 class="text-xl font-bold">Account Types</h2>

<a href="{{ route('account-types.create') }}"
class="bg-blue-600 text-white px-4 py-2 rounded">
Add Type
</a>
</div>
</x-slot>

<div class="p-6">

@if(session('success'))
<div class="mb-3 bg-green-100 p-2 rounded">
{{ session('success') }}
</div>
@endif

<table class="w-full border">

<tr class="bg-gray-100">
<th class="p-2">Name</th>
<th class="p-2">Nature</th>
<th class="p-2">Action</th>
</tr>

@foreach($types as $type)

<tr class="border-t">
<td class="p-2">{{ $type->name }}</td>
<td class="p-2">{{ ucfirst($type->nature) }}</td>

<td class="p-2">
<a href="#" class="text-blue-600">Edit</a>
</td>

</tr>

@endforeach

</table>

</div>

</x-app-layout>