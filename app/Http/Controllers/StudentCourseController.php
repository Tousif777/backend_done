<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentCourse;

class StudentCourseController extends Controller
{
    //
    public function index()
    {
        return StudentCourse::all();
    }

    public function store(Request $request)
    {
        $studentCourse = StudentCourse::create($request->all());
        return response()->json($studentCourse, 201);
    }
    

    public function show($id)
    {
        $studentCourse = StudentCourse::find($id);
        if (!$studentCourse) {
            return response()->json(['message' => 'Record not found'], 404);
        }
        return $studentCourse;
    }

    public function update(Request $request, $id)
    {
        $studentCourse = StudentCourse::find($id);
        if (!$studentCourse) {
            return response()->json(['message' => 'Record not found'], 404);
        }
        $studentCourse->update($request->all());
        return response()->json($studentCourse, 200);
    }

    public function destroy($id)
    {
        $studentCourse = StudentCourse::find($id);
        if (!$studentCourse) {
            return response()->json(['message' => 'Record not found'], 404);
        }
        $studentCourse->delete();
        return response()->json(null, 204);
    }

}
