<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-bottom border-gray-light dark:border-gray-dark">
    <!-- Primary Navigation Menu -->
    <div class="container-fluid px-4 py-3">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <!-- Logo -->
                <div class="me-3">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('images/geoffreyx-logo.png') }}" alt="GeoffreyX Logo"/>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="d-none d-md-flex align-items-center ms-3">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="nav-link">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="d-none d-md-flex align-items-center ms-3">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="btn btn-secondary dropdown-toggle">
                            <span>{{ Auth::user()->name }}</span>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                            {{ __('Profile') }}
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item" type="submit">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="flex items-center d-md-none">
                <button @click="open = ! open" class="btn p-2">
                    <svg class="icon" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'d-none': open, 'd-inline-flex': ! open }" class="d-inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'d-none': ! open, 'd-inline-flex': open }" class="d-none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'d-block': open, 'd-none': ! open}" class="d-none">
        <div class="py-2">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="nav-link">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="border-top pt-3 pb-1">
            <div class="px-4">
                <div class="fw-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="fw-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="py-2">
                <x-responsive-nav-link :href="route('profile.edit')" class="nav-link">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="nav-link">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
