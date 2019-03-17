<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Redirect;

class StudentController extends Controller
{
    //add student

    protected function addStudent(Request $request)
    {
         $data= array();

         $data['student_name']=$request->student_name;
         $data['father_name']=$request->father_name;
         $data['mother_name']=$request->mother_name;
         $data['student_email']=$request->student_email;
         $data['student_phone']=$request->student_phone;
         $data['student_address']=$request->student_address;
         $image=$request->file('student_image');
         $data['password']=md5($request->password);
         $data['student_department']=$request->student_department;
         $data['admission_year']=$request->admission_year;

         if ($image)
         {
         	$image_name=str_random(20);
         	$ext=strtolower($image->getClientOriginalExtension());
         	$image_full_name=$image_name.'.'.$ext;
         	$upload_path='image/';
         	$image_url= $upload_path.$image_full_name;
         	$success= $image->move($upload_path,$image_full_name);
         	if($success)
         	{
         		$data['student_image']=$image_url;
         		 Student::saveStudent($data);
         		  return Redirect::to('addStudent')->with('success','Student successfully registered!');

         	}
         }

       
    }

    //show all student
    protected function show_student()
    {

    	$students=Student::all();
      return view('admin.allStudent', compact('students'));
    }

    //single student delete
    protected function delete_student($id)
    {

        $student= Student:: findOrFail($id);
        $student->delete();
        return Redirect::to('allStudent')->with('success','Student record successfully deleted!');
      
    }

    //single student show
    protected function view_student($id)
    {

        $student= Student:: findOrFail($id);
         return view('admin.viewStudent', compact('student'));
      
    }

    protected function edit_student($id)
    {

          $student= Student:: findOrFail($id);
         return view('admin.editStudent', compact('student'));


    }
     protected function update_student(Request $request, $id)
    {

          $student= Student:: findOrFail($id);
         
          $student->student_name= $request->student_name;
          $student->father_name= $request->father_name;
          $student->mother_name= $request->mother_name;
          $student->student_email= $request->student_email;
          $student->student_phone= $request->student_phone;
          $student->student_address= $request->student_address;

          $student->save();
          return Redirect::to('allStudent')->with('success','Student record successfully updated!');

          

    }
    



}
