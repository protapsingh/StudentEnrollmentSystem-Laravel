<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table="students";
    protected function saveStudent($data)
    {


    	$student=new Student();	
		$student->student_name=$data['student_name'];
		$student->father_name=$data['father_name'];
		$student->mother_name=$data['mother_name'];
		$student->student_email=$data['student_email'];
		$student->student_phone=$data['student_phone'];
		$student->student_address=$data['student_address'];
		$student->student_image=$data['student_image'];
		$student->password=$data['password'];
		$student->student_department=$data['student_department'];
		$student->admission_year=$data['admission_year'];

	    $student->save();
	   

    }
}
