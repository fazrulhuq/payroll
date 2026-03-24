<x-app-layout>

<x-slot name="header">
<h2 class="text-xl font-bold">Create Ledger</h2>
</x-slot>

<div class="p-6">

<form method="POST" action="{{ route('accounts.store') }}">

@csrf

<div class="grid grid-cols-2 gap-4">

<div>
<label>Account Name</label>
<input type="text" name="account_name"
class="border p-2 w-full">
</div>

<div>
<label>Group</label>
<select name="group_id"
class="border p-2 w-full">

@foreach($groups as $id=>$name)
<option value="{{ $id }}">{{ $name }}</option>
@endforeach

</select>
</div>

<div>
<label>Opening Balance</label>
<input type="number" name="opening_balance"
class="border p-2 w-full">
</div>

<div>
<label>Type</label>
<select name="balance_type"
class="border p-2 w-full">
<option value="debit">Debit</option>
<option value="credit">Credit</option>
</select>
</div>

</div>

<button class="mt-4 bg-blue-600 text-white px-6 py-2 rounded">
Save Ledger
</button>

</form>

</div>

</x-app-layout>