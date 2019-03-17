@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2>Add a New Student</h2>
                           @if(Session::has('success'))
                          <div class="row" >
                       <div class="col-md-12" >
                      <div class="alert alert-success">
                      {{ Session::get('success')}}
                       </div>
                       </div>
                       </div>
                       @endif
                           @if(Session::has('failure'))
                          <div class="row" >
                       <div class="col-md-12" >
                      <div class="alert alert-failure">
                      {{ Session::get('failure')}}
                       </div>
                       </div>
                       </div>
                       @endif

                          <form class="forms-sample" method="post" action="addStudent" enctype="multipart/form-data">
                          	<input type="hidden" name="_token" value="{{csrf_token()}}">
                          	  <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" name="student_name" class="form-control p-input">
                              </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Father's Name</label>
                                  <input type="text" name="father_name" class="form-control p-input">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Mother's Name</label>
                                  <input type="text" name="mother_name" class="form-control p-input">
                                </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email address</label>
                                  <input type="email" name="student_email" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                  <small id="emailHelp" class="form-text text-muted text-success">We'll never share your email with anyone else.</small>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Phone Number</label>
                                  <input type="text" name="student_phone" class="form-control p-input">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Student Address</label>
                                  <input type="text" name="student_address" class="form-control p-input">
                                </div>
                              
                              
                              <div class="form-group">
                                  <label>Upload Image</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                      <input type="file" name="student_image" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp">
                                      
                                    </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password"name="password" class="form-control p-input" id="exampleInputPassword1" placeholder="Password">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Department</label>
                                  <select class="form-control p-input" name="student_department">
                                  <option value="CSE">CSE</option>
                                  <option value="SWE">SWE</option>
                                  <option value="BBA">BBA</option>
                                  <option value="EEE">EEE</option>
                                  <option value="MBA">MBA</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Admission Year</label>
                                  <input type="date" name="admission_year" class="form-control p-input">
                                </div>
                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>




@endsection