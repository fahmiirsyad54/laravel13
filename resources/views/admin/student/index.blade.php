<x-admin.layout>
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
                <button
                    type="button"
                    data-modal-target="createStudentModal"
                    data-modal-toggle="createStudentModal"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700"
                >
                    + Tambah Siswa
                </button>
            </div>
            {{-- Modal Create Student --}}
            @include('admin.student.create')


        </div>

    </div>

    {{-- Alert Success --}}
    @if (session('success'))
        <div id="alert-success"
            class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 border border-green-200"
            role="alert">

            <svg class="w-5 h-5 mr-3 shrink-0"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 0 19 9.5 9.5 0 0 0 0-19Zm4.2 6.7-5 5a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.4l1.3 1.3 4.3-4.3a1 1 0 0 1 1.4 1.4Z"/>
            </svg>

            <div class="font-medium">
                {{ session('success') }}
            </div>

            <button type="button"
                onclick="document.getElementById('alert-success').remove()"
                class="ms-auto p-1.5 text-green-500 rounded-lg hover:bg-green-200">
                <svg class="w-4 h-4"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 1 12 12M13 1 1 13"/>
                </svg>
            </button>
        </div>
    @endif

    {{-- Alert Error --}}
    @if (session('error'))
        <div id="alert-error"
            class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 border border-red-200"
            role="alert">

            <svg class="w-5 h-5 mr-3 shrink-0"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 20 20">
                <path d="M10 0a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm1 15H9v-2h2v2Zm0-4H9V5h2v6Z"/>
            </svg>

            <div class="font-medium">
                {{ session('error') }}
            </div>

            <button type="button"
                onclick="document.getElementById('alert-error').remove()"
                class="ms-auto p-1.5 text-red-500 rounded-lg hover:bg-red-200">
                <svg class="w-4 h-4"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 1 12 12M13 1 1 13"/>
                </svg>
            </button>
        </div>
    @endif

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
                            <option
                                value="{{ $classroom->id }}"
                                {{ old('classroom_id') == $classroom->id ? 'selected' : '' }}
                            >
                                {{ $classroom->name }}
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
                            Classroom
                        </th>

                        <th class="px-6 py-3">
                            Address
                        </th>

                        <th class="px-6 py-3 text-center">
                            Action
                        </th>

                    </tr>

                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4"> {{ $loop->iteration }} </td>
                            <td class="px-6 py-4"> {{ $student->name }} </td>
                            <td class="px-6 py-4">{{ $student->nis }}</td>
                            <td class="px-6 py-4">{{ $student->classroom->name }}</td>
                            <td class="px-6 py-4">{{ $student->address }}</td>
                            {{-- Action --}}
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">

                                    {{-- Edit --}}
                                    <button
                                        type="button"
                                        data-modal-target="editStudentModal-{{ $student->id }}"
                                        data-modal-toggle="editStudentModal-{{ $student->id }}"
                                        class="inline-flex items-center px-3 py-2 text-xs font-medium text-white bg-yellow-500 rounded-lg hover:bg-yellow-600"
                                    >
                                        <svg class="w-4 h-4 mr-1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="m16.862 4.487 1.687-1.687a2.121 2.121 0 0 1 3 3l-11.5 11.5-4 1 1-4 9.813-9.813Z"/>
                                        </svg>

                                        Edit
                                    </button>

                                    {{-- Delete --}}
                                    <form action="{{ route('admin.student.destroy', $student->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus data siswa ini?')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            class="inline-flex items-center px-3 py-2 text-xs font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">

                                            <svg class="w-4 h-4 mr-1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0 1 16.138 21H7.862a2 2 0 0 1-1.995-1.858L5 7m5 4v6m4-6v6M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3m-11 0h18" />
                                            </svg>

                                            Delete
                                        </button>
                                    </form>

                                </div>
                            </td>


                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>
        {{-- Modal Edit Student --}}
        @foreach ($students as $student)
            @include('admin.student.edit', [
                'student' => $student,
                'classrooms' => $classrooms
            ])
        @endforeach

    </div>

</x-admin.layout>
