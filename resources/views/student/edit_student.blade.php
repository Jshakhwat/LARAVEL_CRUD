@extends('layouts.nav')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">

        <form action="{{route('update_student',$student->id)}}" method="post">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" value="{{$student->name}}" id="name" name="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="instituteName">Institute Name</label>
            <input type="text" class="form-control" value="{{$student->instiute_name}}" id="instituteName"name="instiute_name" placeholder="Enter institute name">
          </div>
          <div class="form-group">
            <label for="degree">Degree</label>
            <input type="text" class="form-control" value="{{$student->degree}}" id="degree"name="degree" placeholder="Enter your degree">
          </div>
          <div class="form-group">
            <label for="session">Session</label>
            <input type="text" class="form-control" id="session" value="{{$student->session}}" name="session" placeholder="Enter session">
          </div>
          <div class="form-group">
            <label for="passingYear">Passing Year</label>
            <input type="text" class="form-control" id="passingYear" value="{{$student->passing_year}}" name="passing_year"   placeholder="Enter passing year">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

@endsection