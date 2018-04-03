
@extends('layouts.front')
@section('template_title')
    Student Test Registration
@endsection

@section('index-content')
    <form method="GET" action="/SaveData" >
        {{csrf_field()}}

        <div class="form-group">
               <label>Student:</label>

                <select class="form-control"  name="studentId" required>
                    @if(count($students)>0)
                        @foreach($students as $x)
                           <option value="{{$x->id}}">{{$x->FirstName}}{{' '}}{{$x->LastName}}</option>
                        @endforeach
                    @else
                        <option>- - -</option>
                    @endif
                </select>

        </div>

        <div class="form-group">
            <label>Test:</label>

                <select class="form-control"  name="TestId" required>
                    @if(count($tests)>0)
                        @foreach($tests as $x)
                            <option value="{{$x->id}}">{{$x->Course}}</option>
                        @endforeach
                    @else
                        <option>- - -</option>
                    @endif
                </select>

        </div>

        <input class="btn btn-secondary" type="submit" value="Registration" />
    </form>

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
@stop