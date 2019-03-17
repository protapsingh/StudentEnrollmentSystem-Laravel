@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2> Update Your Information</h2>

                          <form class="forms-sample" method="post" action="/update_student/{{$student->id}}" enctype="multipart/form-data">
                          	<input type="hidden" name="_token" value="{{csrf_token()}}">
                          	  <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" value="{{$student->student_name}}" name="student_name" class="form-control p-input">
                              </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Father's Name</label>
                                  <input type="text" name="father_name" value="{{$student->father_name}}" class="form-control p-input">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Mother's Name</label>
                                  <input type="text" name="mother_name" value="{{$student->mother_name}}" class="form-control p-input">
                                </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email address</label>
                                  <input type="email" name="student_email" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$student->student_email}}">
                                  <small id="emailHelp" class="form-text text-muted text-success">We'll never share your email with anyone else.</small>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Phone Number</label>
                                  <input type="text" name="student_phone" value="{{$student->student_phone}}" class="form-control p-input">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Student Address</label>
                                  <input type="text" name="student_address" value="{{$student->student_address}}" class="form-control p-input">
                                </div>
                              
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>




@endsection