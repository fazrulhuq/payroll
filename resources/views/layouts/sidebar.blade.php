@php
    $currentRoute = request()->route() ? request()->route()->getName() : '';
@endphp

<div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0 md:top-0 md:left-0">
    <div class="flex flex-col flex-grow bg-blue-800 pt-5 pb-4 overflow-y-auto shadow-lg">
        <div class="flex items-center flex-shrink-0 px-4">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <x-application-logo class="h-8 w-8 text-white" />
                </div>
                <div class="ml-3">
                    <p class="text-white text-xl font-semibold">Payroll System</p>
                </div>
            </div>
        </div>
        
        <div class="mt-8 flex-grow flex flex-col">
            <nav class="flex-1 px-2 space-y-1">
                <!-- Dashboard -->
                <a href="{{ route('dashboard') }}"
                   class="group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ $currentRoute === 'dashboard' ? 'bg-blue-900 text-white' : 'text-blue-100 hover:bg-blue-700 hover:text-white' }}">
                    <svg class="mr-3 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z" />
                    </svg>
                    Dashboard
                </a>

                <!-- Employees -->
                <a href="{{ route('employees.index') }}"
                   class="group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ str_contains($currentRoute, 'employees') ? 'bg-blue-900 text-white' : 'text-blue-100 hover:bg-blue-700 hover:text-white' }}">
                    <svg class="mr-3 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                    </svg>
                    Employees
                </a>

                <!-- Attendance -->
                <a href="{{ route('attendance.index') }}"
                   class="group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ str_contains($currentRoute, 'attendance') ? 'bg-blue-900 text-white' : 'text-blue-100 hover:bg-blue-700 hover:text-white' }}">
                    <svg class="mr-3 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                    </svg>
                    Attendance
                </a>

                <!-- Payroll -->
                <a href="{{ route('payroll.index') }}"
                   class="group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ str_contains($currentRoute, 'payroll') ? 'bg-blue-900 text-white' : 'text-blue-100 hover:bg-blue-700 hover:text-white' }}">
                    <svg class="mr-3 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />
                    </svg>
                    Payroll
                </a>
                <!-- Masters Section -->
<div class="mt-6">

<p class="px-2 text-xs font-semibold text-blue-200 uppercase tracking-wider">
Masters
</p>

<!-- Companies -->
<a href="{{ route('companies.index') }}"
class="group flex items-center px-2 py-2 text-sm font-medium rounded-md 
{{ str_contains($currentRoute, 'companies') ? 'bg-blue-900 text-white' : 'text-blue-100 hover:bg-blue-700 hover:text-white' }}">

<svg class="mr-3 h-6 w-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M3 7h18M3 12h18M3 17h18" />
</svg>

Companies
</a>

<!-- Account Types -->
<a href="{{ route('account-types.index') }}"
class="group flex items-center px-2 py-2 text-sm font-medium rounded-md 
{{ str_contains($currentRoute, 'account-types') ? 'bg-blue-900 text-white' : 'text-blue-100 hover:bg-blue-700 hover:text-white' }}">

<svg class="mr-3 h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5l5 5v11a2 2 0 01-2 2z"/>
</svg>

Account Types
</a>

<!-- Account Groups -->
<a href="{{ route('account-groups.index') }}"
class="group flex items-center px-2 py-2 text-sm font-medium rounded-md 
{{ str_contains($currentRoute, 'account-groups') ? 'bg-blue-900 text-white' : 'text-blue-100 hover:bg-blue-700 hover:text-white' }}">

<svg class="mr-3 h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M3 7h18M3 12h18M3 17h18"/>
</svg>

Account Groups
</a>

<!-- Ledger Accounts -->
<a href="{{ route('accounts.index') }}"
class="group flex items-center px-2 py-2 text-sm font-medium rounded-md 
{{ str_contains($currentRoute, 'accounts') ? 'bg-blue-900 text-white' : 'text-blue-100 hover:bg-blue-700 hover:text-white' }}">

<svg class="mr-3 h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2"/>
</svg>

Ledger Accounts
</a>

</div>
            </nav>
        </div>
    </div>
</div>