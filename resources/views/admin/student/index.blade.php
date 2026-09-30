<x-admin.layout>
    @php
        $students = [
            [
                'name' => 'Ahmad Fauzan',
                'nis' => '20260001',
                'class' => 'XI PPLG 1',
                'status' => 'Active',
            ],
            [
                'name' => 'Muhammad Rizky',
                'nis' => '20260002',
                'class' => 'XI PPLG 2',
                'status' => 'Active',
            ],
            [
                'name' => 'Bagus Setiawan',
                'nis' => '20260003',
                'class' => 'XI PPLG 1',
                'status' => 'Active',
            ],
            [
                'name' => 'Dimas Pratama',
                'nis' => '20260004',
                'class' => 'X PPLG 1',
                'status' => 'Inactive',
            ],
            [
                'name' => 'Rizky Ramadhan',
                'nis' => '20260005',
                'class' => 'X PPLG 2',
                'status' => 'Active',
            ],
        ];

        $classrooms = [
            'X PPLG 1',
            'X PPLG 2',
            'XI PPLG 1',
            'XI PPLG 2',
        ];
    @endphp

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
                >  + Tambah Siswa </a>
            </div>

        </div>

    </div>
    <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
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
                            --Semua Kelas--
                        </option>

                        @foreach ($classrooms as $classroom)

                            <option value="{{ $classroom }}">
                                {{ $classroom }}
                            </option>

                        @endforeach

                    </select>

                </div>

            </div>

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
                    @foreach ($students as $index => $student)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4"> {{ $index + 1 }} </td>
                            <td class="px-6 py-4"> {{ $student['name'] }} </td>
                            <td class="px-6 py-4">{{ $student['nis'] }}</td>
                            <td class="px-6 py-4">{{ $student['class'] }}</td>
                            <td class="px-6 py-4">
                                @if ($student['status'] === 'Active')
                                    <span class="px-2.5 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">
                                        {{ $student['status'] }}
                                    </span>

                                @else

                                    <span class="px-2.5 py-1 text-xs font-medium text-red-800 bg-red-100 rounded-full">
                                        {{ $student['status'] }}
                                    </span>

                                @endif

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</x-admin.layout>
