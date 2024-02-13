<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function create_student()
    {
        $students = Crud::all();
        return view('student.create_student', compact('students'));
    }
    public function insert_student(Request $request)
    {
        $student = new Crud();
        $student->name = $request->name;
        $student->instiute_name = $request->instiute_name;
        $student->degree = $request->degree;
        $student->session = $request->session;
        $student->passing_year = $request->passing_year;
        $student->created_by = Auth::user()->id;
        $student->save();
        return redirect()->route('create_student');
    }
    public function edit_student($id)
    {
        $student = Crud::find($id);
        return view('student.edit_student', compact('student'));
    }
    public function delete_student($id)
    {
        Crud::destroy($id);
        return back();
    }






    public function update_student(Request $request, $id)
    {
        
        $student = Crud::find($id);
         $student->name = $request->name;
        $student->instiute_name = $request->instiute_name;
        $student->degree = $request->degree;
        $student->session = $request->session;
        $student->passing_year = $request->passing_year;
        $student->updated_by = Auth::user()->id;
        $student->save();
        return redirect()->route('create_student')->with('id');
    }
}
