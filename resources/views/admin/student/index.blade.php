<x-admin.layout>
{{-- Page Header --}}
<div class="mb-6">

    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

        <div>
            <h1 class="text-2xl font-bold text-gray-900">
                Students
            </h1>

            <p class="mt-1 text-sm text-gray-500">
                Kelola data siswa.
            </p>
        </div>

        <div>
            <a
                href=""
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300"
            >
                <svg
                    class="w-5 h-5 mr-2"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 4v16m8-8H4"
                    />
                </svg>

                Tambah Siswa
            </a>
        </div>

    </div>

</div>


{{-- Main Card --}}
<div class="bg-white border border-gray-200 rounded-lg shadow-sm">

    {{-- Card Header --}}
    <div class="p-4 border-b border-gray-200 sm:p-6">

        <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">

            {{-- Search --}}
            <form
                action=""
                method="GET"
                class="w-full lg:max-w-md"
            >

                <label
                    for="search"
                    class="sr-only"
                >
                    Search
                </label>

                <div class="relative">

                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">

                        <svg
                            class="w-5 h-5 text-gray-500"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m21 21-4.35-4.35m2.35-5.65a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z"
                            />
                        </svg>

                    </div>

                    <input
                        type="search"
                        name="search"
                        id="search"
                        value=""
                        placeholder="Cari nama atau NIS..."
                        class="block w-full p-2.5 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                    >

                </div>

            </form>


            {{-- Filter --}}
            <div class="flex items-center gap-2">

                <select
                    name="classroom"
                    class="px-3 py-2.5 text-sm text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                >

                    <option value="">
                        Semua Kelas
                    </option>

                    <option value="X PPLG 1">
                        X PPLG 1
                    </option>

                    <option value="X PPLG 2">
                        X PPLG 2
                    </option>

                    <option value="XI PPLG 1">
                        XI PPLG 1
                    </option>

                    <option value="XI PPLG 2">
                        XI PPLG 2
                    </option>

                </select>

            </div>

        </div>

    </div>


    {{-- Table --}}
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
