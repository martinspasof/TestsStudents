
@extends('layouts.front')

@section('template_title')
    Students on tests
@endsection

@section('index-content')
   @if(count($students)>0)
       <div id="container">
           <h1>All student tests</h1>
       <table id="students_test_data" class="table table-striped table-bordered table-hover">
           <thead>
              <th>Student</th>
              <th>Student Number</th>
              <th>Date test</th>
              <th>Course</th>
              <th>Class room</th>
           </thead>
           <tbody>
                  @foreach($students as $x)
                      <tr>
                          <td>{{$x->FirstName}} {{' '}}  {{$x->LastName}}</td>
                          <td>{{$x->StudentNumber}}</td>
                          <td>{{$x->TestDateTime}}</td>
                          <td>{{$x->Course}}</td>
                          <td>{{$x->ClassRoom}}</td>
                      </tr>
                  @endforeach
           </tbody>
       </table>
       </div>
   @else
       <div class="alert alert-danger">No records! </div>
   @endif
   @stop

@section('footer_scripts')
<script>
    $('#students_test_data').dataTable({
        "bPaginate": false,
        "bFilter": false,
        "info":     false,
    });
</script>
@endsection