@extends('layouts.main')
@section('content')
@if(Auth::check())
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Student's List</div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>PLZ</th>
                            </tr>
                            <?php 
                                foreach ($students as $student) {
                                    echo '<tr><td>',$student->firstname,'</td><td>',$student->lastname,'</td><td>',$student->plz,'</td>';
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