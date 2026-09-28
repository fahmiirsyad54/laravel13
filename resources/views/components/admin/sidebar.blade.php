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
            <x-admin.menu-item
                href="/admin/dashboard"
                label="Dashboard"
                icon='
                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                '
            />

            <x-admin.menu-item
                href="/admin/about"
                label="About"
                icon='
                    <path
                        fill-rule="evenodd"
                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z"
                        clip-rule="evenodd"
                    />'
            />
        </ul>

        {{-- MASTER DATA --}}
        <div class="px-3 mt-6 mb-3 text-xs font-semibold text-gray-400 uppercase">
            Master Data
        </div>

        <ul class="space-y-1">


        </ul>

    </div>
</aside>
