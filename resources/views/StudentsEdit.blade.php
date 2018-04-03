@extends('layouts.front')
@section('template_title')
    Edit Student
@endsection

@section('index-content')
    <form method="GET" action="/SaveEditedStudent" >
        {{csrf_field()}}

        <div class="form-group">
            <label>First name:</label>
            <input class="form-control" type="text" name="txtFirstName"  value="{{$student->FirstName}}" required/>
        </div>

        <div class="form-group">
            <label>Last name:</label>
            <input class="form-control" type="text" name="txtLastName"  value="{{$student->LastName}}" required/>
        </div>


        <div class="form-group">
            <label>Student Number:</label>
            <input class="form-control" type="text" name="txtStudentNumber"  value="{{$student->StudentNumber}}" required/>
        </div>
        <input class="form-control" type="hidden" name="StudentId" value="{{$student->id}}"/>
        <input class="btn btn-secondary" type="submit" value="Update" />
    </form>

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

@stop