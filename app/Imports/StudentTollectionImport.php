<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use DB;
class StudentTollectionImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach($rows as $row) {
            DB::table('students')->insert([
                'student_id' => $row[1],
                'name' => $row[2],
                'image' => $row[3],
                'degree' => $row[4],
                'majour' => $row[5],
                'participation_time' => $row[6],
                'location' => $row[7],
                'seat' => $row[8],
            ]);
        }
    }
}
