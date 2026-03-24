<x-app-layout>

<x-slot name="header">
<h2 class="text-xl font-bold">Create Account Type</h2>
</x-slot>

<div class="p-6">

<form method="POST" action="{{ route('account-types.store') }}">
@csrf

<div class="grid grid-cols-2 gap-4">

<div>
<label>Name</label>
<input type="text" name="name"
class="border p-2 w-full">
</div>

<div>
<label>Nature</label>
<select name="nature" class="border p-2 w-full">
<option value="debit">Debit</option>
<option value="credit">Credit</option>
</select>
</div>

</div>

<button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">
Save
</button>

</form>

</div>

</x-app-layout>