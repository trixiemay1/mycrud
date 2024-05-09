<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::orderBy('id', 'asc')->paginate(5);
    
        return view('welcome', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        
        $data = $request->validate([
            'name' => ['string', 'required', 'min:2'],
            'age' => ['numeric', 'required', 'min:6'],
            'address' => ['string', 'required', 'min:2'],
        ]);

        Student::create($data);

        return redirect('students');

    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'name' => ['string', 'required', 'min:2'],
            'age' => ['numeric', 'required', 'min:6'],
            'address' => ['string', 'required', 'min:2'],
        ]);

        $student->update($data);

        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect('students');
    }
}
