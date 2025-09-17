
<nav x-data="{ open: false }" class="fixed top-0 left-0 h-screen w-64 bg-white border-r border-gray-100 flex flex-col z-50">
    <!-- Logo -->
    <div class="shrink-0 flex items-center h-24 w-full px-6 border-b border-gray-200">
        <a href="{{ route('dashboard') }}" class="w-full flex justify-center">
            <x-application-logo class="block h-12 justify-center fill-current text-gray-800" />
        </a>
    </div>

    <!-- User Dropdown -->
    <div class="px-4  relative mt-4">
        <x-dropdown align="top" width="48">
            <x-slot name="trigger">
                <button class="w-full flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                    <div>{{ Auth::user()->name }}</div>
                    <div class="ms-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    </div>

    <!-- Navigation Links -->
    <div class="flex-1 flex flex-col py-6 px-4 space-y-2">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>
        <x-nav-link :href="route('projects.index')" :active="request()->routeIs('projects.*')">
            {{ __('Projetos') }}
        </x-nav-link>
    </div>
</nav>
