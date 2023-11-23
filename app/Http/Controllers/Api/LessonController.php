<?php

namespace App\Http\Controllers\Api;

use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BaseResource;

class LessonController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
    }

    public function index(Request $req) {
        $data = Lesson::where('topic_id', $req->query('topic_id'))->get();

        return response()->json(new BaseResource($data), 200);
    }

    public function show($id) {
        $data = Lesson::with('questions.choices')->find($id);

        return response()->json(new BaseResource($data), 200);
    }
}
