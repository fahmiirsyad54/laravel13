<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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

        // return view('admin.student.index');

        return view('admin.student.index', compact(
            'students',
            'classrooms'
        ));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
