@extends('layouts.main')
@section('content')
@if(Auth::check())
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Class List</div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th>Class ID</th>
                                <th>Classname</th>
                            </tr>
                            <?php 
                                foreach ($classes as $class) {
                                    echo '<tr class="clickable-row" data-href="/"><td>',$class->classId,'</td><td>',$class->name,'</td></tr>';
                                }
                            ?>
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