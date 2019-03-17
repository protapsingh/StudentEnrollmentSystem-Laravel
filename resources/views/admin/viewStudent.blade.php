@extends('layout')

@section('content')

       
          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-6">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="{{URL::to($student->student_image) }}" alt="">
                  <p class="name">{{$student->student_name}}</p>
                  <p class="designation">{{$student->student_department}}</p>
                  <a class="email" href="#">{{$student->student_email}}</a>
                  <a class="number" href="#">{{$student->student_phone}}</a>
                </div>
              </div>
              <div class="card mb-6">
                <div class="card-body overview">
                  <ul class="achivements">
                    <li><p>34</p><p>Projects</p></li>
                    <li><p>23</p><p>Task</p></li>
                    <li><p>29</p><p>Completed</p></li>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>{{$student->student_name}} is a student of {{$student->student_department}} Department of morning shift in BSc Level Since {{$student->admission_year}}</p>
                  </div>
                  <div class="info-links">
                    <a class="website" >
                      <i class="icon-globe icon">Father's Name:</i>
                      <span>{{$student->father_name}}</span>
                    </a>
                    <a class="social-link" >
                      <i class="icon-social-facebook icon">Mother's Name:</i>
                      <span>{{$student->mother_name}}</span>
                    </a>
                    <a class="social-link" >
                      <i class="icon-social-linkedin icon">Address:</i>
                      <span>{{$student->student_address}}</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
     


@endsection