{{-- <a {{ $attributes->merge(['class' => 'block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900']) }}>
    {{ $slot }}
</a> --}}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProfileNavigationLink extends Component
{
    public $tagName = 'profile-navigation-link';

    // Component logic and properties

    public function render()
    {
        return view('components.profile-navigation-link');
    }
}
