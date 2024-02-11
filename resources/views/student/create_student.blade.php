@extends('layouts.nav')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">

        <form action="{{route('insert_student')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="instituteName">Institute Name</label>
            <input type="text" class="form-control" id="instituteName"name="instiute_name" placeholder="Enter institute name">
          </div>
          <div class="form-group">
            <label for="degree">Degree</label>
            <input type="text" class="form-control" id="degree"name="degree" placeholder="Enter your degree">
          </div>
          <div class="form-group">
            <label for="session">Session</label>
            <input type="text" class="form-control" id="session" name="session" placeholder="Enter session">
          </div>
          <div class="form-group">
            <label for="passingYear">Passing Year</label>
            <input type="text" class="form-control" id="passingYear" name="passing_year"   placeholder="Enter passing year">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>




      <div class="display col-md-8">
        <div class="container mt-5">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Institute Name</th>
                <th scope="col">Degree</th>
                <th scope="col">Session</th>
                <th scope="col">Passing Year</th>
                <th scope="col">Created By</th>
                <th scope="col">Action</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($students as $students)
              <tr>
                <td>{{ $students->name}}</td>
                <td>{{ $students->instiute_name}}</td>
                <td>{{ $students->degree}}</td>
                <td>{{ $students->session}}</td>
                <td>{{ $students->passing_year}}</td>
                <td>{{ $students->created_by}}</td>
                <td>
                  <button class="btn btn-success"><a href="{{route('edit_student',$students->id)}}">Edit</a></button>
                </td>
          
              </tr>
              @endforeach
              <!-- Add more rows as needed -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
