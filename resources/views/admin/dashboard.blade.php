<x-admin.layout>

    <div class="mb-6">

        <h1 class="text-2xl font-bold text-gray-900">
            Dashboard
        </h1>

        <p class="text-gray-500">
            Selamat datang di halaman administrator.
        </p>

    </div>


    {{-- Statistics --}}

    <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-2 xl:grid-cols-4">


        {{-- Students --}}

        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-sm font-medium text-gray-500">
                        Total Students
                    </p>

                    <h2 class="mt-2 text-3xl font-bold text-gray-900">
                        350
                    </h2>

                </div>

                <div class="p-3 bg-blue-100 rounded-lg">

                    <svg
                        class="w-6 h-6 text-blue-600"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path d="M10 10a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z" />
                        <path d="M2 18a8 8 0 0 1 16 0H2Z" />
                    </svg>

                </div>

            </div>

        </div>


        {{-- Classroom --}}

        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-sm font-medium text-gray-500">
                        Classrooms
                    </p>

                    <h2 class="mt-2 text-3xl font-bold text-gray-900">
                        12
                    </h2>

                </div>

                <div class="p-3 bg-green-100 rounded-lg">

                    <svg
                        class="w-6 h-6 text-green-600"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path d="M2 3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3Z" />
                    </svg>

                </div>

            </div>

        </div>


        {{-- Users --}}

        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-sm font-medium text-gray-500">
                        Users
                    </p>

                    <h2 class="mt-2 text-3xl font-bold text-gray-900">
                        18
                    </h2>

                </div>

                <div class="p-3 bg-purple-100 rounded-lg">

                    <svg
                        class="w-6 h-6 text-purple-600"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path d="M10 10a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z" />
                    </svg>

                </div>

            </div>

        </div>


        {{-- Attendance --}}

        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-sm font-medium text-gray-500">
                        Attendance
                    </p>

                    <h2 class="mt-2 text-3xl font-bold text-gray-900">
                        94%
                    </h2>

                </div>

                <div class="p-3 bg-yellow-100 rounded-lg">

                    <svg
                        class="w-6 h-6 text-yellow-600"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.707-9.293a1 1 0 0 0-1.414-1.414L9 10.586 7.707 9.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4Z"
                            clip-rule="evenodd"
                        />
                    </svg>

                </div>

            </div>

        </div>

    </div>


    {{-- Recent Students --}}

    <div class="bg-white border border-gray-200 rounded-lg shadow-sm">

        <div class="flex items-center justify-between p-5">

            <h2 class="text-lg font-semibold text-gray-900">
                Recent Students
            </h2>

            <a
                href="/admin/student"
                class="text-sm font-medium text-blue-600 hover:underline"
            >
                View All
            </a>

        </div>


        <div class="relative overflow-x-auto">

            <table class="w-full text-sm text-left text-gray-500">

                <thead class="text-xs text-gray-700 uppercase bg-gray-50">

                    <tr>

                        <th class="px-6 py-3">
                            No
                        </th>

                        <th class="px-6 py-3">
                            Name
                        </th>

                        <th class="px-6 py-3">
                            NIS
                        </th>

                        <th class="px-6 py-3">
                            Class
                        </th>

                        <th class="px-6 py-3">
                            Status
                        </th>

                    </tr>

                </thead>


                <tbody>

                    <tr class="bg-white border-b">

                        <td class="px-6 py-4">
                            1
                        </td>

                        <td class="px-6 py-4 font-medium text-gray-900">
                            Ahmad Fauzan
                        </td>

                        <td class="px-6 py-4">
                            20260001
                        </td>

                        <td class="px-6 py-4">
                            XI PPLG 1
                        </td>

                        <td class="px-6 py-4">

                            <span class="px-2.5 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">
                                Active
                            </span>

                        </td>

                    </tr>


                    <tr class="bg-white border-b">

                        <td class="px-6 py-4">
                            2
                        </td>

                        <td class="px-6 py-4 font-medium text-gray-900">
                            Muhammad Rizky
                        </td>

                        <td class="px-6 py-4">
                            20260002
                        </td>

                        <td class="px-6 py-4">
                            XI PPLG 2
                        </td>

                        <td class="px-6 py-4">

                            <span class="px-2.5 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">
                                Active
                            </span>

                        </td>

                    </tr>


                    <tr class="bg-white">

                        <td class="px-6 py-4">
                            3
                        </td>

                        <td class="px-6 py-4 font-medium text-gray-900">
                            Bagus Setiawan
                        </td>

                        <td class="px-6 py-4">
                            20260003
                        </td>

                        <td class="px-6 py-4">
                            XI PPLG 1
                        </td>

                        <td class="px-6 py-4">

                            <span class="px-2.5 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">
                                Active
                            </span>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</x-admin.layout>
