<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-900">Profile Settings</h2>
    </x-slot>

    <div class="space-y-6 max-w-4xl">
        <!-- Update Profile Information -->
        <div class="bg-white shadow-sm rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Profile Information</h3>
                <p class="mt-1 text-sm text-gray-600">Update your account's profile information and email address.</p>
            </div>
            <div class="p-6">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <!-- Update Password -->
        <div class="bg-white shadow-sm rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Update Password</h3>
                <p class="mt-1 text-sm text-gray-600">Ensure your account is using a long, random password to stay secure.</p>
            </div>
            <div class="p-6">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <!-- Delete Account -->
        <div class="bg-white shadow-sm rounded-lg border-red-200">
            <div class="px-6 py-4 border-b border-red-200 bg-red-50">
                <h3 class="text-lg font-medium text-red-900">Delete Account</h3>
                <p class="mt-1 text-sm text-red-600">Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</p>
            </div>
            <div class="p-6">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>
