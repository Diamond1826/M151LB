@extends('layouts.main')
@section('content')
@if(Auth::check())
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Class List</div>
                    <a class="btn btn-default btn-block" href="/newClass">New Class</a>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th>Class ID</th>
                                    <th>Classname</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($classes as $class)
                                        <tr class="clickable-row" data-href="/selectedClass/{{ $class->classId }}">
                                            <td>{{ $class->classId }}</td>
                                            <td>{{ $class->name }}</td>
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
        <a href="{{ route('login') }}" class="btn btn-block btn-default" style="margin-top:100px;">Please log in</a> 
      </div>
    </div>
    @endif 
@endsection