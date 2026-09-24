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


            {{-- Kelas --}}
            <li>
                <x-admin.menu-item
                    href="{{ route('admin.classroom.index') }}"
                    label="Kelas"
                    :active="request()->routeIs('admin.classroom.*')"
                >
                    <svg
                        class="w-5 h-5"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path d="M2 3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3Z"/>
                        <path d="M7 16h6v2H7z"/>
                    </svg>
                </x-admin.menu-item>
            </li>


            {{-- Jurusan --}}
            <li>
                <x-admin.menu-item
                    href="{{ route('admin.major.index') }}"
                    label="Jurusan"
                    :active="request()->routeIs('admin.major.*')"
                >
                    <svg
                        class="w-5 h-5"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path d="M10 2 2 6l8 4 8-4-8-4Z"/>
                        <path d="M4 9v5l6 3 6-3V9l-6 3-6-3Z"/>
                    </svg>
                </x-admin.menu-item>
            </li>


            {{-- Tahun Pelajaran --}}
            <li>
                <x-admin.menu-item
                    href="{{ route('admin.academic-year.index') }}"
                    label="Tahun Pelajaran"
                    :active="request()->routeIs('admin.academic-year.*')"
                >
                    <svg
                        class="w-5 h-5"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path d="M5 2a1 1 0 0 0-1 1v1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1V3a1 1 0 1 0-2 0v1H6V3a1 1 0 0 0-1-1Z"/>
                    </svg>
                </x-admin.menu-item>
            </li>

        </ul>


        {{-- AKADEMIK --}}
        <div class="px-3 mt-6 mb-3 text-xs font-semibold text-gray-400 uppercase">
            Akademik
        </div>

        <ul class="space-y-1">

            {{-- Mata Pelajaran --}}
            <li>
                <x-admin.menu-item
                    href="{{ route('admin.subject.index') }}"
                    label="Mata Pelajaran"
                    :active="request()->routeIs('admin.subject.*')"
                >
                    <svg
                        class="w-5 h-5"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path d="M4 2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H4Z"/>
                        <path d="M6 6h8v2H6V6Zm0 4h8v2H6v-2Z"/>
                    </svg>
                </x-admin.menu-item>
            </li>


            {{-- Jadwal --}}
            <li>
                <x-admin.menu-item
                    href="{{ route('admin.schedule.index') }}"
                    label="Jadwal"
                    :active="request()->routeIs('admin.schedule.*')"
                >
                    <svg
                        class="w-5 h-5"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path d="M5 2a1 1 0 0 0-1 1v1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1V3a1 1 0 0 0-2 0v1H6V3a1 1 0 0 0-1-1Z"/>
                    </svg>
                </x-admin.menu-item>
            </li>


            {{-- Pengajar --}}
            <li>
                <x-admin.menu-item
                    href="{{ route('admin.teacher.index') }}"
                    label="Pengajar"
                    :active="request()->routeIs('admin.teacher.*')"
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


        {{-- PRESENSI --}}
        <div class="px-3 mt-6 mb-3 text-xs font-semibold text-gray-400 uppercase">
            Presensi
        </div>

        <ul class="space-y-1">

            <li>
                <x-admin.menu-item
                    href="{{ route('admin.attendance.index') }}"
                    label="Presensi"
                    :active="request()->routeIs('admin.attendance.index')"
                >
                    <svg
                        class="w-5 h-5"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.707-9.293a1 1 0 0 0-1.414-1.414L9 10.586 7.707 9.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4Z"
                            clip-rule="evenodd"
                        />
                    </svg>
                </x-admin.menu-item>
            </li>


            <li>
                <x-admin.menu-item
                    href="{{ route('admin.attendance.recap') }}"
                    label="Rekap Presensi"
                    :active="request()->routeIs('admin.attendance.recap')"
                >
                    <svg
                        class="w-5 h-5"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path d="M3 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V3Z"/>
                    </svg>
                </x-admin.menu-item>
            </li>


            <li>
                <x-admin.menu-item
                    href="{{ route('admin.reports.index') }}"
                    label="Laporan"
                    :active="request()->routeIs('admin.reports.*')"
                >
                    <svg
                        class="w-5 h-5"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path d="M4 2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H4Z"/>
                    </svg>
                </x-admin.menu-item>
            </li>

        </ul>


        {{-- PENGGUNA --}}
        <div class="px-3 mt-6 mb-3 text-xs font-semibold text-gray-400 uppercase">
            Pengguna
        </div>

        <ul class="space-y-1">

            <li>
                <x-admin.menu-item
                    href="{{ route('admin.users.index') }}"
                    label="Users"
                    :active="request()->routeIs('admin.users.*')"
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


            <li>
                <x-admin.menu-item
                    href="{{ route('admin.roles.index') }}"
                    label="Roles"
                    :active="request()->routeIs('admin.roles.*')"
                >
                    <svg
                        class="w-5 h-5"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path d="M10 2 3 5v5c0 4.5 3 7 7 8 4-1 7-3.5 7-8V5l-7-3Z"/>
                    </svg>
                </x-admin.menu-item>
            </li>

        </ul>


        {{-- SYSTEM --}}
        <div class="px-3 mt-6 mb-3 text-xs font-semibold text-gray-400 uppercase">
            System
        </div>

        <ul class="space-y-1">

            <li>
                <x-admin.menu-item
                    href="{{ route('admin.profile') }}"
                    label="Profile"
                    :active="request()->routeIs('admin.profile')"
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


            <li>
                <x-admin.menu-item
                    href="{{ route('admin.settings') }}"
                    label="Settings"
                    :active="request()->routeIs('admin.settings')"
                >
                    <svg
                        class="w-5 h-5"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path d="M10 2a8 8 0 1 0 8 8 8 8 0 0 0-8-8Z"/>
                    </svg>
                </x-admin.menu-item>
            </li>

        </ul>

    </div>
</aside>
