<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Queue;
use Illuminate\Support\Facades\DB;

class QueueController extends Controller
{
    public function index(){
        $queues = DB::table('queues')
                    ->select('queues.student_id', 'students.name', 'students.degree', 'students.majour', 'queues.time_at')
                    ->join('students', 'students.student_id', '=', 'queues.student_id')
                    ->orderBy('queues.time_at')
                    ->get();
        return response()->json(['data' => $queues], 200);
    }
}
