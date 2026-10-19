<x-admin.layout>

```
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
                href="{{ route('admin.student.create') }}"
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


{{-- Alert Success --}}
@if (session('success'))

    <div
        class="flex items-center p-4 mb-6 text-green-800 rounded-lg bg-green-50"
        role="alert"
    >
        <svg
            class="flex-shrink-0 w-5 h-5 mr-3"
            fill="currentColor"
            viewBox="0 0 20 20"
        >
            <path
                fill-rule="evenodd"
                d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.707-9.293a1 1 0 0 0-1.414-1.414L9 10.586 7.707 9.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4Z"
                clip-rule="evenodd"
            />
        </svg>

        <span class="text-sm font-medium">
            {{ session('success') }}
        </span>
    </div>

@endif


{{-- Error Alert --}}
@if (session('error'))

    <div
        class="flex items-center p-4 mb-6 text-red-800 rounded-lg bg-red-50"
        role="alert"
    >
        <svg
            class="flex-shrink-0 w-5 h-5 mr-3"
            fill="currentColor"
            viewBox="0 0 20 20"
        >
            <path
                fill-rule="evenodd"
                d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.707-9.293a1 1 0 0 0-1.414-1.414L9 10.586 7.707 9.293a1 1 0 0 0-1.414-1.414l2 2a1 1 0 0 0 1.414 0l4-4Z"
                clip-rule="evenodd"
            />
        </svg>

        <span class="text-sm font-medium">
            {{ session('error') }}
        </span>
    </div>

@endif


{{-- Main Card --}}
<div class="bg-white border border-gray-200 rounded-lg shadow-sm">

    {{-- Card Header --}}
    <div class="p-4 border-b border-gray-200 sm:p-6">

        <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">

            {{-- Search --}}
            <form
                action="{{ route('admin.student.index') }}"
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
                        value="{{ request('search') }}"
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

                    <th
                        scope="col"
                        class="px-6 py-3"
                    >
                        No
                    </th>

                    <th
                        scope="col"
                        class="px-6 py-3"
                    >
                        NIS
                    </th>

                    <th
                        scope="col"
                        class="px-6 py-3"
                    >
                        Nama
                    </th>

                    <th
                        scope="col"
                        class="px-6 py-3"
                    >
                        Kelas
                    </th>

                    <th
                        scope="col"
                        class="px-6 py-3"
                    >
                        Jenis Kelamin
                    </th>

                    <th
                        scope="col"
                        class="px-6 py-3"
                    >
                        Status
                    </th>

                    <th
                        scope="col"
                        class="px-6 py-3 text-right"
                    >
                        Action
                    </th>

                </tr>

            </thead>


            <tbody>

                @forelse ($students as $student)

                    <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">

                        {{-- No --}}
                        <td class="px-6 py-4">
                            {{ $students->firstItem() + $loop->index }}
                        </td>


                        {{-- NIS --}}
                        <td class="px-6 py-4 font-medium text-gray-900">
                            {{ $student->nis }}
                        </td>


                        {{-- Name --}}
                        <td class="px-6 py-4">

                            <div class="flex items-center">

                                <div class="flex items-center justify-center w-9 h-9 mr-3 text-sm font-semibold text-blue-700 bg-blue-100 rounded-full">

                                    {{ strtoupper(substr($student->name, 0, 1)) }}

                                </div>

                                <div>

                                    <div class="font-medium text-gray-900">
                                        {{ $student->name }}
                                    </div>

                                    @if ($student->email)
                                        <div class="text-xs text-gray-500">
                                            {{ $student->email }}
                                        </div>
                                    @endif

                                </div>

                            </div>

                        </td>


                        {{-- Classroom --}}
                        <td class="px-6 py-4">
                            {{ $student->classroom->name ?? '-' }}
                        </td>


                        {{-- Gender --}}
                        <td class="px-6 py-4">

                            @if ($student->gender === 'L')
                                Laki-laki
                            @elseif ($student->gender === 'P')
                                Perempuan
                            @else
                                -
                            @endif

                        </td>


                        {{-- Status --}}
                        <td class="px-6 py-4">

                            @if ($student->status === 'active')

                                <span class="px-2.5 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">
                                    Active
                                </span>

                            @else

                                <span class="px-2.5 py-1 text-xs font-medium text-red-800 bg-red-100 rounded-full">
                                    Inactive
                                </span>

                            @endif

                        </td>


                        {{-- Action --}}
                        <td class="px-6 py-4">

                            <div class="flex items-center justify-end gap-2">

                                {{-- Detail --}}
                                <a
                                    href="{{ route('admin.student.show', $student->id) }}"
                                    class="p-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-blue-600"
                                    title="Detail"
                                >

                                    <svg
                                        class="w-5 h-5"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M2.25 12s3.75-6.75 9.75-6.75S21.75 12 21.75 12 18 18.75 12 18.75 2.25 12 2.25 12Z"
                                        />

                                        <circle
                                            cx="12"
                                            cy="12"
                                            r="2.5"
                                        />
                                    </svg>

                                </a>


                                {{-- Edit --}}
                                <a
                                    href="{{ route('admin.student.edit', $student->id) }}"
                                    class="p-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-yellow-600"
                                    title="Edit"
                                >

                                    <svg
                                        class="w-5 h-5"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="m16.862 4.487 1.687-1.688a2.121 2.121 0 0 1 3 3l-9.193 9.193-4.5 1.5 1.5-4.5 7.506-7.505Z"
                                        />
                                    </svg>

                                </a>


                                {{-- Delete --}}
                                <form
                                    action="{{ route('admin.student.destroy', $student->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus siswa ini?')"
                                >

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="p-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-red-600"
                                        title="Hapus"
                                    >

                                        <svg
                                            class="w-5 h-5"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M6 7h12m-9 0v10m6-10v10M9 4h6l1 3H8l1-3Zm-3 3 1 13h10l1-13"
                                            />
                                        </svg>

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td
                            colspan="7"
                            class="px-6 py-12 text-center"
                        >

                            <div class="flex flex-col items-center">

                                <svg
                                    class="w-12 h-12 mb-3 text-gray-400"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M20 13V6a2 2 0 0 0-2-2h-3.5l-1-1h-3l-1 1H6a2 2 0 0 0-2 2v7m16 0v5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-5m16 0H4"
                                    />
                                </svg>

                                <h3 class="mb-1 text-sm font-semibold text-gray-900">
                                    Data siswa tidak ditemukan
                                </h3>

                                <p class="text-sm text-gray-500">
                                    Belum ada data siswa yang tersedia.
                                </p>

                            </div>

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>


    {{-- Pagination --}}
    @if ($students->hasPages())

        <div class="p-4 border-t border-gray-200 sm:p-6">

            {{ $students->withQueryString()->links() }}

        </div>

    @endif

</div>
```

</x-admin.layout>
