@extends('layout')
@section('content')


       
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>

              @if(Session::has('success'))
                          <div class="row" >
                       <div class="col-md-12" >
                      <div class="alert alert-success">
                      {{ Session::get('success')}}
                       </div>
                       </div>
                       </div>
                       @endif
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>StudentID</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Department</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($students as $user)
                      <tr>
                           <td>{{ $user->id }}</td>
                           <td>{{ $user->student_name }}</td>
                           <td>{{ $user->student_email }}</td>
                           <td><img src="{{URL::to($user->student_image) }}" style="height:80px;width:100px; border-radius: 50%;"/></td>
                           <td>{{ $user->student_phone}}</td>
                           <td>{{ $user->student_address }}</td> 
                           <td>{{ $user->student_department }}</td>
                          
                          <td>
                            <a href="{{URL::to('view_student/'.$user->id)}}"><button class="btn btn-outline-primary">View</button></a>

                            <a href="{{URL::to('edit_student/'.$user->id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                            
                            <a onclick="return confirm('Delete this record?')"
                            href="{{URL::to('delete_student/'.$user->id)}}"><button class="btn btn-outline-danger">Delete</button></a>
                          </td>
                      </tr>
                      @endforeach
             
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
  




@endsection