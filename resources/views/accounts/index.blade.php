<x-app-layout>

<x-slot name="header">
<div class="flex justify-between">
<h2 class="text-xl font-bold">Ledger Accounts</h2>

<a href="{{ route('accounts.create') }}"
class="bg-blue-600 text-white px-4 py-2 rounded">
Add Ledger
</a>
</div>
</x-slot>

<div class="p-6">

<table class="w-full border">

<tr class="bg-gray-100">
<th class="p-2">Account Name</th>
<th class="p-2">Group</th>
<th class="p-2">Opening Balance</th>
<th class="p-2">Type</th>
</tr>

@foreach($accounts as $acc)

<tr class="border-t">
<td class="p-2">{{ $acc->account_name }}</td>
<td class="p-2">{{ $acc->group->group_name }}</td>
<td class="p-2">{{ $acc->opening_balance }}</td>
<td class="p-2">{{ ucfirst($acc->balance_type) }}</td>
</tr>

@endforeach

</table>

</div>

</x-app-layout>