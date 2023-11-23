<?php

namespace App\Http\Controllers\Api;

use App\Models\Question;
use App\Models\UserLesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BaseResource;

class QuestionController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
    }

    public function index(Request $req) {
        $data = Question::where('lesson_id', $req->query('lesson_id'))->with('choices')->get();

        return response()->json(new BaseResource($data), 200);
    }

    public function show($id) {
        $data = Question::with('choices')->find($id);

        return response()->json(new BaseResource($data), 200);
    }

    public function submit(Request $req) {
        $data = $req->all();
        $user = UserLesson::firstOrNew([
            'topic_id' => $data["topic_id"],
            'lesson_id' => $data["lesson_id"],
        ]);
        $user->point = $data["point"];
        $user->save();

        return response()->json(new BaseResource($user), 200);
    }
}
