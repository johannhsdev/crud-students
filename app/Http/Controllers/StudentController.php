<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentCreateRequest;
use App\Http\Requests\StudentUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Student;

use Carbon\Carbon;

class StudentController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $students = Student::where('name', 'like', '%' . $query . '%')
            ->orWhere('last_name', 'like', '%' . $query . '%')
            ->get();
        foreach($students as $student){
            $student->birthday = Carbon::parse($student->birthday);
        }

        return view('students', compact('students'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        foreach($students as $student){
            $student->birthday = Carbon::parse($student->birthday);
        }
        return view('students', compact('students'));
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
    public function store(StudentCreateRequest $request)
    {
        $request->validated();

        Student::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'age' => $request->age,
            'birthday' => $request->birthday,
            'career' => $request->career,
        ]);

        return redirect()->back()->with('message', 'Estudiante registrado con éxito');
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
        $student=Student::find($id);
        return view('modals.modal-edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentUpdateRequest $request, Student $student)
    {
        $request->validated();

        $student->update([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'age' => $request->age,
            'birthday' => $request->birthday,
            'career' => $request->career,
        ]);

        //return redirect()->route('students.index');
        return redirect()->back()->with('message', 'Estudiante Actualizado con éxito');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect()->route('students.index')->with('message', 'Estudiante eliminado con éxito');
    }
}
