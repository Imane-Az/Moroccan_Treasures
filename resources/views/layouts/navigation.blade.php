@extends('layouts.app')

@section('content')
    <div>
        <!-- Profile Navigation -->
        <nav class="space-y-1" aria-label="Profile">
            <!-- Profile Information -->
            <div class="px-4 py-5 bg-white border-b border-gray-200 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    {{ __('Profile Information') }}
                </h3>
                <!-- Add your custom profile information here -->
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    {{ __('Update your profile information.') }}
                </p>
            </div>

            <!-- Profile Navigation Links -->
            <div class="space-y-1" role="group" aria-labelledby="profile-navigation">
                <!-- Add your custom profile navigation links here -->
                <x-profile-navigation-link :href="route('profile.show')" :active="request()->routeIs('profile.show')">
                    {{ __('My Profile') }}
                </x-profile-navigation-link>

                <x-profile-navigation-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                    {{ __('Edit Profile') }}
                </x-profile-navigation-link>

                <!-- Add more profile navigation links as needed -->
            </div>
        </nav>
    </div>
@endsection
