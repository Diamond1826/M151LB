@extends('layouts.main')
@section('content')
@if(Auth::check())
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Student's of {{ $className -> name }}
                    <a class="btn btn-default btn-block" href="/classes">Back</a>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th>Studenten ID</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Street</th>
                                <th>PLZ</th>
                                <th>City</th>
                                <th>E-Mail</th>
                                <th>Class ID</th>
                            </tr>
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
        <a href="{{ route('login') }}" class="btn btn-block btn-warning">Bitte zuerst Anmelden</a> 
      </div>
    </div>
    @endif 
@endsection