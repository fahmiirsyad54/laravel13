<aside
    id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0"
    aria-label="Sidebar"
>
    <div class="h-full px-3 pb-4 overflow-y-auto">

        {{-- ADMIN --}}
        <div class="px-3 mb-3 text-xs font-semibold text-gray-400 uppercase">
            Admin
        </div>

        <ul class="space-y-1">

            {{-- Dashboard --}}
            <li>
                <x-admin.menu-item
                    href="{{ route('admin.dashboard') }}"
                    label="Dashboard"
                    :active="request()->routeIs('admin.dashboard')"
                >
                    <svg
                        class="w-5 h-5"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path d="M10 2L2 7v11h6v-6h4v6h6V7l-8-5z"/>
                    </svg>
                </x-admin.menu-item>
            </li>

            {{-- Dashboard --}}
            <li>
                <x-admin.menu-item
                    href="{{ route('admin.about') }}"
                    label="About"
                    :active="request()->routeIs('admin.about')"
                >
                    <svg
                        class="w-5 h-5"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path d="M10 2L2 7v11h6v-6h4v6h6V7l-8-5z"/>
                    </svg>
                </x-admin.menu-item>
            </li>
        </ul>

        {{-- MASTER DATA --}}
        <div class="px-3 mt-6 mb-3 text-xs font-semibold text-gray-400 uppercase">
            Master Data
        </div>

        <ul class="space-y-1">

            {{-- Siswa --}}
            <li>
                <x-admin.menu-item
                    href="{{ route('admin.student.index') }}"
                    label="Siswa"
                    :active="request()->routeIs('admin.student.*')"
                >
                    <svg
                        class="w-5 h-5"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path d="M10 10a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"/>
                        <path d="M2 18a8 8 0 0 1 16 0H2Z"/>
                    </svg>
                </x-admin.menu-item>
            </li>
        </ul>

    </div>
</aside>
