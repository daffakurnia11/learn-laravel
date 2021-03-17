<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'      => 'required',
            'nrp'       => 'required|digits:14|unique:students,nrp',
            'email'     => 'required|unique:students,email|email:rfc,dns',
            'jurusan'   => 'required'
        ]);

        Student::create($request->all());

        return redirect(url('/students'))->with('status', 'New Data has been inserted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {

        $request->validate([
            'nama'      => 'required',
            'nrp'       => 'required|digits:14',
            'email'     => 'required|email:rfc,dns',
            'jurusan'   => 'required'
        ]);

        Student::where('id', $student->id)->update([
            'nama'      => $request->nama,
            'nrp'       => $request->nrp,
            'email'     => $request->email,
            'jurusan'   => $request->jurusan,
        ]);

        return redirect(url('/students'))->with('status', 'New Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);

        return redirect(url('/students'))->with('status', 'New Data has been deleted!');
    }
}
