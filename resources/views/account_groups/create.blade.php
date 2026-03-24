<x-app-layout>

<x-slot name="header">
<h2>Create Account Group</h2>
</x-slot>

<div class="p-6">

<form method="POST" action="{{ route('account-groups.store') }}">
@csrf

<div class="grid grid-cols-2 gap-4">

<div>
<label>Group Name</label>
<input type="text" name="group_name"
class="border p-2 w-full">
</div>

<div>
<label>Account Type</label>
<select name="account_type_id" class="border p-2 w-full">

@foreach($types as $id=>$name)
<option value="{{ $id }}">{{ $name }}</option>
@endforeach

</select>
</div>

<div>
<label>Parent Group</label>
<select name="parent_group_id" class="border p-2 w-full">

<option value="">None</option>

@foreach($groups as $id=>$name)
<option value="{{ $id }}">{{ $name }}</option>
@endforeach

</select>
</div>

</div>

<button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">
Save Group
</button>

</form>

</div>

</x-app-layout>