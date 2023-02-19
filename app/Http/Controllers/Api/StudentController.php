<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Revision;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function view_student(Request $request)
    {
        $student=Student::all();
        $reply = [
            'failed' => false,
            'errors' => null,
            'data' => $student,
        ];
        return response()->json($reply);
    }
}
