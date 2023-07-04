<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Queue;
use App\Models\Student;

class ScanController extends Controller
{
    public function index(){
        return view('scan.index');
    }

    public function store(Request $request){ 

        $student_id = $request->input('student_id');
        $student = Student::where('student_id', $student_id)->first();
        // Check student is existed
        if($student){
            $exists = Queue::where('student_id', $student_id)->first();

            if($exists){
                
                Queue::where('student_id', $student_id)->update(['time_at' => date('Y-m-d H:i:s')]);
                
                return response()->json(['message' => 'update successful', 'student_id' => $student_id, 'status' => 'update'], 200);
            }
              
            $data = array('student_id'=>$student_id, 'time_at'=>date('Y-m-d H:i:s'));
            DB::table('queues')->insert($data);

            return response()->json(['message' => 'add successful', 'student_id' => $student_id, 'status' => 'add'], 200);
        }

        return response()->json(['message' => 'dont exists'], 200);
    }
}
