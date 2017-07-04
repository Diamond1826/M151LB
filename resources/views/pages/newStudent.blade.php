@extends('layouts.main')
@section('content')
@if(Auth::check())
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Student</div>
                <div class="panel-body">
                  {{ Form::open(['url' => '/saveStudent', 'class' => 'form-horizontal']) }}
                      <div class="form-group">
                        {{ Form::label('fistname', 'Firstname:', ['class' => 'control-label col-sm-2']) }}
                        <div class="col-sm-10">
                          {{ Form::text('firstname', '', ['class' => 'form-control']) }}
                        </div>
                      </div>
                      <div class="form-group">
                        {{ Form::label('lastname', 'Lastname:', ['class' => 'control-label col-sm-2']) }}
                        <div class="col-sm-10">
                          {{ Form::text('lastname', '', ['class' => 'form-control']) }}
                        </div>
                      </div>
                      <div class="form-group">
                        {{ Form::label('street', 'Street:', ['class' => 'control-label col-sm-2']) }}
                        <div class="col-sm-10">
                          {{ Form::text('street', '', ['class' => 'form-control']) }}
                        </div>
                      </div>
                      <div class="form-group">
                        {{ Form::label('plz', 'Zipcode:', ['class' => 'control-label col-sm-2']) }}
                        <div class="col-sm-10">
                          {{ Form::text('plz', '', ['class' => 'form-control']) }}
                        </div>
                      </div>
                      <div class="form-group">
                        {{ Form::label('city', 'City:', ['class' => 'control-label col-sm-2']) }}
                        <div class="col-sm-10">
                          {{ Form::text('city', '', ['class' => 'form-control']) }}
                        </div>
                      </div>
                      <div class="form-group">
                        {{ Form::label('email', 'E-Mail:', ['class' => 'control-label col-sm-2']) }}
                        <div class="col-sm-10">
                          {{ Form::email('email', '', ['class' => 'form-control']) }}
                        </div>
                      </div>
                      <div class="form-group">
                        {{ Form::label('classId', 'Select Class:', ['class' => 'control-label col-sm-2']) }}
                        <div class="col-sm-10">
                          {{ Form::select('classId', \App\Classes::all()->pluck('name', 'classId')->toArray(),null,['class'=>'form-control']) }}
                        </div>                     
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          {{ Form::submit('Add Student', ['class' => 'btn btn-default']) }}
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
        <a href="{{ route('login') }}" class="btn btn-block btn-warning">Bitte zuerst Anmelden</a> 
      </div>
    </div>
    @endif 
@endsection