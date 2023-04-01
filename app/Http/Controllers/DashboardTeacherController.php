<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class DashboardTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admin.data.teacher.index', [
            'teachers' => Teacher::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.data.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'nik' => 'required',
        ]);

        $validatedData['nip'] = $request['nip'];
        $validatedData['username'] = $request['nik'];
        $validatedData['password'] = bcrypt('12345');
        $validatedData['level'] = 'teacher';

        Teacher::create($validatedData);

        return redirect('/dashboard/admin/data/teacher');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('dashboard.admin.data.teacher.show', [
            'teacher' => $teacher
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('dashboard.admin.data.teacher.edit', [
            'teacher' => $teacher
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $rules = [
            'name' => 'required',
            'nip' => 'required',
            'nik' => 'required'
        ];
        $validatedData = $request->validate($rules);

        Teacher::where('id', $teacher->id)
            ->update($validatedData);

        return redirect('/dashboard/admin/data/teacher');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        Teacher::destroy($teacher->id);
        return redirect('/dashboard/admin/data/teacher');
    }
}
