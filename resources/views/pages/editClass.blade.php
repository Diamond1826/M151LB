@extends('layouts.main')
@section('content')
@if(Auth::check())
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Class</div>
                <div class="panel-body">              
                    {{ Form::open(['url' => '/updateClass', 'class' => 'form-horizontal']) }}
                      <div class="form-group">
                        {{ Form::label('name', 'Classname:', ['class' => 'control-label col-sm-2']) }}
                        <div class="col-sm-10">
                          {{ Form::text('name', $selectedClass->name, ['class' => 'form-control']) }}
                          {{ Form::text('classId', $selectedClass->classId, array('class' => 'form-control','style' => 'display: none;')) }}
                        </div>
                      </div>                      
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          {{ Form::submit('Save Changes', ['class' => 'btn btn-default']) }}
                          <a href="/deleteClass/{{ $selectedClass->classId }}" class="btn btn-default">Delete Class</a>
                        </div>
                      </div>
                    {{ Form::close() }}
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