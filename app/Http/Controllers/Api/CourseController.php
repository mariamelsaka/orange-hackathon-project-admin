<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;


class CourseController extends Controller
{
    //

    public function add_course(Request $request)
    {
        $request->validate([
            'course_name' => 'required|string|min:5|max:100',
            'course_level' => 'required|string|min:5|max:100',
            'category_id' => 'required|numeric',
            'created_at' => 'required|date',
            'updated_at' => 'required|date',


        ]);

        $user = new Course([
            'course_name'  => $request->course_name,
            'course_level'  => $request->course_level,
            'category_id' => $request->category_id,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at,


        ]);

        if($user->save()){
            $tokenResult = $user->createToken('Personal Access Token');
            $token = $tokenResult->plainTextToken;
            return response()->json([
                'message' => 'Successfully courses been added!',
                'accessToken'=> $token,
            ],201);
        }
        else{
            return response()->json(['error'=>'Provide proper details']);
        }
    }
}
