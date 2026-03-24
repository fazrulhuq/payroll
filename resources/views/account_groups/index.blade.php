<x-app-layout>

<x-slot name="header">
<div class="flex justify-between">
<h2 class="text-xl font-bold">Account Groups</h2>

<a href="{{ route('account-groups.create') }}"
class="bg-blue-600 text-white px-4 py-2 rounded">
Add Group
</a>
</div>
</x-slot>

<div class="p-6">

<table class="w-full border">

<tr class="bg-gray-100">
<th class="p-2">Group Name</th>
<th class="p-2">Type</th>
<th class="p-2">Parent</th>
</tr>

@foreach($groups as $group)

<tr class="border-t">
<td class="p-2">{{ $group->group_name }}</td>
<td class="p-2">{{ $group->type->name ?? '' }}</td>
<td class="p-2">{{ $group->parent->group_name ?? '-' }}</td>
</tr>

@endforeach

</table>

</div>

</x-app-layout>