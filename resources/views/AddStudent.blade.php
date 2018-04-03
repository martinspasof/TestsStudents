
@extends('layouts.front')
@section('template_title')
Add Student
@endsection

@section('index-content')
    <form method="GET" action="/StudentSave" >
        {{csrf_field()}}

        <div class="form-group">
            <label>First name:</label>
            <input class="form-control" type="text" name="txtFirstName"  placeholder="First name" required/>
        </div>

        <div class="form-group">
            <label>Last name:</label>
            <input class="form-control" type="text" name="txtLastName"  placeholder="Last name" required/>
        </div>


        <div class="form-group">
            <label>Student Number:</label>
            <input class="form-control" type="text" name="txtStudentNumber"  placeholder="Student Number" required/>
        </div>
        <input class="btn btn-secondary" type="submit" value="Save" />
    </form>

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

@stop