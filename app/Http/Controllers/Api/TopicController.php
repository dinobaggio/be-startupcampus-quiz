<?php

namespace App\Http\Controllers\Api;

use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\BaseResource;

class TopicController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
    }
    
    public function index(Request $req) {
        $data = Topic::leftJoin('lessons', 'topics.id', '=', 'lessons.topic_id')
            ->select('topics.*', DB::raw("count(lessons.id) as lesson_total"))
            ->groupBy('topics.id')
            ->oldest()->with('userLesson')->paginate(5);

        return response()->json(new BaseResource($data), 200);
    }

    public function show($id) {
        $data = Topic::with("lessons")->find($id);

        return response()->json(new BaseResource($data), 200);
    }
}
