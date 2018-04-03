
@extends('layouts.front')
@section('template_title')
    All Student
@endsection
@section('index-content')
    <div id="message"></div>
@if(count($students)>0)
    <div id="container">
        <h1>All students</h1>
        <table id="students_data" class="table table-striped table-bordered table-hover">
            <thead>
            <th>Student Name</th>
            <th>Student Number</th>
            <th>Actions</th>
            </thead>
            <tbody>
            @foreach($students as $x)
                <tr>
                    <td>{{$x->FirstName}} {{' '}}  {{$x->LastName}}</td>
                    <td>{{$x->StudentNumber}}</td>
                    <td>
                        <a href="{{ url('/EditStudentId/' . $x->id . '/edit') }}" class="btn btn-primary">Edit</a>
                        <button type="button" data-id="{{ $x->id }}" data-token="{{ csrf_token() }}" class="deleteStudent btn btn-danger">Delete</button>
                    </td>
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
        $('#students_data').dataTable({
            "bPaginate": false,
            "bFilter": false,
            "info":     false,
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [-1] /* 1st one, start by the right */
            }]
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".deleteStudent").click(function(){
            var id = $(this).data("id");
            var token = $(this).data("token");
            $.ajax(
                {
                    url: "StudentsAll/"+id,
                    type: 'DELETE',
                    dataType: "JSON",
                    data: {
                        "id": id,
                        "_method": 'DELETE',
                        "_token": token,
                    },
                    success: function (response)
                    {
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    }
                });
        });
    </script>
@endsection

