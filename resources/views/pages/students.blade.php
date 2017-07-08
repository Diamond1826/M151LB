@extends('layouts.main')
@section('content')
@if(Auth::check())
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Student's List</div>
                    <a class="btn btn-default btn-block" href="/newStudent">New Student</a>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th>Student's ID</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Street</th>
                                    <th>Zipcode</th>
                                    <th>City</th>
                                    <th>E-Mail</th>
                                    <th>Class</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student) 
                                        <tr class="clickable-row" data-href="/editStudent/{{ $student->studentsId }}">
                                            <td>{{ $student->studentsId }}</td>
                                            <td>{{ $student->firstname }}</td>
                                            <td>{{ $student->lastname }}</td>
                                            <td>{{ $student->street }}</td>
                                            <td>{{ $student->plz }}</td>
                                            <td>{{ $student->city }}</td>
                                            <td>{{ $student->email }}</td>
                                            <td>{{ $student->name }}</td>
                                        </tr>                                
                                @endforeach
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endif 
@if(Auth::guest())
    <div class="row firstlog">
      <div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-5 col-lg-3 col-lg-offset-4 col-sm-offset-3 ">
        <a href="{{ route('login') }}" class="btn btn-block btn-default" style="margin-top:100px;">Bitte zuerst Anmelden</a> 
      </div>
    </div>
    @endif 
@endsection