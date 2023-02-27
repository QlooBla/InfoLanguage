<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function specificFunctionOut(Course $course){
        $context = [
            'lessons' => Lesson::where('course_id', '=', $course -> id)->latest()->get(), 'course' => $course
        ];
        return view('courseSpecific', $context);
    }



}
