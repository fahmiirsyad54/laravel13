<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Menampilkan daftar siswa.
     */
    public function index(Request $request)
    {
        $students = Student::with('classroom')
            ->when($request->search, function ($query, $search) {
                $query->where(function ($query) use ($search) {
                    $query->where('nis', 'like', "%{$search}%")
                        ->orWhere('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%");
                });
            })
            ->when($request->classroom_id, function ($query, $classroomId) {
                $query->where('classroom_id', $classroomId);
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        $classrooms = Classroom::orderBy('name')->get();

        return view('admin.student.index', compact(
            'students',
            'classrooms'
        ));
    }

    /**
     * Menampilkan form tambah siswa.
     */
    public function create()
    {
        $classrooms = Classroom::orderBy('name')->get();

        return view('admin.student.create', compact('classrooms'));
    }

    /**
     * Menyimpan siswa baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nis' => 'required|string|max:20|unique:students,nis',
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'gender' => 'required|in:L,P',
            'classroom_id' => 'required|exists:classrooms,id',
            'status' => 'required|in:active,inactive',
        ], [
            'nis.required' => 'NIS wajib diisi.',
            'nis.unique' => 'NIS sudah digunakan.',
            'name.required' => 'Nama siswa wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'gender.required' => 'Jenis kelamin wajib dipilih.',
            'classroom_id.required' => 'Kelas wajib dipilih.',
            'classroom_id.exists' => 'Kelas tidak ditemukan.',
            'status.required' => 'Status wajib dipilih.',
        ]);

        Student::create($validated);

        return redirect()
            ->route('admin.student.index')
            ->with('success', 'Data siswa berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail siswa.
     */
    public function show(Student $student)
    {
        $student->load('classroom');

        return view('admin.student.show', compact('student'));
    }

    /**
     * Menampilkan form edit siswa.
     */
    public function edit(Student $student)
    {
        $classrooms = Classroom::orderBy('name')->get();

        return view('admin.student.edit', compact(
            'student',
            'classrooms'
        ));
    }

    /**
     * Memperbarui data siswa.
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'nis' => 'required|string|max:20|unique:students,nis,' . $student->id,
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'gender' => 'required|in:L,P',
            'classroom_id' => 'required|exists:classrooms,id',
            'status' => 'required|in:active,inactive',
        ], [
            'nis.required' => 'NIS wajib diisi.',
            'nis.unique' => 'NIS sudah digunakan.',
            'name.required' => 'Nama siswa wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'gender.required' => 'Jenis kelamin wajib dipilih.',
            'classroom_id.required' => 'Kelas wajib dipilih.',
            'classroom_id.exists' => 'Kelas tidak ditemukan.',
            'status.required' => 'Status wajib dipilih.',
        ]);

        $student->update($validated);

        return redirect()
            ->route('admin.student.index')
            ->with('success', 'Data siswa berhasil diperbarui.');
    }

    /**
     * Menghapus siswa.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()
            ->route('admin.student.index')
            ->with('success', 'Data siswa berhasil dihapus.');
    }
}
