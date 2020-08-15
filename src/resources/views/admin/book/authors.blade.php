@extends('layouts.app')

@section('content')
    <br>
    <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h4 class="panel-heading">"<strong>{{$book->name}}</strong>"</h4>
                <br>
                <br>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Идентификатор</th>
                            <th>ФИО</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($book->authors as $author)
                            <tr>
                                <td>{{ $author["id"] }}</td>
                                <td>{{ $author["name"] }} {{ $author["last_name"] }}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
