<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class Student extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'student_id' => $this->student_id,
            'name' => $this->name,
            'degree' => $this->degree,
            'majour' => $this->majour,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
