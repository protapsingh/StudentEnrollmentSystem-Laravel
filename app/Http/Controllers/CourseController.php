<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Redirect;

class CourseController extends Controller
{
    //show course students
    protected function show_student($id)
	{
		$students= Student::all()->where('student_department',$id);
		 return view('admin.courseStudent', compact('students'));
		
	}
}
