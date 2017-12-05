<?php

namespace App\Http\Controllers\Student;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Student;
use App\Campus;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class StudentsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $students = Student::all();

        return view('backEnd.student.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $campuses = Campus::pluck('name','id');
        return view('backEnd.student.students.create')
        ->with('campuses', $campuses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['student_id' => 'required', 'name' => 'required', 'last_name' => 'required', 'second_lastname' => 'required', 'gender' => 'required', 'birthdate' => 'required', 'state_birth' => 'required', 'town_birth' => 'required', 'phone' => 'required', 'cell_phone' => 'required', 'state' => 'required', 'town' => 'required', 'country' => 'required', 'street' => 'required', 'house_number' => 'required', 'colony' => 'required', 'post_code' => 'required', 'email' => 'required', 'tutor_name' => 'required', 'tutor_phone' => 'required', 'status' => 'required', 'curp' => 'required', 'sep' => 'required', 'languages' => 'required', ]);

        Student::create($request->all());

        Session::flash('message', 'Student added!');
        Session::flash('status', 'success');

        return redirect('student/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);

        return view('backEnd.student.students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('backEnd.student.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['student_id' => 'required', 'name' => 'required', 'last_name' => 'required', 'second_lastname' => 'required', 'gender' => 'required', 'birthdate' => 'required', 'state_birth' => 'required', 'town_birth' => 'required', 'phone' => 'required', 'cell_phone' => 'required', 'state' => 'required', 'town' => 'required', 'country' => 'required', 'street' => 'required', 'house_number' => 'required', 'colony' => 'required', 'post_code' => 'required', 'email' => 'required', 'tutor_name' => 'required', 'tutor_phone' => 'required', 'status' => 'required', 'curp' => 'required', 'sep' => 'required', 'languages' => 'required', ]);

        $student = Student::findOrFail($id);
        $student->update($request->all());

        Session::flash('message', 'Student updated!');
        Session::flash('status', 'success');

        return redirect('student/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        $student->delete();

        Session::flash('message', 'Student deleted!');
        Session::flash('status', 'success');

        return redirect('student/students');
    }

}
