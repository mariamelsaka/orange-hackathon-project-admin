<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Revision;
use App\Models\Student;
use Illuminate\Http\Request;

class RevisionController extends Controller
{
    //
    public function view_exam(Request $request)
    {
        $revision=Revision::get('student_degree');
        $reply = [
            'failed' => false,
            'errors' => null,
            'data' => $revision,
        ];

        if($revision->count() >"400"){
            $reply = [
                'failed' => false,
                'errors' => null,
                'data' => $revision,
            ];
        }
        return response()->json($reply);
    }

}
