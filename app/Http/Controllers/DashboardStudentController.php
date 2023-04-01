<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class DashboardStudentController extends Controller
{

    public function index()
    {
        return view('dashboard.admin.data.student.index', [
            'students' => Student::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.data.student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'nis' => 'required',
        ]);

        $validatedData['username'] = $request['nis'];
        $validatedData['password'] = bcrypt('12345');
        $validatedData['level'] = 'student';

        Student::create($validatedData);

        return redirect('/dashboard/admin/data/student');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('dashboard.admin.data.student.show', [
            'student' => $student
        ]);
    }

    public function edit(Student $student)
    {
        return view('dashboard.admin.data.student.edit', [
            'student' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $rules = [
            'name' => 'required',
            'nis' => 'required'
        ];
        $validatedData = $request->validate($rules);

        Student::where('id', $student->id)
            ->update($validatedData);

        return redirect('/dashboard/admin/data/student');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/dashboard/admin/data/student');
    }
}
