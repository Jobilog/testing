@extends('master')

@section('content')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Sample Only</div>

                <div class="panel-body">
                   <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>address</th>
                                <th>city</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($records as $key=>$record)
                            <tr>
                                <td>{{$record->id}}</td>
                                <td>{{$record->name}}</td>
                                <td>{{$record->email}}</td>
                                <td>{{$record->phone}}</td>
                                <td>{{$record->address}}</td>
                                <td>{{$record->city}}</td>
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
@endsection
